<?php

namespace Diego\Fluid\Controller;

use Illuminate\Routing\Controller;
use TYPO3Fluid\Fluid\View\TemplateView;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Class AbstractFluidController.
 */
class RenderViewController extends AbstractFluidController
{
    public function renderView($method, $parameters, $isPage = false)
    {
        return $this->render($method, $parameters, $isPage);
    }
}
