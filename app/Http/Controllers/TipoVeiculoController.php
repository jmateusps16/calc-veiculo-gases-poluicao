<?php

namespace App\Http\Controllers;

use App\Models\TipoVeiculo;
use Illuminate\Http\Request;

class TipoVeiculoController extends Controller
{
    public function create()
    {
        $tipoveiculo = new TipoVeiculo ([
            'nome' => 'Automovel',
            'kmporlitro' => '12',
        ]);

        $tipoveiculo->save();

        return ("Tipo do veiculo cadastrado com sucesso $tipoveiculo");
    }
}