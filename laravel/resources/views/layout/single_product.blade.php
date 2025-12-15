@extends('layout/home')
@section('body')
	<!-- ================ start banner area ================= -->	
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
	<!-- ================ end banner area ================= -->
@forelse($product as $product)

  <!--================Single Product Area =================-->
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
							<p>{{$product->content}}</p>
 
						
						<div class="product_count">
              <label for="qty">Quantity:</label>
              <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
							<input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;"
               class="reduced items-count" type="button"><i class="ti-angle-right"></i></button>
							<a class="button primary-btn" href="#">Add to Cart</a>               
						</div>
				
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
	<!--================ end related Product area =================-->  	
@endsection