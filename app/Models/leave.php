<?php

namespace App\Models;

use App\Models\leave;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class leave extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}


