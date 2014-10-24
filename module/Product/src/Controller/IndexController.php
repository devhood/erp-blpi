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

    	$formProduct = new \Product\Form\ProductForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formProductUom = new \Product\Form\ProductUomForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formProductBundle = new \Product\Form\ProductBundleForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
    	$formProductPrice = new \Product\Form\ProductPriceForm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));

        return new ViewModel(array(
    		'formProduct' => $formProduct,
            'formProductUom' => $formProductUom,
            'formProductBundle' => $formProductBundle,
            'formProductPrice' => $formProductPrice,
       ));
    }
    public function editAction()
    {
    	$form = new \Product\Form\ProductForm();

      //   $payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
      //   $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));
			//
      //   $brand = $this->_getOptions("Brands","brandId","brandName");
      //   $form->get("brands[brandId]")->setOptions(array('value_options' => $brand));
			//
      //   $classification = $this->_getOptions("Classifications","classificationId","classificationName");
      //   $form->get("classifications[classificationId]")->setOptions(array('value_options' => $classification));
			//
      //   $supplier = $this->_getOptions("Suppliers","supplierId","supplierName");
      //   $form->get("supplier[supplierId]")->setOptions(array('value_options' => $supplier));
			//
      //   $form->get("productStatus")->setOptions(array('value_options' => array(
      //       '0'=>'Active',
      //       '1'=>'Inactive',
      //       '2'=>'Discontinued',
      //       '3'=>'Cancelled',)));
			//
      //   $pricemodal = $this->_getOptions("PriceTypes","priceTypeId","priceTypeName");
      //   $form->get("priceTypes[priceTypeId]")->setOptions(array('value_options' => $pricemodal));
			//
      //   $currencies = $this->_getOptions("Currencies","currencyId","currencyName");
      //   $form->get("currencies[currencyId]")->setOptions(array('value_options' => $currencies));
			//
      //   $productmodal = $this->_getOptions("Products","productId","productName");
      //   $form->get("products[productId]")->setOptions(array('value_options' => $productmodal));
			//
      //   $unit = $this->_getOptions("Uoms","uomId","uomName");
      //   $form->get("uoms[uomId]")->setOptions(array('value_options' => $unit));
      //
      //   $bundles = $this->_getContents("Bundles");
      //   $uoms = $this->_getContents("ProductUoms");
      //   $prices = $this->_getContents("ProductPrice");
      //
      //   return new ViewModel(array(
      //       'form' => $form,
      //       'bundles' => $bundles,
      //       'uoms' => $uoms,
      //       'prices' => $prices,
      //
      //  ));
    }
    public function viewAction()
    {
    	$form = new \Product\Form\ProductForm();
        $form->get("productCode")->setAttribute("readonly", true);
        $form->get("productName")->setAttribute("readonly", true);
        $form->get("paymentTerms[paymentTermId]")->setAttribute("disabled", true);
        $form->get("partNumber")->setAttribute("readonly", true);
        $form->get("blCode")->setAttribute("readonly", true);
        $form->get("printedCode")->setAttribute("readonly", true);
        $form->get("size")->setAttribute("readonly", true);
        $form->get("weight")->setAttribute("readonly", true);
    	$form->get("brands[brandId]")->setAttribute("disabled", true);
        $form->get("classifications[classificationId]")->setAttribute("disabled", true);
        $form->get("supplier[supplierId]")->setAttribute("disabled", true);
        $form->get("productStatus")->setAttribute("disabled", true);
        $form->get("desc")->setAttribute("disabled", true);

    	$payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
        $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));

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

        $pricemodal = $this->_getOptions("PriceTypes","priceTypeId","priceTypeName");
        $form->get("priceTypes[priceTypeId]")->setOptions(array('value_options' => $pricemodal));

        $currencies = $this->_getOptions("Currencies","currencyId","currencyName");
        $form->get("currencies[currencyId]")->setOptions(array('value_options' => $currencies));


        $productmodal = $this->_getOptions("Products","productId","productName");
        $form->get("products[productId]")->setOptions(array('value_options' => $productmodal));

        $bundles = $this->_getContents("Bundles");
        $uoms = $this->_getContents("ProductUoms");
        $prices = $this->_getContents("ProductPrice");
        $inventories = $this->_getContents("ProductInventories");
        $histories = $this->_getContents("ProductMovementHistory");

        return new ViewModel(array(
            'form' => $form,
            'bundles' => $bundles,
            'uoms' => $uoms,
            'prices' => $prices,
            'inventories' => $inventories,
            'histories' => $histories

       ));
    }
}
