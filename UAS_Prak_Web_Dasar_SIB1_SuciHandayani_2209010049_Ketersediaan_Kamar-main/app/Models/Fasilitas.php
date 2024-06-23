<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function ruangan()
    {
        return $this->belongsToMany(Ruangan::class, 'fasilitas_ruangan');
    }
}
