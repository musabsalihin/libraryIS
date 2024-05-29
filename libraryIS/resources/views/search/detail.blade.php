@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($record as $r)

            <table class="table table-striped">
                <tr>
                    <th>Record ID</th>
                    <td>{{$r->id}}</td>
                </tr>
                <tr>
                    <th>Borrower's Name</th>
                    <td>{{$r->member->name}}</td>
                </tr>
                <tr>
                    <th>Book Name</th>
                    <td>{{$r->book->title}}</td>
                </tr>
                <tr>
                    <th>Borrowing Date</th>
                    <td>{{$r->borrow_date}}</td>
                </tr>
            </table>
            <form action="{{route('record.return', $r)}}" method="post">
                @csrf
                @method('put')
                <input type="submit" value="Return Book">
            </form>
        @endforeach
    </div>
@endsection
