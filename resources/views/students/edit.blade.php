@extends('layouts.app')

@section('content')
<h2>Edit Student</h2>
<form action="{{ route('students.update', $student) }}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
@error('name')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label>Email</label>
<input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
@error('email')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" value="{{ $student->phone }}" class="form-control" required>

@error('phone')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label>Address</label>
<input type="text" name="address" value="{{ $student->address }}" class="form-control" required>
@error('address')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Update</button>
<a class="btn btn-secondary" href="{{ route('students.index') }}">Back</a>
</form>
@endsection
