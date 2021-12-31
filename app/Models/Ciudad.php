<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $with = [
        'clientes'
    ];

    public function departamento() {
        return $this->belongsTo(Departamento::class);
    }

    public function clientes() {
        return $this->hasMany(Cliente::class);
    }
}
