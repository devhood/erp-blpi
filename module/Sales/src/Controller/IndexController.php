<?php

namespace Sales\Controller;

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

      $form = new \Sales\Form\SalesForm();

      // $brand = $this->_getOptions("Brands","brandId","brandName");
      // $form->get("brands[brandId]")->setOptions(array('value_options' => $brand));
      //
      // $classification = $this->_getOptions("Classifications","classificationId","classificationName");
      // $form->get("classifications[classificationId]")->setOptions(array('value_options' => $classification));
      //




        return new ViewModel(array('form' => $form));
    }

    public function viewFunction()
    {

    }

}
