<?php

namespace App\Http\Controllers;

use App\Models\TipoVeiculo;
use Exception;
use Illuminate\Http\Request;

class TipoVeiculoController extends Controller
{

    public function index()
    {
        return view('pages.cadastrarveiculo.index');
    }

    public function all()
    {
        $tipoVeiculos = TipoVeiculo::orderBy('nome')->get();

        return view('pages.calculargases.index', ['tipoVeiculos' => $tipoVeiculos]);
    }

    public function cadastrar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        try {
            $nomeFormatado = preg_replace_callback('/\b\w+\b/', function ($match) {
                return ucfirst(strtolower($match[0]));
            }, trim($request->nome));
        
            $tipoveiculo = TipoVeiculo::where('nome', $nomeFormatado)->first();

            if($tipoveiculo) {
                return back()->with([
                    'alert' => true,
                    'type' => 'info',
                    'message' => 'Tipo já cadastrado'
                ]);
            }

            $tipoveiculo = new TipoVeiculo();
            $tipoveiculo->nome = $nomeFormatado;
            $tipoveiculo->kmporlitro = trim($request->kmporlitro);
            $tipoveiculo->save();

            return back()->with([
                'alert' => true,
                'type' => 'success',
                'message' => $nomeFormatado . ' cadastrado com sucesso'
            ]);

        } catch (Exception $e) {
            return back()->with([
                'alert' => true,
                'type' => 'danger',
                'message' => $e->getMessage()
            ]);
        }
    }
}
