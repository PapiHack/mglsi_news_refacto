<?php

require_once('../Config/path.php');

/**
 * 
 * @author P@piHack3R
 * @since 
 * 
 * Je définis ici quelques helpers.
 * 
 */

 /**
 * Fontion permettant de retourner le chemin de la ressource passée en paramètre.
 *
 * @param   String  $file  ressource demandée
 *
 * @return  path         chemin de la ressource demandée
 */
function asset($file)
{
    return ASSETSPATH.'/'.$file;
}