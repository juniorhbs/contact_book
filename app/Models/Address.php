<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $casts = [
        'user_id' => 'int'
    ];

    protected $fillable = [
        'user_id',
        'zipcode',
        'state',
        'city',
        'district',
        'street',
        'number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
