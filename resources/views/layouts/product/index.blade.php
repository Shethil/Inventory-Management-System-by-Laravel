@extends('layouts.master')

@section('title')
    Product Index
@endsection


@push('style')
    <style>
        .dataTables_length {
            padding: 20px 0;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-6">
                <h1>Product List Table</h1>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary me-2" <i class="fas fa-plus-circle"></i>
                        Back to Dashboard
                    </a>

                    <a href="{{ route('product.create') }}" class="btn btn-primary" <i class="fas fa-plus-circle"></i>
                        Add New Product
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive my-2">
                <table class="table table-bordered table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">SI</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row"> {{ 1 + $loop->index }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-success" href="{{ route('product.edit', $product->id) }}">
                                            <i class="fas fas-edit"></i> Edit
                                        </a>

                                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger show_confirm ms-2" type="submit"> <i
                                                    class="fas fas-trash"></i> Delete </button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
