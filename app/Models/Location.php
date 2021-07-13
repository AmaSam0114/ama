<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "locations";
    public $timestamps = true;

    protected $fillable = [
        'no', 'street', 'city', 'longitude', 'latitude', 'contact_person', 'contact_number', 'fk_location_job_id'
    ];
}
