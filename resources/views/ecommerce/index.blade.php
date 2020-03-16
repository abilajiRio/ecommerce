@extends('layouts.ecommerce')

@section('title')
Technical Test
@endsection

@section('content')
    <!--================Home Banner Area =================-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" data-interval="1000">
				<img src="{{asset ('assets/img/01.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				<h3>"Say hello to the future"</h3>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
				</div>
				</div>

				<div class="carousel-item" data-interval="1000">
				<img src="{{asset ('assets/img/02.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				<h3>"Let's talk"</h3>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
				</div>
				</div>

				<div class="carousel-item" data-interval="1000">
				<img src="{{asset ('assets/img/03.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				<h3>"Say hello to the future"</h3>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
				</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	<!--================End Home Banner Area =================-->

	<!--================Hot Deals Area =================-->
	{{-- <section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!--================End Hot Deals Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Produk Terbaru</h2>
						<p>Tampil trendi dengan kumpulan produk kekinian kami.</p>
					</div>
				</div>
				<div class="row">
          
          <!-- PERHATIAKAN BAGIAN INI, LOOPING DATA PRODUK -->
          @forelse($products as $row)
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
                <!-- KEMUDIAN TAMPILKAN IMAGENYA DARI FOLDER /PUBLIC/STORAGE/PRODUCTS -->
                <img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
								<div class="p_icon">
									<a href="{{ url('/product/' . $row->slug) }}">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
              <!-- KETIKA PRODUK INI DIKLIK MAKA AKAN DIARAHKAN KE URL DIBAWAH -->
              <!-- HANYA SAJA URL TERSEBUT BELUM DISEDIAKAN PADA ARTIKEL KALI INI -->
              <a href="{{ url('/product/' . $row->slug) }}">
                <!-- TAMPILKAN NAMA PRODUK -->
                 <h4>{{ $row->name }}</h4>
							</a>
              <!-- TAMPILKAN HARGA PRODUK -->
              <h5>Rp {{ number_format($row->price) }}</h5>
						</div>
					</div>
          @empty
                    
          @endforelse
				</div>

        <!-- GENERATE PAGINATION UNTUK MEMBUAT NAVIGASI DATA SELANJUTNYA JIKA ADA -->
				<div class="row">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->
@endsection