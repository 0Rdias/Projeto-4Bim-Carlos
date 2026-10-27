<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Controller extends Controller
{
    public function index()
    {
        // A. Listar todos os pontos estratégicos de cada região
        $pontosPorRegiao = DB::select("
            SELECT r.nome AS regiao, p.descricao AS ponto_estrategico 
            FROM regiao r 
            JOIN ponto_estrategico p ON r.cod_regiao = p.cod_regiao
        ");

        // B. Listar os nomes das regiões cadastradas
        $regioes = DB::select("SELECT nome FROM regiao");

        // C. Listar vendedores e veículos utilizados no último mês
        $vendedoresVeiculos = DB::select("
            SELECT v.nome AS vendedor, ve.placa, ve.descricao AS veiculo, vv.data 
            FROM vendedor v 
            JOIN vendedor_veiculo vv ON v.cod_vendedor = vv.cod_vendedor 
            JOIN veiculo ve ON vv.cod_veiculo = ve.cod_veiculo 
            WHERE vv.data >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
        ");

        // D. Listar todos os vendedores responsáveis por cada região
        $vendedoresRegiao = DB::select("
            SELECT r.nome AS regiao, v.nome AS vendedor 
            FROM regiao r 
            JOIN vendedor v ON r.cod_regiao = v.cod_regiao
        ");

        // G. Produtos que ainda não foram vendidos
        $produtosNaoVendidos = DB::select("
            SELECT * FROM produtos 
            WHERE cod_produto NOT IN (SELECT DISTINCT cod_produto FROM item_nota)
        ");

        // I. Quantidade de itens de cada nota fiscal
        $itensNota = DB::select("
            SELECT num_nota, SUM(quantidade) AS total_itens 
            FROM item_nota 
            GROUP BY num_nota
        ");

        return view('projeto', compact(
            'pontosPorRegiao', 
            'regioes', 
            'vendedoresVeiculos', 
            'vendedoresRegiao', 
            'produtosNaoVendidos', 
            'itensNota'
        ));
    }
}