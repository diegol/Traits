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

trait LoggerAware
{
    use Fermio\LoggerAware;

    public function logEmergency($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->emerg($message, $context);
        }
    }

    public function logAlert($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->alert($message, $context);
        }
    }

    public function logCritical($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->crit($message, $context);
        }
    }

    public function logError($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->err($message, $context);
        }
    }

    public function logWarning($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->warn($message, $context);
        }
    }

    public function logNotice($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->notice($message, $context);
        }
    }

    public function logInfo($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->info($message, $context);
        }
    }

    public function logDebug($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->debug($message, $context);
        }
    }
}
