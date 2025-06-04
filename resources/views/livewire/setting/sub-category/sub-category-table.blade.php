<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="card-title">Sub Category</h3>
            <a href="{{ route('sub-category.create') }}" class="btn btn-success"><i class="fa fa-plus mr-1"></i>
                Create</a>
        </div>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <input wire:model.live.debounce.500ms="search" type="text" class="form-control"
                    placeholder="Search category" />
                <div x-data="{ open: false }" x-on:keydown.escape.stop="open = false" x-on:mousedown.away="open = false"
                    class="btn-group d-block d-md-inline">
                    <button x-on:click="open = !open" type="button"
                        class="btn dropdown-toggle d-block w-100 d-md-inline">
                        Filters
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu w-100" x-bind:class="{ 'show': open }" role="menu">
                        <li>
                            <div class="p-2">
                                <label class="mb-2">
                                    Category
                                </label>
                                <select wire:model.live='filters.category_id' class="form-control mr-2">
                                    <option value="">Any</option>
                                    @foreach ($categories as $item)
                                        <option wire:key="{{ $item->id }}" value="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <select wire:model.live='per_page' class="form-control">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>
        @if ($filters['category_id'])
            <div class="my-2">Applied Filters:
                @if ($filters['category_id'])
                    <span wire:key="filter-pill-gender"
                        class="badge badge-pill badge-info d-inline-flex align-items-center">
                        Category: {{ $selected_category->name }}
                    </span>
                    <a href="#" wire:click.prevent="resetFilters" class="badge badge-pill badge-light">Clear</a>
                @endif
            </div>
        @endif
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Created by
                    </th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sub_categories as $sub_category)
                    <tr wire:key='{{ $sub_category->id }}'>
                        <td>{{ $sub_category->id }}</td>
                        <td>{{ $sub_category->name }}</td>
                        <td>{{ $sub_category->category->name }}</td>
                        <td>{{ $sub_category->user->name }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('sub-category.edit', $sub_category->id) }}"
                                    class="btn btn-sm btn-warning text-white mr-2"><i class="fa fa-pen"></i></a>
                                <button class="btn btn-sm btn-danger"
                                    wire:click="$dispatch('alert_delete', {sub_category_id: {{ $sub_category->id }}})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{ $sub_categories->links() }}
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
                    $wire.dispatch('confirmed_delete', {
                        sub_category_id: event.detail.sub_category_id
                    });
                }
            });
        });
        window.addEventListener("delete_success", () => {
            Swal.fire({
                title: "Deleted!",
                text: "Sub Category has been deleted.",
                icon: "success",
                confirmButtonColor: "#007bff"
            });
        });
        window.addEventListener("delete_fail", () => {
            Swal.fire({
                title: "Error!",
                text: "Failed to delete Sub Category.",
                icon: "error"
            });
        });
    </script>
@endscript
