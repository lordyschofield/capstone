<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $table ='contacts';

    protected $fillable = [
        'contact_name',
        'account',
        'email',
        'phone',
        'type',
        'source',
        'contact_owner'
        
    ];

}
