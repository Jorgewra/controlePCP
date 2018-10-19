@extends('painel.layouts.app')

@section('title', 'Home')

@section('header')

@section('content')
<div class="card mb-3">
    <div class="card-header">
          <i class="fas fa-table"></i>
          {{ $traducao['tituloCadastroProd']}} 
    </div>            
    <div class="card-body">
        @include('mensager_it')     
        <form action="/pcp/{{App::getLocale()}}/save-product" method="POST">
            <input type="hidden" name="id" value="{{ $produto->id or old('id') }}">
            <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="op" name="code" value="{{ $produto->code == null ? old('code') : $produto->code   }}" class="form-control" placeholder="{{ $traducao['campo1']}} " required="required" autofocus="autofocus">
                    <label for="op">{{ $traducao['campo1']}} </label>
                  </div>
                </div>              
                <div class="col-md-6">
                  <div class="form-label-group">
                    <select class="form-control" name="status">
                        @if (isset($produto->status))
                          <option value="{{ $traducao['situacao'][ $produto->status-1 ]['key'] }}" >{{$traducao['situacao'][$produto->status-1]['st']}}</option>
                        @endif
                        @foreach ($traducao['situacao'] as $st)
                          <option value="{{ $st['key']}}" >{{$st['st']}}</option>
                        @endforeach                      
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="desc" name="name" class="form-control" value="{{ $produto->name == null ? old('name') : $produto->name }}" placeholder="{{ $traducao['campo2']}} " required="required">
                <label for="desc">{{ $traducao['campo2']}} </label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <textarea class="form-control"  placeholder="{{ $traducao['campo3']}} " name="description"  id="" rows="3">{{ $produto->description == null ? old('description') : $produto->description}}</textarea>              
              </div>
            </div>  
            @csrf
            <button type="submit" class="btn btn-primary">{{ $traducao['btSalvar']}}</button>       
            </form>   
    </div>
</div> 

@endsection