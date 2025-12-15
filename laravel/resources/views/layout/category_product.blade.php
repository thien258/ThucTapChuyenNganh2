    @extends('layout.home')

    @section('body')
    <div class="container">
        <div class="row">

        @forelse($products as $product)
    <div class="card" style="width: 18rem;">
    <img src="{{ $product->image }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $product->title }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <a href="#" class="btn btn-primary">{{$product->price}}</a>
        <a href="{{ route('single_product',['category'=>$product->id]) }}" class="btn btn-secondary">Detail Product</a>
    </div>
    </div>
    @empty
    <h1>no data</h1>

    @endforelse
        </div>
    </div>

    @endsection