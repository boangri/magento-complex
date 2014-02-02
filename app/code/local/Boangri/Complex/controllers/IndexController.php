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
    
    public function populateEntriesAction() {
        for ($i=0;$i<10;$i++) {
            $weblog2 = Mage::getModel('complex/eavblogpost');
            $weblog2->setTitle('This is a test '.$i);
            $weblog2->setContent('This is test content '.$i);
            $weblog2->setDate(now());
            $weblog2->save();
        }
        echo 'Done';
    }
    
    public function showCollectionAction() {
        $weblog2 = Mage::getModel('complex/eavblogpost');
        $entries = $weblog2->getCollection()
            ->addAttributeToSelect('title')
            ->addAttributeToSelect('content');
        $entries->load();
        foreach($entries as $entry)
        {
            // var_dump($entry->getData());
            echo '<h2>' . $entry->getTitle() . '</h2>';
            echo '<p>Date: ' . $entry->getDate() . '</p>';
            echo '<p>' . $entry->getContent() . '</p>';
        }
        echo '</br>Done</br>';
    }
}
