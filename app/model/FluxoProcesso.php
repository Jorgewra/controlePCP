<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class FluxoProcesso extends Model
{
    protected $fillable = ['name','description','processo_id','status','users_id']; 
}
