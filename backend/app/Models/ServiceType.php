<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    use HasFactory;

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class);
    }
}
