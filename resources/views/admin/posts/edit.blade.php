@extends('layouts.app')

@section('content')
<h2>Modifica post: {{ $post->title }}</h2>

<div class="container">

    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
     
        <div class="form-group">
            <label for="title">Titolo*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') ? : $post->title }}" aria-describedby="emailHelp">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Contenuto dell'articolo*</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ old('content') ? : $post->content }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <div class="form-group">
            <label for="published_at">Data di pubblicazione</label>
            <input type="date" class="form-control @error('published_at') is-invalid @enderror" name="published_at" id="published_at" value="{{ old('published_at') ? : Str::substr($post->published_at, 0, 10) }}" aria-describedby="emailHelp">
            @error('published_at')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    
    </form>

</div>

@endsection