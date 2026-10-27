<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedor';
    protected $primaryKey = 'cod_vendedor';
    public $timestamps = false;

    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'cod_regiao', 'cod_regiao');
    }

    public function notasFiscais()
    {
        return $this->hasMany(NotaFiscal::class, 'cod_vendedor', 'cod_vendedor');
    }

    public function veiculos()
    {
        return $this->belongsToMany(Veiculo::class, 'vendedor_veiculo', 'cod_vendedor', 'cod_veiculo')
                    ->withPivot('data');
    }
}