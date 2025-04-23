@extends('layout.app')

@section('title', 'Edit Doctor')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Doctor</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Please fix the following issues:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Doctor Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $doctor->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Specialty</label>
            <input type="text" name="specialty" class="form-control" value="{{ old('specialty', $doctor->specialty) }}">
        </div>

        <button type="submit" class="btn btn-success">Update Doctor</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
