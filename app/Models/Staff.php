<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function shift(){
        return $this->hasOne(Shifts::class);
    }

    public function AssignedShift(){
        return $this->hasOne(ShiftAllocation::class);
    }
}
