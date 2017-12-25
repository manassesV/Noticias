<?php

namespace App\Manipular;

/**
 * Here manipule the notice the send fob bank of dates
 *
 * @author manab
 */
class NoticiasManipular implements Metodos {

    public function store($request) {
        $noticias = app()->make('App\Model\Noticias');

        $dados = collect($request->only('titulo', 'sub_titulo', 'descricao', 'user_id'));
        $dados->prepend(auth()->id(), 'user_id');


        if (auth()->check()) {
            $noticias->
                    create($dados->all());

            return true;
        }
        
        return false;
    }

}
