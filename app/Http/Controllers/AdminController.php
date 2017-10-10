<?php

namespace App\Http\Controllers;

use App\Vote;
use App\People;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Route;
use Redirect;
use Input;
use Cache;
use Redis;
use DB;
use Excel;

class AdminController extends Controller
{
    //

    public function login()
    {
        return view('login');
    }


    public function doLogin(Request $request)
    {
        $strUserName = $request->get('user_name', '');
        $strPassword = $request->get('password', '');
        if ($strUserName and $strPassword and DB::table('User')->where('username', $strUserName)->where('userpwd', md5($strPassword))->first()) {
            $request->session()->put('admin_user', $strUserName);
            return redirect('/admin/index');
        } else {
            return redirect()->route('login')->with('status', '密码错误');
        }
    }

    public function logout()
    {
        $this->checkAdmin();
        Session::forget('admin_user');
        return Redirect::route('login')->send();
    }


    public function index()
    {
        $this->checkAdmin();

        $resut=Array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'5'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'11'=>0,'12'=>0,'13'=>0,'14'=>0,
            '15'=>0,'16'=>0,'17'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0);
        $peopleResult=Array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'5'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'11'=>0,'12'=>0);
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

        arsort($resut);
        arsort($peopleResult);

        return view('adminIndex', ['votee' => $resut, 'votep' => $peopleResult]);
    }


    public function systemIndex()
    {
        $this->checkAdmin();
        $ipBlack = IpBlack::where('status', 1)->get();
        return view('systemIndex', ['ipBlack' => $ipBlack]);
    }

    private function checkAdmin()
    {
        if (!Session::get('admin_user')) {
            header('Location: /e_admin_l/login');
            exit;
        }
    }
}
