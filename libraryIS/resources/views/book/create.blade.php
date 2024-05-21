@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('book.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table">
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Author Name</td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td>Publisher Name</td>
                    <td><input type="text" name="publisher"></td>
                </tr>
                <tr>
                    <td>Published Year</td>
                    <td><input type="text" name="year"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><select name="category">
                            <option>Volunteer</option>
                            <option>Supervisor</option>
                        </select></td>
                </tr>
            </table>
            <input type="submit" value="Add New Book">
        </form>
    </div>
@endsection
