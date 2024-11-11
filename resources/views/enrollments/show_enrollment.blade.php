@extends('layout')

@section('title')
    <h4 class="text-center mb-5">View Enrollment</h4>
@endsection

@section('content')
    <div class="row add-student shadow-sm justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped table-hover">
                <tr>
                    <th style="color: #ff5722"><i class="fa-solid fa-user"></i>Student Name</th>
                    <td>{{ $show_enroll->student_name }}</td>
                </tr>
                <tr>
                    <th style="color: #9d60ff"><i class="fa-solid fa-phone"></i> Course Name</th>
                    <td>{{ $show_enroll->course_name }}</td>
                </tr>
                <tr>
                    <th style="color: #ff48a4"><i class="fa-solid fa-envelope"></i> Enroll no</th>
                    <td><a href="">{{ $show_enroll->enroll_no }}</a></td>
                </tr>
                <tr>
                    <th style="color: #5bbd2a"><i class="fa-solid fa-location-dot"></i> Fee</th>
                    <td>{{ $show_enroll->fee }}</td>
                </tr>
                <tr>
                    <th style="color: #9d60ff"><i class="fa-solid fa-location-dot"></i> Date</th>
                    <td>{{ $show_enroll->join_date }}</td>
                </tr>
            </table>
            <div class="back-btn float-right">
                <a href="{{ route('enrollment') }}" class="text-primary rounded">&#8592; Back</a>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <style>
        .add-student {
            background: #fff;
            padding: 4rem 2rem;
            border-radius: 1rem;
        }
    </style>
@endpush
