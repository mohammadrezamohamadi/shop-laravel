<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'expire_date',
        'code',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
