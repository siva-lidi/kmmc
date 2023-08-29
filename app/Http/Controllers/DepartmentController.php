<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;

class DepartmentController extends Controller
{
    public function index(){
        $departments=Departments::all();
        return view('admin.departments.index',compact('departments'));
    }

    public function create(){
        return view('admin.departments.create');
    }

    public function store(Request $request){
        $inputs=$request->validate([
            'name'=>'required',
        ]);
        Departments::create($inputs);
        return redirect()->back();
    }

    public function edit($id){
        $department=Departments::findOrFail($id);
        return view('admin.departments.edit',compact('department'));
    }

    public function update(Request $request,$id){
        return $request;
    }
    public function destroy($id){
        
    }
}
