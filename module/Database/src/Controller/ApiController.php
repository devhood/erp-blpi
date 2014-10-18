<?php

namespace Database\Controller;


use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel;

class ApiController extends AbstractRestfulController
{
    public function indexAction()
    {
        return new JsonModel();
    }
}