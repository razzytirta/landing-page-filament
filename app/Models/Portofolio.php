<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    /** @use HasFactory<\Database\Factories\PortofolioFactory> */
    use HasFactory;

    //create fillable
    protected $fillable = ['title', 'description', 'image', 'category_id'];

    //create relationship to PortofolioCategory
    public function category()
    {
        return $this->belongsTo(PortofolioCategory::class);
    }

}
