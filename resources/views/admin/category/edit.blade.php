@extends('admin.layouts.admin_template')

@section('content')
<div class='row justify-content-center'>
    <div class='col-md-8'>
        <div class="box box-primary">
            <div class="card-body">
                <form method="post" action="{{ route('category.update', $category->id) }}">
                    {{ method_field("put") }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Category Name</label>
                            @if($errors->has("name"))
                                <input name="category_name" type="text" class="form-control is-invalid" id="category_name" aria-describedby="textHelp" placeholder="Category Name" value="{{ old('category_name') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first("category_name") }}
                                </div>
                            @else
                                <input name="category_name" type="text" class="form-control" id="category_name" aria-describedby="textHelp" placeholder="Category Name" value="{{ $category->category_name }}">
                            @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form> 
            </div>
        </div>
     </div>
</div>
@endsection