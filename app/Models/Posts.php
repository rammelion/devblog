<?php

namespace App\Models;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
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

     public function user(): BelongsTo
     {
         return $this->belongsTo(User::class);
     }

     public static function findByTitle($title) {
        foreach(self::all() as $post) {
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

        //author filter
        if($filters['author'] ?? false) {
            $author_id = User::getIdFromName($filters['author']);
            $query->where('user_id','like', $author_id );     // SELECT * FROM 'posts' WHERE user_id LIKE '%user_id%';
        }


        //  search
        if($filters['search'] ?? false) {
            $query->where('title','like', '%' . request(('search')) . '%')     // SELECT * FROM 'posts' WHERE tags LIKE '%tag%';
                    -> orWhere('body','like', '%' . request(('search')) . '%')
                    ->orWhere('tags','like', '%' . request(('search')) . '%');
        }
    }

    public static function updatePublished() {
        $notNull = self::whereNotNull('published_at');
        foreach($notNull->whereDate('created_at', '<=', Carbon::today()->toDateString())->get() as $post) {
            $post->published = 1;
            $post->save();
        }
    }
}
