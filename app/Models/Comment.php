<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['text', 'name', 'email', 'metric_id', 'parent_id', 'public',];

    public function metrics(){
        return $this->belongsTo(Metric::class,'metric_id');
    }
}
