<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "jobs";
    public $timestamps = true;

    protected $fillable = [
        'initiate_at', 'terminate_at', 'status', 'repeat'
    ];
}
