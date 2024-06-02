@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Book Details</h1>
        <table class="table table-striped w-lg-75">
            <tr>
                <th>Borrower's Name</th>
                <td>{{ $record->member->name }}</td>
            </tr>
            <tr>
                <th>Book's Name</th>
                <td>{{ $record->book->title }}</td>
            </tr>
            <tr>
                <th>Borrowing Date</th>
                <td>{{ $record->borrow_date }}</td>
            </tr>
            <tr>
                <th>Returning Date</th>
                <td>{{ $record->return_date }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $record->book->status }}</td>
            </tr>
        </table>
    </div>
@endsection
