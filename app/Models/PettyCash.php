<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PettyCash extends Model
{
    use HasFactory;

    public function movements()
    {
        return $this->hasMany(PettyCashMovement::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
