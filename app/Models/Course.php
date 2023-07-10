<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'price',
    ];
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public $timestamps = false;
}
