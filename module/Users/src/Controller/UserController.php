<?php

namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class UserController extends BaseController {
	public function indexAction() {
		$records = $this->_getContents ( 'Users' );
		return new ViewModel ( array (
				'records' => $records 
		) );
	}
	public function addAction() {
		$em = $this->_getEntityManager ();
		$userForm = new \Users\Form\UserForm ( $em );
		$accessForm = new \Users\Form\AccessForm ( $em );
		
		$request = $this->getRequest ();
		if ($request->isPost ()) {
			$request = ( array ) ($request->getPost ());
			$users = self::DBNS . 'Users';
			$objectUser = new $users ();
			$hydrator = new DoctrineHydrator ( $em );
			$objectUser = $hydrator->hydrate ( $request, $objectUser );
			$em->persist ( $objectUser );
			$em->flush ();
			
			foreach ( $request ['permission'] as $permission ) {
				$db = array (
						"designation" => array (
								'designationId' => $objectUser->getDesignation ()->getDesignationId () 
						),
						"permission" => $permission [permission] 
				);
				
				$access = self::DBNS . 'DesignationPermissions';
				$objectDp = new $access ();
				$hydrator = new DoctrineHydrator ( $em );
				$objectDp = $hydrator->hydrate ( $db, $objectDp );
				$em->persist ( $objectDp );
				$em->flush ();
			}
			return $this->redirect ()->toUrl ( '/user' );
		}
		
		return new ViewModel ( array (
				'userForm' => $userForm,
				'accessForm' => $accessForm 
		) );
	}
	public function editAction() {
		$em = $this->_getEntityManager ();
		$userForm = new \Users\Form\UserForm ( $em );
		$accessForm = new \Users\Form\AccessForm ( $em );
		$users = self::DBNS . 'Users';
		$id = ( int ) $this->params ()->fromRoute ( 'id' );
		$objectUser = $em->find ( $users, $id );
		$userForm->bind ( $objectUser );
		$request = $this->getRequest ();
		if ($request->isPost ()) {
			$request = ( array ) ($request->getPost ());
			$hydrator = new DoctrineHydrator ( $em );
			$objectUser = $hydrator->hydrate ( $request, $objectUser );
			$em->persist ( $objectUser );
			$em->flush ();
			
			foreach ( $request ['permission'] as $permission ) {
				$db = array (
						"designation" => array (
								'designationId' => $objectUser->getDesignation ()->getDesignationId () 
						),
						"permission" => $permission [permission] 
				);
				
				$access = self::DBNS . 'DesignationPermissions';
				$objectDp = new $access ();
				$hydrator = new DoctrineHydrator ( $em );
				$objectDp = $hydrator->hydrate ( $db, $objectDp );
				$em->persist ( $objectDp );
				$em->flush ();
			}
			return $this->redirect()->toUrl('/user');
		}
	
		return new ViewModel(array(
				'userForm' => $userForm,
				'accessForm' => $accessForm
		));
	
	}
}
