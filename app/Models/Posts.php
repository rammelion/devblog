<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'featuredImage',
        'tags',
        'body',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function scopeFilter($query, array $filters) {
        //  tag filter
        if($filters['tag'] ?? false) {
            $query->where('tags','like', '%' . request(('tag')) . '%');     // SELECT * FROM 'posts' WHERE tags LIKE '%tag%';
        }
        //  search
        if($filters['search'] ?? false) {
            $query->where('title','like', '%' . request(('search')) . '%')     // SELECT * FROM 'posts' WHERE tags LIKE '%tag%';
                    -> orWhere('description','like', '%' . request(('search')) . '%')
                    ->orWhere('tags','like', '%' . request(('search')) . '%');
        }
    }

}
