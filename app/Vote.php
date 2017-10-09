<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LvRedis;

class Vote extends Model
{
    protected $connection = 'mysql';
    protected  $table='Vote';

    //指定id
    protected  $primaryKey='id';

    public function insertMysqlFromRedis(){
        if(LvRedis::llen('lvotee')>0)
        {
            $voteList=LvRedis::lrange('lvotee',0,LvRedis::llen('lvotee'));
            if($voteList.count()>0)
            {
                foreach($voteList as $value)
                {
                   $result= DB::insert('insert into CX_Vote (company_id,vote) values (?, ?)', array($value, '1'));
                    if(!$result)
                    {
                        LvRedis::rpush('lvotee',$value);
                    }
                }

            }

        }
    }
}
