@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of all Records</h1>

        <a href="{{route('record.create')}}">Add New Borrowing Record</a>
        <table class="table">
            <tr>
                <th>Return Book</th>
                <th>ID</th>
                <th>Borrower's Name</th>
                <th>Book's Name</th>
                <th>Borrowing Date</th>
                <th>Returning Date</th>
            </tr>
            @foreach($records as $record)
                <tr>
                    <td>
                        @if($record->return_date == null)
                            <form method="post" action="{{route('record.return', $record)}}">
                                @csrf
                                @method('put')
                                <input type="submit" value="Return">
                            </form>
                        @else
                            Returned
                        @endif

                    </td>
                    <td>{{$record->id}}</td>
                    <td>{{$record->member->name}}</td>
                    <td>{{$record->book->title}}</td>
                    <td>{{$record->borrow_date}}</td>
                    <td>{{$record->return_date}}</td>
                    <td>
                        <a href="{{route('record.show', $record)}}">Show</a>
                        <a href="{{route('record.edit', $record)}}">Edit</a>
                        <form method="post" action="{{route('record.destroy',$record)}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
