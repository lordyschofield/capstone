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
        'dealContractNo',
        'deal_value',
        'dealOpenDate',
        'deal_CloseDate',
        'dealClosed'
        
    ];
}
