<?php

/**
 * 
 * @author P@piHack3R
 * @since 
 * 
 * Je définis ici un trait contenant une fonction permettant l'hydratation d'un objet
 */

trait HydratationTrait 
{
    private function hydrate(Array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
}