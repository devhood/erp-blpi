<?php
namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;


class SalesController extends BaseController
{
	
	public function OrderListAction()
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
    public function OrderAddAction()
    {
    
    	$formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    
    	return new ViewModel(array(
    			'formSales' => $formSales,
    			'formSalesItem' => $formSalesItem
    	));
    }
    

    public function ApproveDeliveryAction()
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

    public function ApproveInvoiceAction()
    {

        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
          'formSales' => $formSales,
          'formSalesItem' => $formSalesItem
          ));
    }

     public function printDeliveryAction()
    {

        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
          'formSales' => $formSales,
          'formSalesItem' => $formSalesItem
          ));
    }

    public function printInvoiceAction()
    {

        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
          'formSales' => $formSales,
          'formSalesItem' => $formSalesItem
          ));
    }

}
