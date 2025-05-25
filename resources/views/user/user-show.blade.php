@extends('layouts.app')

@section('title')
    {{ $user->name }}
@endsection

@section('content')
    <!-- Main content -->
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $user->name }}</h3>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Total Wallets</b> <a class="float-right">{{ $user->wallets->count() }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Created At</b> <a class="float-right">{{ $user->created_at->format('F j, Y g:i a') }}</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-danger btn-block"><b>Disable</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link" href="#wallet" data-toggle="tab">Wallet</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Transaction</a>
                        </li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="wallet">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Wallet Name
                                        </th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->wallets as $wallet)
                                        <tr wire:key='{{ $wallet->id }}'>
                                            <td>{{ $wallet->id }}</td>
                                            <td>{{ $wallet->name }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="{{ route('wallet.show', $wallet->id) }}"
                                                        class="btn btn-sm btn-success mr-2">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="active tab-pane" id="activity">

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- /.content -->
@endsection
