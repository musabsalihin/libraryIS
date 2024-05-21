@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('user.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><select name="role">
                            <option>Volunteer</option>
                            <option>Supervisor</option>
                        </select></td>
                </tr>
            </table>
            <input type="submit" value="Add Account">
        </form>
    </div>
@endsection
