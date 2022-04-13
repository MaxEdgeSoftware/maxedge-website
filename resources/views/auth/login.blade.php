@extends('layouts.app')

@section("titleSection")
<title> Login - {{ config('app.name', 'Laravel') }}</title>
@endSection


@section("styleSection")
<link rel="stylesheet" href="/assets/css/style.min.css">
@endSection

@section('mainSection')
<div class="container" style="overflow: hidden;">
    <section class="d-flex align-items-center position-relative" style="margin-top : 0; padding-top: 0; background: url('images/shape01.png') center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-signin p-4 bg-white rounded shadow">
                        <form method="POST" action="{{route('userLoggin')}}">
                            @csrf
                            @if (Session::has('errors'))
                            <ul class="text-danger">
                                <li>All fields are required</li>
                            </ul>
                            @endif


                            @if (Session::has('message'))
                            <ul class="text-danger">
                                <li>{{Session::get('message')}}</li>
                            </ul>


                            @endif
                            <a href="/" class="d-flex justify-content-center">
                                <img src="assets/images/logocopy.png" class="avatar-small mb-4 d-block mx-auto" alt="">
                            </a>
                            <h5 class="mb-3 text-center">Please sign in</h5>

                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <p class="forgot-pass mb-0"><a href="auth-bs-reset.html" class="text-dark small fw-bold">Forgot password ?</a></p>
                            </div>

                            <button class="btn theme-btn-nine w-100" type="submit">Sign in</button>

                            <!--end col-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection