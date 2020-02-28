@extends('layout.app')
@section('content')
<div>
	<div class="pull-right">
	<a href="{{route('employee.create')}}" class="btn btn-success">Crate Employee</a>
	</div><br><br>

	<?php 
		$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';

	 ?>
	<div class="pull-right">
	<form action="{{ url('employee') }}" method="get">
		<input type="text" name="keyword" value="{{ old('keyword',$keyword) }}" placeholder="Search....">
		<button type="submit">Search</button>
		
	</form>
    </div><br><br>
	
	<table class="table table-response" border="1px">
		<tr>
		<th>No</th>
		<th>Name</th>
		<th>Address</th>
		<th>Father_name</th>
		<th>NRC</th>
		<th>Action</th>
		</tr>
		@foreach($employee as $employees)
		<tr>

			<th>{{$employees->id}}</th>
			<th>{{$employees->name}}</th>
			<th>{{$employees->address}}</th>
			<th>{{$employees->father_name}}</th>
			<th>{{$employees->NRC}}</th>
			<th width="200">
				<form action="{{ route('employee.delete',$employees->id) }}"  method="POST" onsubmit="return confirm('Are You Sure?')">
        		@csrf
        		@method("DELETE")
				<a href="employee/show/{{$employees->id}}">Show</a>
				<a href="employee/edit/{{$employees->id}}">Edit</a>
				<button type="submit">Delete </button>
			    </form>
			</th>
		</tr>
		@endforeach
	</table>
	<div>
	{!! $employee->links() !!}
	</div>
</div>
@stop