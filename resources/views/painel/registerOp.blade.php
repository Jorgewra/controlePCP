@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card card-register mx-auto mt-5">
        <div class="card-header">{{ $traducao['tituloRegistroOp']}}</div>
        <div class="card-body">
         @include('mensager_it')     
          <form>
            <div class="form-group">
              <div class="form-row">
              <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" class="form-control" placeholder="{{ $traducao['campo1']}}" required="required" autofocus="autofocus">
                    <label for="op">{{ $traducao['campo1']}}</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" class="form-control" placeholder="{{ $traducao['campoNumeroOp']}}" required="required">
                    <label for="op">{{ $traducao['campoNumeroOp']}}</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="number" id="qtd" class="form-control" placeholder="{{ $traducao['campoQuantidadeOp']}}" required="required">
                    <label for="qtd">{{ $traducao['campoQuantidadeOp']}}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="desc" class="form-control" placeholder="{{ $traducao['campoDescricaoOp']}}" required="required">
                <label for="desc">{{ $traducao['campoDescricaoOp']}}</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtI" class="form-control" placeholder="{{ $traducao['campoDataInicioOp']}}" required="required">
                    <label for="dtI">{{ $traducao['campoDataInicioOp']}}</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtF" class="form-control" placeholder="{{ $traducao['campoDataFimOp']}}" required="required">
                    <label for="dtF">{{ $traducao['campoDataFimOp']}}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="exampleFormControlSelect1">{{ $traducao['campoPrioridadeOp']}}</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        @foreach ($traducao['prioridade'] as $st)
                            <option value="{{ $st['key']}}" >{{$st['st']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlSelect1">{{ $traducao['campoProcessoOp']}}</label>
                    <select class="form-control" id="exampleFormControlSelect1">
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
            <a class="btn btn-primary btn-block" href="login.html">{{ $traducao['btSalvar']}}</a>
          </form>         
        </div>
      </div>
@endsection