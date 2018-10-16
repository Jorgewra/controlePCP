@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card mb-3">
    <div class="card-header">
          <i class="fas fa-table"></i>
            Lista de Produtos</div>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-product">Criar Novo</button></td>
          <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data Criação</th>                        
                    <th></th>
                    <th></th>
                  </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Data Criação</th>                        
                            <th></th>
                            <th></th>
                          </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                      <tr>
                        <td>123-5698PO</td>
                        <td>Customer Support</td>
                        <td>01/02/2018</td>
                        <td><button type="button" class="btn btn-primary">Gerar OP</button></td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
    <div class="card-footer small text-muted">Ultomas atulizações at 11:59 PM</div>
  </div> 
<!-- Modal -->
<div class="modal fade" id="new-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar Novo Produto</h5>
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
                  <label for="op">Código do Produto</label>
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
          </form>         
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
@endsection