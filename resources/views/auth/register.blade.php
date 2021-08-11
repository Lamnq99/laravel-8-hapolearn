@extends('layouts.app')
<div id="register" class="container tab-pane">
    <form class="form-register" action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="label-username" for="name">User Name: </label>
            <input class="txt-username @error('name') is-invalid @enderror" id="name" name="name" type="text" required autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label class="label-email" for="email">Email: </label>
            <input class="txt-email @error('email') is-invalid @enderror" id="email" name="email" type="email" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label class="label-password" for="password">Password: </label>
            <input class="txt-password @error('password') is-invalid @enderror" name="password" type="password" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label class="label-repassword" for="password-confirm">Repeat password: </label>
            <input class="txt-repassword @error('password') is-invalid @enderror" id="password-confirm"
                name="password_confirmation" type="password" required autocomplete="current-password">
        </div>
        <br>

        <div class="form-group">
            <button type="submit" class="btn-register">{{ __('Register') }}</button>
        </div>
    </form>
</div>
