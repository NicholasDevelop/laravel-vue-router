@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
     
        <div class="form-group">
            <label for="title">Titolo*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}" aria-describedby="emailHelp">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">-- nessuna --</option>
                @foreach($categories as $key => $category)
                    <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Contenuto dell'articolo*</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <div class="form-group">
            <label for="published_at">Data di pubblicazione</label>
            <input type="date" class="form-control @error('published_at') is-invalid @enderror" name="published_at" id="published_at" value="{{ old('published_at') }}" aria-describedby="emailHelp">
            @error('published_at')
                <div class="invalid-feedback">{{ $message }}</div>                
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    
    </form>

</div>

@endsection