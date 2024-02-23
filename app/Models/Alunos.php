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
        'Profissão',
        'Empresa',
        'Anexo',
        'image',
        'Endereço',
        'CEP',
        'Numero',
        'Complemento',
        'Bairro',
        'Cidade',
        'Estado'
        ];
        
    protected $table = 'alunos';


    


}
