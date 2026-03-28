@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-white border rounded-3">
        <div class="container-fluid py-2">
            <h1 class="display-6 fw-bold">Mug Store</h1>
            <p class="col-md-8 fs-5 text-secondary">
                Gerencie seu catálogo de canecas personalizadas.
            </p>
            <a href="{{ route('canecas.create') }}" class="btn btn-dark btn-lg">Add New Mug</a>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white">
            <h2 class="h5 mb-0">Mugs</h2>
        </div>
        <div class="card-body">
            <div class="row g-4">
                @forelse ($canecas as $caneca)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card border h-100">
                            <img
                                src="{{ $caneca->imagem }}"
                                class="card-img-top"
                                alt="{{ $caneca->nome }}"
                            >
                            <div class="card-body d-flex flex-column">
                                <h3 class="h5 card-title">{{ $caneca->nome }}</h3>
                                <p class="card-text text-secondary">{{ $caneca->descricao }}</p>
                                <p class="card-text"><small class="text-muted">{{ $caneca->capacidade_ml }}ml</small></p>
                                <div class="mt-auto d-flex justify-content-between align-items-end">
                                    <span class="fw-bold">R$ {{ number_format((float) $caneca->preco, 2, ',', '.') }}</span>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('canecas.edit', $caneca->id) }}" class="btn btn-sm btn-outline-dark">Edit</a>
                                        <form action="{{ route('canecas.destroy', $caneca->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border mb-0">
                            Nenhuma caneca cadastrada. Adicione a primeira.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
