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
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

trait RouterAware
{
    use Fermio\RouterAware;

    /**
     * @see UrlGeneratorInterface::generate
     */
    public function generateUrl($route, $parameters = [], $absolute = false)
    {
        return $this->router->generate($route, $parameters, $absolute);
    }

    /**
     * @see RedirectResponse::__construct
     */
    public function redirect($url, $status = 302)
    {
        return new RedirectResponse($url, $status);
    }
}
