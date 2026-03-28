@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h1 class="h4 mb-0">Edit Mug</h1>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Please fix the highlighted fields and try again.
                        </div>
                    @endif

                    <form action="{{ route('canecas.update', $caneca->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="imagem" class="form-label">Image URL</label>
                            <input
                                type="text"
                                id="imagem"
                                name="imagem"
                                class="form-control"
                                value="{{ old('imagem', $caneca->imagem) }}"
                            >
                        </div>

                        <div class="mb-3">
                            <img
                                src="{{ $caneca->imagem }}"
                                class="img-fluid rounded border"
                                alt="{{ $caneca->nome }}"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="nome" class="form-label">Name</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $caneca->nome) }}">
                        </div>

                        <div class="mb-3">
                            <label for="preco" class="form-label">Price</label>
                            <input type="text" id="preco" name="preco" class="form-control" value="{{ old('preco', $caneca->preco) }}">
                        </div>

                        <div class="mb-3">
                            <label for="capacidade_ml" class="form-label">Capacity (ml)</label>
                            <input type="number" id="capacidade_ml" name="capacidade_ml" class="form-control" value="{{ old('capacidade_ml', $caneca->capacidade_ml) }}">
                        </div>

                        <div class="mb-4">
                            <label for="descricao" class="form-label">Description</label>
                            <textarea id="descricao" name="descricao" rows="4" class="form-control">{{ old('descricao', $caneca->descricao) }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex gap-2">
                                <a href="{{ route('canecas.index') }}" class="btn btn-outline-secondary">Back</a>
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </div>
                    </form>

                    <hr class="my-4">

                    <form action="{{ route('canecas.destroy', $caneca->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete Mug</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
