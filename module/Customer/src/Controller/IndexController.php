<?php

namespace Customer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class IndexController extends BaseController
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
    	$form = new \Customer\Form\CustomerForm();

    	$type = $this->_getOptions("CustomerTypes","customerTypeId","customerTypeName");
        $form->get("customerTypes[customerTypeId]")->setOptions(array('value_options' => $type));

        $category = $this->_getOptions("Categories","categoryId","categoryName");
        $form->get("categories[categoryId]")->setOptions(array('value_options' => $category));

        $payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
        $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));

        $price = $this->_getOptions("priceTypes","priceTypeId","priceTypeName");
        $form->get("priceTypes[priceTypeId]")->setOptions(array('value_options' => $price));

        $shipping = $this->_getOptions("shippingModes","shippingModeId","shippingModeName");
        $form->get("shippingModes[shippingModeId]")->setOptions(array('value_options' => $shipping));

        $form->get("customerStatus")->setOptions(array('value_options' => array(
            '0'=>'Active',
            '1'=>'Inactive',
            '2'=>'Suspended',
            '3'=>'Block',)));

    	return new ViewModel(array('form' => $form));
    }
}
