<?php
namespace Users\Form;

use Zend\Form\Form;

class UserForm extends Form
{
	public function __construct($em = null)
	{
		parent::__construct('user');
		
		$this->add( array(
			'name' => 'userId',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'userId',
				'disabled' => 'true',
			),
		));
		
		$this->add( array(
			'name' => 'userName',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'userName',
			),
			'required' => true,
		));
		
		$this->add( array(
			'name' => 'fullName',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'fullName',
			)
		));
		
		$this->add( array(
			'name' => 'password',
			'type' => 'Password',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'password',
			)
		));
		
		$this->add(array(
			'name' => 'designation[designationId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'required' => true,
			'options' => array(
				'object_manager'	=> $em,
				'target_class'		=> 'Database\Entity\Designations',
				'property'			=> 'designationName',
			),
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'designationId',
			),

		));

		$this->add( array(
			'name' => 'userStatus',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'userStatus',
			)
		));
		
		$this->add( array(
			'name' => 'email',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'email',
			)
		));
		
		$this->add( array(
			'name' => 'mobile',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'mobile',
			)
		));

	}
}
