<?php

namespace App\Http\Controllers;

use App\Models\ShiftAllocation;
use App\Models\Shifts;
use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPSTORM_META\elementType;

class AssignShiftController extends Controller
{
    public function index(){
        $assignedShifts=ShiftAllocation::all();
        return view('admin.assign-shift.index',compact('assignedShifts'));
    }

    public function create($id){
        $staff=Staff::findOrFail($id);
        $shifts=Shifts::all();
        $currentDate=Carbon::now();
        $cuDate=$currentDate->format('y-m-d');
        return view('admin.assign-shift.create',compact('staff','shifts','cuDate'));
    }

    public function store(Request $request){
        $request->validate([
            'staff_id'=>'required',
            'staffname'=>'required',
            'shift_name'=>'required',
            'shift_starting_date'=>'required',
            'shift_ending_date'=>'required',
        ]);
        $staff=Staff::findOrFail($request->staff_id);
        if($staff->AssignedShift && $staff->AssignedShift->shift_ending_date > $request->shift_starting_date)
        {
            return redirect()->back()->with('invalid-shift', 'Staff already assigned in this timeline!');
        }
        $inputs=[
            'staff_id'=>$request->staff_id,
            'staffname'=>$request->staffname,
            'shift_ending_date'=>$request->shift_ending_date,
        ];
        $shift=Shifts::findOrFail($request->shift_name);
        $inputs['shift_name']=$shift->name;
        $inputs['shift_starting_time']=$shift->start_time;
        $inputs['shift_ending_time']=$shift->end_time;
        $shift_starting_date=request()->shift_starting_date;
        $shiftDate=explode("-",$shift_starting_date);
        $date=date('Y-m-d');
        $cudate=explode("-",$date);
        if(($cudate[1]==$shiftDate[1] && ($shiftDate[2]>=$cudate[2])) || ($shiftDate[1]>$cudate[1] && ($shiftDate[2]<=$cudate[2])))
        {
           $inputs['shift_starting_date']=$shift_starting_date;
        }
        else
        {
            return redirect()->back()->with('error', 'please enter corect date');
        }
        ShiftAllocation::create($inputs);
        return redirect()->route('assign-shift');
    }
    public function edit($id){
        return view('admin.assign-shift.edit');
    }

    public function update($id){
        //
    }

    public function destroy($id){
        //
    }
}

