@extends('layouts.app')

@section('title')
    Transaction Edit
@endsection

@section('content')
    <livewire:setting.transaction.transaction-type-edit-form :transaction_type="$transaction_type" />
@endsection
