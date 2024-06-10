@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h4 class="text-white text-capitalize ps-3">List of Volunteers</h4>
            </div>
        </div>
        <div class="card-body">
            <a class="btn btn-warning" href="{{route('user.create')}}">Add New Volunteer</a>
            <table class="table table-hover">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Action</td>
                </tr>
                <?php
                $i=0;
                ?>
                @foreach($users as $user)
                    @if($user->role === 'Supervisor')
                        @continue
                    @endif
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>
                            <a class="btn btn-primary my-sm-1" href="{{route('user.show', $user)}}">Show</a>
                            <a class="btn btn-dark my-sm-1" href="{{route('user.edit', $user)}}">Edit</a>
                            <button type="button" class="btn btn-danger my-sm-1" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-record="{{$user}}">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        $('#exampleModal').on('show.bs.modal', function (e) {
            let user = $(event.relatedTarget).data('user')
            $(this).find('.modal-body input').val(user);

        })
    </script>
    @if(isset($user))
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
                        Are you sure you want to delete this record record?
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="{{route('user.destroy', $user)}}">
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
