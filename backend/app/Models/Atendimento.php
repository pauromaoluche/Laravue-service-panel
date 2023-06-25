<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{

    protected $fillable = [
        'gerado_por',
        'provedor_id',
        'service_type_id',
        'prioridade',
        'protocolo',
        'data_prev',
        'desc',
        'user_id',
        'setor_id'
    ];

    protected $hidden = [
        
    ];

    protected $casts = [
        'created_at'  => 'date:d/m/Y',
        'data_prev' => 'date:d/m/Y',
    ];

    use HasFactory;

    public function provedor_id()
    {
        return $this->belongsTo(Provedor::class, 'provedor_id');
    }

    public function user_id()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setor_id(){
        return $this->belongsTo(Setor::class, 'setor_id');
    }

    public function gerado_por(){
        return $this->belongsTo(User::class, 'gerado_por');
    }

    public function service_type_id(){
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }

    public function status_atend(){
        return $this->belongsTo(StatusAtend::class, 'status_atend');
    }
}
