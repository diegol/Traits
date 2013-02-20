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

trait SwiftmailerAware
{
    use Fermio\SwiftmailerAware;

    public function sendMail(\Swift_Mime_Message $message, &$failedRecipients = null)
    {
        return $this->mailer->send($message, $failedRecipients);
    }
}
