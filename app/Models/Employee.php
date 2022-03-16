<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'nickname',
        'email',
        'birthday',
        'mobile_phone',
        'address',
        'designation',
    ];

    protected $keyType = 'string';

    public $incrementing = false;

    public function getFirstLastNameAttribute(): string
    {
        return implode(' ', [
            $this->attributes['first_name'],
            $this->attributes['last_name']
        ]);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
        
    }
}
