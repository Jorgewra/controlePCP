<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProcessoLigadoOrdemProducao extends Model
{
    protected $fillable = ['status','flow','ordem_producaos_id','processos_id','users_id']; 
    public function getProcesso() {
        return $this->hasOne('App\model\Processo', 'id', 'processos_id');
    }
}
