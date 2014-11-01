<?php

namespace Product\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class ProductController extends BaseController {
	
	public function indexAction() {
		$records = $this->_getContents ( 'Products' );
		return new ViewModel ( array (
				'records' => $records 
		) );
	}
	public function addAction() {
		
		$id = ucwords($this->params()->fromRoute('id'));
		$id = $id ? $id : null;
		$em = $this->_getEntityManager ();
		$formProduct = new \Product\Form\ProductForm ( $em );
		$formProductUom = new \Product\Form\ProductUomForm ( $em );
		$formProductBundle = new \Product\Form\ProductBundleForm ( $em );
		$formProductPrice = new \Product\Form\ProductPriceForm ( $em );
		$formProductDocument = new \Product\Form\ProductDocumentForm ( $em );
		
		$request = $this->getRequest ();
		if ($request->isPost ()) {
			$request = ( array ) ($request->getPost ());
			$object = $this->_saveRecord('Products',$request,$id);
			$productId = $object->getProductId ();
			
			foreach ( $request ['uom'] as $uom ) {
				$uom["product"] = array (
								'productId' => $productId 
				);
				$uomTable = self::DBNS . 'ProductUoms';
				$this->_saveRecord('ProductUoms',$uom);
			}
			
			foreach ( $request ['price'] as $price ) {
				$price["product"] = array (
						'productId' => $productId 
					);
				$this->_saveRecord('ProductPrice',$price);
			}
			
			foreach ( $request ['bundle'] as $bundle ) {
				$bundle["parentProduct"] =  array (
								'productId' => $productId 
						);
				$this->_saveRecord('Bundles',$bundle);
			}
			
			foreach ( $request ['document'] as $document ) {
				$document["product"] = array (
						'productId' => $productId 
					);
				$this->_saveRecord('Documents',$document);
				
			}
			
			return $this->redirect ()->toUrl ( '/product' );
		}
		
		return new ViewModel ( array (
				'formProduct' => $formProduct,
				'formProductUom' => $formProductUom,
				'formProductBundle' => $formProductBundle,
				'formProductPrice' => $formProductPrice,
				'formProductDocument' => $formProductDocument 
		) );
	}
	
	public function editAction() {
		$em = $this->_getEntityManager ();
		$formProduct = new \Product\Form\ProductForm ( $em );
		$formProductUom = new \Product\Form\ProductUomForm ( $em );
		$formProductBundle = new \Product\Form\ProductBundleForm ( $em );
		$formProductPrice = new \Product\Form\ProductPriceForm ( $em );
		$formProductDocument = new \Product\Form\ProductDocumentForm ( $em );
	
		return new ViewModel ( array (
				'formProduct' => $formProduct,
				'formProductUom' => $formProductUom,
				'formProductBundle' => $formProductBundle,
				'formProductPrice' => $formProductPrice,
				'formProductDocument' => $formProductDocument
		) );
	}
}
