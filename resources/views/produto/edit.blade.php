@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h1 class="h4 mb-0">Edit T-Shirt</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('produtos.update', 1) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nome" class="form-label">Name</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="Classic Black Tee">
                        </div>

                        <div class="mb-3">
                            <label for="preco" class="form-label">Price</label>
                            <input type="text" id="preco" name="preco" class="form-control" value="29.90">
                        </div>

                        <div class="mb-4">
                            <label for="descricao" class="form-label">Description</label>
                            <textarea id="descricao" name="descricao" rows="4" class="form-control">100% cotton everyday t-shirt.</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex gap-2">
                                <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary">Back</a>
                                <button type="submit" class="btn btn-dark">Update (Placeholder)</button>
                            </div>
                        </div>
                    </form>

                    <hr class="my-4">

                    <form action="{{ route('produtos.destroy', 1) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete Product (Placeholder)</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
