<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['code','name','description','status','users_id']; 

}
