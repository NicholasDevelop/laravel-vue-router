@extends('layouts.app')

@section('content')

<table>
    <th>Titolo</th>
    @foreach($posts as $key => $post)
        <tr>
            <td>{{$post->title}}</td>
        </tr>
    @endforeach
</table>

@endsection