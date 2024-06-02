@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Book Details</h1>
        <table class="table table-striped w-lg-50">
            <tr>
                <th>Title</th>
                <td>{{ $book->title }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ $book->author }}</td>
            </tr>
            <tr>
                <th>Publisher Name</th>
                <td>{{ $book->publisher }}</td>
            </tr>
            <tr>
                <th>Published Year</th>
                <td>{{ $book->year }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $book->category }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ $book->status }}</td>
            </tr>
        </table>
    </div>
@endsection
