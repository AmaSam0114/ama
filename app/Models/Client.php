<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "clients";
    public $timestamps = true;

    protected $fillable = [
        'fk_client_user_id', 'first_name', 'last_name', 'image', 'contact_no'
    ];
}
