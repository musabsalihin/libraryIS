@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Book Details</h1>
        <table class="table table-striped w-50">
            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ $user->role }}</td>
            </tr>
        </table>
    </div>
@endsection
