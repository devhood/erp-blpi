<?php

namespace Product\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class IndexController extends BaseController
{
	
    public function indexAction()
    {
    	return new ViewModel();
    }
    
    public function addAction()
    {
    	$form = new \Product\Form\ProductForm();

        $payment = $this->_getOptions("Paymentterms","paymenttermId","paymentTermName");
        $form->get("paymentTerms[paymenttermId]")->setOptions(array('value_options' => $payment));

    	$brand = $this->_getOptions("Brands","brandId","brandName");
    	$form->get("brands[brandId]")->setOptions(array('value_options' => $brand));

        $classification = $this->_getOptions("Classifications","classificationId","classificationName");
        $form->get("classifications[classificationId]")->setOptions(array('value_options' => $classification));

        $supplier = $this->_getOptions("Suppliers","supplierId","supplierName");
        $form->get("supplier[supplierId]")->setOptions(array('value_options' => $supplier));

        $form->get("productStatus")->setOptions(array('value_options' => array(
            '0'=>'Active',
            '1'=>'Inactive',
            '2'=>'Discontinued',
            '3'=>'Cancelled',)));

        $pricemodal = $this->_getOptions("priceTypes","priceTypeId","priceTypeName");
        $form->get("priceTypes[priceTypeId]")->setOptions(array('value_options' => $pricemodal));

        $currencies = $this->_getOptions("currencies","currencyId","currencyName");
        $form->get("currencies[currencyId]")->setOptions(array('value_options' => $currencies));


        $productmodal = $this->_getOptions("products","productId","productName");
        $form->get("products[productId]")->setOptions(array('value_options' => $productmodal));
        
       $bundles = $this->_getContents("Bundles");
       $uoms = $this->_getContents("ProductUoms");
       $prices = $this->_getContents("PriceTypes");
       
       return new ViewModel(array(
       		'form' => $form, 
       		'bundles' => $bundles,
       		'uoms' => $uoms,
            'prices' => $prices,
       		
       ));
    }
    public function editAction()
    {
    	$form = new \Product\Form\ProductForm();
    	return new ViewModel(array('form' => $form));
    }
    public function viewAction()
    {
    	$form = new \Product\Form\ProductForm();
        $form->get("productCode")->setAttribute("readonly", true);
        $form->get("productName")->setAttribute("readonly", true);
        $form->get("paymentTerms[paymenttermId]")->setAttribute("disabled", true);
        $form->get("partNumber")->setAttribute("readonly", true);
        $form->get("blCode")->setAttribute("readonly", true);
        $form->get("printedCode")->setAttribute("readonly", true);
        $form->get("size")->setAttribute("readonly", true);
        $form->get("weight")->setAttribute("readonly", true);
    	$form->get("brand[brandId]")->setAttribute("disabled", true);
        $form->get("classifications[classificationId]")->setAttribute("disabled", true);
        $form->get("supplier[supplierId]")->setAttribute("disabled", true);
        $form->get("productStatus")->setAttribute("disabled", true);
    	return new ViewModel(array('form' => $form));
    }
}
