<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Update Permission</h3>
    </div>
    <form wire:submit.prevent="save">
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input wire:model="name" class="form-control" placeholder="Enter Permission Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
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
                text: "Failed to update Permission.",
                icon: "error"
            });
        });
    </script>
@endscript
