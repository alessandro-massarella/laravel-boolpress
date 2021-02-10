@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{ route('posts.create') }}" class="btn btn-secondary">nuovo</a>
        </div>
    </div>
</div>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Autore</th>
            <th scope="col">Titolo post</th>
            <th scope="col">Categoria</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id}}</td>
            <td>{{ $post->author}}</td>
            <td>{{ $post->title}}</td>
            <td>{{ $post->category->title }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection

