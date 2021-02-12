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
            <th scope="col">Descrizione</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id}}</td>
            <td>{{ $post->author}}</td>
            <td>{{ $post->title}}</td>
            <td>{{ $post->category->title }}</td>
            <td>{{ $post->postsInformation->description}}</td>
            <td><a href="{{ route('posts.edit', $post->id) }}">edit</a> </td>
            <td>
              <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger btn-block" onclick="return confirm('Are you sure to delete?')">       
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection

