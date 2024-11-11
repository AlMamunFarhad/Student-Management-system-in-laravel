@extends('layout')

@section('title')
<div class="container-fluid">
    <h1>Enrollments</h1>
</div>
@endsection
@section('content')
<div class="container-fluid">
<div class="mb-3">
    <a href="{{ route('enrollment.create') }}" class="btn btn-primary">Add Enrollment</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Enrollment No</th>
            <th scope="col">Student Name</th>
            <th scope="col">Course Name</th>
            <th scope="col">Fee</th>
            <th scope="col">Join Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($enrollments as $enrollment)
            <tr>
                <td scope="col">{{ $enrollment->enroll_no }}</td>
                <td scope="col">{{ $enrollment->student_name }}</td>
                <td scope="col">{{ $enrollment->course_name }}</td>
                <td scope="col">{{ $enrollment->fee }}</td>
                <td scope="col">{{ $enrollment->join_date }}</td>
                <td scope="col d-flex align-items-center">
                    <a href="{{ route('enrollment.show', $enrollment->id) }}"
                        class="btn d-inline-flex align-items-center me-2"><i class="fa-solid fa-eye"
                            style="font-size: 20px; color: #5d5d5e"></i></a>

                    <a href="{{ route('enrollment.edit', $enrollment->id) }}"
                        class="btn d-inline-flex align-items-center me-2"><i class="fa-solid fa-pen"
                            style="font-size: 20px; color: #5d5d5e"></i></a>

                    <form action="{{ route('enrollment.destroy', $enrollment->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn ms-2 d-inline-flex align-items-center"><i
                                class="fa-regular fa-trash-can" style="font-size: 20px;"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
