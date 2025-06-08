@extends('layouts.app')

@section('title')
    User
@endsection

@section('content')
    @livewire('user.user-table')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#user>a").addClass("active");
            $("#user").addClass("menu-open");
        });
    </script>
@endsection
