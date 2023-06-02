<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $makananCategory = Category::where('name', 'Makanan')->first();
        $minumanCategory = Category::where('name', 'Minuman')->first();

        $makanan = [
            ['name' => 'Nasi Goreng', 'price' => 15000, 'category_id' => $makananCategory->id],
            ['name' => 'Mie Goreng', 'price' => 12000, 'category_id' => $makananCategory->id],
        ];

        $minuman = [
            ['name' => 'Es Teh', 'price' => 5000, 'category_id' => $minumanCategory->id],
            ['name' => 'Es Jeruk', 'price' => 7000, 'category_id' => $minumanCategory->id],
        ];

        foreach ($makanan as $item) {
            Item::create($item);
        }

        foreach ($minuman as $item) {
            Item::create($item);
        }
    }
}
