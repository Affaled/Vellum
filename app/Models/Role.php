<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\UserRole;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    protected function casts(): array
    {
        return [
            'name' => UserRole::class,
        ];
    }
}
