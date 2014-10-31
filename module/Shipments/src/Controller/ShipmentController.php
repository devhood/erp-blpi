<?php

namespace Shipments\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class ShipmentController extends BaseController
{

	
	public function indexAction(){
		$records = $this->_getContents('Shipments');
		return new ViewModel(array('records' => $records));
	}
	public function addAction(){
		
		$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		$formShipment = new \Shipments\Form\ShipmentForm($em);
		$formShipmentItem = new \Shipments\Form\ShipmentItemForm($em);


		
		return new ViewModel(array(
			'formShipment' => $formShipment,
			'formShipmentItem' => $formShipmentItem,
			
		));
	}
}
