<?php

namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class UserController extends BaseController
{

	
	public function indexAction(){
		$records = $this->_getContents('Users');
		return new ViewModel(array('records' => $records));
	}
	public function addAction(){
		
		
		$userForm = new \Users\Form\UserForm($this->_getEntityManager());
		$accessForm = new \Users\Form\AccessForm($this->_getEntityManager());
		return new ViewModel(array(
			'userForm' => $userForm,
			'accessForm' => $accessForm
		));
	}
}
