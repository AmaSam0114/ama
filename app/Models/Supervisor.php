<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "supervisors";
    public $timestamps = true;

    protected $fillable = [
        'fk_supervisor_user_id', 'first_name', 'last_name', 'image', 'contact_no'
    ];
}
