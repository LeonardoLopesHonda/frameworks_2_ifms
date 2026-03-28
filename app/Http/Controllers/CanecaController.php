<?php

namespace App\Http\Controllers;

use App\Models\Caneca;
use Illuminate\Http\Request;

class CanecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('caneca.index', [
            'canecas' => Caneca::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('caneca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imagem' => ['required', 'url'],
            'nome' => ['required', 'string', 'max:255'],
            'preco' => ['required', 'numeric', 'min:0'],
            'descricao' => ['required', 'string'],
            'capacidade_ml' => ['required', 'integer', 'min:1'],
        ]);

        Caneca::create($validated);

        return redirect()->route('canecas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Caneca $caneca)
    {
        return view('caneca.show', [
            'caneca' => $caneca,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caneca $caneca)
    {
        return view('caneca.edit', [
            'caneca' => $caneca,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caneca $caneca)
    {
        $validated = $request->validate([
            'imagem' => ['required', 'url'],
            'nome' => ['required', 'string', 'max:255'],
            'preco' => ['required', 'numeric', 'min:0'],
            'descricao' => ['required', 'string'],
            'capacidade_ml' => ['required', 'integer', 'min:1'],
        ]);

        $caneca->update($validated);

        return redirect()->route('canecas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caneca $caneca)
    {
        $caneca->delete();

        return redirect()->route('canecas.index');
    }
}
