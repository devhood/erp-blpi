<?php
namespace Sales\Form;

use Zend\Form\Form;

class PaymentForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('sales');

        $this->add( array(
            'name' => 'paymentNo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'paymentNo',
            )
        ));
        $this->add( array(
            'name' => 'performaInvoiceNo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'performaInvoiceNo',
            )
        ));
        $this->add( array(
            'name' => 'cmNo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'cmNo',
            )
        ));
        $this->add( array(
            'name' => 'rmrNo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'rmrNo',
            )
        ));
        $this->add( array(
            'name' => 'drNo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'drNo',
            )
        ));
        $this->add( array(
            'name' => 'siNo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'siNo',
            )
        ));
        $this->add( array(
            'name' => 'soNo',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'soNo',
            )
        ));

        $this->add(array(
            'name' => 'transactionTypes[transactionTypeId]',
            'type' => 'Select',
            'attributes' => array(
              'class' => 'select2me form-control',
              'tabindex' => '1',
                'id' => 'transactionTypeId',
            ),
            'options' => array(
                // 						'value_options' => array(
                // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                // 						),
            )
        ));

        $this->add(array(
            'name' => 'deliveryDates[deliveryDateId]',
            'type' => 'Select',
            'attributes' => array(
              'class' => 'select2me form-control',
              'tabindex' => '1',
                'id' => 'deliveryDateId',
            ),
            'options' => array(
                // 						'value_options' => array(
                // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                // 						),
            )
        ));
        $this->add(array(
            'name' => 'vatPercentage[vatPercentageId]',
            'type' => 'Select',
            'attributes' => array(
                'class' => 'select2me form-control',
                'tabindex' => '1',
                'id' => 'deliveryDateId',
            ),
            'options' => array(
                // 						'value_options' => array(
                // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                // 						),
            )
        ));



        $this->add( array(
          'name' => 'items',
          'type' => 'Text',
          'attributes' => array(
          'class' => 'form-control',
          'id' => 'items',
          )
          ));
        $this->add( array(
          'name' => 'sales',
          'type' => 'Text',
          'attributes' => array(
          'class' => 'form-control',
          'id' => 'sales',
          )
          ));
        $this->add( array(
          'name' => 'vat',
          'type' => 'Text',
          'attributes' => array(
          'class' => 'form-control',
          'id' => 'vat',
          )
          ));

          $this->add(array(
              'name' => 'transactionTypes[transactionTypeId]',
              'type' => 'Select',
              'attributes' => array(
                'class' => 'select2me form-control',
                'tabindex' => '1',
                  'id' => 'transactionTypeId',
              ),
              'options' => array(
                  // 						'value_options' => array(
                  // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                  // 						),
              )
          ));

          $this->add(array(
              'name' => 'customers[customerId]',
              'type' => 'Select',
              'attributes' => array(
                  'class' => 'select2me form-control',
                  'tabindex' => '1',
                  'id' => 'customerId',
              ),
              'options' => array(
                  // 						'value_options' => array(
                  // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                  // 						),
              )
          ));
          $this->add(array(
              'name' => 'deliveryDates[deliveryDateId]',
              'type' => 'Select',
              'attributes' => array(
              'class' => 'select2me form-control',
              'tabindex' => '1',
                  'id' => 'deliveryDateId',
              ),
              'options' => array(
                  // 						'value_options' => array(
                  // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                  // 						),
              )
          ));
          $this->add(array(
              'name' => 'vatPercentage[vatPercentageId]',
              'type' => 'Select',
              'attributes' => array(
                'class' => 'select2me form-control',
                'tabindex' => '1',
                  'id' => 'vatPercentageId',
              ),
              'options' => array(
                  // 						'value_options' => array(
                  // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                  // 						),
              )
          ));
          $this->add(array(
              'name' => 'transactionTypes[transactionTypeId]',
              'type' => 'Select',
              'attributes' => array(
                  'class' => 'select2me form-control',
                  'tabindex' => '1',
                  'id' => 'transactionTypeId',
              ),
              'options' => array(
                  // 						'value_options' => array(
                  // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                  // 						),
              )
          ));
          $this->add( array(
            'name' => 'items',
            'type' => 'Text',
            'attributes' => array(
            'class' => 'form-control',
            'id' => 'items',
            )
            ));
          $this->add( array(
            'name' => 'sales',
            'type' => 'Text',
            'attributes' => array(
            'class' => 'form-control',
            'id' => 'sales',
            )
            ));
          $this->add( array(
            'name' => 'vat',
            'type' => 'Text',
            'attributes' => array(
            'class' => 'form-control',
            'id' => 'vat',
            )
            ));





    }
}
