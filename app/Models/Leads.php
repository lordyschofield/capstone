<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    use HasFactory;
    protected $table ='leads';

    protected $fillable = [
        'lead_name',
        'company',
        'email',
        'phone',
        'lead_source',
        'lead_owner',
        'lead_status'
        
    ];

   
}
