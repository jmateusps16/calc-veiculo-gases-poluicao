<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class DashboardController extends Controller
{
    public function index()
    {
        $qtdVeiculos = $this->obterDadosIbge();
        return view('pages.dashboard.index', ['qtdVeiculos' => $qtdVeiculos]);
    }

    public function obterDadosIbge()
    {
        // $url = 'https://cidades.ibge.gov.br/brasil/pesquisa/22/28120?localidade1=26';
        // $response = Http::get($url);
        
        // if($response->successful()) {
        //     $html = $response->body();

        //     $crwler = new Crawler($html);
        //     $qtdVeiculos = $crwler->filter('td.valor.s')->eq(1)->text();
        //     $qtdVeiculos = (int) str_replace('.', '', $qtdVeiculos);

        //     return $qtdVeiculos;
        // } else {
        //     return null;
        // }
        return 1453963;
    }
}
