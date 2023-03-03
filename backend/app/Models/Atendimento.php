<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{

    protected $fillable = [
        'provedor_id',
        'prioridade',
        'protocolo',
        'data_prev',
        'desc',
        'user_id'
    ];

    protected $casts = [
        'created_at'  => 'date:d-m-Y',
        'updated_at' => 'date:d-m-Y',
        'data_prev' => 'date:d-m-Y',
    ];

    use HasFactory;

    public function provedor()
    {
        return $this->belongsTo(Provedor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
