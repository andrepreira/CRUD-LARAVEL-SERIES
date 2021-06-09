<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {

    //Mostra o conjunto de séries na tela
    public function index(Request $request)
    {
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');
   
        return view('series.index', compact('series', 'mensagem'));
    }

    //cria a série
    public function create()
    {
        return view('series.create');
    }

    //Salva a série no banco de dados e retorna para home
    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie= Serie::create($request->all());
        $request->session()->flash(
                    'mensagem',
                    "Série com id {$serie->id} criada: {$serie->nome}"
                );
        
        return redirect('/series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()->flash(
            'mensagem',
            "Série removida com sucesso"
        );

        return redirect('/series');

    }
}