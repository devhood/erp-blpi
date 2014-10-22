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
    	$form = new \Customer\Form\CustomerForm();

    		$type = $this->_getOptions("CustomerTypes","customerTypeId","customerTypeName");
        $form->get("customerTypes[customerTypeId]")->setOptions(array('value_options' => $type));

        $category = $this->_getOptions("Categories","categoryId","categoryName","categoryType","customer");
        $form->get("categories[categoryId]")->setOptions(array('value_options' => $category));

        $payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
        $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));

        $price = $this->_getOptions("priceTypes","priceTypeId","priceTypeName");
        $form->get("priceTypes[priceTypeId]")->setOptions(array('value_options' => $price));

        $shipping = $this->_getOptions("shippingModes","shippingModeId","shippingModeName");
        $form->get("shippingModes[shippingModeId]")->setOptions(array('value_options' => $shipping));

       	$users = $this->_getOptions("users","userId","fullName","designation","2");
        $form->get("users")->setOptions(array('value_options' => $users));

        $form->get("customerStatus")->setOptions(array('value_options' => array(
            '0'=>'Active',
            '1'=>'Inactive',
            '2'=>'Suspended',
            '3'=>'Block',)));

     	$addresses = $this->_getContents("Address");
        $contacts = $this->_getContents("Contacts");

    	return new ViewModel(array(
				'form' => $form,
				'address' => $addresses,
				'contact' => $contacts,

				));
    }


public function editAction()
    {
    	$form = new \Customer\Form\CustomerForm();

    	$type = $this->_getOptions("CustomerTypes","customerTypeId","customerTypeName");
        $form->get("customerTypes[customerTypeId]")->setOptions(array('value_options' => $type));

        $category = $this->_getOptions("Categories","categoryId","categoryName","categoryType","customer");
        $form->get("categories[categoryId]")->setOptions(array('value_options' => $category));

        $payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
        $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));

        $price = $this->_getOptions("priceTypes","priceTypeId","priceTypeName");
        $form->get("priceTypes[priceTypeId]")->setOptions(array('value_options' => $price));

        $shipping = $this->_getOptions("shippingModes","shippingModeId","shippingModeName");
        $form->get("shippingModes[shippingModeId]")->setOptions(array('value_options' => $shipping));

       	$users = $this->_getOptions("users","userId","fullName","designation","2");
        $form->get("users")->setOptions(array('value_options' => $users));

        $form->get("customerStatus")->setOptions(array('value_options' => array(
            '0'=>'Active',
            '1'=>'Inactive',
            '2'=>'Suspended',
            '3'=>'Block',)));

 		$addresses = $this->_getContents("Address");
       	$contacts = $this->_getContents("Contacts");

    	return new ViewModel(array(
				'form' => $form,
				'address' => $addresses,
				'contact' => $contacts,

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
