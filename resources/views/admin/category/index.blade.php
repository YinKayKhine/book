@extends('admin.layouts.admin_template')

@section('content')

<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h3>List Category</h3>
        <a href="{{route('category.create')}}" class="btn btn-primary">Add New Category</a>
    </div>
    <div class="col-md-12">
        <hr>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->category_name }}</td>
                        <td><a class="btn btn-primary" href="{{ route("category.edit", $category->id) }}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/category/delete/{{$category->id}}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection