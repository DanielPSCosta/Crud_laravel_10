@extends('products.layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-light">
            <h2>Adicionar novo produto</h2>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ops!</strong> Houve alguns problemas com sua entrada.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row text-light">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalhe:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detalhe"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-2">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-danger" href="{{ route('products.index') }}">Voltar</a>
        </div>
    </div>

</form>
@endsection