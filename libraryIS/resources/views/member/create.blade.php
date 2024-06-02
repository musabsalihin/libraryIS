@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Register New Member</h1>
        <form action="{{route('member.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table w-lg-50 my-3">
                <tr>
                    <td>Name</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Identity Card Number</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="ic" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="address" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Contact Information</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="contact" required>
                        </div>
                    </td>
                </tr>
            </table>
            <input class="btn btn-dark" type="submit" value="Register New Member">
        </form>
    </div>
@endsection
