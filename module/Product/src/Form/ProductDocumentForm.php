<?php
namespace Product\Form;

use Zend\Form\Form;

class ProductDocumentForm extends Form
{
    public function __construct($om = null)
    {
        parent::__construct('productDocument');


  $this->add( array(
      'name' => 'documentName',
      'type' => 'Text',
      'attributes' => array(
          'class' => 'form-control',
          'id' => 'documentName',
      )
      ));

  $this->add( array(
      'name' => 'documentLink',
      'type' => 'Text',
      'attributes' => array(
          'class' => 'form-control',
          'id' => 'documentLink',
      )
      ));

  $this->add(array(
      'name' => 'document[documentId]',
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
      'object_manager' => $om,
      'target_class'   => 'Database\Entity\DocumentTypes',
      'property'       => 'documentName',
      ),
      'attributes' => array(
      'class' => 'select2me form-control',
      'tabindex' => '1',
      'id' => 'documentId',
      ),

      ));

  $this->add(array(
      'name' => 'documentType[documentTypeId]',
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
          'object_manager' => $om,
          'target_class'   => 'Database\Entity\DocumentTypes',
          'property'       => 'documentTypeName',
      ),
      'attributes' => array(
          'class' => 'select2me form-control',
          'tabindex' => '1',
          'id' => 'documentTypeId',
      ),

  ));





    }
}
