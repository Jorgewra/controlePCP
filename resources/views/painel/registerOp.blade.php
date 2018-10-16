@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card card-register mx-auto mt-5">
        <div class="card-header">Register of OP</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
              <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" class="form-control" placeholder="Código do Produto" required="required" autofocus="autofocus">
                    <label for="op">Código do Produto</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="op" class="form-control" placeholder="N. OP" required="required" autofocus="autofocus">
                    <label for="op">N. OP</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="number" id="qtd" class="form-control" placeholder="Quantidade" required="required">
                    <label for="qtd">Quantidade</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="desc" class="form-control" placeholder="Email address" required="required">
                <label for="desc">Descrição</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtI" class="form-control" placeholder="Data Inicio" required="required">
                    <label for="dtI">Data Inicio</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtF" class="form-control" placeholder="Data Fim" required="required">
                    <label for="dtF">Data Fim</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="exampleFormControlSelect1">Prioridade</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Normal</option>
                        <option>Alta</option>
                        <option>Média</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlSelect1">Processo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1 - Pintura</option>
                        <option>2 - Produção</option>
                        <option>3 - CQ</option>
                    </select>
                </div>
                </div>
            </div>     
            <div class="jumbotron">
                <div class="container">
                   <h1>Fluxo do processo</h1>
                   <ul>
                    <li>1 - Lanternagem</li>
                    <li>2 - Corte</li>
                   </ul>
                </div>
            </div>       
            <a class="btn btn-primary btn-block" href="login.html">Register</a>
          </form>         
        </div>
      </div>
@endsection