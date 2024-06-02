@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Library Member Details</h1>
        <table class="table table-striped w-50">
            <tr>
                <th>Name</th>
                <td>{{ $member->name }}</td>
            </tr>
            <tr>
                <th>I/C Number</th>
                <td>{{ $member->ic }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $member->address }}</td>
            </tr>
            <tr>
                <th>Contact Information</th>
                <td>{{ $member->contact }}</td>
            </tr>
        </table>

        <h2>Borrowing History</h2>
        <table class="table table-striped w-lg-75">
            <tr>
                <th>Book Name</th>
                <th>Borrowing Date</th>
                <th>Returning Date</th>
                <th class="">Status</th>
            </tr>
            @foreach($member->records as $record)
                <tr>
                    <td>{{$record->book->title}}</td>
                    <td>{{$record->borrow_date}}</td>
                    <td>{{$record->return_date}}</td>
                    <td class="align-content-center">
                        @if($record->return_date == null)
                            <span class="badge bg-warning">Not Yet Returned</span>
                        @else
                            <span class="badge bg-success">Returned</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
