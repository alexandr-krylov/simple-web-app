@extends('layouts.app')

@section('title', 'Department')

@section('h1', 'department')

@section('content')
<div class="d-flex justify-content-end">
    <a href="/department/edit" class="btn btn-primary">
        Add department
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th colspan="2">NAME</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($rows as $row)
        <tr>
            <td>
                <a href="/department/edit/{{ $row->getId() }}">
                    {{ $row->getName() }}
                </a>
            </td>
            <td>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-danger"
                     data-purpose="delete-department"
                     data-department-id="{{ $row->getId() }}">Delete</button>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
@section('script')
<script src="/js/department.js"></script>
@endsection