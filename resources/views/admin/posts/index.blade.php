@extends('layouts.app')

@section('content')

<div class="container my-4">
    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Nuovo Post</a>
</div>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Data Pubblicazione</th>
            <th scope="col">Data Creazione</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $key => $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->category ? $post->category->name : '-' }}</td>
                <td>{{ $post->published_at }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <a class="btn btn-small btn-warning" href="{{ route('admin.posts.edit', $post) }}">Edit</a>  
                </td>
                <td>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare {{$post->title}}?')">Elimina</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection