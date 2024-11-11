@extends('layout')

@section('title')
<div class="container-fluid">
    <h1>Payments</h1>
</div>
@endsection
@section('content')
<div class="container-fluid">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Enroll No</th>
            <th scope="col">Student Name</th>
            <th scope="col">Course Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Join Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($payments as $payment)
            <tr>
                <td scope="col">{{ $payment->enrollment->enroll_no }}</td>
                <td scope="col">{{ $payment->enrollment->student_name }}</td>
                <td scope="col">{{ $payment->enrollment->course_name }}</td>
                <td scope="col">{{ $payment->enrollment->fee }}</td>
                <td scope="col">{{ $payment->enrollment->join_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
