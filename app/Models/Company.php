<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    //Scheduled to be updated later for DB Protection
    protected $fillable = [
        'name',
        'phone',
        'email',
        'website',
        'address',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function developers(): HasMany
    {
        return $this->hasMany(Developer::class);
    }
}
