@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="alert alert-info border-0 shadow-sm" role="alert">
                <h1 class="h4">{{ $title }}</h1>
                <p class="mb-0">{{ $message }}</p>
            </div>

            <a href="{{ route('produtos.index') }}" class="btn btn-dark">Back to Products</a>
        </div>
    </div>
@endsection
