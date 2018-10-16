<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $fillable = ['code','name','description','status']; 
    public function getFluxos(){
        return $this->hasMany('App\model\FluxoProcesso','processo_id','id');
    }
}
