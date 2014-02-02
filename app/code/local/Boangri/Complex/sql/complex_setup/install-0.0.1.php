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

echo "installer start <br>";

$installer->addEntityType('complex/eavblogpost', array(
    //entity_mode is the URI you'd pass into a Mage::getModel() call
    'entity_model'    => 'complex/eavblogpost',

    //table refers to the resource URI complexworld/eavblogpost
    //<complexworld_resource>...<eavblogpost><table>eavblog_posts</table>
    'table'           =>'complex/eavblogpost',
));
echo "installer 1 <br>";
/*
//createEntityTables will automatically setup the tables we need, 
//        as well as add some configuration rows to the system.
$installer->createEntityTables(
    $this->getTable('complex/eavblogpost')
); 
echo "installer 2 <br>";
$this->addAttribute('complex_eavblogpost', 'title', array(
        //the EAV attribute type, NOT a MySQL varchar
        'type'              => 'varchar',
        'label'             => 'Title',
        'input'             => 'text',
        'class'             => '',
        'backend'           => '',
        'frontend'          => '',
        'source'            => '',
        'required'          => true,
        'user_defined'      => true,
        'default'           => '',
        'unique'            => false,
    ));
    $this->addAttribute('complex_eavblogpost', 'content', array(
        'type'              => 'text',
        'label'             => 'Content',
        'input'             => 'textarea',
    ));
    $this->addAttribute('complex_eavblogpost', 'date', array(
        'type'              => 'datetime',
        'label'             => 'Post Date',
        'input'             => 'datetime',
        'required'          => false,
    ));
echo "installer end <br>";
*/ 
$installer->endSetup(); 