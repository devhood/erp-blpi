<?php

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class UserController extends BaseController
{

    public function infoAction()
    {

      $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
      $formUser = new \User\Form\UserForm($em);

      return new ViewModel(array(
        'formUser' => $formUser,
       ));

    }
}
