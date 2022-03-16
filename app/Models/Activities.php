<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $table ='activities_tables';

    protected $fillable = [
        'activity_type',
        'subject',
        'status',
        'date',
        'time',
        'priority',
        'activity_owner'
        
    ];
}
