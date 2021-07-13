<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeWorkCycle extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "employee_work_cycles";
    public $timestamps = true;

    protected $fillable = [
        'fk_work_cycle_id', 'fk_employee_id', 'check_in', 'check_out'
    ];
}
