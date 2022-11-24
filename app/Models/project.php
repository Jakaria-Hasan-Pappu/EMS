<?php

namespace App\Models;

use App\Models\client;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class project extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function employee()
    {
        return $this->belongsTo(Employee::class);


    }

    public function client(){

        return $this->belongsTo(client::class);
    }
}

