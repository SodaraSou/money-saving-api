<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Create Permission</h3>
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
            <button type="submit" class="btn btn-success"><i class="fa fa-save mr-1"></i> Save</button>
        </div>
    </form>
</div>
@script
    <script>
        window.addEventListener("create_fail", () => {
            Swal.fire({
                title: "Error!",
                text: "Failed to create Permission.",
                icon: "error"
            });
        });
    </script>
@endscript
