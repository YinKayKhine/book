@extends('admin.layouts.admin_template')

@section('content')
<div class='row justify-content-center'>
    <div class='col-md-12'>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New Category Form</h3>
            </div>
            <div class="box-body">
                <form method="post" action="{{ route('category.store') }}" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        @if($errors->has("category_name"))
                            <input name="category_name" type="text" class="form-control is-invalid" id="category_name" aria-describedby="textHelp" placeholder="Category Name" value="{{ old('category_name') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first("category_name") }}
                            </div>
                        @else
                            <input name="category_name" type="text" class="form-control" id="category_name" aria-describedby="textHelp" placeholder="Category Name" value="{{ old('category_name') }}">
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
@endsection
