@extends('layouts.app')

@section('title', 'Employee')

@section('h1', 'employee')

@section('content')
<div class="d-flex justify-content-end">
    <a href="/employee/edit" class="btn btn-primary">
        Add employee
    </a>
</div>
    <p>This is my body content for employee.</p>
@endsection