<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemNota extends Model
{
    protected $table = 'item_nota';
    public $incrementing = false;
    public $timestamps = false;

    public function notaFiscal()
    {
        return $this->belongsTo(NotaFiscal::class, 'num_nota', 'num_nota');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'cod_produto', 'cod_produto');
    }
}