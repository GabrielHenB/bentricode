<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //Isso basicamente handle os logins e registros

    public function index()
    {
        return view('logon.login');
    }

    public function create()
    {
        //Criar usuarios (ou seja Cadastro)

        return view('logon.register');
    }
    
    /**
     * Efetua login do usuario regenerando a session atraves dos helpers auth() e session()
     * @param Request $request
     * 
     */
    public function login(Request $request){
        
        foreach($request->all() as $key=>$value){
            $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $entrada = $request->validate([
            'name' => 'string',
            'password' => 'required|min:8|max:34',
            'email' => ['email','required', Rule::exists('users','email')]
        ]);

        //dd($entrada);

        //Attempt
        if(auth()->attempt($entrada)){
            session()->regenerate(); //Session fixation
            return redirect(route('home'))->with('mensagem','Logado!');
        }
        //Failed attempt
        return back()->withInput()
            ->withErrors(['email' => "Credenciais Inválidas!"]);
    }

    /**
     * Simplesmente desloga. Melhorar depois a validação disso aqui.
     */
    public function logout()
    {
        auth()->logout();

        return back()->with('mensagem','Você saiu da sua conta!');
    }
}
