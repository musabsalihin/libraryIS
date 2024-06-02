@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Add New Book Record</h1>
        <form action="{{route('book.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table w-lg-50">
                <tr>
                    <td>Title</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="title">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Author Name</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="author">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Publisher Name</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="publisher">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Published Year</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="year">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <select class="form-control" name="category">
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
            <input class="btn btn-dark" type="submit" value="Add New Book">
        </form>
    </div>
@endsection
