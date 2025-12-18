	@extends('layout/home')
	@section('body')

		<section class="blog-banner-area" id="blog">
			<div class="container h-100">
				<div class="blog-banner">
					<div class="text-center">
						<h1>Shop Single</h1>
						<nav aria-label="breadcrumb" class="banner-breadcrumb">
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Shop Single</li>
				</ol>
			</nav>
					</div>
				</div>
		</div>
		</section>


		
	@forelse($products as $product)
		

		<div class="product_image_area">
			<div class="container">
				<div class="row s_product_inner">
					<div class="col-lg-6">
						<div class="owl-carousel owl-theme s_Product_carousel">
							<div class="single-prd-item">
								<img class="img-fluid" src="{{$product->image}}" alt="">
							</div>

						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="s_product_text">
							<h3>{{$product->title}}</h3>
							<h2>{{$product->price}}</h2>
							<p>{{$product->decription}}</p>
							
	
				
					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--================End Single Product Area =================-->

		<!--================Product Description Area =================-->

		<!--================End Product Description Area =================-->

		

		@empty
		<p>Không có sản phẩm</p>
	@endforelse



 @foreach($products as $product)

    <h5>Comment</h5>


<form action="{{ route('comments.store') }}" method="POST">
	  @csrf
        <input type="hidden" name="idProduct" value="{{ $product->id }}">
  <div class="mb-3">
    <input type="text"lass="form-control" name="name" placeholder="Tên" required>
  </div>
  <div class="mb-3">
    <textarea name="chat" placeholder="Nội dung" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @foreach($product->comment as $c)
        <p><strong>{{ $c->name }}</strong>: {{ $c->chat }}</p>

        <form action="{{ route('comments.destroy', $c->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Xoá</button>
        </form>
    @endforeach

@endforeach




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
	@endsection