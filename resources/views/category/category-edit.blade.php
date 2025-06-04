@extends('layouts.app')

@section('title')
    Edit Category
@endsection

@section('content')
    <livewire:setting.category.category-edit-form :category="$category" />
@endsection
