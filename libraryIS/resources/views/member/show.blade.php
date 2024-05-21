@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Library Member Details</h1>
        <table class="table table-striped w-50">
            <tr>
                <th>Name</th>
                <td>{{ $member->name }}</td>
            </tr>
            <tr>
                <th>I/C Number</th>
                <td>{{ $member->ic }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $member->address }}</td>
            </tr>
            <tr>
                <th>Contact Information</th>
                <td>{{ $member->contact }}</td>
            </tr>
        </table>
    </div>
@endsection
