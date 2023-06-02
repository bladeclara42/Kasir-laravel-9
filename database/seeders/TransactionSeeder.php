<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\User;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        $transactions = [
            ['invoice_number' => 'INV001', 'total_amount' => 25000, 'user_id' => $user->id],
            ['invoice_number' => 'INV002', 'total_amount' => 12000, 'user_id' => $user->id],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
