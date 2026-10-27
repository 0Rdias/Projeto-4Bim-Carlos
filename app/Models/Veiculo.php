<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculo';
    protected $primaryKey = 'cod_veiculo';
    public $timestamps = false;

    public function vendedores()
    {
        return $this->belongsToMany(Vendedor::class, 'vendedor_veiculo', 'cod_veiculo', 'cod_vendedor')
                    ->withPivot('data');
    }
}