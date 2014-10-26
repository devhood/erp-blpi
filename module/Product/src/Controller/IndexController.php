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

    	$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    	$formProduct = new \Product\Form\ProductForm($em);
    	$formProductUom = new \Product\Form\ProductUomForm($em);
    	$formProductBundle = new \Product\Form\ProductBundleForm($em);
    	$formProductPrice = new \Product\Form\ProductPriceForm($em);
    	$formProductDocument = new \Product\Form\ProductDocumentForm($em);

        return new ViewModel(array(
    		'formProduct' => $formProduct,
            'formProductUom' => $formProductUom,
            'formProductBundle' => $formProductBundle,
            'formProductPrice' => $formProductPrice,
            'formProductDocument' => $formProductDocument,
       ));
    }
}
