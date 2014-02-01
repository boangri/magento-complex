<?php
/**
 * Boangri Complex admin module
 * 
 * @category Boangri
 * @package Boangri_Complex
 * @copyright Copyright (c) 2014 Cyberhull LLC (www.cyberhull.com)
 * @author Boris Gribovskiy (boris.gribovskiy@cyberhull.com)
 */

/**
 * Description of Eavblogpost
 *
 * @author boris
 */
class Boangri_Complex_Model_Resource_Eavblogpost extends Mage_Eav_Model_Entity_Abstract
{
    protected function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('complex_eavblogpost');
        $this->setConnection(
            $resource->getConnection('complex_read'),
            $resource->getConnection('complex_write')
        );
    }
}
