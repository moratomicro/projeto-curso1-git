<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendasModel extends Model
{
    use HasFactory;
    protected $fillable = ['paciente', 'dataNasc', 'municipio', 'codSus', 'dataExame', 'horario'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'agendas';
}
