<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membresia extends Model
{
    use HasFactory;
    public function gimnasio()
    {
        return $this->hasMany(gimnasio::class);
    }
    public function usuario()
    {
        return $this->hasMany(usuario::class);
    }
    public function promocion()
    {
        return $this->hasMany(promocion::class);
    }
}
