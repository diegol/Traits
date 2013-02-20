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
use Symfony\Component\HttpKernel\Log\LoggerInterface;

trait LoggerAware
{
    use Fermio\LoggerAware;

    /**
     * @see LoggerInterface::emerg
     */
    public function logEmergency($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->emerg($message, $context);
        }
    }

    /**
     * @see LoggerInterface::alert
     */
    public function logAlert($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->alert($message, $context);
        }
    }

    /**
     * @see LoggerInterface::crit
     */
    public function logCritical($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->crit($message, $context);
        }
    }

    /**
     * @see LoggerInterface::err
     */
    public function logError($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->err($message, $context);
        }
    }

    /**
     * @see LoggerInterface::warn
     */
    public function logWarning($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->warn($message, $context);
        }
    }

    /**
     * @see LoggerInterface::notice
     */
    public function logNotice($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->notice($message, $context);
        }
    }

    /**
     * @see LoggerInterface::info
     */
    public function logInfo($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->info($message, $context);
        }
    }

    /**
     * @see LoggerInterface::debug
     */
    public function logDebug($message, array $context = [])
    {
        if (null !== $this->logger) {
            return $this->logger->debug($message, $context);
        }
    }
}
