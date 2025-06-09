@extends('layouts.app')

@section('title')
    Create Permission
@endsection

@section('content')
    @livewire('permission.permission-create-form')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#security>a").addClass("active");
            $("#security").addClass("menu-open");
            $("#permission>a").addClass("active");
        });
    </script>
@endsection
