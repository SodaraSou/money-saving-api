<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <input wire:model.live.debounce.500ms="search" type="text" class="form-control"
                    placeholder="Search Wallet" />
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
    <div class="card-body">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Wallet Name
                    </th>
                    <th>
                        Wallet Holder
                    </th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wallets as $wallet)
                    <tr wire:key='{{ $wallet->id }}'>
                        <td>{{ $wallet->id }}</td>
                        <td>{{ $wallet->name }}</td>
                        <td>{{ $wallet->user->name }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('wallet.show', $wallet->id) }}" class="btn btn-sm btn-success mr-2">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                {{-- <a href="{{ route('wallet.edit', $wallet->id) }}" class="btn btn-sm btn-primary mr-2">
                                <i class="fa fa-pen"
                                aria-hidden="true"></i>
                            </a> --}}
                                {{-- <button class="btn btn-sm btn-danger"
                                    wire:click="$dispatch('alert-delete', {id: {{ $wallet->id }}})">
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
        {{ $wallets->links() }}
    </div>
</div>
