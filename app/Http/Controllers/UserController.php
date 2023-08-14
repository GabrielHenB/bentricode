<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function store(Request $request){
        //Limpa, valida, cria e guarda User
        foreach($request->all() as $key=>$value){
            $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $entrada = $request->validate([
            "name" => "string|required",
            "email" => ["email","required",Rule::unique("users","email")],
            "password" => ["required","min:8","max:34"],
            
        ]);

        //A senha que chega no request nao esta hashada. Tb poderia ser um Mutator no proprio model user mas acho mais intuitivo assim
        $entrada["password"] = bcrypt($entrada["password"]);

        //Todo usuario is not admin ate ser editado por um admin
        $entrada["isAdmin"] = "0";

        //dd($entrada);
        //Criar
        $entrada = User::create($entrada);

        return redirect(route('home'))->with('mensagem','User criado com sucesso!!');
    }
}
