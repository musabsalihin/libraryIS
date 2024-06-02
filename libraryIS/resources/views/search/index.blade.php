@extends('layouts.admin')

@section('content')
    <div class="mx-auto">
        <h1 class="mx-auto text-center">Search Record</h1>
        <form class="mx-auto my-5" method="get" action="{{route('search.record')}}">
            @csrf
            @method('get')
            <div class="input-group input-group-outline w-lg-75 mx-auto">
                <input class="form-control form-control-lg h-100" type="text" name="keyword"
                       placeholder="Write Book ID or Member's IC Number here" required>
                <input class="btn btn-outline-secondary border-top-end-radius-0" type="submit" name="search"
                       value="Search by Book ID">
                <input class="btn btn-outline-dark" type="submit" name="search" value="Search by IC Number">
            </div>
            <div class="input-group my-2 mx-auto">
            </div>
            <div class="input-group my-2 mx-auto">
            </div>
        </form>
    </div>
@endsection
