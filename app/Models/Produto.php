<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'cod_produto';
    public $timestamps = false;

    public function itensNota()
    {
        return $this->hasMany(ItemNota::class, 'cod_produto', 'cod_produto');
    }
}