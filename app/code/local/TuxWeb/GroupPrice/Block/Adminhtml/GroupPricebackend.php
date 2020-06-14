<?php

class TuxWeb_GroupPrice_Block_Adminhtml_GroupPricebackend extends Mage_Adminhtml_Block_Template {
     public function _construct()
    {
        parent::_construct();

        $this->setTemplate('groupprice/grouppricebackend.phtml'); 
    }
}