@extends('layouts.app')

@section('title')
    Edit Permission
@endsection

@section('content')
    <livewire:permission.permission-edit-form :permission="$permission" />
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
