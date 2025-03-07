<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioCategory extends Model
{
    /** @use HasFactory<\Database\Factories\PortofolioCategoryFactory> */
    use HasFactory;

    // generate fillable array
    protected $fillable = ['name', 'slug'];
}
