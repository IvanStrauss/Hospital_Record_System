@extends('layout.app')

@section('title', 'Add New Doctor')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add New Doctor</h2>

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

    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Doctor Name</label>
            <input type="text" name="name" class="form-control" placeholder="e.g. Dr. Ivan Ronda" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Specialty</label>
            <input type="text" name="specialty" class="form-control" placeholder="e.g. Cardiology" value="{{ old('specialty') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Doctor</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
