@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card mb-3">
    <div class="card-header">
          <i class="fas fa-table"></i>
            Lista de Processos</div>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-process">Criar Novo</button></td>
          <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data Criação</th>  
                    <th>Status</th>  
                    <th></th>
                  </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Data Criação</th>   
                            <th>Status</th>   
                            <th></th>
                          </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                      <tr>
                        <td>123-5698PO</td>
                        <td>Customer Support</td>
                        <td>01/02/2018</td>
                        <td>Ativo</td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
    <div class="card-footer small text-muted">Ultomas atulizações at 11:59 PM</div>
  </div>     
  <!-- Modal -->
<div class="modal fade" id="new-process" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar Novo Processo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="op" class="form-control" placeholder="Código do Produto" required="required" autofocus="autofocus">
                  <label for="op">Código do Processo</label>
                </div>
              </div>              
              <div class="col-md-6">
                <div class="form-label-group">
                  <select class="form-control">
                    <option>Ativo</option>
                    <option>Desativado</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="desc" class="form-control" placeholder="Email address" required="required">
              <label for="desc">Nome</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <textarea class="form-control"  placeholder="descrição"  id="" rows="3"></textarea>              
            </div>
          </div>  
          <div class="col-md-5 col-md-offset-1">
            <label>Fluxo</label>
            <input type="text" class="form-control campoDefault" placeholder="Adicione nome do fluxo!"/>            
            <div id="imendaHTMLemail"></div>            
            <a href="#" id="btnAdicionaEmail" ><i class="fa fa-plus"></i> Adicionar Fluxo</a>
          </div>
          </form>         
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
  <script type="text/javascript">

    var idContador = 0;
        
    function exclui(id){
      var campo = $("#"+id.id);
      campo.hide(200);
    }
  
    $( document ).ready(function() {
      
      $("#btnAdicionaEmail").click(function(e){
        e.preventDefault();
        var tipoCampo = "email";
        adicionaCampo(tipoCampo);
      })
      
      $("#btnAdicionaTelefone").click(function(e){
        e.preventDefault();
        var tipoCampo = "telefone";
        adicionaCampo(tipoCampo);
      })
      
      function adicionaCampo(tipo){
  
        idContador++;
        
        var idCampo = "campoExtra"+idContador;
        var idForm = "formExtra"+idContador;
      
        var html = "";
        
        html += "<div style='margin-top: 8px;' class='input-group' id='"+idForm+"'>";
        html += "<input type='text' id='"+idCampo+"' class='form-control novoCampo' placeholder='Insira um "+tipo+"'/>";
        html += "<span class='input-group-btn'>";
        html +=	"<button class='btn' onclick='exclui("+idForm+")' type='button'><span class='fa fa-trash'></span></button>";html +=	"<button class='btn' onclick='exclui("+idForm+")' type='button'><span class='fa fa-trash'></span></button>";
        html += "</span>";
        html += "</div>";
        
        $("#imendaHTML"+tipo).append(html);
      }
      
      $(".btnExcluir").click(function(){
        console.log("clicou");
        $(this).slideUp(200);
      })
      
      $("#btnSalvar").click(function(){
      
      var mensagem = "";
      var novosCampos = [];
      var camposNulos = false;
      
        $('.campoDefault').each(function(){
          if($(this).val().length < 1){
            camposNulos = true;
          }
        });
        $('.novoCampo').each(function(){
          if($(this).is(":visible")){
            if($(this).val().length < 1){
              camposNulos = true;
            }
            //novosCampos.push($(this).val());
            mensagem+= $(this).val()+"\n";
          }
        });
        
        if(camposNulos == true){
          alert("Atenção: existem campos nulos");
        }else{
          alert("Novos campos adicionados: \n\n "+mensagem);
        }
        
        novosCampos = [];
      })
      
    });
    
    </script>
</div>
@endsection