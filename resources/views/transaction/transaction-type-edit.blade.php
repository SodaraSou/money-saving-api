@extends('layouts.app')

@section('title')
    Transaction Edit
@endsection

@section('content')
    <livewire:setting.transaction.transaction-type-edit-form :transaction_type="$transaction_type" />
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#setting>a").addClass("active");
            $("#setting").addClass("menu-open");
            $("#transaction-type").addClass("my-active");
        });
    </script>
@endsection
