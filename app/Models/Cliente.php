<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'cod_cliente';
    public $timestamps = false;

    public function notasFiscais()
    {
        return $this->hasMany(NotaFiscal::class, 'cod_cliente', 'cod_cliente');
    }
}