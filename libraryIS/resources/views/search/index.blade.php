@extends('layouts.admin')

@section('content')
    <div class="mx-auto">
        <h1 class="mx-auto text-center">Search Record</h1>
        <form class="mx-auto my-5" method="get" action="{{route('search.record')}}">
            @csrf
            @method('get')
            <div class="input-group input-group-outline w-lg-75 mx-auto">
                <input id="search" class="form-control form-control-lg h-100" type="text" name="keyword"
                       placeholder="Write Book ID or Member's IC Number here" required>
                <input class="btn btn-outline-secondary border-top-end-radius-0" type="submit" name="search"
                       value="Search by Book ID">
                <input class="btn btn-outline-dark" type="submit" name="search" id="ic" value="Search by IC Number">
            </div>
            <p id="error" class=" w-full text-center text-danger text-bold"></p>
        </form>
        <script>
            button = document.getElementById('ic')
            search = document.getElementById('search')
            error = document.getElementById('error')
            button.addEventListener('click', function (e) {
                if (search.value.length < 12) {
                    e.preventDefault()
                    error.innerText = "Please enter a valid IC number eg:(XXXXXXXXXXXX)"
                }
            })
        </script>
    </div>
@endsection
