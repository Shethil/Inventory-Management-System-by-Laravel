@extends('layouts.master')

@section('title')
    Login Page
@endsection

@section('content')
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{ asset('assets/image/Login.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 mt-5 px-4 py-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input class="mb-4" type="email" name="email"
                                    placeholder="Enter a valid email address" value="{{ old('email') }}" required autofocus
                                    autocomplete="username">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" name="password" placeholder="Enter password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mt-3 mb-3 px-3">
                                <button type="submit" class="btn btn-blue text-center">Login</button>
                            </div>
                            <div class="row mb-4 px-3">
                                <small class="font-weight-bold">Do not have an account? <a href="{{ route('register') }}"
                                        class="text-danger">Register</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <div class="col-6">
                        <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2023. Shethil Ahammed</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
