@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Modifica post</h3>
    <form action="{{ route('posts.update', $post['id']) }}" method="POST">
        @csrf
        @method('put')
        {{-- <input name="_method" type="hidden" value="POST"> --}}
          {{-- AUTORE --}}
        <div class="form-group">
            <label for="author">Autore:</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Autore" value="{{ $post->author }}">
          </div>
          {{-- TITOLO --}}
          <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo" value="{{ $post->title }}">
          </div>
            {{-- TEXT AREA - DESCRIPTION --}}
          <div class="input-group">
            <span class="input-group-text">Descrizione</span>
            <textarea class="form-control" name="description" aria-label="With textarea">{{$post->postsInformation->description}}</textarea>
            <input type="text" name="description" class="form-control" id="description" placeholder="Descrizione">

          </div>

          {{-- SELECT DROP DOWN--}}
          <select name="category_id" class="form-select" aria-label="Default select example" value="{{ $post->category->title}}">
            <option selected>Scegli la categoria</option>
            <option value="Cinema">Cinema</option>
            <option value="Letteratura">Letteratura</option>
            <option value="Musica">Musica</option>
          </select>
    

        {{-- BUTTON --}}
        <button type="submit" class="btn btn-primary">modifica</button>
      </form>

    
@endsection