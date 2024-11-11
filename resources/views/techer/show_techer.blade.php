@extends('layout')

@section('title')
    <h4 class="text-center mb-5">View techer</h4>
@endsection

@section('content')
    <div class="row add-student shadow-sm justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped table-hover">
                <tr>
                    <th style="color: #ff5722"><i class="fa-solid fa-user"></i> Name</th>
                    <td>{{ $techer_id->name }}</td>
                </tr>
                <tr>
                    <th style="color: #9d60ff"><i class="fa-solid fa-phone"></i> Phone</th>
                    <td>{{ $techer_id->phone }}</td>
                </tr>
                <tr>
                    <th style="color: #ff48a4"><i class="fa-solid fa-envelope"></i> Email</th>
                    <td><a href="">{{ $techer_id->email }}</a></td>
                </tr>
                <tr>
                    <th style="color: #5bbd2a"><i class="fa-solid fa-location-dot"></i> Address</th>
                    <td>{{ $techer_id->address }}</td>
                </tr>
                <tr>
                    <th style="color: #9d60ff"><i class="fa-solid fa-location-dot"></i> Address</th>
                    <td>{{ $techer_id->course_techer }}</td>
                </tr>
            </table>
            <div class="back-btn float-right">
                <a href="{{ route('techer') }}" class="text-primary rounded">&#8592; Back</a>
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
