<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $connection = 'mysql';
    protected  $table='People';

    //指定id
    //protected  $primaryKey='id';
    public function insertMysqlFromRedis(){
        if(LvRedis::llen('lvotep')>0)
        {
            $voteList=LvRedis::lrange('lvotep',0,LvRedis::llen('lvotep'));
            if($voteList.count()>0)
            {
                foreach($voteList as $value)
                {
                    $result=DB::insert('insert into CX_People (people_id) values (?)', array($value));

                    if(!$result)
                    {
                        LvRedis::rpush('lvotep',$value);
                    }
                }

            }

        }
    }
}
