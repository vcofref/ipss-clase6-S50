<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class, 'section_student');
    }
}
