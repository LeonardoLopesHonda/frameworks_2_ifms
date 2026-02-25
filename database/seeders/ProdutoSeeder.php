<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Classic Black Tee',
                'preco' => 29.90,
                'descricao' => '100% cotton everyday t-shirt. Be kind to others',
                'imagem' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSNWrOcD-E1Do-_qEyMETRIVjE272iDyFh6tRn_T01gKEm9GuCaFB8T_DknKDjyWBh0orSxKWXQcioXzL6SUn49w8vBGnHeAUFXabd5-uuUIzCgrs7dyr0vLw',
            ],
            [
                'nome' => 'Internet Lover T-Shirt',
                'preco' => 34.90,
                'descricao' => 'Relaxed fit with soft fabric. Show everyone how much you love the internet.',
                'imagem' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRyLHNWo6EykipPx8oMlOR1JJVJi7pH9H66Zqny2O_7bO5-36yruwhrkyTSucahRaRlU9Ep2P2veRBYxdRxSA8OJ9i3W_zsfjrUmNal5Aqrq3mE7ONJiPYE',
            ],
            [
                'nome' => 'Fish',
                'preco' => 44.90,
                'descricao' => 'Fish.',
                'imagem' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQtiw2-NGFwqR9EAGD_GOJqvLJRYT4otNl7d1qqewFhZkwTTvf6IzOqzAEMh09Wa71uzNkNtHoITeh_j_SBuKxL6_EaiZIT',
            ],
        ];

        foreach ($produtos as $produto) {
            Produto::updateOrCreate(
                ['nome' => $produto['nome']],
                $produto
            );
        }
    }
}
