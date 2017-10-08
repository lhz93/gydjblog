<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $connection = 'mysql';
    protected  $table='Vote';

    //指定id
    protected  $primaryKey='id';
}
