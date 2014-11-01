<?php

namespace Customer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;


class CustomerController extends BaseController
{

    public function indexAction()
    {
    	$dbCustomers = $this->_getContents('Customers');
    	
//     	echo 'a<pre>';
//     	var_dump($dbCustomers);
//     	echo '<pre>';
//     	exit;

// 		echo 'a<pre>';
// 		print_r($dbCustomers);
// 		echo '<pre>';
// 		exit;
    	
    	return new ViewModel(array('dbCustomers' => $dbCustomers));
    }

	
    
    
    public function addAction()
    {
  		$em = $this->_getEntityManager();
    	$customerForm = new \Customer\Form\CustomerForm($em);
    	$contactForm = new \Customer\Form\ContactForm($em);
    	$addressForm = new \Customer\Form\AddressForm($em);

    	//INSERT data to CUSTOMERS TABLE
    	$request = $this->getRequest();
    	if($request->isPost()){
    		$request = (array)($request->getPost());
    		$table = self::DBNS.'Customers';
    		$object = new $table();
    		$hydrator = new DoctrineHydrator($em);
    		$object = $hydrator->hydrate($request, $object);
    		$em->persist($object);
    		$em->flush();
   
    		$customerId = $object->getCustomerId ();
    		
    		//INSERT data to CONTACTS TABLE
    		foreach ( $request ['contact'] as $contact ) {
    		
    			$content = array (
    					"fullName" => $contact ['fullName'],
    					"position" => $contact ['position'],
    					"phone" => $contact ['contactphone'],
    					"email" => $contact ['contactemail']
    			);
    		
    			echo 'a<pre>';
    			print_r($contact);
    			echo '<pre>';
    			echo 'a<pre>';
    			echo 'a<hr>';
    			print_r($contact ['position']);
    			echo '<pre>';
    			echo 'a<pre>';
    			print_r($contact ['contactphone']);
    			echo '<pre>';
    			echo 'a<pre>';
    			print_r($contact ['contactemail']);
    			echo '<pre>';
    			exit;
    			
    			$contactsTable = self::DBNS . 'Contacts';hits;
    			$objectContacts = new $contactsTable ();
    			$hydrator = new DoctrineHydrator ( $em );
    			$objectContacts = $hydrator->hydrate ( $content, $objectContacts );
    			$em->persist ( $objectContacts );
    			$em->flush ();
    		}
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
		    	$customerForm= new \Customer\Form\CustomerForm($em);
		    	$contactForm = new \Customer\Form\ContactForm($em);
		    	$addressForm = new \Customer\Form\AddressForm($em);
		    	 
		//  		$addresses = $this->_getContents("Address");
		//        	$contacts = $this->_getContents("Contacts");
		
		//     	return new ViewModel(array(
		// 				'form' => $form,
		// 				'addresses' => $addresses,
		// 				'contacts' => $contacts,
		// 				));
		    }



		public function viewAction(){
			$formCustomerCustomer = new \Customer\Form\CustomerForm();
			
				$formCustomer->get("category[categoryId]")->setAttribute("disabled", true);
				$formCustomer->get("customerType[customerTypeId]")->setAttribute("disabled", true);
				$formCustomer->get("companyName")->setAttribute("readonly", true);
				$formCustomer->get("branch")->setAttribute("readonly", true);
				$formCustomer->get("tradeName")->setAttribute("readonly", true);
				$formCustomer->get("tin")->setAttribute("readonly", true);
				$formCustomer->get("phone")->setAttribute("readonly", true);
				$formCustomer->get("email")->setAttribute("readonly", true);
				$formCustomer->get("website")->setAttribute("readonly", true);
				$formCustomer->get("secNo")->setAttribute("readonly", true);
				$formCustomer->get("consignee")->setAttribute("readonly", true);
				$formCustomer->get("franchise")->setAttribute("readonly", true);
				$formCustomer->get("creditLimit")->setAttribute("readonly", true);
				$formCustomer->get("transactionLimit")->setAttribute("readonly", true);
				$formCustomer->get("paymentTerm[paymentTermId]")->setAttribute("disabled", true);
				$formCustomer->get("shippingMode[shippingModeId]")->setAttribute("disabled", true);
			// 	$formCustomer->get("percentCommission")->setAttribute("readonly", true);
			//	$formCustomer->get("users")->setAttribute("readonly", true);
			//	$formCustomer->get("users[userId]")->setAttribute("disabled", true);
			//		$formCustomer->get("customerStatus")->setAttribute("readonly", true);
			//	$formCustomer->get("salesExecutive[salesExecutiveId]")->setAttribute("disabled", true);

			//address
				$formAddress->get("addressType[addressTypeId]")->setAttribute("disabled", true);
				$formAddress->get("streetLandmark")->setAttribute("readonly", true);
				$formAddress->get("city[cityId]")->setAttribute("disabled", true);
				$formAddress->get("province[provinceId]")->setAttribute("disabled", true);
				$formAddress->get("country[countryId]")->setAttribute("disabled", true);
				$formAddress->get("zipcode")->setAttribute("readonly", true);

			//contact
				$formContact->get("position")->setAttribute("readonly", true);
				$formContact->get("fullname")->setAttribute("readonly", true);
				$formContact->get("email")->setAttribute("readonly", true);
				$formContact->get("phone")->setAttribute("readonly", true);

	//	$addresses = $this->_getContents("Address");
	//	$contacts = $this->_getContents("Contacts");

	return new ViewModel(array(
			'form' => $form,
			'addresses' => $addresses,
			'contacts' => $contacts,
	));
}
}
