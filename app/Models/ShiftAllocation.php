<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftAllocation extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function staff(){
        return $this->belongsTo(Staffs::class);
    }
}
