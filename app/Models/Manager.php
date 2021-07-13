<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manager extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "managers";
    public $timestamps = true;

    protected $fillable = [
        'fk_manager_user_id', 'first_name', 'last_name', 'image', 'contact_no'
    ];
}
