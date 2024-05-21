@extends('layouts.app')

@section('content')
    <div>
        <h1>List of all Books</h1>
        <table>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Author Name</td>
                <td>Publisher Name</td>
                <td>Published Year</td>
                <td>Category</td>
                <td>Status</td>
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
                        <a href="{{route('book.show')}}">Show</a>
                        <a href="{{route('book.edit')}}">Edit</a>
                        <form method="post" action="{{route('book.delete')}}">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
