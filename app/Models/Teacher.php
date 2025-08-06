<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
