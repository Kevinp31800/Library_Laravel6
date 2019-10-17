@extends('layouts.main')
@section('content')


    <h2 align='center'>Add a book</h2>


    <div class="flex-center position-column">

        <form action="/books" method="post">
            {{ csrf_field() }}
            <input type="text" name="title" id="add" placeholder="Title">
            <input type="text" name="author" id="add" placeholder="Author">
            <input type="text" name="releasedate" id="add" placeholder="ReleaseDate">
            <input type="submit" value="Add new book">
        </form>
    </div>
            <p align='center'><a href="{{route('index')}}">VIEW BOOKS</a></p>


@endsection