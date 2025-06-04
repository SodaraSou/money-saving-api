<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Edit Sub Category</h3>
    </div>
    <form wire:submit.prevent="save">
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input wire:model="name" class="form-control" placeholder="Enter Sub Category Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Category</label>
                <select wire:model="category_id" class="form-control">
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option wire:key="{{ $category->id }}" value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success"><i class="fa fa-save mr-1"></i> Update</button>
        </div>
    </form>
</div>
@script
    <script>
        window.addEventListener("update_fail", () => {
            Swal.fire({
                title: "Error!",
                text: "Failed to update Sub Category.",
                icon: "error"
            });
        });
    </script>
@endscript
