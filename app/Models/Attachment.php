<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "attachments";
    public $timestamps = true;

    protected $fillable = [
        'fk_attachment_job_id', 'fk_attachment_task_id', 'url', 'name', 'type', 'size'
    ];
}
