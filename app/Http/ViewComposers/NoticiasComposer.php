<?php

namespace Noticias\Http\ViewComposers;

use Noticias\Model\Noticias;
use Illuminate\Contracts\View\View;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoticiasComposer
 *
 * @author manab
 */
class NoticiasComposer {

    private $noticias;

    public function __construct(Noticias $noticias) {
        $this->noticias = $noticias;
    }
    
    public function Compose(View $view){
        $view->with('post', $this->noticias->all());
    }

}
