<?php
class TuxWeb_GroupPrice_Adminhtml_GrouppricebackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('groupprice/grouppricebackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Update Group Price"));
	    
		$block = $this->getLayout()->createBlock(
		'Mage_Core_Block_Template',
		'group-price',
		array('template' => 'groupprice/grouppricebackend.phtml')
		);
		 
		$this->getLayout()->getBlock('content')->append($block);
		 
		//Rilascia il flusso del layout di Magento Backend
	   $this->renderLayout();
    }
    
    public function addIvaPrezzoRivAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Update Group Price | Prezzo Aggiornato Aggiunta Aliquota"));
	   $block = $this->getLayout()->createBlock(
		'Mage_Core_Block_Template',
		'prezzo-aggiornato',
		array('template' => 'groupprice/prezzo-aggiornato.phtml')
		);
		 
		$this->getLayout()->getBlock('content')->append($block);
		 
		//Rilascia il flusso del layout di Magento Backend
	   $this->renderLayout();
    }
     public function reverseIvaPrezzoRivAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Update Group Price | Prezzo Aggiornato Reverse Aliquota"));
	   $block = $this->getLayout()->createBlock(
		'Mage_Core_Block_Template',
		'prezzo-aggiornato-reverse',
		array('template' => 'groupprice/prezzo-aggiornato-reverse.phtml')
		);
		 
		$this->getLayout()->getBlock('content')->append($block);
		 
		//Rilascia il flusso del layout di Magento Backend
	   $this->renderLayout();
    }
}
