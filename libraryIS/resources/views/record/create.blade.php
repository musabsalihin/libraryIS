@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Add Borrowing Record</h1>
        <form id="createRec" action="{{route('record.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table w-lg-75">
                <tr>
                    <th>Membership ID</th>
                    <td>
                        <div class="input-group input-group-outline w-md-75">
                            <input class="form-control" type="text" id="memberInput" onchange="member_input()" required>
                            <select class="form-control" id="memberDD" name="member_id" onchange="member_select()"
                                    required>
                                <option value="0">Select a Member or Enter a valid Member ID</option>
                                @foreach($members as $member)
                                    <option value="{{$member->id}}">{{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <script>
                            memberInput = document.getElementById('memberInput');
                            memberDD = document.getElementById('memberDD');

                            function member_input() {
                                if (memberInput.value !== "") {
                                    memberDD.setAttribute('readonly', '');
                                    memberDD.value = memberInput.value;
                                    if (memberDD.value === "0" || memberDD.value === "" || memberInput.value === "0") {
                                        memberDD.removeAttribute('readonly');
                                        memberDD.value = 0;

                                    }
                                }
                            }

                            function member_select() {
                                // memberInput.setAttribute('disabled', '');
                                if (memberDD.value !== 0) {
                                    memberInput.value = memberDD.value;
                                    memberInput.setAttribute('readonly', '');
                                }
                                if (memberDD.value === '0' || memberInput.value === '0') {
                                    memberInput.removeAttribute('readonly');
                                }
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th>Book ID</th>
                    <td>
                        <div class="input-group input-group-outline w-md-75">

                            <input class="form-control" type="text" id="bookInput" name="" onchange="book_input()"
                                   required>
                            <select class="form-control" id="bookDD" name="book_id" onchange="book_select()">
                                <option value="0">Select a Book or Enter a valid Book ID</option>
                                @foreach($books as $book)
                                    <option value="{{$book->id}}">{{$book->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <script>
                            bookInput = document.getElementById('bookInput');
                            bookDD = document.getElementById('bookDD');

                            function book_input() {
                                if (bookInput.value !== "") {
                                    bookDD.setAttribute('readonly', '');
                                    bookDD.value = bookInput.value;
                                    if (bookDD.value === "0" || bookDD.value === "" || bookInput.value === '0') {
                                        bookDD.removeAttribute('readonly');
                                        bookDD.value = 0;
                                    }
                                }
                            }

                            function book_select() {
                                if (bookDD.value !== 0) {
                                    bookInput.value = bookDD.value;
                                    bookInput.setAttribute('readonly', '');
                                }
                                if (bookDD.value === '0') {
                                    bookInput.removeAttribute('readonly');
                                }
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th>Borrow Date</th>
                    <td>
                        <div class="input-group input-group-outline w-md-75">
                            <input class="form-control" type="date" min="{{date('Y-m-d')}}" name="borrow_date" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        Issuer
                    </th>
                    <td>
                        <p>{{ Auth::user()->name }}</p>
                        <input class="invisible" type="text" name="user_id" value="{{ Auth::user()->id }}">
                    </td>
                </tr>
            </table>
            <input class="btn btn-dark" type="submit" value="Add New Record">
            <p id="error" class="text-danger bold"></p>
        </form>
        <script>
            form = document.getElementById('createRec');
            error = document.getElementById('error');

            form.addEventListener('submit', function (e) {
                if (memberDD.value === "" || memberDD.value === "0" || bookDD.value === "" || bookDD.value === "0") {
                    e.preventDefault();
                    error.innerHTML = "Please select valid and existing Book ID and Member ID";
                }
            })
        </script>
    </div>
@endsection
