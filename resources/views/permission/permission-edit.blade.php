@extends('layouts.app')

@section('title')
    Edit Permission
@endsection

@section('content')
    <livewire:permission.permission-edit-form :permission="$permission" />
@endsection
