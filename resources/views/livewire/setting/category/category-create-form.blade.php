<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Create Category</h3>
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
                <input wire:model="name" class="form-control" placeholder="Enter Category Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Transaction Type</label>
                <select wire:model="transaction_type_id" class="form-control">
                    <option value="">Select a transaction type</option>
                    @foreach ($transaction_types as $transaction_type)
                        <option wire:key="{{ $transaction_type->id }}" value="{{ $transaction_type->id }}">
                            {{ $transaction_type->name }}
                        </option>
                    @endforeach
                </select>
                @error('transaction_type_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success"><i class="fa fa-save mr-1"></i> Save</button>
        </div>
    </form>
</div>
