@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card mb-3">
    <div class="card-header">
          <i class="fas fa-sitemap"></i>
          {{ $traducao['tituloCadastroProcesso']}}</div>            
          <div class="card-body">
              @include('mensager_it')     
              <form action="/pcp/{{App::getLocale()}}/save-process" method="POST">
                <input type="hidden" name="id" value="{{ $processo->id or old('id') }}">
              <div class="form-group">
                <div class="form-row">
                <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" class="form-control" name="code" value="{{ $processo->code == null ? old('code') : $processo->code }}" placeholder="{{ $traducao['campoProcesso']}}" required="required" autofocus="autofocus">
                      <label for="code">{{ $traducao['campoProcesso']}}</label>
                    </div>
                  </div>              
                  <div class="col-md-6">
                    
                      <select class="form-control" name="status">
                        @if (isset($processo->status))
                          <option value="{{ $traducao['situacao'][ $processo->status-1 ]['key'] }}" >{{$traducao['situacao'][$processo->status-1]['st']}}</option>
                        @endif
                        @foreach ($traducao['situacao'] as $st)
                          <option value="{{ $st['key']}}" >{{$st['st']}}</option>
                        @endforeach       
                      </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="name" name="name" value="{{ $processo->name == null ? old('name') : $processo->name }}" class="form-control" placeholder="{{ $traducao['campoNomeProcesso']}}" required="required">
                  <label for="name">{{ $traducao['campoNomeProcesso']}}</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <textarea class="form-control"  name="description" placeholder="{{ $traducao['campoDecricaoProcesso']}}"  id="" rows="3">
                      {{ $processo->description == null ? old('description') : $processo->description }}
                  </textarea>              
                </div>
              </div>  
              <!--
              <div class="form-group">
                <div id="fluxo"></div>
                <a onclick="addCampos()" id="btnAdicionaEmail" ><i class="fa fa-plus"></i>{{ $traducao['btAddFluxo']}}</a>                  
              </div> -->
              @csrf
              <input type="submit" class="btn btn-primary" value="{{ $traducao['btSalvar']}}"/>
              </form>   
          </div>
          <div class="card-footer small text-muted">{{ $traducao['footOP']}} {{ $processo->created_at == null ? date('d-m-Y H-m-s T') : $processo->created_at }}</div>
  </div>
</div>
<script type="text/javascript">
  var qtdeCampos = 0;
  addCampos();
  function addCampos() {
    var objPai = document.getElementById("fluxo");
    //Criando o elemento DIV;
    var objFilho = document.createElement("div");
    //Definindo atributos ao objFilho:
    objFilho.setAttribute("id","fluxo"+qtdeCampos);
    
    //Inserindo o elemento no pai:
    objPai.appendChild(objFilho);
    //Escrevendo algo no filho recém-criado:
    document.getElementById("fluxo"+qtdeCampos).innerHTML = "<div class='form-label-group'>" + "<input type='text' id='campo"+qtdeCampos+"' class='form-control' name='campo[]' placeholder='{{ $traducao['labelFluxoProcesso'] }}'>"
    + "<label for='campo"+qtdeCampos+"'>{{ $traducao['labelFluxoProcesso'] }}</label>"
    +"</div>"
    +"<a onClick='removerCampo("+qtdeCampos+")'> <i class='fas fa-trash-alt'></i> {{ $traducao['btRemover'] }}</a>";
    qtdeCampos++;
  }
  
  function removerCampo(id) {
  qtdeCampos --;  
  var objPai = document.getElementById("fluxo");
  var objFilho = document.getElementById("fluxo"+id);
  
  //Removendo o DIV com id específico do nó-pai:
  var removido = objPai.removeChild(objFilho);
  }
  $(document).ready(function(){
      $('#codigo').mask('#####-###########');
  });
</script>
@endsection