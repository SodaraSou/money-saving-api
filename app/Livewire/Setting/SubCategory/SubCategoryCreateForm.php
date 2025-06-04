<?php

namespace App\Livewire\Setting\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SubCategoryCreateForm extends Component
{
    #[Validate('required', message: "Please enter name")]
    public $name = '';
    #[Validate('required', message: "Please select category")]
    public $category_id = '';
    public $categories = null;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function save()
    {
        $validated = $this->validate();
        try {
            SubCategory::create([
                'name' => $validated['name'],
                'icon' => 'test',
                'category_id' => $validated['category_id'],
                'user_id' => Auth::user()->id
            ]);
            return redirect()->to('/sub-category');
        } catch (\Exception $e) {
            $this->dispatch('create_fail');
        }
    }

    public function render()
    {
        return view('livewire.setting.sub-category.sub-category-create-form');
    }
}
