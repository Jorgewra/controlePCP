@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')
 
@section('content')
<div class="card card-register mx-auto mt-5">
    <div class="card-header">{{ $traducao['tituloRegistroOp']}}</div>
        <div class="card-body">
            @include('mensager_it')     
            <form action="/pcp/{{App::getLocale()}}/save-ordem" method="POST">
              <input type="hidden" name="id" value="{{ $ordem->id == null ? old('id') : $ordem->id }}">
            <div class="form-group">
              <div class="form-row">
              <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" name="code_produto" value="{{ $ordem->getProduto == null ? old('code_produto') : $ordem->getProduto->code }}" class="form-control" placeholder="{{ $traducao['campo1']}}" required="required" autofocus="autofocus">
                    <label for="op">{{ $traducao['campo1']}}</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" name="code" class="form-control" value="{{ $ordem->code == null ? old('code') : $ordem->code   }}" placeholder="{{ $traducao['campoNumeroOp']}}" required="required">
                    <label for="op">{{ $traducao['campoNumeroOp']}}</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="number" id="qtd" name="quantity" class="form-control" value="{{ $ordem->quantity == null ? old('quantity') : $ordem->quantity   }}" placeholder="{{ $traducao['campoQuantidadeOp']}}" required="required">
                    <label for="qtd">{{ $traducao['campoQuantidadeOp']}}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="desc" name="description" class="form-control" value="{{ $ordem->description == null ? old('description') : $ordem->description   }}" placeholder="{{ $traducao['campoDescricaoOp']}}" required="required">
                <label for="desc">{{ $traducao['campoDescricaoOp']}}</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtI" name="dateBegin" value="{{ $ordem->dateBegin == null ? old('dateBegin') : $ordem->dateBegin   }}" class="form-control" placeholder="{{ $traducao['campoDataInicioOp']}}" required="required">
                    <label for="dtI">{{ $traducao['campoDataInicioOp']}}</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtF" name="dateEnd" value="{{ $ordem->dateEnd == null ? old('dateEnd') : $ordem->dateEnd   }}" class="form-control" placeholder="{{ $traducao['campoDataFimOp']}}" required="required">
                    <label for="dtF">{{ $traducao['campoDataFimOp']}}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="pioridade">{{ $traducao['campoPrioridadeOp']}}</label>
                    <select class="form-control" id="pioridade" name="priority">
                        @if (isset($ordem->priority))
                          <option value="{{ $traducao['prioridade'][ $ordem->priority-1 ]['key'] }}" >{{$traducao['prioridade'][$ordem->priority-1]['st']}}</option>
                        @endif
                        @foreach ($traducao['prioridade'] as $st)
                            <option value="{{ $st['key']}}" >{{$st['st']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="processo">{{ $traducao['campoProcessoOp']}}</label>
                    <select class="form-control" id="processo" name="processos_id">
                        @if (isset($ordem->getProcessos))
                          @foreach ($lista as $p)
                            @if($p->id == $ordem->getProcessos->processos_id)
                              <option value="{{ $p->id }}" >{{$p->code}} - {{$p->name}}</option>
                              @break
                            @endif
                          @endforeach 
                        @endif
                        @if (isset($lista))
                          @foreach ($lista as $p)
                            <option value="{{ $p->id }}" >{{$p->code}} - {{$p->name}}</option>
                          @endforeach                          
                        @endif
                    </select>
                </div>
                </div>
            </div>     
            <!--
            <div class="jumbotron">
                <div class="container">
                   <h1>Fluxo do processo</h1>
                   <ul>
                    <li>1 - Lanternagem</li>
                    <li>2 - Corte</li>
                   </ul>
                </div>
            </div>       
            -->
            @csrf
            <button type="submit" class="btn btn-primary">{{ $traducao['btSalvar']}}</button> 
          </form>         
        </div>
      </div>
@endsection