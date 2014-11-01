<?php
namespace Customer\Form;

use Zend\Form\Form;
use Zend\Form\Annotation\Options;

class ContactForm extends Form
{

	public function __construct($om = null)
	{
		parent::__construct('contact');
		
		$this->add( array(
				'name' => 'position',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Position',
						'id' => 'position',
				)
		));
		
		$this->add( array(
				'name' => 'primary',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Primary',
						'id' => 'primary',
				)
		));
		
		$this->add( array(
				'name' => 'fullName',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
					//	'placeholder' => 'Enter Fullname',
						'id' => 'fullName',
				)
		));
		
		$this->add( array(
				'name' => 'email',
				'type' => 'email',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Email',
						'id' => 'contactemail',
				)
		));
		
		$this->add( array(
				'name' => 'phone',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Phone Number',
						'id' => 'contactphone',
				)
		));
	}
}