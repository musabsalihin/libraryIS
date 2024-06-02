@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h4 class="text-white text-capitalize ps-3">User Profile</h4>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>
                        Name
                    </th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{Auth::user()->name}}" disabled>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        Email
                    </th>
                    <td>
                        <div class="input-group input-group-outline">
                            <input class="form-control" type="text" value="{{Auth::user()->email}}" disabled>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        Password
                    </th>
                    <td>
                        <button id="btn-chg" class="btn btn-dark" onclick="change()">Change Password</button>
                        <form class="my-2 d-none" id="chgPassword" action="{{route('user.password', Auth::user())}}" method="post">
                            @csrf
                            @method('put')
                            <div class="input-group input-group-outline my-2">
                                <input class="form-control" type="password" name="password" id="password" required>
                            </div>
                            <div class="input-group input-group-outline my-2">
                                <input class="form-control" type="password" name="repPassword" id="repPassword" required>
                            </div>
                            <p id="error" class="text-danger"></p>
                            <button class="btn btn-outline-dark" type="button" onclick="cancel()">Cancel</button>
                            <input class="btn btn-dark" type="submit" value="Change Password">
                        </form>
                        <script>
                            let btn = document.getElementById('btn-chg');
                            let form = document.getElementById('chgPassword');
                            let pwd = document.getElementById('password');
                            let repPwd = document.getElementById('repPassword');
                            let error = document.getElementById('error');
                            function change(){
                                btn.classList.add('d-none');
                                form.classList.remove('d-none');
                            }
                            function cancel(){
                                form.classList.add('d-none');
                                btn.classList.remove('d-none');
                            }
                            form.addEventListener('submit', function(e){
                                if( pwd.value !== repPwd.value ){
                                    e.preventDefault()
                                    error.innerText = "Your password does not match"
                                }
                            });
                        </script>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
