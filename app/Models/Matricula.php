<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $table = 'matriculas';
    protected $fillable = [
        'alunos_id'
    ];


    public function aluno()
    {
        return $this->belongsTo(Alunos::class);
    }
}
