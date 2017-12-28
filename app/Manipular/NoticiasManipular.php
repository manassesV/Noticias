<?php

namespace Noticias\Manipular;

use Noticias\Model\Noticias;
use Intervention\Image\ImageManagerStatic as Image;

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
            if ($request->hasFile('image')) {
               $image = $request->file('image');
               $filename = time().'.'.$image->getClientOriginalExtension();
               Image::make($image)->resize(300,300)->save(public_path('uploads/noticias/'.$filename));
                
               $dados->prepend($filename,'imagens');
                
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
