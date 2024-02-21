<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catagory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['catagory', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['category'] ?? false, fn($query, $catagory) =>
            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $catagory)
            )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function catagory()
    {
        return $this->belongsTo(Catagory::class);
    }

  

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}