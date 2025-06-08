@extends('layouts.app')

@section('title')
    Category
@endsection

@section('content')
    @livewire('setting.category.category-table')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#setting>a").addClass("active");
            $("#setting").addClass("menu-open");
            $("#category").addClass("my-active");
        });
    </script>
@endsection
