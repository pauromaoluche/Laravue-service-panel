<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{

    //Define quais dados vao poder ser gravados no banco
    protected $fillable = [
        'nome',
        'desc',
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
        'desc'
    ];

    use HasFactory;

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class);
    }
}
