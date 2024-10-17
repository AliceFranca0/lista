<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteModel extends Model
{
    use HasFactory;

    public static function salvar (Request $request) {
        $status = DB::table('clientes')->insert([
        'nome'=>$request->input('nome'),
        'cpf'=>$request->input('cpf'),
        'telefone'=>$request->input('telefone'),
        'email'=>$request->input('email'),
        ]);
        
        return $status;
    }

    public static function listar(){
        $clientes = DB::table('clientes')->get();
        return $clientes;
    }

    public static function deletar($id){
        $status = DB::table('clientes')->delete($id);
        return $status;
    }
}
