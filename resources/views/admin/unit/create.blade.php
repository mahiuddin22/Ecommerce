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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>New Unit</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('unit.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Unit Name</label>
                            <div class="controls" style="border: 1px solid #c4c4c4; padding: 5px; width: 490px;">
                                <input type="text" class="input-xlarge" name="name" required>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="descriptions" rows="3" required></textarea>
                            </div>

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Unit</button>
                            <a href="{{route('unit.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->
@endsection
