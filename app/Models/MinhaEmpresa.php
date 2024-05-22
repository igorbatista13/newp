<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinhaEmpresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';

    protected $fillable = [
        'Nome_Empresa',
        'Endereco',
        'CEP',
        'Estado',
        'Cidade',
        'Logo',
        'Descricao',
        'Cnpj',
        'Email',
        'Telefone',
        'Site',
        'Chave_Pix',
        'image',
        'facebook_url',
        'instagram_url',
        'linkedin_url'
    ];



    public function recibo()
    {
        return $this->belongsTo(Recibo::class);
    }
}
