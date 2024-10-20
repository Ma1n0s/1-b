<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterCompany extends Model
{
    protected $fillable = [
        'inn_comp',
        'name_comp',
        'email',
        'name',
        'is_confirmed'
    ];
}
