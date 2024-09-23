@extends('layouts.login')

@section('login')
    <style>
        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo text-center">
                        <img src="{{ asset('assets/img/pemkot-balikpapan.png') }}" alt="logo" height="100px" width="20px">
                        <p>Kelurahan Sepinggan Baru</p>
                    </div>
                    <h4>Hallo Admin dan Super Admin!</h4>
                    <h6 class="fw-light">Silakan masuk untuk melanjutkan.</h6>
                    <form class="pt-2" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                placeholder="Username" name="nip_or_email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                placeholder="Password" name="password">
                            <i class="fa fa-eye" id="togglePassword"></i>
                        </div>
                        <div class="mt-2 d-grid gap-2">
                            <button class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn"
                                type="submit">LOGIN</button>
                        </div>
                        <div class="my-2 d-flex justify-content-end align-items-center">
                            <a href="{{ route('password.request') }}" class="auth-link">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#exampleInputPassword1');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
@endsection
