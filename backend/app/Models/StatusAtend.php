<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAtend extends Model
{

    protected $fillable = [
        'status_atend',
        'descri_status',
        'color'
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
    ];
    use HasFactory;

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class);
    }
}
