<?php

namespace App\Livewire\Setting\Transaction;

use App\Models\TransactionType;
use Livewire\Attributes\On;
use Livewire\Component;

class TransactionTypeTable extends Component
{
    #[On('confirmed_delete')]
    public function delete($transaction_type_id)
    {
        try {
            $transaction_type = TransactionType::find($transaction_type_id);
            if ($transaction_type) {
                $transaction_type->delete();
                $this->dispatch('delete_success');
            } else {
                $this->dispatch('delete_fail');
            }
        } catch (\Exception $e) {
            $this->dispatch('delete_fail');
        }
    }

    public function render()
    {
        return view('livewire.setting.transaction.transaction-type-table', [
            'transaction_types' => TransactionType::all()
        ]);
    }
}
