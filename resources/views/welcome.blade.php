<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Indústria Beleza Ltda - Relatórios</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; }
        h1 { color: #333; text-align: center; }
        h2 { color: #0056b3; border-bottom: 2px solid #0056b3; padding-bottom: 5px; margin-top: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #0056b3; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <h1>Projeto Final - Indústria Beleza Ltda.</h1>

    <h2>B. Regiões Cadastradas</h2>
    <table>
        <tr><th>Nome da Região</th></tr>
        @foreach($regioes as $r)
            <tr><td>{{ $r->nome }}</td></tr>
        @endforeach
    </table>

    <h2>A. Pontos Estratégicos por Região</h2>
    <table>
        <tr><th>Região</th><th>Ponto Estratégico</th></tr>
        @foreach($pontosPorRegiao as $p)
            <tr><td>{{ $p->regiao }}</td><td>{{ $p->ponto_estrategico }}</td></tr>
        @endforeach
    </table>

    <h2>D. Vendedores por Região</h2>
    <table>
        <tr><th>Região</th><th>Vendedor Responsável</th></tr>
        @foreach($vendedoresRegiao as $vr)
            <tr><td>{{ $vr->regiao }}</td><td>{{ $vr->vendedor }}</td></tr>
        @endforeach
    </table>

    <h2>C. Veículos Utilizados no Último Mês</h2>
    <table>
        <tr><th>Vendedor</th><th>Veículo</th><th>Placa</th><th>Data</th></tr>
        @foreach($vendedoresVeiculos as $vv)
            <tr>
                <td>{{ $vv->vendedor }}</td>
                <td>{{ $vv->veiculo }}</td>
                <td>{{ $vv->placa }}</td>
                <td>{{ $vv->data }}</td>
            </tr>
        @endforeach
    </table>

    <h2>G. Produtos Não Vendidos</h2>
    <table>
        <tr><th>Código</th><th>Descrição</th><th>Estoque</th></tr>
        @foreach($produtosNaoVendidos as $pnv)
            <tr>
                <td>{{ $pnv->cod_produto }}</td>
                <td>{{ $pnv->descricao }}</td>
                <td>{{ $pnv->estoque }}</td>
            </tr>
        @endforeach
    </table>

    <h2>I. Total de Itens por Nota Fiscal</h2>
    <table>
        <tr><th>Nº Nota Fiscal</th><th>Quantidade Total de Itens</th></tr>
        @foreach($itensNota as $in)
            <tr>
                <td>{{ $in->num_nota }}</td>
                <td>{{ $in->total_itens }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>