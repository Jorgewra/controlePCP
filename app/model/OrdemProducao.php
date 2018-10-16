<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class OrdemProducao extends Model
{
    protected $fillable = ['code','description','quantity','dateBegin','dateEnd','priority','status','produto_id','users_id']; 
    public function getProduto(){
        return $this->hasOne('App\model\Produto','id','produto_id');
    }
    public function getProcessos(){
        return $this->hasOne('App\model\ProcessoLigadoOrdemProducao','ordem_producaos_id','id');
    }
}
