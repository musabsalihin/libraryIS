@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of all Records</h1>

        <a href="{{route('record.create')}}">Add New Borrowing Record</a>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Borrower's Name</td>
                <td>Book's Name</td>
                <td>Borrowing Date</td>
                <td>Returning Date</td>
            </tr>
            @foreach($records as $record)
                <tr>
                    <td>{{$record->id}}</td>
                    <td>{{$record->member->name}}</td>
                    <td>{{$record->book->title}}</td>
                    <td>{{$record->borrow_date}}</td>
                    <td>{{$record->return_date}}</td>
                    <td>
                        <a href="{{route('record.show', $record)}}">Show</a>
                        <a href="{{route('record.edit', $record)}}">Edit</a>
                        <form method="post" action="{{route('record.destroy',$record)}}">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
