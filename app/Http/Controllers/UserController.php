<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function read(string $id){
        $target = User::findOrFail(htmlspecialchars(strip_tags($id)));

        return view('users.show',["user"=>$target]);
    }

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

    public function edit(string $id)
    {
        $target = User::findOrFail(htmlspecialchars(strip_tags($id)));

        //does this validate already?
        return view('users.edit',["item" => $target]);
    }

    public function update(Request $request, string $id)
    {
        $target = User::findOrFail($id);
        //Limpa, valida, atualiza e guarda User
        foreach($request->all() as $key=>$value){
            $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        //De acordo com a documentacao laravel nunca passar id do request ali no ignore entao usar o target em si
        $rules = [
            "name" => "string|required",
            "email" => ["email","required",Rule::unique("users","email")->ignore($target->id)],
            "password" => ["nullable","min:8","max:34"],
            "isAdmin" => ["required","boolean"],
            "avatar" => ["nullable","image"]
        ];

        if($request->filled('password')){
            //Se contem um valor nao-nulo no campo password ele se torna nao nullable nesse caso
            $rules["password"] = ["required","min:8","max:34"];
        }

        $entrada = $request->validate($rules);

        //File handling: por enquanto nao temos suporte a avatar
        if(array_key_exists("avatar", $entrada)){
            //treat
            //TODO file sanitization?
            //store in public/post_thumbs uses disk from config
            //$filepath = $request->file('thumburl')->store('public/post_thumbs');
            //dd($filepath);
            unset($entrada["avatar"]);
        }

        //Se nao houver senha ela nao sera atualizada
        if($entrada["password"] === null || $entrada["password"] === ""){
            unset($entrada["password"]);
        }
        
        $target = $target->update($entrada);
        return redirect('dashboard')->with('mensagem',"Usuário atualizado com sucesso!");
    }

    public function destroy(string $id)
    {
        $target = User::findOrFail(htmlspecialchars(strip_tags($id)));

        $admin_count = User::where("isAdmin",true)->count();
        if($admin_count == 1 && $target->isAdmin){
            return back()->with('mensagem',"Não é possível deletar o único Admin! Existem " . $admin_count ." admins no momento.");
        }

        $target->delete();
        return redirect('dashboard')->with('mensagem',"Usuário deletado com sucesso!");
    }
}
