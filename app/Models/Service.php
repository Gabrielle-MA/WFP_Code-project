<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id'); //target nya category_id yg ditabel servicec, yg dihubungkan ke id ditabel categories
    }
}
