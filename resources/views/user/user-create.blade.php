@extends('layouts.app')

@section('title')
    Create
@endsection

@section('content')
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
