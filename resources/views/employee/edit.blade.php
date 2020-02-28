@extends('layout.app')

@section('content')
	<h3>Edit Employee</h3>
	<form action="{{ url('/employee/update',$employee->id) }}" method="post">
		@method("put")
		@csrf
		<label>Name</label><br>
		<input type="text" name="name" value="{{ old('name',$employee->name) }}"><br>

		<label>Address</label><br>
		<textarea name="address">{{ old('address',$employee->address) }}</textarea><br>
		<label>Father_Name</label><br>
		<input type="text" name="father_name" value="{{old('father_name',$employee->father_name)}}"><br>
		<label>NRC</label><br>
		<input type="text" name="NRC" value="{{old('NRC',$employee->NRC)}}"><br><br>

		<button type="submit">Update</button>
		<a href="{{url('employee')}}" class="btn btn-success">Back</a>
	</form>
@stop