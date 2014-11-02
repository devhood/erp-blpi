<?php

namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class SalesController extends BaseController {
	
	public function orderAction() {
		$records = $this->_getContents ( 'Sales' );
		return new ViewModel ( array (
				'records' => $records
		) );
	}
	
	public function CreditmemoAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		$this->DisableForms ( $formSales );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function DeliveryApproveAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		$this->DisableForms ( $formSales );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function DeliveryAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function DeliveryPrintAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function OrderAddAction() {
		
		$id = ucwords($this->params()->fromRoute('id'));
		$id = $id ? $id : null;
		$em = $this->_getEntityManager ();
		$formSales = new \Sales\Form\SalesForm ( $em );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $em );
		
		$request = $this->getRequest ();
		if ($request->isPost ()) {
			$request = ( array ) ($request->getPost ());
			
			$object = $this->_saveRecord('Sales',$request,$id);
			$salesId = $object->getSalesId ();
				
			return $this->redirect ()->toUrl ( '/sales/order' );
		}
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function OrderApproveAction() {
	return new ViewModel();
	}
	
	public function OrderPrintAction() {
	return new ViewModel();
	}
	public function InvoiceAction() {
	return new ViewModel();
	}
	public function InvoiceApproveAction() {
	return new ViewModel();
	}
	public function InvoicePrintAction() {
	return new ViewModel();
	}
	public function PaymentRecordAction() {
	return new ViewModel();
	}
	public function ReturnAddAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	public function ReturnAction() {
	return new ViewModel();
	}
	public function ReturnApproveAction() {
	return new ViewModel();
	}
	
	public function DisableForms($formSales) {
		$formSales->get ( 'transactionType[transactionTypeId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'inventoryLocation[locationId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'customer[customerId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'shippingAddressId' )->setAttribute ( "disabled", true );
		$formSales->get ( 'billingAddressId' )->setAttribute ( "disabled", true );
		$formSales->get ( 'orderSource[orderSourceId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'shippingMode[shippingModeId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'user[salesExecutiveId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'paymentTerm[paymentTermId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'priceType[priceTypeId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'orderedBy' )->setAttribute ( "disabled", true );
		$formSales->get ( 'percentVat' )->setAttribute ( "disabled", true);
		$formSales->get ( 'salesNotes' )->setAttribute ( "disabled", true);
		
    	
    	return ($formSales);
    }
    
    

}
