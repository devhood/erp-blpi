<?php
namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
// use Sales\Form\SalesForm;
// use Sales\Form\SalesItemForm;

class SalesController extends BaseController
{
    public function orderAction()
    {

        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
          'formSales' => $formSales,
          'formSalesItem' => $formSalesItem
          ));
    }


    public function deliveryAction()
    {

        $formSales = new \Sales\Form\SalesForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        $formSalesItem = new \Sales\Form\SalesItemForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        
        return new ViewModel(array('formSales' => $formSales, 'formSalesItem' => $formSalesItem));
    }

}
