<?php

namespace Shipment\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ShipmentController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}