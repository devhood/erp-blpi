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
		$em = $this->_getEntityManager ();
		$formSales = new \Sales\Form\SalesForm ( $em );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $em );
		
		$request = $this->getRequest ();
		
		if ($request->isPost ()) {
			$request = ( array ) ($request->getPost ());
			$table = self::DBNS . 'Sales';
			$object = new $table ();
			$hydrator = new DoctrineHydrator ( $em );
			$object = $hydrator->hydrate ( $request, $object );
			$em->persist ( $object );
			$em->flush ();
			
			
			return $this->redirect ()->toUrl ( '/sales/order' );
		}
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function OrderApproveAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		$this->DisableForms ( $formSales );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function OrderPrintAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	public function InvoiceAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	public function InvoiceApproveAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		$this->DisableForms ( $formSales );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	public function InvoicePrintAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	public function PaymentRecordAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formPaymentDetail = new \Sales\Form\PaymentDetail ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		$this->DisableForms ( $formSales );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem,
				'formPaymentDetail' => $formPaymentDetail 
		) );
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
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	public function ReturnApproveAction() {
		$formSales = new \Sales\Form\SalesForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		$formSalesItem = new \Sales\Form\SalesItemForm ( $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' ) );
		
		$this->DisableForms ( $formSales );
		
		return new ViewModel ( array (
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem 
		) );
	}
	
	public function DisableForms($formSales) {
		$formSales->get ( 'transactionTypes[transactionTypeId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'inventoryLocations[inventoryLocationId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'customers[customerId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'shippingAddress[addressId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'billingAddress[addressId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'orderSource[orderSourceId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'shippingModes[shippingModeId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'users[userId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'paymentTerms[paymentTermId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'priceTypes[priceTypeId]' )->setAttribute ( "disabled", true );
		$formSales->get ( 'deliveryDate' )->setAttribute ( "disabled", true );
		$formSales->get ( 'orderedBy' )->setAttribute ( "disabled", true );
		$formSales->get ( 'percentVat' )->setAttribute ( "disabled", true);
    	
    	return ($formSales);
    }
    
    

}
