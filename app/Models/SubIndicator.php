<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class SubIndicator extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $table = 'sub_indicators';

    protected $fillable = ['indicator_id', 'sub_indicator', 'slug'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'sub_indicator'
            ]
        ];
    }
}