@extends('admin.admin_master');
@push('css')
    <style>
        .custom {
            padding: 10px;
            margin: 3px;
            border: 1px solid #c4c4c4;
            box-shadow: 1px 1px 3px  #8c8c8c;
        }
        .custom input{
            width: 60px;
        }

        .design {
            padding: 10px;
            box-shadow: 2px 2px 3px #c4c4c4;
        }

        .product_design cleditor {
            margin-top: 40px;
        }

        .row {
            margin-bottom: 20px;
        }
    </style>
@endpush
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
            </div>

            <div class="box-content">

                <form class="form-inline" action="{{route('product.index')}}" method="post">
                    <div class="design">
                        <div class="row">
                        <span class="custom">
                            <label for="category"> Category:</label>
                            <select id="category" name="category">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </span>
                            <span class="custom">
                            <label> Subcategory:</label>
                            <select name="subcategory" class="form-select" id="">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                @endforeach
                            </select>
                        </span>
                            <span class="custom">
                            <label for="brand"> Brand:</label>
                            <select name="brand" class="form-select" id="brand">
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </span>
                        </div>
                        <div class="row">
                        <span class="custom">
                            <label for="unit"> Unit:</label>
                            <select name="unit" class="form-select" id="unit">
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </span>
                            <span class="custom">
                            <label for="size"> Size:</label>
                            <select name="size" class="form-select" id="size" data-role="tagsinput">
                                @foreach($sizes as $size)
                                    <option
                                        value="{{$size->id}}">{{implode(',',json_decode($size->size))}}</option>
                                @endforeach
                            </select>
                        </span>
                            <span class="custom">
                                <label for="color"> Color:</label>
                                <select name="color" class="form-select" id="color">
                                    @foreach($colors as $color)
                                        <option
                                            value="{{$color->id}}">{{implode(',',json_decode($color->color))}}</option>
                                    @endforeach
                                </select>
                        </span>
                        </div>
                        <div class="row product_design">
                            <span class="custom">
                                <label for="name">Product name</label>
                                <input type="text" id="name" class="input-xlarge" name="name" required>
                            </span>
                            <span class="custom">
                                <label for="code">Product Code</label>
                               <input type="text" class="input-xlarge" name="code" id="code" required>
                            </span>
                            <span class="custom">
                                <label for="price">Product Price</label>
                               <input type="text" class="input-xlarge" name="price" id="price" required>
                            </span>
                            <span class="custom">
                                <label for="file">Add Image</label>
                               <input type="file" name="file[]" id="file" multiple required>
                            </span>
                            <span class="custom">
                                <label for="descriptions">Product Description</label><br>
                            </span>
                        </div>
                        <textarea class="cleditor" id="descriptions" name="descriptions" required></textarea>
                            <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Add Product</button>
                            <a href="{{route('admin.dashboard')}}" style="margin-top: 10px;" class="btn btn-danger">Cancel</a>
                    </div>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection
