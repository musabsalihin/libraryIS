@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('book.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table">
                <tr>
                    <td>Membership ID</td>
                    <td><input type="text" name="member_id"></td>
                </tr>
                <tr>
                    <td>Book ID</td>
                    <td><input type="text" name="book_id"></td>
                </tr>
                <tr>
                    <td>Borrow Date</td>
                    <td><input type="date" name="borrow_date"></td>
                </tr>
                <tr>
                    <td>
                        Issuer
                    </td>
                    <td>
                        <input type="text" name="user_id">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Add New Record">
        </form>
    </div>
@endsection
