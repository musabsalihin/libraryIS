@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Book Details</h1>
        <table class="table table-striped w-lg-50">
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
