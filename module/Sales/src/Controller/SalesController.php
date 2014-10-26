<?php
namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;


class SalesController extends BaseController
{
	public function CreditMemoApproveAction()
	{
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		return new ViewModel(array(
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem
		));
	}
	

		
	public function DeliveryAction()
	{
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		return new ViewModel(array(
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem
		));
	}
	
	public function DeliveryPrintAction()
	{
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		return new ViewModel(array(
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem
		));
	}
	
	
	public function OrderAddAction()
	{
	
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		return new ViewModel(array(
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem
		));
	}
	
	public function OrderAction()
	{
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		return new ViewModel(array(
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem
		));
	}

	
    public function DeliveryApproveAction()
    {
        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
          'formSales' => $formSales,
          'formSalesItem' => $formSalesItem
          ));
    }
    
    public function InvoiceAction()
    {
    	$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    
    	return new ViewModel(array(
    			'formSales' => $formSales,
    			'formSalesItem' => $formSalesItem
    	));
    }
    
    public function InvoiceApproveAction()
    {
        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
          'formSales' => $formSales,
          'formSalesItem' => $formSalesItem
          ));
    }



    public function InvoicePrintAction()
    {
        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
          'formSales' => $formSales,
          'formSalesItem' => $formSalesItem
          ));
    }
    
    public function PaymentRecordAction()
    {
    	$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    
    	return new ViewModel(array(
    			'formSales' => $formSales,
    			'formSalesItem' => $formSalesItem
    	));
    }
    
    public function ReturnAddAction()
    {
    	$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    
    	return new ViewModel(array(
    			'formSales' => $formSales,
    			'formSalesItem' => $formSalesItem
    	));
    }
    
    

}
