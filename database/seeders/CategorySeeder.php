<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'id' => 1,
                'name' => 'Food & Bevarage',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Bills & Utilities',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Shopping',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Family',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Transportation',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Health & Fitness',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 7,
                'name' => 'Education',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 8,
                'name' => 'Entertainment',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'Gifts & Donations',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 10,
                'name' => 'Insurances',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 11,
                'name' => 'Investment',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 12,
                'name' => 'Pay Interest',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 13,
                'name' => 'Outgoing transfer',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 14,
                'name' => 'Other Expense',
                'icon' => 'test',
                'transaction_type_id' => 1
            ],
            [
                'id' => 15,
                'name' => 'Salary',
                'icon' => 'test',
                'transaction_type_id' => 2
            ],
            [
                'id' => 16,
                'name' => 'Incoming transfer',
                'icon' => 'test',
                'transaction_type_id' => 2
            ],
            [
                'id' => 17,
                'name' => 'Collect Interest',
                'icon' => 'test',
                'transaction_type_id' => 2
            ],
            [
                'id' => 18,
                'name' => 'Other Income',
                'icon' => 'test',
                'transaction_type_id' => 2
            ],
            [
                'id' => 19,
                'name' => 'Loan',
                'icon' => 'test',
                'transaction_type_id' => 3
            ],
            [
                'id' => 20,
                'name' => 'Repayment',
                'icon' => 'test',
                'transaction_type_id' => 3
            ],
            [
                'id' => 21,
                'name' => 'Debt Collection',
                'icon' => 'test',
                'transaction_type_id' => 3
            ],
            [
                'id' => 22,
                'name' => 'Debt',
                'icon' => 'test',
                'transaction_type_id' => 3
            ],
        ]);
    }
}
