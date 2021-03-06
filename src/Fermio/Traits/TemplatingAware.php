<?php

/*
 * This file is part of the Fermio Traits package.
 *
 * (c) Pierre Minnieur <pierre@ferm.io>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Fermio\Traits;

use Fermio\Bundle\TraitInjectionBundle\Traits as Fermio;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Templating\StreamingEngineInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

trait TemplatingAware
{
    use Fermio\TemplatingAware;

    /**
     * @see EngineInterface::render
     */
    public function renderView($view, array $parameters = [])
    {
        return $this->templating->render($view, $parameters);
    }

    /**
     * @see EngineInterface::renderResponse
     */
    public function render($view, array $parameters = [], Response $response = null)
    {
        return $this->templating->renderResponse($view, $parameters, $response);
    }

    /**
     * @see StreamingEngineInterface::stream
     */
    public function stream($view, array $parameters = [], StreamedResponse $response = null)
    {
        $callback = function () use ($view, $parameters) {
            $this->templating->stream($view, $parameters);
        };

        if (null === $response) {
            return new StreamedResponse($callback);
        }

        $response->setCallback($callback);

        return $response;
    }
}
