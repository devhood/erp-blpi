<?php

namespace Customer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;


class IndexController extends BaseController
{

    public function indexAction()
    {
    	$dbCustomers = $this->_getContents('Customers');
    	
    	echo '<pre>';
    	var_dump($dbCustomers);
    	echo '<pre>';
    	exit;
    	return new ViewModel(array('dbCustomers' => $dbCustomers));
    }

	
    public function addAction()
    {
  		$em = $this->_getEntityManager();
    	$customerForm = new \Customer\Form\CustomerForm($em);
    	$contactForm = new \Customer\Form\ContactForm($em);
    	$addressForm = new \Customer\Form\AddressForm($em);

    	
    	$request = $this->getRequest();
    	if($request->isPost()){
    			
    		$request = (array)($request->getPost());
    			
    		$table = self::DBNS.'Customers';
    		$object = new $table();
    		$hydrator = new DoctrineHydrator($em);
    		$object = $hydrator->hydrate($request, $object);
    		$em->persist($object);
    		$em->flush();
    		return $this->redirect()->toUrl('/customer');
    	}
    	

    	return new ViewModel(array(
				'customerForm' => $customerForm,
    			'contactForm' => $contactForm,
    			'addressForm' => $addressForm,
			));
    }


		public function editAction()
		    {
		//     	$form = new \Customer\Form\CustomerForm();
		
		//  		$addresses = $this->_getContents("Address");
		//        	$contacts = $this->_getContents("Contacts");
		
		//     	return new ViewModel(array(
		// 				'form' => $form,
		// 				'addresses' => $addresses,
		// 				'contacts' => $contacts,
		// 				));
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
