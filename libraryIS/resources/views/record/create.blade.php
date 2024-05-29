@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Borrowing Record</h1>
        <form action="{{route('record.store')}}" method="post">
            @csrf
            @method('post')
            <table class="table">
                <tr>
                    <th>Membership ID</th>
                    <td>
                        <input type="text" id="memberInput" onchange="member_input()" required>
                        <select id="memberDD" name="member_id" onchange="member_select()" required>
                            <option value="0">Select a Member or Enter a valid Member ID</option>
                            @foreach($members as $member)
                                <option value="{{$member->id}}">{{$member->name}}</option>
                            @endforeach
                        </select>
                        <script>
                            memberInput = document.getElementById('memberInput');
                            memberDD = document.getElementById('memberDD');

                            function member_input() {
                                if (memberInput.value !== "") {
                                    memberDD.setAttribute('disabled', '');
                                    memberDD.value = memberInput.value;
                                    if (memberDD.value === "" || memberInput.value === "") {
                                        memberDD.removeAttribute('disabled');
                                        memberDD.value = 0;
                                    }

                                }
                            }

                            function member_select() {
                                memberInput.setAttribute('disabled', '');
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th>Book ID</th>
                    <td>
                        <input type="text" id="bookInput" name="book_id" onchange="book_input()" required>
                        <select id="bookDD" name="book_id" onchange="book_select()">
                            <option value="0">Select a Book or Enter a valid Book ID</option>
                            @foreach($books as $book)
                                <option value="{{$book->id}}">{{$book->title}}</option>
                            @endforeach
                        </select>
                        <script>
                            bookInput = document.getElementById('bookInput');
                            bookDD = document.getElementById('bookDD');

                            function book_input() {
                                if (bookInput.value !== "") {
                                    bookDD.setAttribute('disabled', '');
                                    bookDD.value = bookInput.value;
                                    if (bookDD.value === "") {
                                        bookDD.removeAttribute('disabled');
                                        bookDD.value = 0;
                                    }

                                }
                            }

                            function book_select() {
                                if (bookDD.value !== "") {
                                    bookInput.setAttribute('disabled', '');
                                }
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th>Borrow Date</th>
                    <td><input type="date" name="borrow_date" required></td>
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
            <input type="submit" value="Add New Record">
        </form>
    </div>
@endsection
