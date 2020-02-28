@extends('layout.app')

@section('content')
<hr>
	<h3>Employee Table</h3>
    <div class="pull-right">
	<a href="{{ url('employee') }}">Back</a><br>
    </div>
     <table class="table table-response" border="1px">
		<tr>
		<th>Name</th>
		<th>Address</th>
		<th>father_name</th>
		<th>NRC</th>
		<th>Created_at</th>
		</tr>
		<tr>
			<th>{{$employee->name}}</th>
			<th>{{$employee->address}}</th>
			<th>{{$employee->father_name}}</th>
			<th>{{$employee->NRC}}</th>
			<th>{{$employee->created_at}}</th>
		</tr>
	</table>
	
	<hr>
@stop