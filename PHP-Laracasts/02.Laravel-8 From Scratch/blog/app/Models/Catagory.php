<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function posts(){
        //hasOne, hasMany, belogsTo,belogsToMany
        return $this->hasMany(Post::class);
    }
}
