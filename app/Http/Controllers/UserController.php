<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        //Criar usuarios (ou seja Cadastro)

        return view('logon.register');
    }

    public function store(Request $request){
        //Limpa, valida, cria e guarda User
        foreach($request->all() as $key=>$value){
            $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $entrada = $request->validate([
            "name" => "string|required",
            "email" => ["email","required",Rule::unique("users","email")],
            "password" => ["required","min:8","max:34"]
        ]);

        //A senha que chega no request nao esta hashada. Tb poderia ser um Mutator no proprio model user mas acho mais intuitivo assim
        $entrada["password"] = bcrypt($entrada["password"]);
        dd($entrada);
        //Criar
        $entrada = User::create($entrada);

        return "Função ainda não implementada chefia!";
    }

    public function login(Request $request){
        
        foreach($request->all as $key=>$value){
            $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $entrada = $request->validate([
            'name' => 'string',
            'password' => 'required|min:8|max:24',
            'email' => ['email','required',Rule::unique('users','email')]
        ]);

        dd($entrada);

        //Attempt
        if(auth()->attempt($entrada)){
            session()->regenerate(); //Session fixation
            return redirect('home')->with('mensagem','Logado!');
        }
        //Failed attempt
        return back()->withInput()
            ->withErrors(['email' => "Credenciais Inválidas!"]);
    }
}
