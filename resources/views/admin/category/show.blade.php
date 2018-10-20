@extends('admin.layouts.admin_template')

@section('content')
<div class='row'>
    <div class='col-md-12'>
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    <label for="category-name" class="col-sm-2 control-label">Name</label> 
                        <div class="col-sm-10">
                          <input name="category_name" type="text" class="form-control" id="category_name" aria-describedby="textHelp" placeholder="Category Name" value="{{ $category->category_name }}" readonly="readonly">
                        </div>
                </div>
             </div>
        </div>
     </div>
</div>
@endsection