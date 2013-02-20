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

trait FormFactoryAware
{
    use Fermio\FormFactoryAware;

    public function createForm($type, $data = null, array $options = [])
    {
        return $this->formFactory->create($type, $data, $options);
    }

    public function createFormBuilder($data = null, array $options = [])
    {
        return $this->formFactory->createBuilder('form', $data, $options);
    }
}
