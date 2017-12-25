<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $guarded = ['id','user_id'];
    protected $fillable = ['titulo','sub_titulo','descricao','image'];
    protected $hidden = ['id','user_id'];
}
