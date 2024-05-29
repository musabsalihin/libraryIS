@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Member Information</h1>
        <form method="post" action="{{route('member.update', $member)}}">
            @csrf
            @method('put')
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td><input type="text" value="{{$member->name}}" name="name"></td>
                </tr>
                <tr>
                    <th>Identity Card Number</th>
                    <td><input type="text" value="{{$member->ic}}" name="ic"></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input type="text" value="{{$member->address}}" name="address"></td>
                </tr>
                <tr>
                    <th>Contact Information</th>
                    <td><input type="text" value="{{$member->contact}}" name="contact"></td>
                </tr>
            </table>
            <input type="submit" value="Update Member Information">
        </form>
    </div>

@endsection
