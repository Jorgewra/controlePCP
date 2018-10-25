@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-sitemap"></i>
    {{ $traducao['tituloProcesso']}}
  </div>
  <td><a href="/pcp/{{App::getLocale()}}/new-process/" class="btn btn-primary">{{ $traducao['btCriar']}}</a></td>
  <div class="card-body">
  <div class="table-responsive">
    @if (@isset($lista))
      {{ $lista->links() }}
    @endif
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          @foreach ($traducao['tabProcesso'] as $th)
            <th>{{$th}}</th>
          @endforeach
          <th></th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            @foreach ($traducao['tabProcesso'] as $th)
              <th>{{$th}}</th>
            @endforeach  
            <th></th>
          </tr>
        </tfoot>
        <tbody>
            @foreach ($lista as $p)
            <tr>
                <td>{{$p->code}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->created_at}}</td>
                <td>{{$traducao['situacao'][$p->status-1]['st']}}</td>
                <td><a href="/pcp/{{App::getLocale()}}/new-process/{{$p->id}}" class="btn btn-primary">{{$traducao['btDetail']}}</a></td>
              </tr>
            @endforeach    
        </tbody>
    </table>                
  </div>
  </div>
    <div class="card-footer small text-muted">{{$traducao['footOP']}} {{ date('d-m-Y H-m-s') }}</div>
</div>     

</div>
@endsection