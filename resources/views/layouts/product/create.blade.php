@extends('layouts.master')

@section('title')
    Product Create
@endsection

@section('content')
    <div class="row">

        <div class="row">
            <div class="col-6">
                <h1>Create Product</h1>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('product.index') }}" class="btn btn-primary"> <i class="fas fa-backward"></i>
                        Back to Product
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card col-6">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="product-name" class="form-label"> Product Name </label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="enter product name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="product-quantity" class="form-label">Product Quantity</label>
                            <input type="number" name="quantity"
                                class="form-control @error('quantity') is-invalid @enderror"
                                placeholder="enter product code" min="0" required>

                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="product-price" class="form-label">Product Price</label>
                                <input type="number"
                                    class="form-control @error('price') is-invalid
                                @enderror"
                                    name="price" placeholder="enter product price" min="0" required>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-success">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
