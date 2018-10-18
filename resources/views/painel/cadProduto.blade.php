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
        <form >
            <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="op" name="code" class="form-control" placeholder="{{ $traducao['campo1']}} " required="required" autofocus="autofocus">
                    <label for="op">{{ $traducao['campo1']}} </label>
                  </div>
                </div>              
                <div class="col-md-6">
                  <div class="form-label-group">
                    <select class="form-control" name="status">
                        @foreach ($traducao['situacao'] as $st)
                          <option value="{{$st}}" >{{$st}}</option>
                        @endforeach                      
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="desc" class="form-control" placeholder="{{ $traducao['campo2']}} " required="required">
                <label for="desc">{{ $traducao['campo2']}} </label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <textarea class="form-control"  placeholder="{{ $traducao['campo3']}} "  id="" rows="3"></textarea>              
              </div>
            </div>  
            <button type="button" class="btn btn-primary">{{ $traducao['btSalvar']}}</button>       
            </form>   
    </div>
</div> 

@endsection