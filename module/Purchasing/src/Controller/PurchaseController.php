<?php

namespace Purchasing\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class PurchaseController extends BaseController
{

	public function indexAction(){
		$records = $this->_getContents('Purchases');
		return new ViewModel(array('records' => $records));
	}
	public function addAction(){
		
		$em = $this->_getEntityManager();
		$purchaseForm = new \Purchasing\Form\PurchaseForm($em);
		$accessForm = new \Purchasing\Form\AccessForm($em);
		
		$request = $this->getRequest();
		if($request->isPost()){
			
			$request = (array)($request->getPost());
		
			$table = self::DBNS.'Purchasing';
			$object = new $table();
			$hydrator = new DoctrineHydrator($em);
			$object = $hydrator->hydrate($request, $object);
			$em->persist($object);
			$em->flush();
			return $this->redirect()->toUrl('/purchase');
		}
		
		return new ViewModel(array(
			'purchaseForm' => $purchaseForm,
			'accessForm' => $accessForm
		));
		
	}

}
