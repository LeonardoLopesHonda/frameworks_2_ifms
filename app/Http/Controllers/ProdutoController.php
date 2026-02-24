<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('produto.feedback', [
            'title' => 'Create Request Sent',
            'message' => 'This is a placeholder screen. Product creation logic will be added next.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produto.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produto.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        return view('produto.feedback', [
            'title' => 'Update Request Sent',
            'message' => 'This is a placeholder screen. Product update logic will be added next.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        return view('produto.feedback', [
            'title' => 'Delete Request Sent',
            'message' => 'This is a placeholder screen. Product delete logic will be added next.',
        ]);
    }
}
