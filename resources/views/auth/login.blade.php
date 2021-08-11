<div id="login" class="container tab-pane active">
    <form class="form-login" action="{{ route('login') }}" method="post">
        @csrf
        <label class="label-username">Username:</label>
        <input class="txt-username" type="text" required><br><br>
        <label class="label-password">Password:</label>
        <input class="txt-password" type="text" required>
        <div class="option-login">
            <div class="form-check box-remember">
                <input class="form-check-input remember-me-checkbox" type="checkbox" value="true" id="remember-me">
                <label class="form-check-label" for="remember-me">Remember me
            </div>
            <a href="#" onclick="return false" class="forgot-pass">Forgot password</a>
        </div>
        <div>
            <input type="submit" name="submit" value="login" class="btn-login">
        </div>
    </form>
    <div class="login-with">
        <p>Login with</p>
    </div>
    <p class="with-gg"><i class="fab fa-google-plus-g fa-lg icon-gg"></i>Google</p>
    <p class="with-face"><i class="fab fa-facebook-f fa-lg icon-face"></i></i>Facebook</p>
</div>