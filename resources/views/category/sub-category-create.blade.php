@extends('layouts.app')

@section('title')
    Create Sub Category
@endsection

@section('content')
    <livewire:setting.sub-category.sub-category-create-form />
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#setting>a").addClass("active");
            $("#setting").addClass("menu-open");
            $("#sub-category").addClass("my-active");
        });
    </script>
@endsection
