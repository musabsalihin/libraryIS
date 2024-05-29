@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of All Library Members</h1>
        <a href="{{route('member.create')}}">Add New Library Member</a>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Identity Card Number</td>
                <td>Address</td>
                <td>Contact Information</td>
            </tr>
            @foreach($members as $member)
                <tr>
                    <td>{{$member->id}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->ic}}</td>
                    <td>{{$member->address}}</td>
                    <td>{{$member->contact}}</td>
                    <td>
                        <a href="{{route('member.show', $member)}}">Show</a>
                        <a href="{{route('member.edit', $member)}}">Edit</a>
                        <form method="post" action="{{route('member.destroy', $member)}}">
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
