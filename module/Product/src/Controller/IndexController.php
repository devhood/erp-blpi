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

    	$formProduct = new \Product\Form\ProductForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formProductUom = new \Product\Form\ProductUomForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formProductBundle = new \Product\Form\ProductBundleForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formProductPrice = new \Product\Form\ProductPriceForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formProductDocument = new \Product\Form\ProductDocumentForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
    		'formProduct' => $formProduct,
            'formProductUom' => $formProductUom,
            'formProductBundle' => $formProductBundle,
            'formProductPrice' => $formProductPrice,
            'formProductDocument' => $formProductDocument,
       ));
    }
}
