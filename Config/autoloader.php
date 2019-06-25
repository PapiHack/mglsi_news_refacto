<?php

/**
 * 
 * @author P@piHack3R
 * @since 25/06/19
 * @version 1.0.0
 * 
 */

 require_once('path.php');

 function loadEntity($entity)
{
    $file = MODELPATH.'/Entity/'.$entity.'.class.php';
    
    if(file_exists($file))
        require_once($file);
}

function loadManager($manager)
{
    $file = MODELPATH.'/Manager/'.$manager.'.class.php';

    if(file_exists($file))
        require_once($file);
}

function loadData($dataClass)
{
    $file = MODELPATH.'/Data/'.$dataClass.'.class.php';

    if(file_exists($file))
        require_once($file);
}

spl_autoload_register('loadEntity');
spl_autoload_register('loadManager');
spl_autoload_register('loadData');