@extends('layouts.app')

@section('title')
    Edit Sub Category
@endsection

@section('content')
    <livewire:setting.sub-category.sub-category-edit-form :sub_category="$sub_category" />
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#setting>a").addClass("active");
            $("#setting").addClass("menu-open");
            $("#sub-category>a").addClass("active");
        });
    </script>
@endsection
