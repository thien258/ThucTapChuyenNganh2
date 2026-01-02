    @extends('layout/home')
    @section('body')
    <main class="site-main">
        <section class="hero-banner">
      
        </section>
        <div class="container">
          <h2>Product</h2>
        <div class="d-flex flex-wrap justify-content-between gap-3">
      @forelse($products as $product)
        <div class="card" style="width: 18rem;">

    <img src="{{ $product->image }}"
        class="img-thumbnail img-fluid"
        style="width:100%; height:300px;"
        alt="">

        <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <p class="card-text">{{ $product->description }}</p>
        <p class="card-text bg-primary text-white text-center p-2 rounded">{{ $product->price }}</p>
            <a href="{{ route('single_product',['category'=>$product->id]) }}" class="btn btn-secondary">Detail Product</a>
        </div>
        </div>
        @empty
        <h1>no data</h1>

        @endforelse
      

          </div>

        </div> 
        
      </main>
    @endsection