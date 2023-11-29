@extends('layouts.master')

@section('title')
    Register Page
@endsection

@section('content')
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 mb-2">
                        <div class="row px-3 justify-content-center mt-5 mb-5 border-line">
                            <img src="{{ asset('assets/image/Register.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 mt-3 px-4 py-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Name</h6>
                                </label>
                                <input class="mb-4" type="text" name="name" placeholder="Enter your name"
                                    value="{{ old('name') }}" required autofocus autocomplete="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4 row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input class="mb-4" type="email" name="email"
                                    placeholder="Enter a valid email address" value="{{ old('email') }}" required
                                    autocomplete="username">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mt-4 row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" name="password" placeholder="Enter password" required
                                    autocomplete="new-password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4 row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Confirm Password</h6>
                                </label>
                                <input type="password" name="password_confirmation" placeholder="Confirm password" required
                                    autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Already Registered Link -->
                            <div class="flex items-center justify-end mt-4">
                                <a href="{{ route('login') }}"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Already registered?') }}
                                </a>
                                <button type="submit" class="btn btn-blue text-center ms-4">Register</button>
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
