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
        'excerpt',
        'body',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

     public static function findByTitle($title) {
        $posts = self::all();

        foreach($posts as $post) {
            if($post['title'] == $title) {
                return $post;
            }
        }
    }

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
