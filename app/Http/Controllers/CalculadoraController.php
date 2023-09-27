<?php

namespace App\Http\Controllers;

use App\Models\TipoVeiculo;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        $tipoVeiculos = TipoVeiculo::orderBy('nome')->get();

        return view('pages.calculargases.index', ['tipoVeiculos' => $tipoVeiculos]);
    }

    public function calcular(Request $request)
{
    $request->validate([
        'tipo_veiculo' => 'required',
        'quantidade_veiculos' => 'required|numeric',
        'km_rodado' => 'required|numeric',
        'quantidade_dias' => 'required|numeric',
    ]);

    $tipoVeiculoId = $request->input('tipo_veiculo');
    $quantidadeVeiculos = $request->input('quantidade_veiculos');
    $kmRodado = $request->input('km_rodado');
    $quantidadeDias = $request->input('quantidade_dias');

    // Verifique se todos os valores são positivos
    if ($quantidadeVeiculos <= 0 || $kmRodado <= 0 || $quantidadeDias <= 0) {
        return response()->json(['error' => 'Todos os valores devem ser positivos']);
    }

    $tipoVeiculo = TipoVeiculo::find($tipoVeiculoId);

    if (!$tipoVeiculo) {
        return response()->json(['error' => 'Tipo de veículo não encontrado']);
    }

    $quantidadeDeGases = ($quantidadeVeiculos * ($kmRodado / $tipoVeiculo->kmporlitro) * 2.31) * $quantidadeDias;

    $dados = [
        'quantidadeVeiculos' => $quantidadeVeiculos,
        'quantidadeDeGases' => $quantidadeDeGases,
    ];

    // return response()->json($dados);
    $resultadoHtml = view('pages.calculargases.resultado.index', compact('dados'))->render();
    return response()->json(['html' => $resultadoHtml, 'request' => $quantidadeDias]);
}

    public function resultado()
{
    // Renderiza a página de resultado e obtém o HTML
    $dados = [
        'quantidadeVeiculos' => 0, // Preencha com o valor desejado
        'quantidadeDeGases' => 0,  // Preencha com o valor desejado
    ];
    
    $resultadoHtml = view('pages.calculargases.resultado', compact('dados'))->render();

    // Retorna o HTML como resposta JSON
    return response()->json(['html' => $resultadoHtml]);
}

}
