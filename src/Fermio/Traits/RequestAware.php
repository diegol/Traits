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

trait RequestAware
{
    use Fermio\RequestAware;

    public function getSession()
    {
        return $this->request->getSession();
    }

    public function hasSession()
    {
        return $this->request->hasSession();
    }

    public function hasPreviousSession()
    {
        return $this->request->hasPreviousSession();
    }
}
