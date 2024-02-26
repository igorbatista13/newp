<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modalidades extends Model
{
    use HasFactory;

    protected $table = 'modalidades';

    protected $fillable = [

        'Nome_Modalidade',
        'Obs',
        'Tipo',
        'Situacao',
        
        ];

    public function alunos(){
        return $this->belongsTo(Alunos::class);
    }

}
