<?php

require '../../vendor/autoload.php';


/**
 * Add Debug FUnction Symfony
 */

if (!function_exists('renderFluid')) {
    function renderFluid($method , $parameters = [] , $isPage = false)
    {
        $renderViewController = new \Diego\Fluid\Controller\RenderViewController();

        return $this->$renderViewController($method, $parameters, $isPage);
    }
}
