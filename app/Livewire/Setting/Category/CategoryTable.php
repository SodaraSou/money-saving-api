<?php

namespace App\Livewire\Setting\Category;

use App\Models\Category;
use App\Models\TransactionType;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;

    #[Url()]
    public $search = '';
    public $per_page = 10;
    public $transaction_type;
    public $filters = [
        'transaction_type_id' => '',
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedFilters()
    {
        $this->resetPage();
    }

    // public function removeFilter($filter)
    // {
    //     if ($filter == 'transaction_type') {
    //         $this->filters['transaction_type_id'] = '';
    //         $this->transaction_type = null;
    //     }
    //     $this->resetPage();
    // }

    public function resetFilters()
    {
        $this->filters = [
            'transaction_type_id' => ''
        ];
        $this->transaction_type = null;
        $this->resetPage();
    }

    #[On('confirmed_delete')]
    public function delete($category_id)
    {
        try {
            $category = Category::find($category_id);
            if ($category) {
                $category->delete();
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
        $query = Category::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->filters['transaction_type_id']) {
            $query->where('transaction_type_id', $this->filters['transaction_type_id']);
            $this->transaction_type = TransactionType::find($this->filters['transaction_type_id']);
        }

        return view('livewire.setting.category.category-table', [
            'categories' => $query->with(['transactionType'])->paginate($this->per_page),
            'transaction_types' => TransactionType::all(),
        ]);
    }
}
