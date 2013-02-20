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

use Doctrine\Common\Persistence\ManagerRegistry;
use Fermio\Bundle\TraitInjectionBundle\Traits as Fermio;

trait DoctrineAware
{
    use Fermio\DoctrineAware;

    /**
     * @see ManagerRegistry::getManager
     */
    public function getManager($name = null)
    {
        return $this->getManager($name);
    }

    /**
     * @see ManagerRegistry::getManagerForClass
     */
    public function getManagerForClass($class)
    {
        return $this->doctrine->getManagerForClass($class);
    }

    /**
     * @see ManagerRegistry::getRepository
     */
    public function getRepository($persistentObject, $persistentManagerName = null)
    {
        return $this->doctrine->getRepository($persistentObject, $persistentManagerName);
    }
}
