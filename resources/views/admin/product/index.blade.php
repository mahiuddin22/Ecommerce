@extends('admin.admin_master')
@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Success!</strong> {{Session::get('message')}}
        </div>
    @endif

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 5%;">Code</th>
                        <th style="width: 9%;">Name</th>
                        <th style="width: 16%;">Description</th>
                        <th style="width: 8%;">Price</th>
                        <th style="width: 20%;">Image</th>
                        <th style="width: 5%;">Category</th>
                        <th style="width: 5%;">Subcategory</th>
                        <th style="width: 5%;">Brand</th>
                        <th style="width: 5%;">Status</th>
                        <th style="width: 28%;">Actions</th>
                    </tr>
                    </thead>
                    @foreach($products as $key=>$product)
                        @php
                            $product['image']= explode('|', $product->image);
                        @endphp
                        <tr style="box-shadow: 2px 2px 2px #CCCCCC;">
                            <td style="border-bottom: 1px solid #c4c4c4;">{{$key+1}}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;">{{$product->code}}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;">{{$product->name}}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;"
                                class="center">{!! $product->descriptions !!}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;">&#2547; {{$product->price}}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;" class="center">
                                @foreach($product->image as $images)
                                    <img src="{{asset('image/'.$images)}}" alt="default.png"
                                         style="height: 70px; width: 70px; border-radius: 5px; box-shadow: 2px 3px 4px #8c8c8c">
                                @endforeach
                            </td>
                            <td style="border-bottom: 1px solid #c4c4c4;">{{$product->category->name}}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;">{{$product->subcat->name}}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;">{{$product->brand->name}}</td>
                            <td style="border-bottom: 1px solid #c4c4c4;" class="center">
                                @if($product->status == 1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-important">Inactive</span>
                                @endif
                            </td>
                            <td style="border-bottom: 1px solid #c4c4c4;" class="center">
                                @if($product->status == 1)
                                    <a class="btn btn-danger" href="{{route('product.status',$product->id)}}">
                                        <i class="halflings-icon white eye-close"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" href="{{route('product.status',$product->id)}}">
                                        <i class="halflings-icon white eye-open"></i>
                                    </a>
                                @endif
                                <a class="btn btn-info" href="{{route('product.edit',$product->id)}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <form action="{{route('product.destroy',$product->id)}}" method="post"
                                      style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        <i class="halflings-icon white trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection
