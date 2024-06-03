<!-- resources/views/students/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Students</h2>
            <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Mark</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->grade }}</td>
                        <td>{{ $student->mark }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
