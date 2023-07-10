<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'gender',
    ];
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }

    public $timestamps = false;
}
