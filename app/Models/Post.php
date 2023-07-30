<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Laravel automaticamente assume que vai ser um snake case plural do nome do Model
    //protected $table = 'posts';

    //Propriedade que dita quais colunas nao podem ser alteradas por mass assignment
    protected $guarded = ['id','created_at','updated_at'];

    public function queryScope(){
        //TODO query scoping
    }

    public function author(){
        //Mapeia o relacionamento Post->User
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    
    }
}
