<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Wallet;

class OverallStatistic extends Component
{
    public $total_users;
    public $total_categories;
    public $total_sub_categories;
    public $total_wallets;

    public function mount()
    {
        $this->total_users = User::count();
        $this->total_categories = Category::count();
        $this->total_sub_categories = SubCategory::count();
        $this->total_wallets = Wallet::count();
    }

    public function render()
    {
        return view('livewire.home.overall-statistic');
    }
}
