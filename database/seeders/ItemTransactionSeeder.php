<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItemTransaction;
use App\Models\Item;
use App\Models\Transaction;

class ItemTransactionSeeder extends Seeder
{
    public function run()
    {
        $transaction = Transaction::first();
        $item = Item::first();

        ItemTransaction::create([
            'item_id' => $item->id,
            'transaction_id' => $transaction->id,
            'quantity' => 1,
        ]);

        // Tambahkan item transaksi lainnya di sini sesuai kebutuhan
    }
}
