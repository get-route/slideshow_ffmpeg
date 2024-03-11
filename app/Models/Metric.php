<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Metric extends Model
{
//    protected $table = 'metrics';
    protected $fillable = ['title', 'description', 'text', 'photo', 'prise', 'views', 'url', 'public','image'];

    use Sluggable;
    public function comments()
    {
        return $this->hasMany(Comment::class,'metric_id');
    }

    public function sluggable():array
    {
        return [
            'url' => [
                'source' => 'title'
            ]
        ];
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag_metric','metric_id','tag_id');
    }
}
