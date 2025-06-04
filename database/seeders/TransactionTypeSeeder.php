<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionType::insert([
            [
                'id' => 1,
                'name' => 'Expense'
            ],
            [
                'id' => 2,
                'name' => 'Income'
            ],
            [
                'id' => 3,
                'name' => 'Debt/Loan'
            ],
        ]);
    }
}
