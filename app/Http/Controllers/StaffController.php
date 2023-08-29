<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $staffs=Staff::all();
        return view('admin.staffs.index',compact('staffs'));
    }

    public function create(){
        return view('admin.staffs.create');
    }

    public function store(Request $request){
        $inputs=$request->validate([
            'name'=>'required',
        ]);
        Staff::create($inputs);
        session()->flash('staff-created'.'Staff Added');
        return redirect()->route('staffs');
    }

    public function view(){
        $staffs=Staff::all();
        return view('admin.staffs.view',compact('staffs'));
    }
}
