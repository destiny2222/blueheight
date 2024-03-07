<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    public $fillable = [ 
        'title',
        'slug',
        'image',
        'description',
        'is_featured',
    ];


    public function getRouteKeyName(){
        return 'slug';
    }
    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }
}
