@extends('layouts.app')

@section('title', 'Department')

@section('h1', 'department')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection