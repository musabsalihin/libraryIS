@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Edit Book Details</h1>
        <form method="post" action="{{route('book.update', $book)}}">
            @csrf
            @method('put')
            <table class="table w-lg-50">
                <tr>
                    <th>Title</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$book->title}}" name="title">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$book->author}}" name="author">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$book->publisher}}" name="publisher">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Published Year</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$book->year}}" name="year">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <select class="form-control" name="category">
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
                        </div>
                    </td>
                </tr>
            </table>
            <input class="btn btn-dark" type="submit" value="Update Book">
        </form>
    </div>

@endsection
