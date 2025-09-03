@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3">
<h2>Students List</h2>
<a class="btn btn-primary" href="{{ route('students.create') }}">Add New
Student</a>
</div>
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>University</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($students as $student)
<tr>
<td>{{$loop->iteration }}</td>
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->phone }}</td>
<td>{{ $student->address }}</td>
<td>{{ $student->university->name?? 'N/A' }}</td>
<td>
<a class="btn btn-info btn-sm"
href="{{ route('students.show', $student) }}">Show</a>
<a class="btn btn-warning btn-sm"
href="{{ route('students.edit', $student) }}">Edit</a>
<form action="{{ route('students.destroy', $student) }}"
method="POST" class="d-inline">
@csrf

@method('DELETE')

<button type="submit" class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure?')">Delete</button>
</form>
</td>
</tr>

@endforeach
</tbody>
</table>
{{ $students->links() }}
@endsection
