<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [

        'Nome_Completo',
        'Email',
        'CPF',
        'Sexo',
        'RG',
        'Data_Nascimento',
        'Telefone',
        'Profissao',
        'Empresa',
        'Anexo',
        'image',
        'Endereco',
        'CEP',
        'Numero',
        'Complemento',
        'Bairro',
        'Cidade',
        'Estado',
        'modalidade_id'
        ];
        
    protected $table = 'alunos';

    public function modalidades()
    {
        return $this->belongsTo(modalidades::class, 'modalidade_id');
    }



}
