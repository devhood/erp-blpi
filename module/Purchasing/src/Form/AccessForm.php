<?php
namespace Purchasing\Form;

use Zend\Form\Form;

class AccessForm extends Form
{
	public function __construct($em = null)
	{
		parent::__construct('access');
		
		$this->add(array(
				'name' => 'permissions[permissionId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager'	=> $em,
						'target_class'		=> 'Database\Entity\Permissions',
						'property'			=> 'permissionName',
				),
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'permissionId',
				),
		
		));


	}
}
