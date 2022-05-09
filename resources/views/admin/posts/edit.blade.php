@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Modifica post: {{ $post->title }}</h3>
</div>

<div class="container">

    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
     
        <div class="form-group">
            <label for="title">Titolo*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title',$post->title) }}" aria-describedby="emailHelp">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">-- nessuna --</option>
                @foreach($categories as $key => $category)
                    <option {{ old('category_id', optional( $post->category)->id ) == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <label>Tags:</label>
        <div class="d-flex" style="gap: 1rem;">
            @foreach($tags as $key => $tag)
                <div class="form-group form-check">
                    <input type="checkbox" {{ $post->tags->contains( $tag ) ? 'checked' : '' }} class="form-check-input" value="{{ $tag->id }}" name="tags[{{ $key }}]" id="tags-{{ $tag->id }}">
                    <label class="form-check-label" for="tags-{{ $tag->id }}">{{ $tag->name }}</label>
                    
                    @error('tags.{{$index}}')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            @endforeach
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