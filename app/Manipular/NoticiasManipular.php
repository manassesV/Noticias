<?php

namespace App\Manipular;

use App\Model\Noticias;

/**
 * Here manipule the notice the send fob bank of dates
 *
 * @author manab
 */
class NoticiasManipular implements Metodos 
    {
    
    protected $noticias;
    
    public function __construct(Noticias $noticias) 
    {
        $this->noticias = $noticias;
    }

        public function store(array $array) {
            
              
    }

}
