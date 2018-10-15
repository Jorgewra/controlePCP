@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
 <!-- DataTables Example -->
 <div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
          Lista de Ops</div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>N. Op</th>
                      <th>Descrição</th>
                      <th>Data</th>
                      <th>Total Peças</th>
                      <th>Processo</th>
                      <th>Status</th>
                      <th>prioridade</th>
                      <th>Detalhes</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N. Op</th>
                      <th>Descrição</th>
                      <th>Data</th>
                      <th>Total Peças</th>
                      <th>Processo</th>
                      <th>Status</th>
                      <th>prioridade</th>
                      <th>Detalhes</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                    <tr>
                      <td>123-5698PO</td>
                      <td>Customer Support</td>
                      <td>01/02/2018 até 30/02/2018</td>
                      <td>1020.00</td>
                      <td>1 - Pintura</td>
                      <td>Inicial</td>
                      <td>
                        <select class="form-control" id="exampleFormControlSelect2">
                          <option>Normal</option>
                          <option>Alta</option>
                          <option>Média</option>
                        </select>
                      </td>
                      <td><button type="button" class="btn btn-primary">Editar</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
    <div class="card-footer small text-muted">Ultomas atulizações at 11:59 PM</div>
  </div>
@endsection
