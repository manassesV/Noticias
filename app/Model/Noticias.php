<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['titulo','sub_titulo','descricao','user_id'];
    protected $hidden = ['id','user_id'];
}
