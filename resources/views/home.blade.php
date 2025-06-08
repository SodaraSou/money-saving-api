@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    @livewire('home.overall-statistic')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#dashboard>a").addClass("active");
            $("#dashboard").addClass("menu-open");
        });
    </script>
@endsection
