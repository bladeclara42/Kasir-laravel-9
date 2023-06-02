<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionsSeeder extends Seeder
{
    public function run()
    {
        Transaction::create([
            'total' => 50000,
        ]);

        // Tambahkan transaksi lainnya di sini sesuai kebutuhan
    }
}
