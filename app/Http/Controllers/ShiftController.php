<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Shifts;


class ShiftController extends Controller
{
    public function index(){
        $shifts=Shifts::all();
        return view('admin.shifts.index',compact('shifts'));
    }

    public function create(){
        return view('admin.shifts.create');
    }

    public function store(Request $request){
        $inputs=$request->validate([
            'name'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
        ]);
        Shifts::create($inputs);
        session()->flash('shift-created'.'Shift Added');
        return redirect()->route('shifts');
    }

    public function edit($id){
        $shift=Shifts::findOrFail($id);
        return view('admin.shifts.edit',compact('shift'));
    }

    public function update(Request $request,$id){
        $shift=Shifts::findOrFail($id);
        $inputs=$request->validate([
            'name'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
        ]);
        $shift->update($inputs);
        session()->flash('shift-updated'.'Shift Updated');
        return redirect()->route('shifts');
    }

    public function destroy($id){
        $shift=Shifts::findOrFail($id);
        $shift->delete();
        session()->flash('shift-deleted'.'Shift Deleted');
        return redirect()->route('shifts');
    }
}
