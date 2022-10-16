<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pqrs;

class Eps extends Model
{
    use HasFactory;

    /**
     * Get all of the pqrs for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pqrs(): HasMany
    {
        return $this->hasMany(Pqrs::class);
    }
}
