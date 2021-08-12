<div id="register" class="container tab-pane">
    <form class="form-register" action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="label-username" for="name">User Name: </label>
            <input class="txt-username input-register @error('name') is-invalid @enderror" id="name" name="name"
                type="text" required autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label class="label-email" for="email">Email: </label>
            <input class="txt-email input-register @error('emailUser') is-invalid @enderror" id="email"
                name="emailUser" type="email" required>
            @error('emailUser')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
      
        <div class="form-group">
            <label class="label-password" for="password">Password: </label>
            <input class="txt-password input-register @error('passwordregis') is-invalid @enderror" name="passwordregis"
                type="password" required>
            @error('passwordregis')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
     
        <div class="form-group">
            <label class="label-repassword" for="password-confirm">Repeat password: </label>
            <input class="txt-repassword input-register @error('password_confirmation') is-invalid @enderror"
                id="password-confirm" name="password_confirmation" type="password" required>
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <br>

        <div class="form-group">
            <button type="submit" class="btn-register">{{ __('Register') }}</button>
        </div>
    </form>
</div>
