<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Edit Transaction Type</h3>
    </div>
    <form wire:submit.prevent="save">
        <div class="card-body">
            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div class="form-group">
                <label>Name</label>
                <input wire:model="name" class="form-control" placeholder="Enter Transaction Type Name">
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
                text: "Failed to update Transaction Type.",
                icon: "error"
            });
        });
    </script>
@endscript
