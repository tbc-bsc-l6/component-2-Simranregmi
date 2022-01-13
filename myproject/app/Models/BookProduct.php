<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'firstname',
        'surname',
        'price',
        'pages'
    ];
}
