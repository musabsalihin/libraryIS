@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>List of all Records</h1>

        <a class="btn btn-warning" href="{{route('record.create')}}">Add New Borrowing Record</a>
        <table class="table table-hover">
            <tr>
                <th class="text-center">Return Book</th>
                <th>ID</th>
                <th>Borrower's Name</th>
                <th>Book's Name</th>
                <th>Borrowing Date</th>
                <th>Returning Date</th>
                <th></th>
            </tr>
            @foreach($records as $record)
                <tr>
                    <td class="text-center align-content-center">
                        @if($record->return_date == null)
                            <form method="post" action="{{route('record.return', $record)}}">
                                @csrf
                                @method('put')
                                <input class="btn btn-info" type="submit" value="Return">
                            </form>
                        @else
                            <span class="badge bg-success">Returned</span>
                        @endif

                    </td>
                    <td>{{$record->id}}</td>
                    <td>{{$record->member->name}}</td>
                    <td>{{$record->book->title}}</td>
                    <td>{{$record->borrow_date}}</td>
                    <td>{{$record->return_date}}</td>
                    <td>
                        <a class="btn btn-primary my-sm-1" href="{{route('record.show', $record)}}">Show</a>
                        <a class="btn btn-dark my-sm-1" href="{{route('record.edit', $record)}}">Edit</a>
                        <button type="button" class="btn btn-danger my-sm-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-record="{{$record}}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        $('#exampleModal').on('show.bs.modal', function (e) {
            let record = $(event.relatedTarget).data('record')
            $(this).find('.modal-body input').val(record);

        })
    </script>
    <!-- Modal -->
    @if(isset($record))

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
{{--                        <span aria-hidden="true">&times;</span>--}}
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this record record?
                </div>
                <div class="modal-footer">
                    <form method="post" action="{{route('record.destroy', $record)}}">
                        @csrf
                        @method('delete')
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn bg-gradient-primary" value="Confirm">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
