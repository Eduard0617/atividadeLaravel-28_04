<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class CriptomoedaController extends Controller
{
    //link ou endereço ou endpont da API
    private $urlApi = 'http://127.0.0.1:8001/api/cripto';
<<<<<<< HEAD
 
=======

>>>>>>> 85bb414560d8905fb671a8ce69d1e4edeab3504a
public function index(){
    $response = Http::get($this->urlApi);
    $data = $response->json();
    return view('criptomoeda.index',['criptos' => $data['data'] ?? [], 'message' => $data['message'] ?? '']);
}
 
public function store(Request $request){
    Http::post($this->urlApi, $request->only('sigla', 'nome', 'valor'));
    return redirect()->route('criptomoedas.index');
}
public function create(){
    return view('criptomoeda.create');
}
<<<<<<< HEAD
 
=======

>>>>>>> 85bb414560d8905fb671a8ce69d1e4edeab3504a
public function edit($id){
    $response = Http::get("$this->urlApi/$id");
    $cripto = $response->json()['data'] ?? null;
    return view('criptomoeda.edit', compact('cripto'));
<<<<<<< HEAD
=======
}

public function update(Request $request, $id){
    Http::post("$this->urlApi/$id", $request->only('sigla', 'nome', 'valor'));
    return redirect()->route('criptomoedas.index');
}

public function destroy($id){
    Http::delete("$this->urlApi/$id");
    return redirect()->route("criptomoedas.index");
}
>>>>>>> 85bb414560d8905fb671a8ce69d1e4edeab3504a
}
 
public function update(Request $request, $id){
    Http::post("$this->urlApi/$id", $request->only('sigla', 'nome', 'valor'));
    return redirect()->route('criptomoedas.index');
}
 
public function destroy($id){
    Http::delete("$this->urlApi/$id");
    return redirect()->route("criptomoedas.index");
}
}
 