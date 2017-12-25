<?php

namespace App\Manipular;

use App\Model\Noticias;
use Illuminate\Database\Eloquent\Collection;

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

    public function store(array $dados) {

        $dates = collect($dados);

        $dates->prepend(auth()->id(), "user_id");
        $dates->pull('image');
        
        //dd($dates);



        if (auth()->check()) {
            $this->noticias->save($dates->values()->to7);
            return redirect()->route('noticias.create');
        }
    }

}
