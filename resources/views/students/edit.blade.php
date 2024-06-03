<!-- resources/views/students/create.blade.php & edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>{{ isset($student) ? 'Edit Student' : 'Add Student' }}</h2>
            <form action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}" method="POST">
                @csrf
                @if(isset($student))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ isset($student) ? $student->name : '' }}">
                </div>
                <div class="form-group">
                    <label for="grade">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" value="{{ isset($student) ? $student->grade : '' }}">
                </div>
                <div class="form-group">
                    <label for="mark">Mark</label>
                    <input type="number" class="form-control" id="mark" name="mark" value="{{ isset($student) ? $student->mark : '' }}">
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($student) ? 'Update' : 'Save' }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
