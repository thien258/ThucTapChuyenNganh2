    @extends('layout/home')
    @section('body')
    <main class="site-main">
        <section class="hero-banner">
          <div class="container">
            <div class="row no-gutters align-items-center pt-60px">
              <div class="col-5 d-none d-sm-block">
                <div class="hero-banner__img">
                  <img class="img-fluid" src="img/home/hero-banner.png" alt="">
                </div>
              </div>
              <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                <div class="hero-banner__content">
                  <h4>Shop is fun</h4>
                  <h1>Browse Our Premium Product</h1>
                  <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.</p>
              
                </div>
              </div>
            </div>
          </div>
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
          <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
          <div class="container">
            <div class="row">
              <div class="col-xl-5">
                <div class="offer__content text-center">
                  <h3>Up To 50% Off</h3>
                  <h4>Winter Sale</h4>
                  <p>Him she'd let them sixth saw light</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    @endsection