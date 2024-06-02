@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>List of all Books</h1>
        <a class="btn btn-warning" href="{{route('book.create')}}">Add New Book</a>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author Name</th>
                <th>Publisher Name</th>
                <th>Published Year</th>
                <th>Category</th>
                <th>Status</th>
                <th></th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->year}}</td>
                    <td>{{$book->category}}</td>
                    <td>{{$book->status}}</td>
                    <td>
                        <a class="btn btn-primary my-sm-1" href="{{route('book.show', $book)}}">Show</a>
                        <a class="btn btn-dark my-sm-1" href="{{route('book.edit', $book)}}">Edit</a>
                        <button type="button" class="btn btn-danger my-sm-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-book="{{$book}}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        $('#exampleModal').on('show.bs.modal', function (e) {
            let book = $(event.relatedTarget).data('book')
            $(this).find('.modal-body input').val(book);

        })
    </script>

    @if(isset($book))
        <!-- Modal -->
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
                        Are you sure you want to delete this book record?
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="{{route('book.destroy', $book)}}">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel
                            </button>
                            <input type="submit" class="btn bg-gradient-primary" value="Confirm">
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endsection
