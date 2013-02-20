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

trait ValidatorAware
{
    use Fermio\ValidatorAware;

    public function validate($object, $groups = null)
    {
        return $this->validator->validate($object, $groups);
    }

    public function validateProperty($object, $property, $groups = null)
    {
        return $this->validator->validateProperty($object, $property, $groups);
    }

    public function validatePropertyValue($class, $property, $value, $groups = null)
    {
        return $this->validator->validatePropertyValue($class, $property, $value, $groups);
    }

    public function validateValue($value, Constraint $constraint, $groups = null)
    {
        return $this->validator->validateValue($value, $constraint, $groups);
    }
}
