<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Evento;

use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Hash;

class RotasController extends Controller {



    public function index(Request $request)
    {



        return view('index');

    }

    public function login(Request $request)
    {




        return view('login');

    }

    public function loginPost(Request $request)
    {


        $usuario = Usuario::where('email', $request->email)
            ->select('senha');


      
        if (Hash::check($request->senha, $usuario->senha)){

            return redirect()->to('listagem_evento');

        } else {


            dd('deu ruim magrao');

        }


    }

    public function cadastroUsuarioPost(Request $request)

    {
        // dd($request->all());

        $usuario = new Usuario;

        $usuario->nome = $request->nome;
        $usuario->data_nascimento = date("Y-m-d", strtotime($request->data_nascimento));
        $usuario->email = $request->email;
        $usuario->telefone = $request->telefone;
        $usuario->cidade = $request->cidade; 
        $usuario->sexo = $request->sexo;
        $usuario->endereco = $request->endereco . ", " . $request->numero;
        $usuario->senha = Hash::make($request->senha);
        $usuario->status = "A";

        // dd($usuario->senha);
        $usuario->save();

        return json_encode(array('code' => 200, 'msg' => ''));

    }

    public function listagem(Request $request)
    {


        return view('listagem_evento');

    }

    public function cadastroEvento(Request $request)
    {


        return view('cadastro_evento');

    }

    public function cadastroEventoPost(Request $request)
    {

        dd($request->all());

        $evento = new Evento;

        $evento->nome = $request->nome_evento;
        $evento->data_evento = date("Y-m-d", strtotime($request->data_evento));
        $evento->local = $request->local;
        $evento->horario = $request->horario;
        $evento->descricao = $request->descricao;
        $evento->status = 'A';

        $evento->save();


        return json_encode(array('code' => 200, 'msg' => ''));
    }




}