@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
       <ul>
           <li>{{ $post->title }}</li>
       </ul>
        
    @endforeach
    
@endsection

