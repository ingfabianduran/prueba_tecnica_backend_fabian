<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $with = [
        'ciudads'
    ];

    public function ciudads() {
        return $this->hasMany(Ciudad::class);
    }
}
