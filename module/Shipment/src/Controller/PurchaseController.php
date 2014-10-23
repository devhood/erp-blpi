<?php

namespace Purchase\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class PurchaseController extends AbstractActionController
{
    public function addAction()
    {
        return new ViewModel();
    }
}
