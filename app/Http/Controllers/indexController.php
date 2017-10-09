<?php
namespace App\Http\Controllers;

use App\Model\Company;
use App\People;
use App\Vote;
use EasyWeChat\Support\Arr;
use Illuminate\Cache\CacheManager;
use Illuminate\Http\Request;
use Cache;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use PhpParser\Node\Expr\Array_;
use Session;
use LvRedis;
use WeChat;
use Crypt;
use SnappyImage;
use PDF;
use Illuminate\Support\Facades\App;

class indexController extends Controller
{
    public function index()
    {
        $js = WeChat::js();
        $wechatUser = session('wechat.oauth_user');
        //$strOpenId = $wechatUser->getId();
        $strOpenId = 'test2222222211122221';

        Session::put('open_id', $strOpenId);
        $resut=Array();
        $peopleResult=Array();
        $voteAll=Vote::all();
        $peopleAll=People::all();

        if($voteAll!=null)
        {
            $companyIdDistince=$voteAll->groupBy('company_id')->toArray();
            foreach($companyIdDistince as $key => $value)
            {
                $resut[$key]=count($value);
                //var_dump($resut);
            }

        }

        if($peopleAll!=null)
        {
            $peopleAllDistince=$peopleAll->groupBy('people_id')->toArray();

            foreach($peopleAllDistince as $key => $value)
            {
                $peopleResult[$key]=count($value);
            }


        }//var_dump($companyIdDistince);



        $counte=Vote::count();
        $countp=People::count();

        return view('index',['voteCount'=>$counte+$countp,'companyCount'=>$resut,'peopleCount'=>$peopleResult,'openId'=>$strOpenId,'js'=>$js]);
    }

    public function checkUserIsVote(Request $request)
    {
        $result=false;
        $userId = urldecode($request->segment('1'));
        if(!LvRedis::exists($userId))
        {
            LvRedis::set($userId);
            $result=true;
        }
        return response()->json($result);
    }

    public function getAllVoteCount(Request $request)
    {
        $counte=Vote::count();
        $countp=People::count();
        return response()->json($counte+$countp);
    }

    public function getAllCompanyCount(Request $request)
    {
        $resut=Array();
        $peopleResult=Array();
        $voteAll=Vote::all();
        $peopleAll=People::all();

        $companyIdDistince=$voteAll->groupBy('company_id')->toArray();

        $peopleAllDistince=$peopleAll->groupBy('people_id')->toArray();
        //var_dump($companyIdDistince);

        foreach($companyIdDistince as $key => $value)
        {
            $resut[$key]=count($value);
            //var_dump($resut);
        }


        foreach($peopleAllDistince as $key => $value)
        {
            $peopleResult[$key]=count($value);
        }


        return response()->json(Array('CompanyCount'=>$resut,'PeopleCount'=>$peopleResult ));
    }

    public function voteCompany(Request $request)
    {
        $result=0;
        $strOpenid = Session::get('open_id');

       // echo $strOpenid;
        $voteList =json_decode($request->get('votee'));

        $votePeopleList =json_decode($request->get('votep'));
        $redisKey=trim('openid_vote_' . date('Ymd') . '_' . $strOpenid);

        $terst=$this->checkVoteTime();

        if (!$this->checkVoteTime()) {
            $result=3;
            //return response()->json($result);
        }
        else if(LvRedis::exists($redisKey))
        {
            $result=2;

            //return response()->json($result);
        }else{

            $voteArray=Array();
            $voteP=Array();
            $result=false;
            if($voteList!=null&&count($voteList)>0&&$votePeopleList!=null&&count($votePeopleList)>0)
            {
                DB::beginTransaction();
                foreach($voteList as $value)
                {
                    //LvRedis::rpush('lvotee',$value);
                    DB::insert('insert into CX_Vote (company_id,vote) values (?, ?)', array($value, '1'));
//                $vote=new Vote();
//                $vote->company_id=$value;
//                $vote->vote=1;
//                array_push($voteArray,$vote);
                }

                foreach($votePeopleList as $value)
                {
                    //LvRedis::rpush('lvotep',$value);
                   DB::insert('insert into CX_People (people_id) values (?)', array($value));

//                $p=new People();
//                $p->people_id=$value;
//
//                array_push($voteP,$p);
                }
                try{
                    DB::commit();
                    LvRedis::set($redisKey,$strOpenid);
                    $date_time_hours = date("H");
                    $date_time_minutes = date("i");
                    $date_time_seconds = date("i");
                    $redisSeconds=(int)(86400-$date_time_hours*60*60+$date_time_minutes*60+$date_time_seconds*1);
                    LvRedis::expire($redisKey, $redisSeconds);
                    $result=1;

                }
                catch(Exception $ex){
                    DB::rollBack();
                }
            }

        }

        return response()->json($result);

    }

