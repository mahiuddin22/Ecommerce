@extends('admin.admin_master');

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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>New Brand</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('brand.update', $brand->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Brand Name</label>
                            <div class="controls" style="border: 1px solid #c4c4c4; padding: 5px; width: 490px;">
                                <input type="text" class="input-xlarge" name="name" value="{{$brand->name}}" required>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="descriptions" rows="3" required>{{$brand->descriptions}}</textarea>
                            </div>

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Brand</button>
                            <a href="{{route('brand.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->
@endsection
