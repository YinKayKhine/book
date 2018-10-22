@extends("admin.layouts.admin_template")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="card-header">Create Author</div>
                <div class="card-body">
                    <form method="post" action="{{ route('authors.store') }}" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Author Name</label>

                            @if($errors->has("name"))
                                <input name="name" type="text" class="form-control is-invalid" id="name" aria-describedby="textHelp" value="{{ old('name') }}">
                                <div class="invalid-feedback">
                                {{ $errors->first("name") }}
                                </div>
                            @else
                                <input name="name" type="text" class="form-control" id="name" aria-describedby="textHelp" value="{{ old('name') }}">

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

