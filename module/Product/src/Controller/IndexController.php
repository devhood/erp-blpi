<?php

namespace Product\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class IndexController extends BaseController
{
	
    public function indexAction()
    {
    	return new ViewModel();
    }
    
    public function addAction()
    {
    	$form = new \Product\Form\ProductForm();
    	$brand = $this->_getOptions("Brands","brandId","brandName");
    	
    	$form->get("brand[brandId]")->setOptions(array('value_options' => $brand));
    	
    	return new ViewModel(array('form' => $form));
    }
    public function editAction()
    {
    	$form = new \Product\Form\ProductForm();
    	return new ViewModel(array('form' => $form));
    }
    public function viewAction()
    {
    	$form = new \Product\Form\ProductForm();
    	$form->get("brand[brandId]")->setAttribute("disabled", true);
    	return new ViewModel(array('form' => $form));
    }
}
