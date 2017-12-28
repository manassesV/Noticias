<?php

namespace Noticias\Model;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
//    protected $primaryKey = ['id'];
//    protected $autoincrement = true;
    protected $guarded = ['id'];
    protected $fillable = ['titulo','sub_titulo','descricao','user_id','imagens','status'];
    protected $hidden = ['id','user_id'];
}
