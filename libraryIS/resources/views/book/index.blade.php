@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of all Books</h1>
        <a href="{{route('book.create')}}">Add New Book</a>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Author Name</td>
                <td>Publisher Name</td>
                <td>Published Year</td>
                <td>Category</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->year}}</td>
                    <td>{{$book->category}}</td>
                    <td>{{$book->status}}</td>
                    <td>
                        <a href="{{route('book.show', $book)}}">Show</a>
                        <a href="{{route('book.edit', $book)}}">Edit</a>
                        <form method="post" action="{{route('book.destroy', $book)}}">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
