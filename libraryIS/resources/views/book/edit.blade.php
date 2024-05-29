@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Book Details</h1>
        <form method="post" action="{{route('book.update', $book)}}">
            @csrf
            @method('put')
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input type="text" value="{{$book->title}}" name="title"></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><input type="text" value="{{$book->author}}" name="author"></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input type="text" value="{{$book->publisher}}" name="publisher"></td>
                </tr>
                <tr>
                    <th>Published Year</th>
                    <td><input type="text" value="{{$book->year}}" name="year"></td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>
                        <select name="category">
                            <option value="{{$book->category}}">{{$book->category}}</option>
                            <option value="Non-Fiction">Non-Fiction</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Biography">Biography</option>
                            <option value="Encyclopedia">Encyclopedia</option>
                            <option value="Journal">Journal</option>
                            <option value="Romance">Romance</option>
                            <option value="Horror">Horror</option>
                            <option value="Thriller">Thriller</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Satire">Satire</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Update Book">
        </form>
    </div>

@endsection
