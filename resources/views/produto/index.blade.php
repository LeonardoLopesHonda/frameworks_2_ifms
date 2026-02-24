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

    <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white">
            <h2 class="h5 mb-0">Products</h2>
        </div>
        <div class="card-body">
            <div class="row g-4">
                @foreach ($produtos as $produto)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card border h-100">
                            <img
                                src="{{ $produto['imagem'] }}"
                                class="card-img-top"
                                alt="{{ $produto['nome'] }}"
                            >
                            <div class="card-body d-flex flex-column">
                                <h3 class="h5 card-title">{{ $produto['nome'] }}</h3>
                                <p class="card-text text-secondary">{{ $produto['descricao'] }}</p>
                                <div class="mt-auto d-flex justify-content-between align-items-end">
                                    <span class="fw-bold">${{ $produto['preco'] }}</span>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('produtos.edit', $produto['id']) }}" class="btn btn-sm btn-outline-dark">Edit</a>
                                        <form action="{{ route('produtos.destroy', $produto['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
