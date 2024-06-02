@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Search Result</h1>
        @foreach($record as $r)

            <table class="table table-striped w-lg-50">
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
                <input class="btn btn-dark" type="submit" value="Return Book">
            </form>
        @endforeach
    </div>
@endsection
