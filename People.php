<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $connection = 'mysql';
    protected  $table='People';

    //指定id
    //protected  $primaryKey='id';
}
