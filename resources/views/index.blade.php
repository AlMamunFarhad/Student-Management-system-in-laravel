@extends('layout')

@section('title')
<div class="container-fluid">
    <h1>All Students</h1>
</div>
@endsection
@section('search')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto">
        <form class="d-flex ms-auto" role="search">
            <div class="d-flex justify-content-center h-100">
                <div class="search">
                    <input type="text" class="search-input" placeholder="search..."
                        name="">
                    <a href="#" class="search-icon">
                        Search
                    </a>
                </div>
            </div>
        </form>
    </ul>
</div>
@endsection
@section('content')
<div class="container-fluid">
<div class="mb-3">
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add new</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td scope="col">
                    <img src="{{asset("/images/{$student->photo}")}}" alt="" width="80" class="rounded">
                </td>
                <td scope="col">{{ $student->name }}</td>
                <td scope="col">{{ $student->address }}</td>
                <td scope="col">{{ $student->phone }}</td>
                <td scope="col d-flex align-items-center">
                    <a href="{{ route('students.show', $student->id) }}"
                        class="btn d-inline-flex align-items-center me-2"><i class="fa-solid fa-eye"
                            style="font-size: 20px; color: #5d5d5e"></i></a>

                    <a href="{{ route('students.edit', $student->id) }}"
                        class="btn d-inline-flex align-items-center me-2"><i class="fa-solid fa-pen"
                            style="font-size: 20px; color: #5d5d5e"></i></a>

                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn ms-2 d-inline-flex align-items-center"><i
                                class="fa-regular fa-trash-can" style="font-size: 20px; color: #dc3545"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
