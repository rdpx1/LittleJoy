<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RotasController extends Controller {



    public function index(Request $request)
    {



        return view('login');

    }


    public function cadastroUsuario(Request $request)
    {


        return view('cadastro_usuario');

    }

    public function cadastroUsuarioPost(Request $request)

    {

        dd($request);
        // $nome = $request->nome;
        // $data_nascimento;
        // $email;
        // $telefone;
        // $cidade
        // $endereco
        // $numero
        // $senha




    }

    public function listagem(Request $request)
    {


        return view('listagem_evento');

    }

    public function cadastroEvento(Request $request)
    {


        return view('cadastro_evento');

    }




}