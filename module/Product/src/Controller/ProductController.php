<?php

namespace Product\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class ProductController extends BaseController
{

	public function indexAction()
    {
    	$records = $this->_getContents('Products');
		return new ViewModel(array('records' => $records));
    }

    public function addAction()
    {

    	$em = $this->_getEntityManager();
    	$formProduct = new \Product\Form\ProductForm($em);
    	$formProductUom = new \Product\Form\ProductUomForm($em);
    	$formProductBundle = new \Product\Form\ProductBundleForm($em);
    	$formProductPrice = new \Product\Form\ProductPriceForm($em);
    	$formProductDocument = new \Product\Form\ProductDocumentForm($em);
		
    	$request = $this->getRequest();
    	if($request->isPost()){
    			
    		$request = (array)($request->getPost());
    			
    		$table = self::DBNS.'Products';
    		$object = new $table();
    		$hydrator = new DoctrineHydrator($em);
    		$object = $hydrator->hydrate($request, $object);
    		$em->persist($object);
    		$em->flush();
    		return $this->redirect()->toUrl('/product');
    	}
    	
        return new ViewModel(array(
    		'formProduct' => $formProduct,
            'formProductUom' => $formProductUom,
            'formProductBundle' => $formProductBundle,
            'formProductPrice' => $formProductPrice,
            'formProductDocument' => $formProductDocument,
       ));
    }
}
