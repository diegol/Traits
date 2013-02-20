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
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface
use Symfony\Component\Security\Core\SecurityContextInterface;

trait SecurityContextAware
{
    use Fermio\SecurityContextAware;

    /**
     * @see SecurityContextInterface::isGranted
     */
    public function isGranted($attributes, $object = null);
    {
        return $this->securityContext->isGranted($attributes, $object);
    }

    /**
     * @see SecurityContextInterface::getToken
     */
    public function getToken()
    {
        return $this->securityContext->getToken();
    }

    /**
     * @see TokenInterface::getUser
     */
    public function getUser()
    {
        if (null === $token = $this->securityContext->getToken()) {
            return null;
        }

        if (!is_object($user = $token->getUser())) {
            return null;
        }

        return $user;
    }
}
