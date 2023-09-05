@extends('products.layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Produto</h2>
        </div>

    </div>
</div>

<div class="row mt-2">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Detalhe:</strong>
            {{ $product->detail }}
        </div>
    </div>
</div>

<div class="pull-right mt-2">
    <a class="btn btn-primary" href="{{ route('products.index') }}">Voltar</a>
</div>
@endsection