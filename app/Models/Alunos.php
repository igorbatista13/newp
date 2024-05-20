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
        'Perfil',
        'modalidade_id'
        ];
        
        protected $table = 'alunos';

        public function modalidades()
        {
            return $this->belongsToMany(Modalidades::class, 'aluno_modalidade', 'aluno_id', 'modalidade_id');
        }
    
        public function getModalidadeIdAttribute($value)
        {
            return json_decode($value, true);
        }
    
        public function setModalidadeIdAttribute($value)
        {
            $this->attributes['modalidade_id'] = json_encode($value);
        }
    
        public function getModalidadesNomesAttribute()
        {
            $modalidadeIds = $this->modalidade_id;
            if (is_array($modalidadeIds)) {
                return Modalidades::whereIn('id', $modalidadeIds)->pluck('Nome_Modalidade');
            }
            return [];
        }
    
        public function matriculas()
        {
            return $this->hasMany(Matricula::class, 'alunos_id');
        }

        public function planos()
        {
            return $this->hasManyThrough(Planos::class, Matricula::class, 'alunos_id', 'id', 'id', 'planos_id');
        }

}
