@extends('layouts.main')
@section('content')

    <h2 align='center'>All your books</h2>

    <div class="flex-center position-ref">
        <table border='1' frame=void rules=rows>
        <tr>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>DATE</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->releasedate }}</td>
                <td><a href="{{route('delete', ['book' => $book])}}">X</a></td>
            </tr>
        @endforeach
            <tr border='0'>
                <td></td>
                <td></td>
                <td><a href="{{route('create')}}">ADD BOOK</a></td>
            </tr>
        </table>
    </div>

@endsection