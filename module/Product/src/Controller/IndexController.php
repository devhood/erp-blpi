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
    	$form = new \Product\Form\AddProductForm();
    	return new ViewModel(array('form' => $form));
    }
}