@extends('admin.layouts.admin_template')

@section('content')
<div class="container">
    <div class='row justify-content-center'>
        <div class='col-md-8'>
            <div class="box box-primary">
                <div class="card-header">Edit Author</div>
                <div class="card-body">
                    <form method="post" action="{{ route('authors.update', $author->id) }}">
                        {{ method_field("put") }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Author Name</label>
                                @if($errors->has("name"))
                                    <input name="name" type="text" class="form-control is-invalid" id="name" aria-describedby="textHelp" placeholder="Author Name" value="{{ old('name') }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first("name") }}
                                    </div>
                                @else
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="textHelp" placeholder="Author Name" value="{{ $author->name }}">
                                @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form> 
                </div>
            </div>
         </div>
    </div>
</div>
@endsection