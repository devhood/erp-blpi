<?php

namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class UserController extends BaseController
{

	
	public function indexAction(){
		$records = $this->_getContents('Users');
		return new ViewModel(array('records' => $records));
	}
	public function addAction(){
		
		$em = $this->_getEntityManager();
		$userForm = new \Users\Form\UserForm($em);
		$accessForm = new \Users\Form\AccessForm($em);
		
		$request = $this->getRequest();
		if($request->isPost()){
			
			$request = (array)($request->getPost());
		
			$table = self::DBNS.'Users';
			$object = new $table();
			$hydrator = new DoctrineHydrator($em);
			$object = $hydrator->hydrate($request, $object);
			$em->persist($object);
			$em->flush();
			return $this->redirect()->toUrl('/user');
		}
		
		return new ViewModel(array(
			'userForm' => $userForm,
			'accessForm' => $accessForm
		));
		
	}

}
