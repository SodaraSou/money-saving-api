@extends('layouts.app')

@section('title')
    Edit Sub Category
@endsection

@section('content')
    <livewire:setting.sub-category.sub-category-edit-form :sub_category="$sub_category" />
@endsection
