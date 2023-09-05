@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2>Editar</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="id" value="{{ $product->id }}" class="d-none" placeholder="id" >
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detalhe:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-2">
              <button type="submit" class="btn btn-success">Salvar</button>
              <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
            </div>
        </div>
   
    </form>
@endsection