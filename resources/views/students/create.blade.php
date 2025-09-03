@extends('layouts.app')

@section('content')
<h2>Add New Student</h2>
<form action="{{ route('students.store') }}" method="POST">
@csrf
<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
@error('name')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
@error('email')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control" required>
@error('phone')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label>Address</label>
<input type="text" name="address" class="form-control" required>
@error('address')
<div class="alert alert-danger mt-1">{{ $message }}</div>

@enderror
<div class="mb-3">
<label>University</label>
<select name="university_id" class="form-control">
<option value="">Select a University</option>
@foreach ($universities as $university)
<option value="{{ $university->id }}">{{ $university->name }}</option>
@endforeach

</select>
@error('university_id')
<div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a class="btn btn-secondary" href="{{ route('students.index') }}">Back</a>
</form>
@endsection
