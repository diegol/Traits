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
use Symfony\Component\DependencyInjection\ContainerInterface;

trait ContainerAware
{
    use Fermio\ContainerAware;

    public function getService($id, $invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE)
    {
        return $this->container->get($id, $invalidBehavior);
    }

    public function hasService($id)
    {
        return $this->container->has($id);
    }

    public function setService($id, $service, $scope = ContainerInterface::SCOPE_CONTAINER)
    {
        return $this->container->set($id, $service, $scope);
    }

    public function getParameter($name)
    {
        return $this->container->getParameter($name);
    }

    public function hasParameter($name)
    {
        return $this->container->hasParameter($name);
    }

    public function setParameter($name, $value)
    {
        return $this->container->setParameter($name, $value);
    }
}
