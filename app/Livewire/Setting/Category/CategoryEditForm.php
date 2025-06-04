<?php

namespace App\Livewire\Setting\Category;

use App\Models\Category;
use App\Models\TransactionType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryEditForm extends Component
{
    public $category;
    #[Validate('required', message: "Please enter the name")]
    public $name;
    #[Validate('required', message: "Please select the transaction type")]
    public $transaction_type_id;

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->transaction_type_id = $category->transaction_type_id;
    }

    public function save()
    {
        $validated = $this->validate();
        try {
            $this->category->update($validated);

            return redirect()->to('/category');
        } catch (\Exception $e) {
            $this->dispatch('update_fail');
        }
    }

    public function render()
    {
        return view('livewire.setting.category.category-edit-form', [
            'transaction_types' => TransactionType::all()
        ]);
    }
}
