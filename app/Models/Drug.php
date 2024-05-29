<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'sex',
        'blood_pressure',
        'cholesterol',
        'na_to_k_ratio',
        'drug_type'
    ];

}
