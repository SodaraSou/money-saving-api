<?php

namespace App\Livewire\Permission;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionCreateForm extends Component
{
    #[Validate('required', message: "Please enter permission name")]
    public $name;

    public function save()
    {
        $validated = $this->validate();
        try {
            Permission::create($validated);
            return redirect()->to('/permission');
        } catch (\Exception $e) {
            $this->dispatch('create_fail');
        }
    }

    public function render()
    {
        return view('livewire.permission.permission-create-form');
    }
}
