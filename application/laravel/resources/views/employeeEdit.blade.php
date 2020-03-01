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
        <label for="inputPatronymic" class="col-sm-2 col-form-label">
            Patronymic
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPatronymic"
                name="patronymic">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputGender" class="col-sm-2 col-form-label">
            Gender
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputGender"
                name="gender">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputSalary" class="col-sm-2 col-form-label">
            Salary
        </label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputSalary"
                name="salary">
        </div>  
    </div>
    <div id="departments-checkboxes">
    <h2>Departments</h2>
        @foreach ($departments as $department)
        <div class="form-check">
            <input class="form-check-input" type="checkbox"
             name="department-{{ $department->getId() }}">
            <label class="form-check-label">
                {{$department->getName()}}
            </label>
        </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>

@endsection
