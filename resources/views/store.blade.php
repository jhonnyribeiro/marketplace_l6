@extends('layouts.front')


@section('content')
    <div class="row front">
        <div class="col-12">
            <h2>{{$store->name}}</h2>
            <p>{{ $store->description }}</p>
            <p>
                <strong>Contatos:</strong>
            <span>{{ $store->phone}}</span> | <span>{{ $store->mobile_phone}}</span>
            </p>
            <hr>
        </div>

        @forelse($store->products as $key => $product)
            <did class="col-md-4">
                <div class="card" style="width: 98%">
                    @if($product->photos->count())
                        <img src="{{asset('storage/' . $product->photos->first()->image)}}" alt=""
                             class="card-img-top">
                    @else
                        <img src="{{asset('assets/img/no-photo.jpg')}}" alt="" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">{{$product->name}}</h2>
                        <p class="card-text">
                            {{$product->description}}
                        </p>
                        <h3>
                            R$ {{number_format($product->price, '2', ',', '.')}}
                        </h3>
                        <a href="{{route('product.single',  ['slug' => $product->slug])}}" class="btn btn-success">
                            Ver Produto
                        </a>
                    </div>
                </div>
            </did>
            @if(($key + 1) % 3 == 0)</div>
    <div class="row front"> @endif

        @empty
            <div class="col-12">
                <h3 class="alert alert-warning">Nenhum produto encontrado para a loja selecionada!</h3>
            </div>
        @endforelse
    </div>

@endsection
