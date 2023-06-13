<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'identities';

    protected $fillable = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}