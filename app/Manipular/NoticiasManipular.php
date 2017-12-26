<?php

namespace App\Manipular;

use App\Model\Noticias;

/**
 * Here manipule the notice the send fob bank of dates
 *
 * @author manab
 */
class NoticiasManipular implements Metodos {

    protected $noticias;

    public function __construct(Noticias $noticias) {
        $this->noticias = $noticias;
    }

    public function store($request) {
        $dados = collect($request->only('titulo', 'sub_titulo', 'descricao', 'user_id'));
        $dados->prepend(auth()->id(), 'user_id');
        $dados->prepend(true, 'status');


        if (auth()->check()) {
            if ($request->file('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                
                
                $this->noticias->create($dados->all());

                return true;
            }
        }


        return false;
    }

    public function delete($id) {
        $this->noticias->find($id)->update(['status' => false]);
    }

}
