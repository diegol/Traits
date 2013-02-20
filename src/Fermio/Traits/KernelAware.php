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
use Symfony\Bundle\FrameworkBundle\HttpKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

trait KernelAware
{
    use Fermio\KernelAware;

    /**
     * @see HttpKernel::forward
     */
    public function forward($controller, array $path = [], array $query = [])
    {
        return $this->kernel->forward($controller, $path, $query);
    }

    /**
     * @see HttpKernelInterface::handle
     */
    public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
    {
        return $this->kernel->handle($request, $type, $catch);
    }
}
