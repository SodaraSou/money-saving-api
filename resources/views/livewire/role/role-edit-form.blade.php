<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Edit Role</h3>
    </div>
    <form wire:submit.prevent="save">
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input wire:model="name" class="form-control" placeholder="Enter Role Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Selected Permissions</label>
                <div>
                    @if ($selected_permissions)
                        @foreach ($selected_permissions as $selected_permission)
                            <span class="list-inline-item badge badge-primary">
                                {{ $selected_permission }}
                            </span>
                        @endforeach
                    @else
                        <p class="text-muted">No permissions selected.</p>
                    @endif
                </div>
                @error('selected_permissions')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="d-flex flex-wrap align-items-center">
                    @foreach ($permissions as $permission)
                        <div wire:key="{{ $permission->id }}" class="custom-control custom-checkbox mr-4">
                            <input class="custom-control-input" type="checkbox" id="{{ $permission->name }}"
                                value="{{ $permission->name }}" wire:model.live="selected_permissions">
                            <label for="{{ $permission->name }}" class="custom-control-label">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-warning"><i class="fa fa-save mr-1"></i> Update</button>
        </div>
    </form>
</div>
@script
    <script>
        window.addEventListener("update_fail", () => {
            Swal.fire({
                title: "Error!",
                text: "Failed to update Role.",
                icon: "error"
            });
        });
    </script>
@endscript
