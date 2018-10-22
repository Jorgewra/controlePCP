@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
 <!-- DataTables -->
 <div class="card mb-3">
    <div class="card-header">
          <i class="fas fa-table"></i>
          {{ $traducao['tituloInicio']}}</div>
          <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>{{ $traducao['tabOp1']}}</th>
                        <th>{{ $traducao['tabOp2']}}</th>
                        <th>{{ $traducao['tabOp3']}}</th>
                        <th>{{ $traducao['tabOp4']}}</th>
                        <th>{{ $traducao['tabOp5']}}</th>
                        <th>{{ $traducao['tabOp6']}}</th>
                        <th>{{ $traducao['tabOp7']}}</th>
                        <th>{{ $traducao['tabOp8']}}</th>
                      </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ $traducao['tabOp1']}}</th>
                                <th>{{ $traducao['tabOp2']}}</th>
                                <th>{{ $traducao['tabOp3']}}</th>
                                <th>{{ $traducao['tabOp4']}}</th>
                                <th>{{ $traducao['tabOp5']}}o</th>
                                <th>{{ $traducao['tabOp6']}}</th>
                                <th>{{ $traducao['tabOp7']}}</th>
                                <th>{{ $traducao['tabOp8']}}</th>
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
                              @foreach ($traducao['prioridade'] as $st)
                                <option value="{{ $st['key']}}" >{{$st['st']}}</option>
                              @endforeach
                          </select>
                        </td>
                        <td><button type="button" class="btn btn-primary">{{ $traducao['btDetail']}}</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
    <div class="card-footer small text-muted">{{ $traducao['footOP']}} 11:59 PM</div>
  </div>
@endsection
