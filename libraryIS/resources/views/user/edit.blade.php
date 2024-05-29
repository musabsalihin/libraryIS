@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Volunteer Information</h1>
        <form method="post" action="{{route('user.update', $user)}}">
            @csrf
            @method('put')
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td><input type="text" value="{{$user->name}}" name="name"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="text" value="{{$user->email}}" name="email"></td>
                </tr>
            </table>
            <input type="submit" value="Update Volunteer Information">
        </form>
    </div>

@endsection
