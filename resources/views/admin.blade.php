@extends('layouts.main')

@section('title', 'Központi adminisztrációs oldal')

@section('content')
    @include('includes.menu')
    <hr>
    <p>Belépési adatok:</p>
    <p>Felhasználónév - {{ Auth::user()->username }}</p>
    <p>Név - {{ Auth::user()->name }}</p>
    <p>Csoportok - {{ $groups }}</p>
    <p>Utolsó bejelentkezés - {{ Auth::user()->last_login }}</p>
@endsection
