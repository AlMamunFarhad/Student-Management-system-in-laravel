@extends('layout')

@section('title')
    <h1 class="text-center">Add User</h1>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                @if (session('success'))
                    <p style="background: #d4edda; text-align: center">{{ session('success') }}</p>
                @endif
            </div>
            <form action="{{ route('students.store') }}" method="POST" class="card pt-5 pb-4 px-4" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="Name">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="Email">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                        placeholder="Address">
                    @error('address')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control @error('number') is-invalid @enderror" name="phone"
                        placeholder="Phone">
                    @error('phone')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <input type="file" class="form-control" name="photo">
                    @error('photo')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <div class="mt-4">
                    <a href="{{ route('home') }}">&#8592; Back</a>
                </div>

            </form>
        </div>
    @endsection

   
