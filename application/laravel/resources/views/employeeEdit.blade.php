@extends('layouts.app')

@section('title', 'Employee edit')

@section('h1', 'employee edit   ')

@section('content')
<form class="needs-validation" method="post">
@csrf
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">
            <snap class="text-danger">*</snap>
            Name
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName"
                name="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputSurname" class="col-sm-2 col-form-label">
            <snap class="text-danger">*</snap>
            Surname
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSurname"
                name="surname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">
            <snap class="text-danger">*</snap>
            Name
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName"
                name="name" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>

@endsection
