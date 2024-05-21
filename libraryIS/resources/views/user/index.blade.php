@extends('layouts.app')

@section('content')
    <div>
        <h1>List of all users</h1>
        <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
                <td>Action</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a href="{{route('user.show')}}">Show</a>
                    <a href="{{route('user.edit')}}">Edit</a>
                    <form method="post" action="{{route('user.delete')}}">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
