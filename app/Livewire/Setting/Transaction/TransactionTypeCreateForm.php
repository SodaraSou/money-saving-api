<?php

namespace App\Livewire\Setting\Transaction;

use App\Models\TransactionType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TransactionTypeCreateForm extends Component
{
    #[Validate('required|min:1')]
    public $name = '';

    public function save()
    {
        $this->validate();
        try {
            TransactionType::create(['name' => $this->name]);
            session()->flash('success', 'Transaction type created successfully.');
            return redirect()->route('transaction-type.index');
        } catch (\Exception $ex) {
            session()->flash('error', 'Something went wrong!');
        }
    }

    public function render()
    {
        return view('livewire.setting.transaction.transaction-type-create-form');
    }
}
