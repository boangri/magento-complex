<?php
/**
 * Boangri Complex admin module
 * 
 * Install script. It creates a table for posts and inserts one demo row.
 * 
 * @category Boangri
 * @package Boangri_Complex
 * @copyright Copyright (c) 2014 Cyberhull LLC (www.cyberhull.com)
 * @author Boris Gribovskiy (boris.gribovskiy@cyberhull.com)
 */

$installer = $this;
$installer->startSetup();
$installer->addEntityType('complex_eavblogpost', array(
    //entity_model is the URI you'd pass into a Mage::getModel() call
    'entity_model'    => 'complex/eavblogpost',

    //table refers to the resource URI complex/eavblogpost
    //<complex_resource>...<eavblogpost><table>eavblog_posts</table>
    'table'           =>'complex/eavblogpost',
));
$installer->endSetup();
