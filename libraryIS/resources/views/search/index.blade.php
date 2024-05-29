@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <form method="get" action="{{route('search.record')}}">
            @csrf
            @method('get')
            <input type="text" name="keyword" placeholder="Write Book ID or Member's IC Number here" required>
            <input type="submit" name="search" value="Search by Book ID"><input type="submit" name="search" value="Search by IC Number">
        </form>
    </div>
@endsection
