<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
    public function photo()
    {
        return $this->hasOne(Photo::class);
    }
    
}
