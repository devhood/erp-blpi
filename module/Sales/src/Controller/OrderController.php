<?php

namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class OrderController extends BaseController
{
    public function indexAction()
    {
        return new ViewModel();
    }


    public function addAction()
    {

      $form = new \Sales\Form\OrderForm();


       $product = $this->_getOptions("Products","productId","productName");
       $form->get("products[productId]")->setOptions(array('value_options' => $product));

       $classification = $this->_getOptions("Classifications","classificationId","classificationName");
       $form->get("classifications[classificationId]")->setOptions(array('value_options' => $classification));








        return new ViewModel(array('form' => $form));
    }

}
