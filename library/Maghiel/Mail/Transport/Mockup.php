<?php
/**
 * Maghiel Library
 * All rights reserved.
 */

/**
 * Mockup transport layer for Zend_Mail. Allows testing of applications that
 * send e-mails when no other transport layer is available on the system.
 * Basically just lets _sendMail() return true.
 *
 * @uses        Zend_Mail_Transport_Abstract
 * @category    Maghiel
 * @package     Mail
 * @subpackage  Transport
 * @author      Maghiel Dijksman <mail@mdijksman.nl>
 */
class Maghiel_Mail_Transport_Mockup extends Zend_Mail_Transport_Abstract
{
    /**
     * Just returns true as this is a mockup "transport" layer
     *
     * @return boolean
     */
    protected function _sendMail()
    {
        return true;
    }
}
