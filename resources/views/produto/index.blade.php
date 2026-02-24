@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-white border rounded-3">
        <div class="container-fluid py-2">
            <h1 class="display-6 fw-bold">T-Shirt Store</h1>
            <p class="col-md-8 fs-5 text-secondary">
                Simple admin hero page to manage your t-shirt catalog.
            </p>
            <a href="{{ route('produtos.create') }}" class="btn btn-dark btn-lg">Add New T-Shirt</a>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">Products</h2>
            <span class="badge text-bg-secondary">Demo list</span>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Classic Black Tee</td>
                        <td>$29.90</td>
                        <td>100% cotton everyday t-shirt.</td>
                        <td class="text-end">
                            <a href="{{ route('produtos.show', 1) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="{{ route('produtos.edit', 1) }}" class="btn btn-sm btn-outline-dark">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Vintage White Tee</td>
                        <td>$34.90</td>
                        <td>Relaxed fit with soft fabric.</td>
                        <td class="text-end">
                            <a href="{{ route('produtos.show', 2) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="{{ route('produtos.edit', 2) }}" class="btn btn-sm btn-outline-dark">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
