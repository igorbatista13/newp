<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';

    protected $fillable = [
        'Codigo_barra',
        'Nome_Produto',
        'Categoria_Produto',
        'Status_Produto',
        'Peso_Liquido',
        'Peso_Bruto',
        'Estoque_Produto',
        'Marca',
        'Localizacao',
        'Preco_Venda',
        'Preco_Custo',
        'Unidade_Medida',
        'Data_Lote',
        'Data_Vencimento',
        'Quantidade_Produto',
        'Fornecedor_id',
        'image',
    ];

    public function recibo()
    {
        return $this->belongsToMany(Recibo::class);
    }

    public function fornecedor() {

        return $this->belongsToMany(Fornecedor::class);


      }
}
