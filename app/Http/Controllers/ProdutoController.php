<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private function mockProducts(): array
    {
        return [
            1 => [
                'id' => 1,
                'nome' => 'Classic Black Tee',
                'preco' => '29.90',
                'descricao' => '100% cotton everyday t-shirt. Be kind to others',
                'imagem' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSNWrOcD-E1Do-_qEyMETRIVjE272iDyFh6tRn_T01gKEm9GuCaFB8T_DknKDjyWBh0orSxKWXQcioXzL6SUn49w8vBGnHeAUFXabd5-uuUIzCgrs7dyr0vLw',
            ],
            2 => [
                'id' => 2,
                'nome' => 'Internet Lover T-Shirt',
                'preco' => '34.90',
                'descricao' => 'Relaxed fit with soft fabric. Show everyone how much you love the internet.',
                'imagem' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRyLHNWo6EykipPx8oMlOR1JJVJi7pH9H66Zqny2O_7bO5-36yruwhrkyTSucahRaRlU9Ep2P2veRBYxdRxSA8OJ9i3W_zsfjrUmNal5Aqrq3mE7ONJiPYE',
            ],
            3 => [
                'id' => 3,
                'nome' => 'Fish',
                'preco' => '44.90',
                'descricao' => 'Fish.',
                'imagem' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQtiw2-NGFwqR9EAGD_GOJqvLJRYT4otNl7d1qqewFhZkwTTvf6IzOqzAEMh09Wa71uzNkNtHoITeh_j_SBuKxL6_EaiZIT',
            ],
        ];
    }

    private function findProduct(string $id): array
    {
        $products = $this->mockProducts();

        return $products[$id] ?? [
            'id' => (int) $id,
            'nome' => 'New T-Shirt',
            'preco' => '0.00',
            'descricao' => 'Product description will be added soon.',
            'imagem' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=900&q=80',
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produto.index', [
            'produtos' => array_values($this->mockProducts()),
        ]);
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
    public function show(string $produto)
    {
        return view('produto.show', [
            'produto' => $this->findProduct($produto),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $produto)
    {
        return view('produto.edit', [
            'produto' => $this->findProduct($produto),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $produto)
    {
        $product = $this->findProduct($produto);

        return view('produto.feedback', [
            'title' => 'Update Request Sent',
            'message' => "This is a placeholder screen. Update logic for {$product['nome']} will be added next.",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $produto)
    {
        $product = $this->findProduct($produto);

        return view('produto.feedback', [
            'title' => 'Delete Request Sent',
            'message' => "This is a placeholder screen. Delete logic for {$product['nome']} will be added next.",
        ]);
    }
}
