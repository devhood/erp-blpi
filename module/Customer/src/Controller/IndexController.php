<?php

namespace Customer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	protected $em = null;


	//ORM Entity
	public function setEntityManager(\Doctrine\ORM\EntityManager $em)
	{
		$this->em = $em;
	}
	//ORM Entity
	public function getEntityManager()
	{
		if (null === $this->em) {
			$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		}
		return $this->em;
	}





		//calling customer/ page
    public function indexAction()
    {
    	return new ViewModel();
    }

		//calling customer/add page
    public function addAction()
    {
    	$form = new \Customer\Form\AddCustomerForm();
    	return new ViewModel(array('form' => $form));
    }
}
