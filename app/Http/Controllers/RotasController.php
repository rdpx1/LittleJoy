<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Evento;

use Input;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

use Laravel\Fortify\Fortify;

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

    public function cadastroUsuario(Request $request)
    {



        return view("cadastro_usuario");

    }

    public function cadastroUsuarioPost(Request $request)

    {

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

        $usuario->save();

        return json_encode(array('code' => 200, 'msg' => ''));

    }

    public function listagem(Request $request)
    {

        $eventos = Evento::where('status', 'A')
            ->select('id_evento', 'nome', 'data_evento', 'horario', 'local', 'descricao')
            ->get();

        foreach($eventos as $evento){

            $evento->data_evento = date('d/m/y', strtotime($evento->data_evento));
        }

        $array = [];

        $array['eventos'] = $eventos;

        return view('listagem_evento', $array);

    }

    public function cadastroEvento(Request $request)
    {


        return view('cadastro_evento');

    }

    public function cadastroEventoPost(Request $request)
    {

        $evento = new Evento;

        $evento->nome = $request->nome_evento;
        $evento->data_evento = date("Y-m-d", strtotime($request->data_evento));
        $evento->local = $request->local;
        $evento->horario = $request->horario;
        $evento->descricao = $request->descricao;
        $evento->status = 'A';
        // $evento->imagem = Storage::disk('public')->put('filename', $file_content);

        $evento->save();

        

        return json_encode(array('code' => 200, 'msg' => ''));
    }

     /**
     * Datatables
     * @return Yajra\Datatables\Facades
     */
    public function eventoDataTables(Request $request)
    {

        $query = Evento::where('status', 'A')
            ->select('id_evento', 'nome', 'data_evento', 'horario', 'local', 'descricao')
            ->orderBy('id_evento', 'asc');

        return DataTables::eloquent($query)->make(true);

    }



}