<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendasModel extends Model
{
    use HasFactory;
    protected $fillable = ['paciente', 'dataNasc', 'municipio', 'codSus'];
    protected $guarded = ['id', 'dataExame', 'horario', 'created_at', 'updated_at'];
    protected $table = 'agendas';
}
