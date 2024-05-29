@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Record Details</h1>
        <form method="post" action="{{route('record.update', $record)}}">
            @csrf
            @method('put')
            <table class="table">
                <tr>
                    <th>Borrower's Name</th>
                    <td>
                        <div>
                            <input type="text" value="{{$record->member_id}}" name="member_id">
                            <p>{{$record->member->name}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Book Name</th>
                    <td>
                        <div>
                            <input type="text" value="{{$record->book_id}}" name="book_id">
                            <p>{{$record->book->title}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Borrowing Date</th>
                    <td><input type="date" value="{{$record->borrow_date}}" name="borrow_date"></td>
                </tr>
            </table>
            <input type="submit" value="Update Borrowing Record">
        </form>
    </div>

@endsection
