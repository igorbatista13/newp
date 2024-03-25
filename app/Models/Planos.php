<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planos extends Model
{
    use HasFactory;
    protected $table = 'planos';
    protected $fillable = [
        'Nome_Plano', 'Status', 
        'image', 'Preco', 'Obs',
        'Beneficos', 'Vigencia',
       // 'Beneficios'
    ];


    // public function alunos()
    // {
    //     return $this->belongsTo(Alunos::class);
    // }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'planos_id');
    }
}
