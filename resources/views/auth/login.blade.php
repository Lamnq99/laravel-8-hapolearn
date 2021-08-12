<div id="login" class="container tab-pane active">
    <form class="form-login" action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="label-username">Email:</label>
            <input class="txt-username input-login @error('email') is-invalid-login @enderror" type="email" name="email"
                value="{{ old('email') }}" autocomplete="email" required>
        </div>
        <br>

        <div class="form-group">
            <label class="label-password">Password:</label>
            <input class="txt-password input-login @error('password') is-invalid-login @enderror" type="password"
                name="password" value="{{ old('email') }}" required autocomplete="current-password">
        </div>

        <div class="option-login">
            <div class="form-check box-remember">
                <input class="form-check-input remember-me-checkbox" type="checkbox" name="remember" id="remember-me"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember-me">Remember me
            </div>
            <a href="#" onclick="return false" class="forgot-pass">Forgot password</a>
        </div>
        <div>
            <button type="submit" class="btn-login">{{ __('Login') }}</button>
        </div>

        @if(count($errors) > 0)
            @foreach( $errors->all() as $message )
                <span class="err-login" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @endforeach
        @endif
        
    </form>
    <div class="login-with">
        <p>Login with</p>
    </div>
    <p class="with-gg"><i class="fab fa-google-plus-g fa-lg icon-gg"></i>Google</p>
    <p class="with-face"><i class="fab fa-facebook-f fa-lg icon-face"></i></i>Facebook</p>
</div>
