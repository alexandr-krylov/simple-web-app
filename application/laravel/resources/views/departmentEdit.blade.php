@extends('layouts.app')

@section('title', 'Department')

@section('h1', 'department')

@section('content')
<form class="needs-validation" method="post">
@csrf
    <div class="form-group row">
        <label for="inputDepartment" class="col-sm-2 col-form-label">
            <snap class="text-danger">*</snap>
            Department
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputDepartment"
                name="name" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>

@endsection
<!----<script src="/js/departmentEdit.js"></script>---->