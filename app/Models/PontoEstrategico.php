<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontoEstrategico extends Model
{
    protected $table = 'ponto_estrategico';
    protected $primaryKey = 'cod_ponto';
    public $timestamps = false;

    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'cod_regiao', 'cod_regiao');
    }
}