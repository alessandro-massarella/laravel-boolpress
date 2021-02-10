@extends('layouts.app')

@section('content')

<div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  

<div class="container">
    <h3>Nuovo post</h3>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('post')
        {{-- <input name="_method" type="hidden" value="POST"> --}}
          {{-- AUTORE --}}
        <div class="form-group">
            <label for="author">Autore:</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Autore">
          </div>
          {{-- TITOLO --}}
          <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo">
          </div>
            {{-- TEXT AREA - DESCRIPTION --}}
          <div class="input-group">
            <span class="input-group-text">Descrizione</span>
            <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
          </div>

          {{-- SELECT DROP DOWN--}}
          <select name="category_id" class="form-select" aria-label="Default select example">
            <option selected>Scegli la categoria</option>
            <option value="Cinema">Cinema</option>
            <option value="Letteratura">Letteratura</option>
            <option value="Musica">Musica</option>
          </select>
    

        {{-- BUTTON --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection