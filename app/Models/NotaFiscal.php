<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaFiscal extends Model
{
    protected $table = 'nota_fiscal';
    protected $primaryKey = 'num_nota';
    public $timestamps = false;

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'cod_vendedor', 'cod_vendedor');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cod_cliente', 'cod_cliente');
    }

    public function itens()
    {
        return $this->hasMany(ItemNota::class, 'num_nota', 'num_nota');
    }
}