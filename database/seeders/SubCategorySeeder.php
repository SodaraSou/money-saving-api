<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::insert([
            [
                'id' => 1,
                'name' => 'Rentals',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Water Bill',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Phone Bill',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Electricity Bill',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Gas Bill',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Television Bill',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 7,
                'name' => 'Internet Bill',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 8,
                'name' => 'Other Utility Bills',
                'icon' => 'test',
                'category_id' => 2,
                'user_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'Personal Items',
                'icon' => 'test',
                'category_id' => 3,
                'user_id' => 1
            ],
            [
                'id' => 10,
                'name' => 'Houseware',
                'icon' => 'test',
                'category_id' => 3,
                'user_id' => 1
            ],
            [
                'id' => 11,
                'name' => 'Makeup',
                'icon' => 'test',
                'category_id' => 3,
                'user_id' => 1
            ],
            [
                'id' => 12,
                'name' => 'Home Maintenance',
                'icon' => 'test',
                'category_id' => 4,
                'user_id' => 1
            ],
            [
                'id' => 13,
                'name' => 'Home Services',
                'icon' => 'test',
                'category_id' => 4,
                'user_id' => 1
            ],
            [
                'id' => 14,
                'name' => 'Pets',
                'icon' => 'test',
                'category_id' => 4,
                'user_id' => 1
            ],
            [
                'id' => 15,
                'name' => 'Vehicle Maintenance',
                'icon' => 'test',
                'category_id' => 5,
                'user_id' => 1
            ],
            [
                'id' => 16,
                'name' => 'Medical Check-up',
                'icon' => 'test',
                'category_id' => 6,
                'user_id' => 1
            ],
            [
                'id' => 17,
                'name' => 'Fitness',
                'icon' => 'test',
                'category_id' => 6,
                'user_id' => 1
            ],
            [
                'id' => 18,
                'name' => 'Streaming Service',
                'icon' => 'test',
                'category_id' => 8,
                'user_id' => 1
            ],
            [
                'id' => 19,
                'name' => 'Fun Money',
                'icon' => 'test',
                'category_id' => 8,
                'user_id' => 1
            ],
        ]);
    }
}
