@extends('layouts.app')

@section('content')
<h2>Student Details</h2>
<div class="card">
<div class="card-body">
<p><strong>ID:</strong> {{ $student->id }}</p>
<p><strong>Name:</strong> {{ $student->name }}</p>
<p><strong>Email:</strong> {{ $student->email }}</p>
<p><strong>Phone:</strong> {{ $student->phone }}</p>

<p><strong>Address:</strong> {{ $student->address }}</p>
</div>
</div>
<a class="btn btn-primary mt-3" href="{{ route('students.index') }}">Back</a>
@endsection
