<?php

namespace App\Livewire\Setting\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SubCategoryEditForm extends Component
{
    public $sub_category = null;
    public $categories = null;
    #[Validate('required', message: "Please enter name")]
    public $name = '';
    #[Validate('required', message: "Please select category")]
    public $category_id = '';

    public function mount(SubCategory $sub_category)
    {
        $this->sub_category = $sub_category;
        $this->name = $sub_category->name;
        $this->category_id = $sub_category->category_id;
        $this->categories = Category::all();
    }

    public function save()
    {
        $validated = $this->validate();
        try {
            $this->sub_category->update([
                'name' => $validated['name'],
                'category_id' => $validated['category_id'],
                'user_id' => Auth::user()->id
            ]);
            return redirect()->to('/sub-category');
        } catch (\Exception $e) {
            $this->dispatch('update_fail');
        }
    }

    public function render()
    {
        return view('livewire.setting.sub-category.sub-category-edit-form');
    }
}
