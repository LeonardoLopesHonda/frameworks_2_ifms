<?php

namespace Database\Seeders;

use App\Models\Caneca;
use Illuminate\Database\Seeder;

class CanecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $canecas = [
            [
                'nome' => 'Caneca Clássica Preta',
                'preco' => 24.90,
                'descricao' => 'Caneca de cerâmica preta fosca, perfeita para o café do dia a dia.',
                'imagem' => 'https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?w=400',
                'capacidade_ml' => 350,
            ],
            [
                'nome' => 'Caneca Developer',
                'preco' => 34.90,
                'descricao' => 'Para quem transforma café em código. Design minimalista com tema dev.',
                'imagem' => 'https://images.unsplash.com/photo-1572119865084-43c285814d63?w=400',
                'capacidade_ml' => 300,
            ],
            [
                'nome' => 'Caneca Jumbo Branca',
                'preco' => 39.90,
                'descricao' => 'Caneca extra grande para quem não dispensa um bom chá ou cappuccino.',
                'imagem' => 'https://images.unsplash.com/photo-1577937927133-66ef06acdf18?w=400',
                'capacidade_ml' => 500,
            ],
        ];

        foreach ($canecas as $caneca) {
            Caneca::updateOrCreate(
                ['nome' => $caneca['nome']],
                $caneca
            );
        }
    }
}
