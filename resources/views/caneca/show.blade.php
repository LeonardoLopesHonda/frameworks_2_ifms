@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-0">Mug Details</h1>
                    <span class="badge text-bg-dark">{{ $caneca->capacidade_ml }}ml</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <img
                            src="{{ $caneca->imagem }}"
                            class="img-fluid rounded border"
                            alt="{{ $caneca->nome }}"
                        >
                    </div>

                    <h2 class="h5">{{ $caneca->nome }}</h2>
                    <p class="mb-1"><strong>Price:</strong> R$ {{ number_format((float) $caneca->preco, 2, ',', '.') }}</p>
                    <p class="mb-1"><strong>Capacity:</strong> {{ $caneca->capacidade_ml }}ml</p>
                    <p class="mb-4"><strong>Description:</strong> {{ $caneca->descricao }}</p>

                    <div class="d-flex gap-2">
                        <a href="{{ route('canecas.index') }}" class="btn btn-outline-secondary">Back</a>
                        <a href="{{ route('canecas.edit', $caneca->id) }}" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
