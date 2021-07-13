<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkCycleTask extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "work_cycle_tasks";
    public $timestamps = true;

    protected $fillable = [
        'fk_work_cycle_tasks_work_cycle_id', 'fk_work_cycle_tasks_task_id', 'start_time', 'complete_time', 'inspection_remark', 'client_remark'
    ];
}
