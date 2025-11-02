<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    Use HasFactory;
    public function posts(): HasMany
    {
        // One To Many Relationship
        return $this->hasMany(Post::class);
    }
}
