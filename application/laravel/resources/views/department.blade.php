@extends('layouts.app')

@section('title', 'Department')

@section('h1', 'department')

@section('content')
<div class="d-flex justify-content-end">
    <a href="/department/edit" class="btn btn-primary">
        Add department
    </a>
</div>
    <p>This is my body content for department.</p>
@endsection
<script src="/js/department.js"></script>