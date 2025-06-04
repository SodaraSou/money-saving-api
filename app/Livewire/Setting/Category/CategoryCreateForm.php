<?php

namespace App\Livewire\Setting\Category;

use App\Models\Category;
use App\Models\TransactionType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryCreateForm extends Component
{
    #[Validate('required|min:1')]
    public $name = '';
    #[Validate('required|min:1')]
    public $transaction_type_id;

    public function save()
    {
        $this->validate();
        try {
            Category::create([
                'name' => $this->name,
                'icon' => "test",
                'transaction_type_id' => $this->transaction_type_id
            ]);
            return redirect()->route('category.index');
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong!');
        }
    }

    public function render()
    {
        return view('livewire.setting.category.category-create-form', [
            'transaction_types' => TransactionType::all()
        ]);
    }
}
