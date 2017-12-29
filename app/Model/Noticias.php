<?php

namespace Noticias\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticias extends Model {

    use SoftDeletes;

//    protected $primaryKey = ['id'];
//    protected $autoincrement = true;
    protected $table = ['noticias'];
    protected $guarded = ['id'];
    protected $fillable = ['titulo', 'sub_titulo', 'descricao', 'user_id', 'imagens', 'status'];
    protected $hidden = ['id', 'user_id'];
    protected $casts = [
        'titulo' => 'string',
        'sub_titulo' => 'string',
        'descricao' => 'string',
        'imagens' => 'string',
        'status' => 'boolean',
        'user_id' => 'integer'
    ];
    protected $perPage = 10;
    protected $dates = ['deleted_at'];

    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

}
