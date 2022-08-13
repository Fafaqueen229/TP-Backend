<?php

namespace Database\Seeders;

use App\Models\Magasin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Magasin::factory()->create([
            'produit' => 'Recharge',
            'Operation' => 'Achat',
            'prix' => '15000',
            'balance' => '15000',
            'stock' => '1',
        ]);
    }
}
