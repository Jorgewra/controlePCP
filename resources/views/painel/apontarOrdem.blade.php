@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')
 
@section('content')
<div class="card card-register mx-auto mt-5">
    <div class="card-header">{{ $traducao['tituloApontamentoOp']}}</div>
        <div class="card-body">
            @include('mensager_it')     
            <form action="/pcp/{{App::getLocale()}}/lancar-ordem" method="POST">
              <input type="hidden" name="id" value="{{ $ordem->id == null ? old('id') : $ordem->id }}">
            <div class="form-group">
              <div class="form-row">
              <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" value="{{ $ordem->getProduto == null ? old('code_produto') : $ordem->getProduto->code }}" class="form-control" placeholder="{{ $traducao['campo1']}}" disabled >
                    <label for="op">{{ $traducao['campo1']}}</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" class="form-control" value="{{ $ordem->code == null ? old('code') : $ordem->code   }}" placeholder="{{ $traducao['campoNumeroOp']}}" disabled>
                    <label for="op">{{ $traducao['campoNumeroOp']}}</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="number" id="qtd" class="form-control" value="{{ $ordem->quantity == null ? old('quantity') : $ordem->quantity   }}" placeholder="{{ $traducao['campoQuantidadeOp']}}" disabled>
                    <label for="qtd">{{ $traducao['campoQuantidadeOp']}}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtI" value="{{ $ordem->dateBegin == null ? old('dateBegin') : $ordem->dateBegin   }}" class="form-control" placeholder="{{ $traducao['campoDataInicioOp']}}" disabled>
                    <label for="dtI">{{ $traducao['campoDataInicioOp']}}</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtF" value="{{ $ordem->dateEnd == null ? old('dateEnd') : $ordem->dateEnd   }}" class="form-control" placeholder="{{ $traducao['campoDataFimOp']}}" disabled>
                    <label for="dtF">{{ $traducao['campoDataFimOp']}}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">              
                      <div class="form-label-group">
                        <input type="number" id="qtd" name="produced" class="form-control" value="{{ $ordem->getProcessos->produced == null ? old('quantity') : $ordem->getProcessos->produced }}" placeholder="{{ $traducao['campoQuantidadeOp']}}" required="required" autofocus="autofocus">
                        <label for="qtd">{{ $traducao['qtdPrdud']}}</label>
                      </div>
                    </div>                 
                </div>
            </div>     
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                <label for="status">{{ $traducao['tabOp6']}}</label>
                <select class="form-control" id="status" name="status">                    
                    @if (isset($ordem->status))
                      <option value="{{ $traducao['status'][ $ordem->status-1 ]['key'] }}" >{{$traducao['status'][$ordem->status-1]['st']}}</option>
                    @endif
                    @foreach ($traducao['status'] as $st)
                        <option value="{{ $st['key']}}" >{{$st['st']}}</option>
                    @endforeach
                </select>
              </div>
            </div>
          </div>  
            <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                      <label for="processo"><b>{{ $traducao['campoNomeProcesso']}} :</b></label>
                      <label>{{$ordem->getProcessos->getProcesso->code}} - {{$ordem->getProcessos->getProcesso->name}}</label>
                   </div>            
                </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">{{ $traducao['btSalvar']}}</button> 
          </form>         
        </div>
      </div>
@endsection