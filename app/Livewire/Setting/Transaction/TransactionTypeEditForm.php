<?php

namespace App\Livewire\Setting\Transaction;

use App\Models\TransactionType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TransactionTypeEditForm extends Component
{
    public $transaction_type;

    #[Validate('required|min:1')]
    public $name = '';

    public function mount(TransactionType $transaction_type)
    {
        $this->transaction_type = $transaction_type;
        $this->name = $transaction_type->name;
    }

    public function save()
    {
        $this->validate();
        try {
            $this->transaction_type->update([
                'name' => $this->name
            ]);
            return redirect()->route('transaction-type.index');
        } catch (\Exception $e) {
            $this->dispatch('update_fail');
        }
    }

    public function render()
    {
        return view('livewire.setting.transaction.transaction-type-edit-form');
    }
}
