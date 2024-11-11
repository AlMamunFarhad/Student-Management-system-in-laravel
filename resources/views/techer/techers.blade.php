@extends('layout')

@section('title')
<div class="container-fluid">
    <h1>Techers</h1>
</div>
@endsection
@section('content')
<div class="container-fluid">
<div class="mb-3">
    <a href="{{ route('techers.create') }}" class="btn btn-primary">Add new</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($techers as $techer)
            <tr>
                <td scope="col">{{ $techer->name }}</td>
                <td scope="col">{{ $techer->email }}</td>
                <td scope="col">{{ $techer->address }}</td>
                <td scope="col">{{ $techer->phone }}</td>
                <td scope="col d-flex align-items-center">
                    <a href="{{ route('techers.show', $techer->id) }}"
                        class="btn d-inline-flex align-items-center me-2"><i class="fa-solid fa-eye"
                            style="font-size: 20px; color: #5d5d5e"></i></a>

                    <a href="{{ route('techers.edit', $techer->id) }}"
                        class="btn d-inline-flex align-items-center me-2"><i class="fa-solid fa-pen"
                            style="font-size: 20px; color: #5d5d5e"></i></a>

                    <form action="{{ route('techers.destroy', $techer->id) }}" method="POST" class="d-inline">
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
