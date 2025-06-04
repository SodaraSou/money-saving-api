<?php

namespace App\Livewire\Setting\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SubCategoryTable extends Component
{
    use WithPagination;

    public $per_page = 10;
    #[Url()]
    public $search = '';
    public $filters = [
        'category_id' => '',
    ];
    public $selected_category = '';
    public $categories = null;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->filters = [
            'category_id' => ''
        ];
        $this->selected_category = null;
        $this->resetPage();
    }

    #[On('confirmed_delete')]
    public function delete($sub_category_id)
    {
        try {
            $sub_category = SubCategory::find($sub_category_id);
            if ($sub_category) {
                $sub_category->delete();
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
        $query = SubCategory::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->filters['category_id']) {
            $query->where('category_id', $this->filters['category_id']);
            $this->selected_category = Category::find($this->filters['category_id']);
        }

        $sub_categories = $query->with(['category', 'user'])->paginate($this->per_page);

        return view('livewire.setting.sub-category.sub-category-table', [
            'sub_categories' => $sub_categories
        ]);
    }
}
