<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'status'
    ];

}
