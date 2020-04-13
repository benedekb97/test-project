@extends('layouts.main')

@section('title', 'Bejelentkezés')

@section('content')
    @if(isset($error))
        <div class="error">
            {{ $error }}
        </div>
    @endif
    <form action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="username" placeholder="Felhasználónév">
        <input type="password" name="password" placeholder="Jelszó">
        @if(isset($captcha) && $captcha == true)
            <p> {!! captcha_img() !!} </p>
            <p><input type="text" name="captcha"></p>
        @endif
        <input type="submit" value="Bejelentkezés">
    </form>

@endsection
