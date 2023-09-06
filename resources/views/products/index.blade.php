@extends('products.layout')
 
@section('content')
    <div class="row mt-5 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-light">
                <h2>Laravel 10 CRUD</h2>
            </div>
            <div class="pull-right  mt-4">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Criar novo produto</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-dark mt-2 text-light">
        <tr>
            <th>No</th>
            <th>id</th>
            <th>Nome</th>
            <th>Detalhe</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Abrir</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection