<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venda extends Model
{
 
    use HasFactory;

    protected $fillable = [
        'Nome_Cliente',
        'Forma_Pagamento',
        'DataRetirada',
        'Taxa',
        'Desconto',
        'MensagemCliente',
        'Observacoes',
        'total',
  ];
  
    public function empresa_cliente() {
      return $this->belongsTo(Empresa_cliente::class);
      }      
  
      public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'vendas_pivot', 'vendas_id', 'produto_id')
            ->withPivot('Quantidade');
    }

      
    //   public function vendas_pivot() {

    //     return $this->belongsToMany(Venda_pivot::class);

    //   }
  
}