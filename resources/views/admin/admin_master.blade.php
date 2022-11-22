<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Dashboard | Ecommerce</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword"
          content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{asset('admin/css/ie.css')}}" rel="stylesheet">
    <![endif]-->

<!--[if IE 9]>
    <link id="ie9style" href="{{asset('admin/css/ie9.css')}}" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->
@stack('css')

</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="index.html"><span>{{Session::get('admin_name')}}'s Dashboard</span></a>
            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> {{Session::get('admin_name')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="{{route('admin.logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{route('admin.dashboard')}}"><i class="icon-bar-chart"></i><span
                                class="hidden-tablet"> Dashboard</span></a></li>
                    {{--                    <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>--}}
                    {{--                    <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>--}}
                    {{--                    <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>--}}
                    {{--                    <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>--}}
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Category </span><span
                                class="label label-important"> {{\App\Models\Category::count()}} </span></a>
                        <ul>
                            <li><a class="submenu" href="{{url('/categories/create')}}"><i
                                        class="icon-file-alt"></i><span class="hidden-tablet"> Add Category </span></a>
                            </li>
                            <li><a class="submenu" href="{{url('/categories/')}}"><i class="icon-file-alt"></i><span
                                        class="hidden-tablet"> All Category </span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Sub Category </span><span
                                class="label label-important"> {{\App\Models\SubCategory::count()}}</span></a>
                        <ul>
                            <li><a class="submenu" href="{{url('/subcategories/create')}}"><i
                                        class="icon-file-alt"></i><span class="hidden-tablet"> Add Sub Categories </span></a>
                            </li>
                            <li><a class="submenu" href="{{url('/subcategories/')}}"><i class="icon-file-alt"></i><span
                                        class="hidden-tablet"> All Sub Category </span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Brand </span><span
                                class="label label-important"> {{\App\Models\Brand::count()}}</span></a>
                        <ul>
                            <li><a class="submenu" href="{{route('brand.create')}}"><i
                                        class="icon-file-alt"></i><span class="hidden-tablet"> Add Brand </span></a>
                            </li>
                            <li><a class="submenu" href="{{route('brand.index')}}"><i class="icon-file-alt"></i><span
                                        class="hidden-tablet"> All Brands </span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Unit </span><span
                                class="label label-important"> {{\App\Models\Unit::count()}}</span></a>
                        <ul>
                            <li><a class="submenu" href="{{route('unit.create')}}"><i
                                        class="icon-file-alt"></i><span class="hidden-tablet"> Add Brand </span></a>
                            </li>
                            <li><a class="submenu" href="{{route('unit.index')}}"><i class="icon-file-alt"></i><span
                                        class="hidden-tablet"> All Units </span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Size </span><span
                                class="label label-important"> {{\App\Models\Sizes::count()}}</span></a>
                        <ul>
                            <li><a class="submenu" href="{{route('size.create')}}"><i
                                        class="icon-file-alt"></i><span class="hidden-tablet">Add Size </span></a>
                            </li>
                            <li><a class="submenu" href="{{route('size.index')}}"><i class="icon-file-alt"></i><span
                                        class="hidden-tablet"> All Sizes </span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Color </span><span
                                class="label label-important"> {{\App\Models\Color::count()}}</span></a>
                        <ul>
                            <li><a class="submenu" href="{{route('color.create')}}"><i
                                        class="icon-file-alt"></i><span class="hidden-tablet">Add Color </span></a>
                            </li>
                            <li><a class="submenu" href="{{route('color.index')}}"><i class="icon-file-alt"></i><span
                                        class="hidden-tablet"> All Color </span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Product </span><span
                                class="label label-important"> {{\App\Models\Product::count()}}</span></a>
                        <ul>
                            <li><a class="submenu" href="{{route('product.create')}}"><i
                                        class="icon-file-alt"></i><span class="hidden-tablet"> Add Product </span></a>
                            </li>
                            <li><a class="submenu" href="{{route('product.index')}}"><i class="icon-file-alt"></i><span
                                        class="hidden-tablet"> All Products </span></a></li>
                        </ul>
                    </li>

                    <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                    <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a>
                    </li>
                    <li><a href="typography.html"><i class="icon-font"></i><span
                                class="hidden-tablet"> Typography</span></a></li>
                    <li><a href="gallery.html"><i class="icon-picture"></i><span
                                class="hidden-tablet"> Gallery</span></a></li>
                    <li><a href="table.html"><i class="icon-align-justify"></i><span
                                class="hidden-tablet"> Tables</span></a></li>
                    <li><a href="calendar.html"><i class="icon-calendar"></i><span
                                class="hidden-tablet"> Calendar</span></a></li>
                    <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a>
                    </li>
                    <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                    <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span10">


            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Dashboard</a></li>
            </ul>

            @yield('content')

        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a
                href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

    </p>

</footer>

<!-- start: JavaScript-->

<script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>

<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>

<script src="{{asset('admin/js/modernizr.js')}}"></script>

<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.cookie.js')}}"></script>

<script src='{{asset('admin/js/fullcalendar.min.js')}}'></script>

<script src='{{asset('admin/js/jquery.dataTables.min.js')}}'></script>

<script src="{{asset('admin/js/excanvas.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.noty.js')}}"></script>

<script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>

<script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>

<script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>

<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>

<script src="{{asset('admin/js/counter.js')}}"></script>

<script src="{{asset('admin/js/retina.js')}}"></script>

<script src="{{asset('admin/js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<!-- end: JavaScript-->

</body>
</html>
