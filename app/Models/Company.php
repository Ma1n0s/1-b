<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'inn_comp',
        'name_comp',
        'email',
        'name',
        'is_confirmed'
    ];
}
