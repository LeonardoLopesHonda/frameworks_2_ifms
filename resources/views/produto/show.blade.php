@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-0">T-Shirt Details</h1>
                    <span class="badge text-bg-dark">Demo</span>
                </div>
                <div class="card-body">
                    <h2 class="h5">Classic Black Tee</h2>
                    <p class="mb-1"><strong>Price:</strong> $29.90</p>
                    <p class="mb-4"><strong>Description:</strong> 100% cotton everyday t-shirt.</p>

                    <div class="d-flex gap-2">
                        <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary">Back</a>
                        <a href="{{ route('produtos.edit', 1) }}" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
