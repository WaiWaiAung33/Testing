<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
   public function index(Request $request){
    $keyword = $request->keyword;
   	$employee = new Employee();
    if($keyword!=''){
        $employee = $employee->where('name','like','%'.$keyword.'%');
      }
   	$employee = $employee->orderBy('id','desc')->paginate(6);
   	return view('employee.index',compact('employee'));
   }

   public function create(Request $request){
   	return view('employee.create');
   }

   public function store(Request $request){
    $employee = new Employee();

    	 $validatedData = $request->validate([
	        'name' => 'required|max:255',
	        'address' => 'required',
	        'father_name'=>'required',
	        'NRC'=>'required'
	    ]);

    	$data = [
    		'name'=>$request->name,
    		'address' => $request->address,
    		'father_name'=>$request->father_name,
    		'NRC'=>$request->NRC
    	];


    	$res = $employee->create($data);
    	return redirect('employee');
   }

   public function show($id)
    {
      $employee = Employee::findorfail($id);
      return view('employee.show',compact('employee'));
    }
    public function edit($id){
      $employee=Employee::findorfail($id);
      return view('employee.edit',compact('employee'));
    }
    public function update(Request $request,$id)
    {
      $employee = Employee::findorfail($id);


      $validatedData = $request->validate([
          'name' => 'required|max:255',
          'address' => 'required',
          'father_name'=>'required',
          'NRC'=>'required',
      ]);

      $data = [
        'name'=>$request->name,
        'address' => $request->address,
        'father_name'=>$request->father_name,
        'NRC'=>$request->NRC
      ];


      $res = $employee->update($data);

      return redirect('employee');
    }
    public function delete($id)
    {
      $employee = Employee::findorfail($id);

      $employee->delete();

      return redirect('employee');
    }
}
