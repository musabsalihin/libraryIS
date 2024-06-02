@extends('layouts.admin')

@section('content')
    <div class="">
        <h1>Edit Record Details</h1>
        <form method="post" action="{{route('record.update', $record)}}">
            @csrf
            @method('put')
            <table class="table w-lg-75">
                <tr>
                    <th>Membership ID</th>
                    <td>
                        <div class="input-group input-group-outline w-md-75">
                            <input class="form-control" type="text" id="memberInput" value="{{$record->member_id}}" onchange="member_input()" required>
                            <select class="form-control" id="memberDD" name="member_id" onchange="member_select()" required>
                                <option value="{{$record->member_id}}">{{$record->member->name}}</option>
                                <option value="0">Select a Member or Enter a valid Member ID</option>
                                @foreach($members as $member)
                                    @if($member->id == $record->member_id)
                                        @continue
                                    @endif
                                    <option value="{{$member->id}}">{{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <script>
                            memberInput = document.getElementById('memberInput');
                            memberDD = document.getElementById('memberDD');

                            function member_input() {
                                if (memberInput.value !== "") {
                                    memberDD.setAttribute('disabled', '');
                                    memberDD.value = memberInput.value;
                                }
                                if (memberDD.value === "0" || memberInput.value === "0") {
                                    memberDD.removeAttribute('disabled');
                                    memberDD.value = 0;

                                }
                            }

                            function member_select() {
                                // memberInput.setAttribute('disabled', '');
                                if (memberDD.value !== 0) {
                                    memberInput.value = memberDD.value;
                                    memberInput.setAttribute('disabled', '');
                                }
                                if (memberDD.value === '0' || memberInput.value === '0') {
                                    memberInput.removeAttribute('disabled');
                                }
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th>Book ID</th>
                    <td>
                        <div class="input-group input-group-outline w-md-75">

                            <input class="form-control" type="text" id="bookInput" name="" value="{{$record->book_id}}" onchange="book_input()" required>
                            <select class="form-control" id="bookDD" name="book_id" onchange="book_select()">
                                <option value="{{$record->book_id}}">{{$record->book->title}}</option>
                                <option value="0">Select a Book or Enter a valid Book ID</option>
                                @foreach($books as $book)
                                    @if($book->id == $record->book_id)
                                        @continue
                                    @endif
                                    <option value="{{$book->id}}">{{$book->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <script>
                            bookInput = document.getElementById('bookInput');
                            bookDD = document.getElementById('bookDD');

                            function book_input() {
                                if (bookInput.value !== "" ) {
                                    bookDD.setAttribute('disabled', '');
                                    bookDD.value = bookInput.value;
                                }
                                if (bookDD.value === "0" || bookInput.value === '0') {
                                    bookDD.removeAttribute('disabled');
                                    bookDD.value = 0;

                                }
                            }

                            function book_select() {
                                if (bookDD.value !== 0) {
                                    bookInput.value = bookDD.value;
                                    bookInput.setAttribute('disabled', '');
                                }
                                if (bookDD.value === '0') {
                                    bookInput.removeAttribute('disabled');
                                }
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th>Borrow Date</th>
                    <td>
                        <div class="input-group input-group-outline w-md-75">
                            <input class="form-control" type="date" name="borrow_date" value="{{$record->borrow_date}}" required>
                        </div>
                    </td>
                </tr>
            </table>
            <input class="btn btn-dark" type="submit" value="Update Borrowing Record">
        </form>
    </div>

@endsection
