<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function view;


class ExercicioController extends Controller
{
    public function exercicio01()
    {
        $num = [20, 300, 600, 900];
        
        $armazenaArr = [];
        
        foreach ($num as $n) {
            $armazenaArr[] = $n * $n;
        }
        
        $resultado = $armazenaArr[3] >= 1000 ? $armazenaArr[3] : $armazenaArr;
        
        return view('exercicio01', compact('num', 'armazenaArr', 'resultado'));
    }

    public function exercicio02(Request $request)
    {

        $num = null;
        $parImpar = null;
        $posiNeg = null;
        $error = null;

        if ($request->isMethod('post')) {
            $inserir = $request->input('numero');

            if (filter_var($inserir, FILTER_VALIDATE_INT) !== false) {
                $num = intval($inserir);

                if ($num % 2 == 0) {
                    $parImpar = "par";
                } else {
                    $parImpar = "ímpar";
                }

                if ($num > 0) {
                    $posiNeg = "positivo";
                } elseif ($num < 0) {
                    $posiNeg = "negativo";
                } else {
                    $posiNeg = "zero";
                }
            } else {
                $error = "Erro: Por favor, insira um número inteiro.";
            }
        }

        return view('exercicio02', compact('num', 'parImpar', 'posiNeg', 'error'));
    }

    public function exercicio03(Request $request)
    {

        $codigo = null;
        $horasTrabalhadas = null;
        $salarioBase = 0;
        $salarioExcedente = 0;
        $salarioTotal = 0;

        if ($request->isMethod('post')) {
            $codigo = $request->input('codigo');
            $horasTrabalhadas = intval($request->input('horas_trabalhadas'));

            $valorHora = 10.00;
            $valorHoraExtra = 20.00;

            if ($horasTrabalhadas <= 50) {
                $salarioBase = $horasTrabalhadas * $valorHora;
                $salarioExcedente = 0;
            } else {
                $salarioBase = 50 * $valorHora;
                $horasExcedentes = $horasTrabalhadas - 50;
                $salarioExcedente = $horasExcedentes * $valorHoraExtra;
            }

            $salarioTotal = $salarioBase + $salarioExcedente;
        }

        return view('exercicio03', compact('codigo', 'salarioBase', 'salarioExcedente', 'salarioTotal', 'horasTrabalhadas'));
    }

    public function exercicio04(Request $request)
    {
        $indice = null;
        $mensagem = '';

        if ($request->isMethod('post')) {
            $indice = floatval($request->input('indice'));

            switch (true) {
                case ($indice >= 0.05 && $indice <= 0.25):
                    $mensagem = "Índice de poluição dentro do nível aceitável.";
                    break;
                case ($indice >= 0.3 && $indice < 0.4):
                    $mensagem = "Atenção: Indústrias do 1º grupo devem suspender suas atividades.";
                    break;
                case ($indice >= 0.4 && $indice < 0.5):
                    $mensagem = "Atenção: Indústrias do 1º e 2º grupos devem suspender suas atividades.";
                    break;
                case ($indice >= 0.5):
                    $mensagem = "Atenção: Todos os grupos de indústrias devem suspender suas atividades.";
                    break;
                default:
                    $mensagem = "Índice de poluição fora da faixa conhecida. Verifique a leitura.";
            }
        }

        return view('exercicio04', compact('indice', 'mensagem'));
    }

    public function exercicio05(Request $request)
    {
        $idade = null;
        $categoria = '';

        if ($request->isMethod('post')) {
            $idade = intval($request->input('idade'));

            if ($idade >= 5 && $idade <= 7) {
                $categoria = "Categoria: Infantil A";
            } elseif ($idade >= 8 && $idade <= 11) {
                $categoria = "Categoria: Infantil B";
            } elseif ($idade >= 12 && $idade <= 13) {
                $categoria = "Categoria: Juvenil A";
            } elseif ($idade >= 14 && $idade <= 17) {
                $categoria = "Categoria: Juvenil B";
            } elseif ($idade >= 18) {
                $categoria = "Categoria: Adultos";
            } else {
                $categoria = "Sem categoria para esta idade.";
            }
        }

        return view('exercicio05', compact('idade', 'categoria'));
    }

    public function exercicio06()
    {
        $numerosImpares = [];
        for ($i = 101; $i < 200; $i += 2) {
            $numerosImpares[] = $i;
        }

        return view('exercicio06', compact('numerosImpares'));
    }

    public function exercicio07()
    {
        $tamanho = 500;

        $array = [];
        for ($i = 0; $i < $tamanho; $i++) {
            $array[] = mt_rand();
        }

        $maior = max($array);
        $menor = min($array);
        $soma = array_sum($array);
        $media = $soma / count($array);

        return view('exercicio07', compact('array', 'maior', 'menor', 'media'));
    }

    public function exercicio08()
    {
        $nome1 = "Alice";
        $nome2 = "Sofia";

        $casal = $nome1 . " e " . $nome2 . " estão comemorando seu aniversário de namoro!";

        return view('exercicio08', compact('casal'));
    }


    public function exercicio09()
    {
        $nomes = ["Alice", "Sofia", "Ana", "Wendy", "João"];
        
        return view('exercicio09', compact('nomes'));
    }

    public function exercicio10()
    {
        $array = range(1, 20);
        $soma = array_sum($array);
        
        return view('exercicio10', compact('soma'));
    }

    public function exercicio11()
    {
        $nome = "Alice";
        $nomeInvertido = strrev($nome);
        
        return view('exercicio11', compact('nome', 'nomeInvertido'));
    }
}

