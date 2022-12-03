<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#">&#2547; BDT</a></li>
                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option readonly>All Categories</option>
                                @foreach($categories as $category)
                                    <option>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        @php
                            $cart_array = cartArray();
                        @endphp

                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty"><?= count($cart_array)?></div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">

                                    @foreach($cart_array as $cart)
                                        @php
                                            $images = $cart['attributes'][0];
                                            $images = explode('|', $images);
                                            $images = $images[0];
                                        @endphp
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{asset('image/'.$images)}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a
                                                        href="{{route('product.details', $cart['id'])}}">{{$cart['name']}}</a>
                                                </h3>
                                                <h4 class="product-price"><span
                                                        class="qty">{{$cart['quantity']}}x</span>&#2547; {{$cart['price']}}
                                                </h4>
                                            </div>
                                            <a href="{{route('delete-cart',$cart['id'])}}" class="delete"><i
                                                    class="fa fa-close"></i></a>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="cart-summary">
                                    <small><?= count($cart_array)?> Item(s) selected</small>
                                    <h5>SUBTOTAL: &#2547; {{Cart::getTotal()}}</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="{{route('login')}}">View Cart</a>
                                    <a href="{{route('checkout')}}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
