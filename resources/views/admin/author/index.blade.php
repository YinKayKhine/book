@extends("admin.layouts.admin_template")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>List Authors</h1>
            <br>
            <a href="{{ route('authors.create') }}" class="btn btn-primary btn-lg">Create Author</a>
            <hr>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Author Name</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td><a class="btn btn-primary" href="{{ route("authors.edit", $author->id) }}">Edit</a></td>
                        <td><form action="{{ route("authors.destroy", $author->id) }}"
                            method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $authors->links() }} <!-- pagination -->
        </div>
    </div>
</div>
@endsection