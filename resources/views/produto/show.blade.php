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
                    <div class="mb-3">
                        <img
                            src="{{ $produto->imagem }}"
                            class="img-fluid rounded border"
                            alt="{{ $produto->nome }}"
                        >
                    </div>

                    <h2 class="h5">{{ $produto->nome }}</h2>
                    <p class="mb-1"><strong>Price:</strong> ${{ number_format((float) $produto->preco, 2) }}</p>
                    <p class="mb-4"><strong>Description:</strong> {{ $produto->descricao }}</p>

                    <div class="d-flex gap-2">
                        <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary">Back</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
