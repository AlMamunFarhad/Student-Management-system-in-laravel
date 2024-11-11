@extends('layout')

@section('title')
    <h3 class="text-center">Update Enrollment</h3>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                @if (session('success'))
                    <p style="background: #d4edda; text-align: center">{{ session('success') }}</p>
                @endif
            </div>
            <form action="{{ route('enrollment.update', $enrollment->id) }}" method="POST" class="card pt-5 pb-4 px-4">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="student_name"
                        placeholder="Student name" value="{{ $enrollment->student_name }}">
                    @error('student_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="course_name"
                        placeholder="Course name" value="{{ $enrollment->course_name }}">
                    @error('course_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="enroll_no"
                        placeholder="Enroll no" value="{{ $enrollment->enroll_no }}">
                    @error('enroll_no')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="fee"
                        placeholder="Fee" value="{{ $enrollment->fee }}">
                    @error('fee')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control" name="date"
                        placeholder="Date" value="{{ $enrollment->join_date }}">
                    @error('date')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <div class="mt-4">
                    <a href="{{ route('enrollment') }}">&#8592; Back</a>
                </div>

            </form>
        </div>
    @endsection
