@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>List of All Library Members</h1>
        <a class="btn btn-warning" href="{{route('member.create')}}">Add New Library Member</a>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Identity Card Number</th>
                <th>Address</th>
                <th>Contact Information</th>
                <th></th>
            </tr>
            @foreach($members as $member)
                <tr>
                    <td>{{$member->id}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->ic}}</td>
                    <td>{{$member->address}}</td>
                    <td>{{$member->contact}}</td>
                    <td>
                        <a class="btn btn-primary my-sm-1" href="{{route('member.show', $member)}}">Show</a>
                        <a class="btn btn-dark my-sm-1" href="{{route('member.edit', $member)}}">Edit</a>
                        <button type="button" class="btn btn-danger my-sm-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-book="{{$member}}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        $('#exampleModal').on('show.bs.modal', function (e) {
            let member = $(event.relatedTarget).data('member')
            $(this).find('.modal-body input').value(member);

        })
    </script>

    @if(isset($member))

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
                        <form method="post" action="{{route('member.destroy', $member)}}">
                            @csrf
                            @method('delete')

                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel
                            </button>
                            <input type="submit" class="btn bg-gradient-primary" value="Confirm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
