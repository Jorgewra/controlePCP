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
              @if (@isset($lista))
                {{ $lista->links() }}
              @endif
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      @foreach ($traducao['tabOP'] as $th)
                        <th>{{$th}}</th>
                      @endforeach  
                      <th></th>
                      <th></th>
                  </tr>
                </thead>
                    <tfoot>
                        <tr>
                            @foreach ($traducao['tabOP'] as $th)
                            <th>{{$th}}</th>
                            @endforeach  
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                          @foreach ($lista as $p)
                          <tr>
                              <td>{{$p->code}}</td>
                              <td>{{$p->description}}</td>
                              <td>{{$p->created_at}}</td>
                              <td>{{$p->quantity}}</td>
                              <td>{{$p->getProduto->name}}</td>
                              <td>{{$p->getProcessos->getProcesso->name}}</td>
                              <td>{{$traducao['status'][$p->status-1]['st']}}</td>
                              <td>{{$traducao['prioridade'][$p->priority-1]['st']}}</td>
                              <td><a href="/pcp/{{App::getLocale()}}/registerOp/{{$p->id}}" class="btn btn-primary">{{$traducao['btAtualizar']}}</a></td>
                              <td><a href="/pcp/{{App::getLocale()}}/registerOp/{{$p->id}}" class="btn btn-primary">{{$traducao['btDetail']}}</a></td>
                            </tr>
                          @endforeach    
                    </tbody>
                  </table>
                </div>
              </div>
              @if (@isset($lista))
                {{ $lista->links() }}
              @endif
    <div class="card-footer small text-muted">{{ $traducao['footOP']}} 11:59 PM</div>
  </div>
@endsection
