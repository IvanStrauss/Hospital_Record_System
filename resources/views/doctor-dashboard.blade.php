@extends('layout.app')

@section('title', 'Doctor Dashboard')

@section('content')
    <h1>Welcome, Doctor {{ auth()->user()->name }}!</h1>
    <p>This is your personalized dashboard.</p>
@endsection

