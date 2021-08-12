<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs tabs-login-register" role="tablist">
                    <li class="nav-item">
                        <a id="nav-login" class="nav-link active" data-toggle="tab" href="#login">login</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-regis" class="nav-link" data-toggle="tab" href="#register">register</a>
                    </li>
                </ul>
                <img src="images/close-login.png" class="btn-close" alt="close" data-dismiss="modal" aria-label="Close">
            </div>
            <div class="tab-content">
                @include('auth.login')
                @include('auth.register')
            </div>
        </div>
    </div>
</div>
