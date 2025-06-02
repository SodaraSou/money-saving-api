<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h3 class="card-title">User</h3>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center mr-2">
                    <input wire:model.live.debounce.500ms="search" type="text" class="form-control"
                        placeholder="Search user" />
                </div>
                <div>
                    <select wire:model.live='perPage' class="form-control mr-2" aria-label="Default select example">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>
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
                @foreach ($users as $user)
                    <tr wire:key='{{ $user->id }}'>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-success mr-2">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                {{-- <button class="btn btn-sm btn-danger"
                                    wire:click="$dispatch('alert-delete', {id: {{ $user->id }}})">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{ $users->links() }}
    </div>
</div>
