<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{

    protected $fillable = [
        'nome',
        'desc'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    use HasFactory;

    public function atendimento()
    {
        return $this->hasMany(Atendimento::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
