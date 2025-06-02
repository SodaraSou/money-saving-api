<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="card-title">Transaction Type</h3>
            <a href="{{ route('transaction-type.create') }}" class="btn btn-success"><i class="fa fa-plus mr-1"></i>
                Create</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction_types as $transaction_type)
                    <tr wire:key='{{ $transaction_type->id }}'>
                        <td>{{ $transaction_type->id }}</td>
                        <td>{{ $transaction_type->name }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('transaction-type.edit', $transaction_type->id) }}"
                                    class="btn btn-sm btn-warning text-white mr-2"><i class="fa fa-pen"></i></a>
                                <button class="btn btn-sm btn-danger"
                                    wire:click="$dispatch('alert_delete', {transaction_type_id: {{ $transaction_type->id }}})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@script
    <script>
        window.addEventListener("alert_delete", (event) => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#007bff",
                cancelButtonColor: "#dc3545",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('confirmed_delete', {
                        transaction_type_id: event.detail.transaction_type_id
                    });
                }
            });
        });
        window.addEventListener("delete_success", () => {
            Swal.fire({
                title: "Deleted!",
                text: "Transaction Type has been deleted.",
                icon: "success",
                confirmButtonColor: "#007bff"
            });
        });
        window.addEventListener("delete_fail", () => {
            Swal.fire({
                title: "Error!",
                text: "Failed to delete Transaction Type.",
                icon: "error"
            });
        });
    </script>
@endscript
