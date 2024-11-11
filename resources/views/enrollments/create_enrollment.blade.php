@extends('layout')

@section('title')
    <h4 class="text-center">Add enrollment</h4>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                @if (session('success'))
                    <p style="background: #d4edda; text-align: center">{{ session('success') }}</p>
                @endif
            </div>
            <form action="{{ route('enrollment.store') }}" method="POST" class="card pt-5 pb-4 px-4" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="student_name"
                        placeholder="Student name">
                    @error('student_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="course_name"
                        placeholder="Course name">
                    @error('course_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="enroll_no"
                        placeholder="Enroll no">
                    @error('enroll_no')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="fee"
                        placeholder="Fee">
                    @error('fee')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control" name="date"
                        placeholder="Date">
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

   
