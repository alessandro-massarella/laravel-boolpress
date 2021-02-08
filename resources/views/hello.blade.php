@extends('layouts.app')


@if (Auth::check() )
    @section('content')
    <div class="container">
        <h3>Ciao {{ $user->name }}</h3>
    </div>
    @endsection
@else 
    @section('content')
    <div class="container">
        <h3>Ciao utente</h3>
    </div>
    @endsection
@endif






