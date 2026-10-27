<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'regiao';
    protected $primaryKey = 'cod_regiao';
    public $timestamps = false;

    public function pontosEstrategicos()
    {
        return $this->hasMany(PontoEstrategico::class, 'cod_regiao', 'cod_regiao');
    }

    public function vendedores()
    {
        return $this->hasMany(Vendedor::class, 'cod_regiao', 'cod_regiao');
    }
}