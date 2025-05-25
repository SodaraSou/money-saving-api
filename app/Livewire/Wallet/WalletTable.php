<?php

namespace App\Livewire\Wallet;

use App\Models\Wallet;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class WalletTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    #[Url]
    public $search = '';

    public function render()
    {
        $query = Wallet::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.wallet.wallet-table', [
            'wallets' => $query->with('user')->paginate($this->perPage),
        ]);
    }
}
