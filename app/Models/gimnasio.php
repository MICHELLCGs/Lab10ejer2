<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gimnasio extends Model
{
    use HasFactory;
    public function usuario()
    {
        return $this->hasMany(usuario::class);
    }
    public function membresia()
    {
        return $this->belongsTo(membresia::class);
    }
}
