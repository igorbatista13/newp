<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda_pivot extends Model
{
    use HasFactory;
    protected $table = 'vendas_pivot'; // Se necessário, especifique o nome da tabela

    protected $guarded = [];

    protected $fillable = [
        'Quantidade',
        'vendas_id',
        'produto_id',
    ];

    public function venda()
    {
        return $this->belongsTo(Venda::class);
    }
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }


    
}