    private function checkVoteTime()
    {
        $intVoteStartTime = strtotime('2017-10-09 00:00:00');
        $intVoteEndTime = strtotime('2017-10-16 00:00:00');

        $intVoteDayStartTime = '09:00';
        $intVoteDayEndTime = '21:00';

        $intTime = time();
        $strTime = date('H:i');
        if ($intTime >= $intVoteStartTime and $intTime <= $intVoteEndTime and $strTime >= $intVoteDayStartTime and $strTime <= $intVoteDayEndTime) {
            return true;
        } else {
            return false;
        }
    }




    public function search(Request $request)
    {
        $searchValue = urldecode($request->segment('2'));
        if($searchValue!=null&&$searchValue!="")
        {
            $arrReturn=Company::where('BrandName', 'like', '%'.$searchValue.'%')
                ->orWhere('CompanyName','like','%'.$searchValue.'%')->get();

            if($arrReturn==null||$arrReturn->count()==0)
            {
                echo "<script>alert('无该品牌信息');window.location.href='/index';</script>";
            }
            return view('searchPage',['company'=>$arrReturn]);
        }
        else{
            echo "<script>alert('查询出错,请重新查询!');window.location.href='/index';</script>";
        }

    }

    public function searchPage(Request $request)
    {
        //$searchValue = urldecode($request->segment('2'));
        $searchValue = $request->get('searchValue');
        if($searchValue!=null&&$searchValue!="")
        {
            $arrReturn=Company::where('BrandName', 'like', '%'.$searchValue.'%')
                ->orWhere('CompanyName','like','%'.$searchValue.'%')->get();

            if($arrReturn==null||$arrReturn->count()==0)
            {
                echo "<script>alert('无该品牌信息');window.location.href='/index';</script>";
            }
            return view('searchPage',['company'=>$arrReturn]);
        }
        else{
            echo "<script>alert('查询出错,请重新查询!');window.location.href='/index';</script>";
        }

    }


    public function searchCompany(Request $request)
    {
        $searchValue = $request->get('searchValue');
        $arrReturn =Company::where('BrandName','=' ,$searchValue)->first();
        //$arrReturn =Company::all();
        if($arrReturn!=null)
        {
            return redirect()->action('indexController@getCompanyById',$arrReturn->Id);
        }
        else{
            echo "<script>alert('无该品牌信息');window.location.href='/index';</script>";
//            return redirect('/index')->with('status', '无该品牌信息');
        }

    }

    public function getCompanyByBrandNameAndCompanyName(Request $request)
    {
        $brandName = urldecode($request->segment('2'));
        $companyName = urldecode($request->segment('3'));
        try{
            if($brandName!=null&&$brandName!=""&&$companyName!=null&&$companyName!="")
            {
                $company=Company::where('BrandName','=' ,$brandName)->where('BrandName','=' ,$brandName)->firstOrFail();

            }

            return view('companyDetail',['company'=>$company]);
        }
        catch(ModelNotFoundException $ex)
        {
            echo "<script>alert('无该品牌信息');window.location.href='/index';</script>";
        }


    }


    public function viewCompany(Request $request)
    {
        $viewType = $request->segment('2');
        switch ($viewType)
        {
            case 1:
                $company = Company::select('Industry')->orderBy('Industry', 'desc')->distinct()->get();
                break;
            case 2:
                $company = Company::select('Sessions')->orderBy('Sessions', 'desc')->distinct()->get();
                break;
            case 3:
                $company = Company::select('Reward')->orderBy('Reward', 'asc')->distinct()->get();
                break;
            default:
               break;
        }

        return view('viewCompany', ['company' => $company,
                                    'companyType'=>$viewType]);
    }

    public function viewBrandSessionCompanyDetail(Request $request)
    {
        $sessionName = urldecode($request->segment('2'));
        $rewardName = urldecode($request->segment('3'));
        if($rewardName!=null&&$rewardName!=""&&$sessionName!=null&&$sessionName!="") {

            $company = Company::where('Sessions', '=', $sessionName)->where('Reward','=',$rewardName)->orderBy('Id', 'desc')->get();

        }

        return view('viewBrandSessionDetail',['company'=>$company,'sessions'=>$sessionName,'rewardName'=>$rewardName]);


    }

