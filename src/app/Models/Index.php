<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_name',
        'first_name',
        'sex',
        'email',
        'tel',
        'address',
        'building',
        'kinds',
        'oder'
    ];
    
}
