@extends('layouts.app')

@section('title')
    Permission
@endsection

@section('content')
    @livewire('permission.permission-table')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#security>a").addClass("active");
            $("#security").addClass("menu-open");
            $("#permission").addClass("my-active");
        });
    </script>
@endsection
