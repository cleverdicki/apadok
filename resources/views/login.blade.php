@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('main')
<div class="login-container">
    <div class="form-container">
        <div class="ui two column grid">
            <div class="column left-column">
                <img src="{{ asset('images/doctVectLogin.png') }}" alt="doctorVectLogin" srcset="">
            </div>
            <div class="column right-column">
                <h1>Masuk</h1>
                <form class="ui large form">
                    <div class="field">
                        <p>Username</p>
                        <input type="text" name="email" placeholder="E-mail address">
                    </div>
                    <div class="field">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <button class="ui fluid large orange submit button" type="submit">Lanjutkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection