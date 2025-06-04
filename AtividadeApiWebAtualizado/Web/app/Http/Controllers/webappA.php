<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class webappA extends Controller
{
    private $url = 'http://127.0.0.1:8002/api/nomeAnalog';

    public function index()
    {
        $response = Http:: get($this -> url);
        $data = $response -> json();
        return view ('abas.index', ['registro'=>$data ['data']??[], 'mensagem'=>$data['mensagem']??'']);
    }
    public function create()
    {
        return view ('abas.cadastrar');
    }
public function store(Request $request)
{
    Http::post ($this-> url, $request->only('nome','nomeCriador','idioma','tipo','sinopsia'));
    return redirect()->route('rota.index');
}
public function edit($id)
{
    $response=Http::get("$this->url/$id");
    $registro = $response->json()['data']??null;
    return view('abas.editar', compact('registro'));
}
public function update(Request $request,$id)
{
    Http::put("$this->url/$id", $request->only('nome','nomeCriador','idioma','tipo','sinopsia'));
    return redirect()->route('rota.index');
}

public function destroy($id)
{
    Http::delete("$this->url/$id");
    return redirect()->route('rota.index');
}

    private $url2 = 'http://127.0.0.1:8002/api/temporadas';

    public function index2()
    {
        $response = Http:: get($this -> url);
        $data = $response -> json();
        return view ('temporadas.index', ['registro'=>$data ['data']??[], 'mensagem'=>$data['mensagem']??'']);
    }
    public function create2()
    {
        return view ('temporadas.cadastrar');
    }
public function store2(Request $request)
{
    Http::post ($this-> url2, $request->only('nome2','episodios','quantasT','duracao','anoLancamento'));
    return redirect()->route('rota.index');
}
public function edit2($id)
{
    $response=Http::get("$this->url2/$id");
    $registro = $response->json()['data']??null;
    return view('temporadas.editar', compact('registro'));
}
public function update2(Request $request,$id)
{
    Http::put("$this->url2/$id", $request->only('nome2','episodios','quantasT','duracao','anoLancamento'));
    return redirect()->route('rota.index');
}

public function destroy2($id)
{
    Http::delete("$this->url2/$id");
    return redirect()->route('rota.index');
}

}
