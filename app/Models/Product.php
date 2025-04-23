<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'orders');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
