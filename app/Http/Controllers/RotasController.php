<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RotasController extends Controller {



    public function index(Request $request)
    {



        return view('login');

    }


    public function cadastro(Request $request)
    {


        return view('cadastro_usuario');

    }

    public function cadastroPost(Request $request)

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




}