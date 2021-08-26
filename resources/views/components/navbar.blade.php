<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text">categories</div>
                        </div>

                        <ul class="cat_menu">
                            @foreach ($cats as $cat)
                                <li><a href="{{url("cats/show/$cat->id")}}">{{$cat->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Main Nav Menu -->

                    <div class="main_nav_menu ml-auto">
                        <ul class="standard_dropdown main_nav_dropdown">
                            <li><a href="{{ url('/') }}">Home<i class="fas fa-chevron-down"></i></a></li>
                            <li><a href="{{ url('products') }}">All products<i class="fas fa-chevron-down"></i></a>
                            </li>
                            <li><a href="{{ url('') }}">Cart<i class="fas fa-chevron-down"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>
