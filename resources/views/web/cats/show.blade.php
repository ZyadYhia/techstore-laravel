@extends('web.layout')
@section('main')
    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg">
        </div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">{{ $cat->name }}</h2>
        </div>
    </div>

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- Shop Sidebar -->
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Categories</div>
                            <ul class="sidebar_categories">
                                @foreach ($cats as $cat)
                                    <li><a href="{{ url("cats/show/$cat->id") }}">{{ $cat->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                    </div>

                </div>

                <div class="col-lg-9">

                    <!-- Shop Content -->

                    <div class="shop_content">

                        <div class="product_grid">
                            <div class="product_grid_border"></div>

                            @foreach ($products as $prod)
                                <!-- Product Item -->
                                <div class="product_item">
                                    <div class="product_border"></div>
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset("uploads/$prod->img") }}" alt="">
                                    </div>
                                    <div class="product_content">
                                        <div class="product_price">
                                            <h6>${{ $prod->price }}</h6>
                                        </div>
                                        <div class="product_name">
                                            <div><a href="{{url("products/show/$prod->id")}}" tabindex="0">{{$prod->name}}</a></div>
                                        </div>
                                    </div>
                                    <div class="product_fav"><i class="fas fa-cart-plus"></i></div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Shop Page Navigation -->

                        <div class="shop_page_nav d-flex flex-row">
                            <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i
                                    class="fas fa-chevron-left"></i></div>
                            <ul class="page_nav d-flex flex-row">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">21</a></li>
                            </ul>
                            <div class="page_next d-flex flex-column align-items-center justify-content-center"><i
                                    class="fas fa-chevron-right"></i></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
