<?php

namespace App\Models;


use App\Traits\Post\PostTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, PostTraits;
    protected $fillable =
        [self::COLUMN_TITLE, self::COLUMN_CONTENT, self::COLUMN_CATEGORY];
}
