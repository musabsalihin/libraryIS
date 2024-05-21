@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('member.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Identity Card Number</td>
                    <td><input type="text" name="ic"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Contact Information</td>
                    <td><input type="text" name="contact"></td>
                </tr>
            </table>
            <input type="submit" value="Register New Member">
        </form>
    </div>
@endsection
