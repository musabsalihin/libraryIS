@extends('layouts.app')

@section('content')
    <div>
        <h1>List of all records</h1>
        <table>
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
                    <td>{{$record->user->name}}</td>
                    <td>{{$record->book->name}}</td>
                    <td>{{$record->borrow_date}}</td>
                    <td>{{$record->return_date}}</td>
                    <td>
                        <a href="{{route('record.show')}}">Show</a>
                        <a href="{{route('record.edit')}}">Edit</a>
                        <form method="post" action="{{route('record.delete')}}">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
