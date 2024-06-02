@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Edit Member Information</h1>
        <form method="post" action="{{route('member.update', $member)}}">
            @csrf
            @method('put')
            <table class="table w-lg-50">
                <tr>
                    <th>Name</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$member->name}}" name="name">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Identity Card Number</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$member->ic}}" name="ic">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$member->address}}" name="address">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Contact Information</th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{$member->contact}}" name="contact">
                        </div>
                    </td>
                </tr>
            </table>
            <input class="btn btn-dark" type="submit" value="Update Member Information">
        </form>
    </div>

@endsection
