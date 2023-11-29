@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row d-flex">
        <div class="col-lg-12">
            <div class="card2 card border-0 px-4 py-5">

                <div class="row">
                    <div class="col-6">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            Dashboard
                        </h2>
                    </div>
                    <div class="col-6">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger float-end">Logout</button>
                        </form>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="text-center">Welcome to Custom Inventory Management System</h3>

                    <div class="text-center mt-5">
                        <a href="{{ route('product.index') }}" class="btn btn-primary mx-auto">
                            Move to Product Page
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
