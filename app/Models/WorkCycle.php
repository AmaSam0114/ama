<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkCycle extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "work_cycles";
    public $timestamps = true;

    protected $fillable = [
        'schedule_date', 'status', 'manager_review', 'supervisor_review', 'client_review'
    ];
}
