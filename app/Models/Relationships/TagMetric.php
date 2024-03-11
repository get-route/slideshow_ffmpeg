<?php

namespace App\Models\Relationships;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagMetric extends Model
{
    protected $table = 'tag_metric';
    protected $fillable = ['tag_id','metric_id'];
    public $timestamps = false;
}
