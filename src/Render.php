<?php

namespace Diego\Fluid;

use Illuminate\Routing\Controller;
use TYPO3Fluid\Fluid\View\TemplateView;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Trait Render
 */
trait Render
{
    public static function template($method, $parameters = [], $isPage = false)
    {
        $renderViewController = new \Diego\Fluid\Controller\RenderViewController();

        return $renderViewController->renderView($method, $parameters, $isPage);
    }
}
