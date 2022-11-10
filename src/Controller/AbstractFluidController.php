<?php

namespace Diego\Fluid\Controller;

use Illuminate\Routing\Controller;
use TYPO3Fluid\Fluid\View\TemplateView;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Class AbstractFluidController.
 */
abstract class AbstractFluidController extends Controller
{
    /**
     * @var ViewInterface
     */
    protected $view;

    public function prepareMethodPath($method, $isPage)
    {
        if ($isPage) {
            return $method;
        }

        $renderMethod =explode('/', $method);

        unset($renderMethod[0]);

        return implode('/', $renderMethod);
    }
    /**
     * Execute an action on the controller.
     *
     * @param  string $method
     * @param  array $parameters
     * @param bool $isPage
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($method, $parameters, bool $isPage = false)
    {
        /** @var TemplateView $view */
        $view = resolve(TemplateView::class);

        $renderMethod = $isPage ? 'Page' : explode('/', $method)[0];
        $context = $view->getRenderingContext();
        $context->setControllerAction($this->prepareMethodPath($method, $isPage));
        $context->setControllerName($renderMethod);

        $view->setRenderingContext($context);
        $this->view = $view;

        $result = null;
        if ($result === null) {
            $result = $this->view->render();
        }

        return $result;
    }
}
