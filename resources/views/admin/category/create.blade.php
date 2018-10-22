@extends("admin.layouts.admin_template")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="card-header">Create Category</div>
                <div class="card-body">
                    <form method="post" action="{{ route('category.store') }}" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Category Name</label>

                            @if($errors->has("category_name"))
                                <input name="category_name" type="text" class="form-control is-invalid" id="category_name" aria-describedby="textHelp" value="{{ old('category_name') }}">
                                <div class="invalid-feedback">
                                {{ $errors->first("category_name") }}
                                </div>
                            @else
                                <input name="category_name" type="text" class="form-control" id="category_name" aria-describedby="textHelp" value="{{ old('category_name') }}">

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
</div>
@endsection

