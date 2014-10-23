<?php

namespace Shipment\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class ShipmentController extends AbstractActionController
{
    public function addAction()
    {
        return new ViewModel();
    }
}
