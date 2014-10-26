<?php
namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;


class SalesController extends BaseController
{
	public function CreditmemoAction()
	{
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		$this->DisableForms($formSales);
		
		return new ViewModel(array(
				'formSales' => $formSales,
				'formSalesItem' => $formSalesItem
		));
	}
	

	public function DeliveryApproveAction()
	{
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		$this->DisableForms($formSales);
		
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
	
	public function OrderApproveAction()
	{
		$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
	
		$this->DisableForms($formSales);
		
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

	public function OrderPrintAction()
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

        $this->DisableForms($formSales);
        
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
    
    	$this->DisableForms($formSales);
    	
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
    public function ReturnAction()
    {
    	$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	
    	
    	return new ViewModel(array(
    			'formSales' => $formSales,
    			'formSalesItem' => $formSalesItem
    	));
    }
    public function ReturnApproveAction()
    {
    	$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

    	$this->DisableForms($formSales);

    	return new ViewModel(array(
    			'formSales' => $formSales,
    			'formSalesItem' => $formSalesItem
    	));
    }
    
    public function DisableForms($formSales)
    {
    	$formSales->get('transactionTypes[transactionTypeId]')->setAttribute("disabled", true);
    	$formSales->get('inventoryLocations[inventoryLocationId]')->setAttribute("disabled", true);
    	$formSales->get('customers[customerId]')->setAttribute("disabled", true);
    	$formSales->get('shippingAddress[addressId]')->setAttribute("disabled", true);
    	$formSales->get('billingAddress[addressId]')->setAttribute("disabled", true);
    	$formSales->get('orderSource[orderSourceId]')->setAttribute("disabled", true);
    	$formSales->get('shippingModes[shippingModeId]')->setAttribute("disabled", true);
    	$formSales->get('users[userId]')->setAttribute("disabled", true);
    	$formSales->get('paymentTerms[paymentTermId]')->setAttribute("disabled", true);
    	$formSales->get('priceTypes[priceTypeId]')->setAttribute("disabled", true);
    	$formSales->get('deliveryDate')->setAttribute("disabled", true);
    	$formSales->get('orderedBy')->setAttribute("disabled", true);
    	$formSales->get('percentVat')->setAttribute("disabled", true);
    	
    	return ($formSales);
    }
    
    

}
