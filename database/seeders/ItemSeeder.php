<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class ItemSeeder extends Seeder
{
    public function run()
    {
        // Dapatkan kategori makanan
        $makananCategory = Category::where('name', 'makanan')->first();

        // Tambahkan beberapa item makanan
        $makananItems = [
            ['name' => 'Nasi Goreng', 'price' => 15000],
            ['name' => 'Ayam Bakar', 'price' => 20000],
            ['name' => 'Sate Ayam', 'price' => 18000],
            // Tambahkan item makanan lainnya di sini
        ];

        foreach ($makananItems as $item) {
            $makananCategory->items()->create($item);
        }

        // Dapatkan kategori minuman
        $minumanCategory = Category::where('name', 'minuman')->first();

        // Tambahkan beberapa item minuman
        $minumanItems = [
            ['name' => 'Es Teh', 'price' => 5000],
            ['name' => 'Jus Jeruk', 'price' => 8000],
            ['name' => 'Kopi Hitam', 'price' => 10000],
            // Tambahkan item minuman lainnya di sini
        ];

        foreach ($minumanItems as $item) {
            $minumanCategory->items()->create($item);
        }
    }
}
