<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\attendance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class attendance extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
