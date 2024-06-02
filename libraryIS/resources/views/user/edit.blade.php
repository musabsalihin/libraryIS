@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Edit Volunteer Information</h1>
        <form method="post" action="{{route('user.update', $user)}}">
            @csrf
            @method('put')
            <table class="table w-lg-50">
                <tr>
                    <th>Name</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$user->name}}" name="name">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$user->email}}" name="email">
                        </div>
                    </td>
                </tr>
            </table>
            <input class="btn btn-dark" type="submit" value="Update Volunteer Information">
        </form>
    </div>

@endsection
