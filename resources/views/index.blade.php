@extends('layout')

@section('content')

@section('title')
    <h1 class="text-center all-students">All Students</h1>
@endsection
<div class="mb-3">
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add new</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td scope="col">{{ $student->name }}</td>
                <td scope="col">{{ $student->address }}</td>
                <td scope="col">{{ $student->phone }}</td>
                <td scope="col">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn"><i class="fa-solid fa-pen"
                            style="font-size: 20px; color: #3e64ff"></i></a>
                    <a href="" class="btn ms-2"><i class="fa-regular fa-trash-can"
                            style="font-size: 20px; color: #dc3545"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
