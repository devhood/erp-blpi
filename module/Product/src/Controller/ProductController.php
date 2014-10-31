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
    		
    		
    		$productId = $object->getProductId();
    		
    		
    		foreach ($request['uom'] as $uom) {
    			$content = array(
    					"product" => array( 'productId' => $productId),
    					"uom" => $uom['uom'],
    					"quantity" => $uom['quantity']
    			);
    			$uomTable = self::DBNS.'ProductUoms';
    			$objectUom = new $uomTable();
    			$hydrator = new DoctrineHydrator($em);
    			$objectUom = $hydrator->hydrate($content, $objectUom);
    			$em->persist($objectUom);
    			$em->flush();
    		}
    		
    		foreach ($request['price'] as $price) {
    			$content = array(
    					"product" => array( 'productId' => $productId),
    					"priceType" => $price['priceType'],
    					"price" => $price['price'],
    					"currency" => $price['currency']
    			);
    			
    			$priceTable = self::DBNS.'ProductPrice';
    			$objectPrice = new $priceTable();
    			$hydrator = new DoctrineHydrator($em);
    			$objectPrice = $hydrator->hydrate($content, $objectPrice);
    			$em->persist($objectPrice);
    			$em->flush();
    		}
    		
    		foreach ($request['bundle'] as $bundle) {
    			$content = array(
    					"product" => array( 'productId' => $productId),
    					"priceType" => $price['priceType'],
    					"price" => $price['price'],
    					"currency" => $price['currency']
    			);
    			 
    			$priceTable = self::DBNS.'ProductPrice';
    			$objectPrice = new $priceTable();
    			$hydrator = new DoctrineHydrator($em);
    			$objectPrice = $hydrator->hydrate($content, $objectPrice);
    			$em->persist($objectPrice);
    			$em->flush();
    		}
    		
    		
    		var_dump($request['uom']);
    		echo "<br/><br/>";
    		var_dump($request['bundle']);
    		echo "<br/><br/>";
    		var_dump($request['document']);
    		echo "<br/><br/>";
    		var_dump($request['price']);
    		echo "<br/><br/>";
    		exit;
    		
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
