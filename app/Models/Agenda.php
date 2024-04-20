<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agenda extends Model
{
    use HasFactory;

   
 protected $fillable = [
    'inicio',
    'proxima_consulta',
    'faltas',
    'numero_sessao',
    'paciente_id',
    'horario',
    'user_id',
   
 ] ;

 public function agenda(): BelongsTo
 {
  return $this->belongsTo(User::class);
 }

}
