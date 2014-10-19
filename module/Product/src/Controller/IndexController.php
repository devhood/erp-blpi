<?php

namespace Product\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	protected $em = null;
	
	public function setEntityManager(\Doctrine\ORM\EntityManager $em)
	{
		$this->em = $em;
	}
	
	public function getEntityManager()
	{
		if (null === $this->em) {
			$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		}
		return $this->em;
	}
	
    public function indexAction()
    {
    	return new ViewModel();
    }
    public function addAction()
    {
    	$form = new \Product\Form\AddProductForm();
    	return new ViewModel(array('form' => $form));
    }
}