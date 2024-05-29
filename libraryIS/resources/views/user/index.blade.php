@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Volunteers</h1>
        <a href="{{route('user.create')}}">Add New Volunteer</a>
        <table class="table">
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
                    <a href="{{route('user.show', $user)}}">Show</a>
                    <a href="{{route('user.edit', $user)}}">Edit</a>
                    <form method="post" action="{{route('user.destroy', $user)}}">
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
