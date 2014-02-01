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
 * Frontend controller (for tests and tutorial purposes)
 * 
 * @category Boangri
 * @package Boangri_Complex 
 */
class Boangri_Complex_IndexController extends Mage_Core_Controller_Front_Action {
    /**
     * index action
     */
    public function indexAction() 
    {
        $weblog2 = Mage::getModel('complex/eavblogpost');
        $weblog2->load(1);
        var_dump($weblog2);
    }
}
