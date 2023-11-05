<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function course()
    {
        return $this->hasMany(course::class);
    }

    public function sub_categories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function main_category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


}
