<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{
    use HasFactory;
    
    protected $table ='deals';

    protected $fillable = [
        'deal_name',
        'deal_owner',
        'deal_progress',
        'dealcontractno',
        'deal_value',
        'dealopendate',
        'deal_closedate',
        'dealclosed'
        
    ];
}
