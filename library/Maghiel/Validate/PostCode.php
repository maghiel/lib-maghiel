<?php
/**
 * Maghiel Library
 * All rights reserved
 */

/**
 * Context aware validation of PostCode
 * 
 * @category    Maghiel
 * @package     Validate  
 * @author      Maghiel Dijksman <mail@mdijksman.nl>
 */
class Maghiel_Validate_PostCode
    extends Zend_Validate_PostCode
{
    public function __construct($options = null)
    {
        try {
            parent::__construct($options);
        } catch (Exception $e) {
            // Do nothing ;)
        }
    }

    /**
     * Context aware validation of PostCode
     * 
     * @see Zend_Validate_PostCode
     * @param string $value
     * @param array $context
     * @return boolean
     */
    public function isValid($value, $context = null)
    {
        $value = (string) $value;
        
        if (false === (is_array($context) && isset($context['country']))) {
            return true;
        }
        
        $locale = Zend_Locale::getLocaleToTerritory($context['country']);
        
        $this->setLocale($locale);
        return parent::isValid($value);
    }

}
