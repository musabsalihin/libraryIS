@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Add New Volunteer</h1>
        <form action="{{route('user.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table w-lg-50">
                <tr>
                    <td>Name</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" name="email" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>
                        <div class="input-group input-group-outline">
                            <select class="form-control" name="role" required>
                                <option value="Volunteer">Volunteer</option>
                                <option value="Supervisor">Supervisor</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
            <input class="btn btn-dark" type="submit" value="Add Account">
        </form>
    </div>
@endsection
