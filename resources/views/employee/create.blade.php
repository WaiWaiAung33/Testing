@extends('layout.app')
@section('content')
<h3>Create Employee Table</h3>
<form action="{{ url('/employee/store') }}" method="post">
	@csrf
	<label>Name</label><br>
	<input type="text" name="name" value="{{old('name')}}" ><br>
	<label>Address</label><br>
	<input type="text" name="address" value="{{old('address')}}"><br>
	<label>Father_Name</label><br>
	<input type="text" name="father_name" value="{{old('father_name')}}"><br>
	<label>NRC</label><br>
	<input type="text" name="NRC" value="{{old('NRC')}}"><br><br>
	<button type="submit">Save</button>
	<a href="{{ url('employee') }}" class="btn btn-success">Back</a><br>


</form>
@stop