@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card mb-3">
    <div class="card-header">
          <i class="fas fa-building"></i>
          {{ $traducao['tituloProduto']}}</div>
            <td><a href="/pcp/{{App::getLocale()}}/new-product" class="btn btn-primary">{{ $traducao['btCriar']}} </a></td>
          <div class="card-body">
          <div class="table-responsive">
              @if (@isset($lista))
                {{ $lista->links() }}
              @endif
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      @foreach ($traducao['tabProduto'] as $th)
                        <th>{{$th}}</th>
                      @endforeach                                           
                    <th></th>
                    <th></th>
                  </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            @foreach ($traducao['tabProduto'] as $th)
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
                            <td>{{$p->name}}</td>
                            <td>{{$p->description}}</td>
                            <td><button type="button" class="btn btn-primary">{{$traducao['btGerarOp']}}</button></td>
                            <td><a href="/pcp/{{App::getLocale()}}/new-product/{{$p->id}}" class="btn btn-primary">{{$traducao['btDetail']}}</a></td>
                          </tr>
                        @endforeach                            
                      
                    </tbody>
                  </table>
                </div>
              </div>
    <div class="card-footer small text-muted">{{$traducao['footOP']}} 11:59 PM</div>
  </div> 
@endsection