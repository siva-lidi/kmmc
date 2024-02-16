<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Admin extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $guarded=[];
    protected $table='admin';
    protected $guard='admin';
    protected $connection='mysql2';

    public function getAuthPassword()
    {
        return $this->Password;
    }
}
