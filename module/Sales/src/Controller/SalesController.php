<?php

namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use Sales\Form\SalesForm;
use Sales\Form\SalesItemForm;

class SalesController extends BaseController
{
    public function orderAction()
    {

        $formSales = new SalesForm($this->_getEntityManager());
        $formSalesItem = new SalesItemForm($this->_getEntityManager());
        return new ViewModel(array('formSales' => $formSales, 'formSalesItem' => $formSalesItem));
    }
    public function deliveryAction()
    {
    
        $formSales = new SalesForm($this->_getEntityManager());
        $formSalesItem = new SalesItemForm($this->_getEntityManager());
        return new ViewModel(array('formSales' => $formSales, 'formSalesItem' => $formSalesItem));
    }

}
