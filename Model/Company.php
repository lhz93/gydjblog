<?php

namespace App\Model;

use Cache;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $connection = 'mysql';
    public $table = 'Company';

    public $timestamps = false;
    public $primaryKey='id';


//    public function companyLimit()
//    {
//        return $this->hasMany('App\Model\CompanyLimit');
//    }

    public function setCompanyCache()
    {
        Cache::forget('company:all');
        $company = Company::all();
        foreach ($company as $v) {
            Cache::forever('company:' . $v->id, $v);
        }
    }

    public function getCompany()
    {
        //$company = Cache::rememberForever('Company:all', function () {
            $allCompany = Company::select('id')->orderBy('id', 'asc')->get();
            $company = [];
            foreach ($allCompany as $v) {
                $company[$v->id] = 1;
            }
            return $company;
        //});
        //return $company;
    }

//    public function setDrawCompany()
//    {
//        Cache::forget('drawCompany');
//        $this->getDrawCompany();
//    }
//
//    public function getDrawCompany()
//    {
//        $company = Cache::rememberForever('drawCompany', function () {
//            $allCompany = Company::where('is_advertise', 1)->orderBy('brand_id', 'asc')->get();
//            $company = [];
//            foreach ($allCompany as $v) {
//                $company[$v->id] = $v;
//            }
//            return $company;
//        });
//        return $company;
//    }
}
