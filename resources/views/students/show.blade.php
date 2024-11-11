@extends('layout')

@section('title')
    <h4 class="text-center mb-5">View student</h4>
@endsection

@section('content')
    <div class="row add-student shadow-sm">
        <div class="col-md-4 d-flex justify-content-center">
            <img src="{{ asset("/images/{$found_student->photo}") }}" alt="" class="img-fluid rounded-lg"
                width="500">
        </div>
        <div class="col-md-8">
            <table class="table table-striped table-hover">
                <tr>
                    <th style="color: #ff5722"><i class="fa-solid fa-user"></i> Name</th>
                    <td>{{ $found_student->name }}</td>
                </tr>
                <tr>
                    <th style="color: #9d60ff"><i class="fa-solid fa-phone"></i> Phone</th>
                    <td>{{ $found_student->phone }}</td>
                </tr>
                <tr>
                    <th style="color: #ff48a4"><i class="fa-solid fa-envelope"></i> Email</th>
                    <td><a href="">{{ $found_student->email }}</a></td>
                </tr>
                <tr>
                    <th style="color: #5bbd2a"><i class="fa-solid fa-location-dot"></i> Address</th>
                    <td>{{ $found_student->address }}</td>
                </tr>
            </table>
            <div class="back-btn float-right">
                <a href="{{ route('home') }}" class="text-primary rounded"
                    style="background: #ececec; padding: 10px;">&#8592; Back</a>
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
