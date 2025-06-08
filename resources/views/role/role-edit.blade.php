@extends('layouts.app')

@section('title')
    Role Edit
@endsection

@section('content')
    <livewire:role.role-edit-form :role="$role" />
@endsection
