<div id="register" class="container tab-pane">
    <form class="form-register" action="{{ route('register') }}" method="POST">
        @csrf
        <label class="label-username" for="name">User Name: </label>
        <input class="txt-username" id="name" name="name " type="text" required autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <br><br>
        <label class="label-email" for="email">Email: </label>
        <input class="txt-email" id="email" name="email" type="email" required>

        <br><br>
        <label class="label-password" for="password">Password: </label>
        <input class="txt-password" name="password" type="password" required>

        <br><br>
        <label class="label-repassword" for="password-confirm">Repeat password: </label>
        <input class="txt-repassword" id="password-confirm" name="password_confirmation" type="password" required>
        <div>
            <button type="submit" class="btn-register">{{ __('Register') }}</button>
        </div>
    </form>
</div>