<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    public function gimnasio()
    {
        return $this->hasMany(gimnasio::class);
    }
    public function membresia()
    {
        return $this->belongsTo(membresia::class);
    }
    public function promocion()
    {
        return $this->hasMany(promocion::class);
    }
}
