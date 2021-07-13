<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "employees";
    public $timestamps = true;

    protected $fillable = [
        'fk_employee_user_id', 'first_name', 'last_name', 'image', 'contact_no'
    ];
}
