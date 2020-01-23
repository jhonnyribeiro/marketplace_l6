@extends('layouts.app')

@section('content')
    @if(!$store)
        <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar Loja</a>
    @endif
    <table class="table table-striped">
        <thead>
        <th>Lojas Cadastradas</th>
        <tr>
            <td>#</td>
            <td>Loja</td>
            <td>Total de Produtos</td>
            <td>Ações</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->name}}</td>
            <td>{{$store->products->count()}}</td>
            <td>
                <div class="btn-group">
                    <a href="{{route('admin.stores.edit', ['store' => $store->id])}}"
                       class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                    </form>
                </div>
            </td>
        </tr>
        </tbody>
    </table>


@endsection
