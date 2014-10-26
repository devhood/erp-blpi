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
			//$records = $this->_getContents("records");

			return new ViewModel();

			//	'form' => $form,
			//	'record' => $records,

    }

		//calling customer/add page
    public function addAction()
    {
    	$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    	$customerForm = new \Customer\Form\CustomerForm($em);
    	$contactForm = new \Customer\Form\ContactForm($em);
    	$addressForm = new \Customer\Form\AddressForm($em);


    	return new ViewModel(array(
				'customerForm' => $customerForm,
    			'contactForm' => $contactForm,
    			'addressForm' => $addressForm,
			));
    }


public function editAction()
    {
    	$form = new \Customer\Form\CustomerForm();

 		$addresses = $this->_getContents("Address");
       	$contacts = $this->_getContents("Contacts");

    	return new ViewModel(array(
				'form' => $form,
				'addresses' => $addresses,
				'contacts' => $contacts,
				));
    }



		public function viewAction(){
			$form = new \Customer\Form\CustomerForm();
				$form->get("categories[categoryId]")->setAttribute("disabled", true);
				$form->get("customerTypes[customerTypeId]")->setAttribute("disabled", true);
				$form->get("companyName")->setAttribute("readonly", true);
				$form->get("branch")->setAttribute("readonly", true);

				$form->get("tradeName")->setAttribute("readonly", true);

				$form->get("tinNumber")->setAttribute("readonly", true);
				$form->get("phone")->setAttribute("readonly", true);
				$form->get("email")->setAttribute("readonly", true);
				$form->get("website")->setAttribute("readonly", true);
				$form->get("secNumber")->setAttribute("readonly", true);
				$form->get("consignee")->setAttribute("readonly", true);
				$form->get("franchise")->setAttribute("readonly", true);
				$form->get("creditLimit")->setAttribute("readonly", true);
				$form->get("unpaidTransactionLimit")->setAttribute("readonly", true);
				$form->get("paymentTerms[paymentTermId]")->setAttribute("disabled", true);
				$form->get("percentCommission")->setAttribute("readonly", true);
				$form->get("shippingModes[shippingModeId]")->setAttribute("disabled", true);
				$form->get("users")->setAttribute("readonly", true);
			///	$form->get("users[userId]")->setAttribute("disabled", true);
					$form->get("customerStatus")->setAttribute("readonly", true);
			//	$form->get("salesExecutive[salesExecutiveId]")->setAttribute("disabled", true);

				//address
				$form->get("addressType[addressTypeId]")->setAttribute("disabled", true);
				$form->get("streetLandmark")->setAttribute("readonly", true);
				$form->get("city[cityId]")->setAttribute("disabled", true);
				$form->get("province[provinceId]")->setAttribute("disabled", true);
				$form->get("country[countryId]")->setAttribute("disabled", true);
				$form->get("zipcode")->setAttribute("readonly", true);

				//contact
				$form->get("position")->setAttribute("readonly", true);
				$form->get("primary")->setAttribute("readonly", true);
				$form->get("fullname")->setAttribute("readonly", true);
				$form->get("email")->setAttribute("readonly", true);
				$form->get("phone")->setAttribute("readonly", true);

$addresses = $this->_getContents("Address");
$contacts = $this->_getContents("Contacts");

return new ViewModel(array(
'form' => $form,
'addresses' => $addresses,
'contacts' => $contacts,
));
		}


}
