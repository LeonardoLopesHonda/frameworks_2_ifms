@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h1 class="h4 mb-0">Add New T-Shirt</h1>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Please fix the highlighted fields and try again.
                        </div>
                    @endif

                    <form action="{{ route('produtos.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="imagem" class="form-label">Image URL</label>
                            <input
                                type="text"
                                id="imagem"
                                name="imagem"
                                class="form-control"
                                value="{{ old('imagem') }}"
                                placeholder="https://example.com/tshirt.jpg"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="nome" class="form-label">Name</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" placeholder="Example: Summer Tee">
                        </div>

                        <div class="mb-3">
                            <label for="preco" class="form-label">Price</label>
                            <input type="text" id="preco" name="preco" class="form-control" value="{{ old('preco') }}" placeholder="Example: 39.90">
                        </div>

                        <div class="mb-4">
                            <label for="descricao" class="form-label">Description</label>
                            <textarea id="descricao" name="descricao" rows="4" class="form-control" placeholder="Short product description">{{ old('descricao') }}</textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary">Back</a>
                            <button type="submit" class="btn btn-dark">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
