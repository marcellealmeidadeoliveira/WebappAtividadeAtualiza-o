<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Temporadas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class TemporadasController extends Controller
{
    
   public function index()
    {

    $registro01 = Temporadas :: all();
    $contar = $registro01 -> count();

        if($contar > 0){
            return Response()->json([
                'sucesso' => true,
                'mensagem' => 'Temporadas encontradas',
                'data'=> $registro01,
                'total'=> $contar,
            ],200);
        }else{
            return Response()->json([
                'sucesso' => false,
                'mensagem'=> 'Temporadas não encontradas',
            ],404);
        }
    }
    public function store(Request $request)
    {
    $validator = Validator::make($request->all(),[
    'nome2'=>'required',
    'episodios'=>'required',
    'quantasT' => 'required',
    'duracao' => 'required',
    'anoLancamento' => 'required'
]);
    if ($validator->fails()){
    return response()->json([
    'success'=> false,
    'message'=> 'Resgistros invalidos',
    'errors'=>$validator->errors(),
    ],400);
}
$registro01 = Temporadas::create($request->all());

if($registro01){

    return response()->json([
        'sucesso'=> true,
        'mensagem'=> 'Temporadas cadastrado',
        'data'=> $registro01
    ], 201);

}else{
    return response()-> json([
        'sucesso'=> false,
        'mensagem'=> 'Error ao cadastrar Temporadas',
    ], 500);
    }}
   
    public function show($id)
    {
$registro01 = Temporadas::find($id);
if ($registro01){
    return response()-> json([
        'sucesso'=> true,
        'mensagem'=> 'Temporadas encontradas',
        'data'=> $registro01
    ], 200);
} else{
    return response ()->json([
        'sucesso'=> false,
        'mensagem'=> 'Temporadas nao encontradas',
    ], 404);
}
    }

   
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'nome2'=>'required',
            'episodios'=>'required',
            'quantasT' => 'required',
            'duracao' => 'required',
            'anoLancamento' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success'=> false,
                'message'=> 'Resgistros invalidos',
                'errors'=>$validator->errors(),
            ],400);
        }
         $db2 = Temporadas::find($id);
         if(!$db2){
         return response()->json([
            'sucesso' => false,
            'mensagem'=> 'Temporadas não encontrado'
         ], 404);}

         $db2 -> nome2 = $request -> nome2;
         $db2 -> episodios = $request -> episodios;
         $db2 -> quantasT = $request -> quantasT;
         $db2 -> duracao = $request -> duracao;
         $db2 -> anoLancamento = $request -> anoLancamento;

         if($db2 -> save()){
            return response()->json([
                'sucesso'=> true,
                'menssagem'=>'Temporadas não encontrado',
                'data'=>$db2],200);
            
            }
            else {
          return response()->json([
         'sucesso'=> false,
         'mensagem'=> 'Erro ao encontrar Temporadas'],500);}
    }
      
 
    public function destroy($id)
    {
    $registro01= Temporadas::find($id);

    if(!$registro01){
        return response()->json([
            'sucesso'=> false,
            'mensagem'=> 'Temporadas não encontrado',
        ],404);
    }
    if (!$registro01 ->delete()){
        return response()->json([
            'sucesso'=> true,
            'mensagem'=> 'Temporadas deletado conm sucesso',
        ],200);
    }
    return response ()->json([
        'sucesso'=> false,
        'mensagem'=> 'Erro ao deletar Temporadas'
    ],500);
    }
}