    public function viewBrandSessionDetail(Request $request)
    {
        $sessionName = urldecode($request->segment('3'));
        $brandName = urldecode($request->segment('2'));
        if($brandName!=null&&$brandName!=""&&$sessionName!=null&&$sessionName!="") {

            $company = Company::where('Sessions', '=', $sessionName)->where('BrandName','=',$sessionName)->orderBy('Id', 'desc')->get();

        }

        return view('viewCompanyDetail',['company'=>$company,'companyType'=>3,'rewardName'=>$brandName]);


    }

    public function viewBrandSession(Request $request)
    {
        $sessionName = urldecode($request->segment('3'));
        $brandName = urldecode($request->segment('2'));
        if($brandName!=null&&$brandName!=""&&$sessionName!=null&&$sessionName!="") {

            $company = Company::where('Sessions', '=', $sessionName)->where('BrandName','=',$sessionName)->orderBy('Id', 'desc')->get();

        }

        return view('viewCompanyDetail',['company'=>$company,'companyType'=>3,'rewardName'=>$brandName]);


    }

    public function viewCompanyDetail(Request $request)
    {
        $searchValue = urldecode($request->segment('3'));
        $viewType = $request->segment('2');
        if($searchValue!=null&&$searchValue!=""&&$viewType!=null&&$viewType!="") {
            switch ($viewType) {
                case 1:
                    $company = Company::where('Industry', '=', $searchValue)->orderBy('Id', 'desc')->get();

                    break;
                case 2:
                    $company = Company::where('Sessions', '=', $searchValue)->where('Reward','=','深圳知名品牌')->orderBy('Id', 'desc')->get();
                    break;
                case 3:
                    $company = Company::where('Reward', '=',$searchValue)->select('Sessions')->orderBy('Sessions', 'desc')->distinct()->get();
                    break;
                default:
                    break;
            }
        }
        if($viewType==3)
        {
            return view('viewBrandSession', ['company' => $company,
                'brandType'=>$searchValue]);
        }
        else{
            return view('viewCompanyDetail',['company'=>$company,'companyType'=>$viewType,'rewardName'=>$searchValue]);
        }
        //return view('viewCompanyDetail',['company'=>$company,'companyType'=>$viewType,'rewardName'=>$searchValue]);
    }


    public function getCompanyById(Request $request)
    {
        $id = urldecode($request->segment('2'));
        if($id!=null&&$id!="")
        {
            $company=Company::find($id);
            $rewards = Company::select('Reward')->orderBy('Reward', 'asc')->distinct()->get();
        }
        return view('companyDetail',['company'=>$company,
                                      'rewards'=> $rewards ]);

    }

    public function ozycReward(Request $request)
    {
        $id = urldecode($request->segment('2'));
        if($id!=null&&$id!="")
        {
            $company=Company::find($id);

        }
        return view('ozycReward',['company'=>$company]);
    }

    public function generatePdfByUrl(Request $request)
    {
        $type = urldecode($request->segment('2'));
        $id = urldecode($request->segment('3'));
       // $company=Company::find($id);
        if($type==1)
        {
            $urlString=$_SERVER['HTTP_HOST']."/famousBrand/".$id;
        }
        else if($type==2)
        {
            $urlString=$_SERVER['HTTP_HOST']."/internationalReputation/".$id;
        }
        else if($type==3)
        {
            $urlString=$_SERVER['HTTP_HOST']."/europeanOrigin/".$id;
        }
        else if($type==4)
        {
            $urlString=$_SERVER['HTTP_HOST']."/japanOrigin/".$id;
        }
        return SnappyImage::loadFile($urlString)->setOption("crop-h",'1200')->setOption("crop-w",'750')->inline();
    }

    public function zmppReward(Request $request)
    {
        $id = urldecode($request->segment('2'));
        if($id!=null&&$id!="")
        {
            $company=Company::find($id);

        }
        return view('zmppReward',['company'=>$company]);
    }

    public function gjxyReward(Request $request)
    {
        $id = urldecode($request->segment('2'));
        if($id!=null&&$id!="")
        {
            $company=Company::find($id);

        }
        return view('gjxyReward',['company'=>$company]);
    }


    public function rbycReward(Request $request)
    {
        $id = urldecode($request->segment('2'));
        if($id!=null&&$id!="")
        {
            $company=Company::find($id);

        }
        return view('rbycReward',['company'=>$company]);
    }
}