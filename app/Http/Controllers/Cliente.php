<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cliente extends Controller
{
    public function create() {
        return view('Cliente.create');
    }

    public function store(Request $request) {
        $status = DB::table('clientes')->insert([
        'nome' => $request->input('nome'),
        'cpf' => $request->input('cpf'),
        'telefone' => $request->input('telefone'),
        'email' => $request->input('email')
        ]);

        if($status) {
            return redirect()->back()->with('mensagem', 'Cliente cadastrado com sucesso!');
        } else {
            return redirect()->back()->with('mensagem', 'Erro ao cadastrar cliente. Tente novamente');
        }
    }
}
