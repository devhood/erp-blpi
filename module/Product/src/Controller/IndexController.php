<?php

namespace Product\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Product\Form;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	return new ViewModel();
    }
    public function addAction()
    {
        $form = new \Product\Form\ProductForm();
    	return new ViewModel(array('form' => $form));
    }
}