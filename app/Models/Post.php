<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Laravel automaticamente assume que vai ser um snake case plural do nome do Model
    //protected $table = 'posts';

    protected $guarded = [];
}
