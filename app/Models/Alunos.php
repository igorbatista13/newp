<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
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
        return $this->belongsToMany(modalidades::class);
    }

       // Convertendo a string JSON armazenada no banco de dados de volta para um array
       public function getModalidadeIdAttribute($value)
       {
           return json_decode($value, true);
       }
   
       // Convertendo o array para uma string JSON antes de salvar no banco de dados
       public function setModalidadeIdAttribute($value)
       {
           $this->attributes['modalidade_id'] = json_encode($value);
       }


}
