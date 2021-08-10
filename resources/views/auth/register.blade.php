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
            <input class="txt-email input-register @error('email_user') is-invalid @enderror" id="email"
                name="email_user" type="email" required>

            @error('email_user')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="form-group">
            <label class="label-password" for="password">Password: </label>
            <input class="txt-password input-register @error('password_register') is-invalid @enderror"
                name="password_register" type="password" required>

            @error('password_register')
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

        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong>Success !</strong> {{ session('success') }}
        </div>
        @endif

        <div class="form-group">
            <button type="submit" class="btn-register">{{ __('Register') }}</button>
        </div>
    </form>
</div>
