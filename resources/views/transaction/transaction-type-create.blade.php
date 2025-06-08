@extends('layouts.app')

@section('title')
    Transaction Type Create
@endsection

@section('content')
    <livewire:setting.transaction.transaction-type-create-form />
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
