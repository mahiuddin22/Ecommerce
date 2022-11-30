<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="{{Request::is ('/') ? 'active':''}}"><a href="{{route('home')}}">Home</a></li>
                @foreach($categories as $category)
                    <li class="{{Request::is ('category/product/'.$category->id) ? 'active':''}}"><a href="{{route('product.category', $category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
