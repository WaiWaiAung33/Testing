<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     protected $table = 'employee';
    protected $fillable =['name','address','father_name','NRC'];
}

