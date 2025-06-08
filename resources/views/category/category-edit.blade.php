@extends('layouts.app')

@section('title')
    Edit Category
@endsection

@section('content')
    <livewire:setting.category.category-edit-form :category="$category" />
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
