@extends('layouts.auth')
@section('title','LOGIN')
@section('styles')

<link rel="stylesheet" href="{{ asset('assets/libs/toastify/css/toastify.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                        <div class="bg-overlay"></div>
                        <div class="position-relative h-100 d-flex flex-column">
                            <div class="mb-4">
                                <a href="index.html" class="d-block">
                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                </a>
                            </div>
                            <div class="mt-auto">
                                <div class="mb-3">
                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                </div>

                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                        <div class="carousel-item active">
                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end carousel -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="p-lg-5 p-4">
                        <div>
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p class="text-muted">Sign in to continue to Velzon.</p>
                        </div>

                        <div class="mt-4">
                            <form id="main-form" autocomplete="off"><br>
                              <input type="hidden" id="_url" value="{{ url('login') }}">
                              <input type="hidden" id="_redirect" value="{{ url('/') }}">
                              <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese el usuario o correo electrónico">
                                    <span class="invalid-feedback" id="username_alert" role="alert" style="font-size: 100%;"></span>
                                </div>

                                <div class="mb-3">
                                    <div class="float-end">

                                    </div>
                                    <label class="form-label" for="password-input">Contraseña</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password" class="form-control pe-5" name="password" placeholder="Ingresa la contraseña" id="password-input">
                                         <span class="invalid-feedback" id="password_alert" role="alert" style="font-size: 100%;"></span>
                                    </div>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label" for="auth-remember-check"></label>
                                </div>

                                <div class="mt-4">
                                     <button type="submit" class="btn blue darken-4 form-control" id="boton">
                                        <i class="fas fa-sign-in-alt text-white" id="ajax-icon"></i> <span class="text-white ml-3">{{ __('Iniciar Sesión') }}</span>
                                    </button>
                                </div>

                                <div class="mt-4 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                    </div>

                                    <div>
                                        <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                        <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                        <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="mt-5 text-center">
                            <p class="mb-0">Don't have an account ? <a href="auth-signup-cover.html" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

</div>
<!-- end row -->
@endsection
@section('scripts')
    <script src="{{ asset('assets/libs/toastify/js/toastify.js') }}" ></script>
    <script src="{{ asset('assets/js/admin/form/welcome.js') }}" ></script>
    <script src="{{ asset('assets/js/admin/form/auth.js') }}" ></script>
@endsection
