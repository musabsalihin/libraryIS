@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Borrowing Record</h1>
        <form action="{{route('record.store')}}" method="post">
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
                        <p>{{ Auth::user()->name }}</p>
                        <input class="invisible" type="text" name="user_id" value="{{ Auth::user()->id }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Add New Record">
        </form>
    </div>
@endsection
