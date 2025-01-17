<?php

/**
 * Customer form base class.
 *
 * @package    zapnacrm
 * @subpackage form
 * @author     Your name here
 */
class BaseCustomerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'first_name'               => new sfWidgetFormInput(),
      'last_name'                => new sfWidgetFormInput(),
      'country_id'               => new sfWidgetFormPropelChoice(array('model' => 'Country', 'add_empty' => false)),
      'city'                     => new sfWidgetFormInput(),
      'po_box_number'            => new sfWidgetFormInput(),
      'mobile_number'            => new sfWidgetFormInput(),
      'device_id'                => new sfWidgetFormPropelChoice(array('model' => 'Device', 'add_empty' => true)),
      'email'                    => new sfWidgetFormInput(),
      'password'                 => new sfWidgetFormInput(),
      'is_newsletter_subscriber' => new sfWidgetFormInputCheckbox(),
      'created_at'               => new sfWidgetFormDateTime(),
      'updated_at'               => new sfWidgetFormDateTime(),
      'customer_status_id'       => new sfWidgetFormPropelChoice(array('model' => 'EntityStatus', 'add_empty' => false)),
      'address'                  => new sfWidgetFormInput(),
      'fonet_customer_id'        => new sfWidgetFormPropelChoice(array('model' => 'FonetCustomer', 'add_empty' => true)),
      'referrer_id'              => new sfWidgetFormPropelChoice(array('model' => 'AgentCompany', 'add_empty' => true)),
      'telecom_operator_id'      => new sfWidgetFormPropelChoice(array('model' => 'TelecomOperator', 'add_empty' => false)),
      'date_of_birth'            => new sfWidgetFormDate(),
      'other'                    => new sfWidgetFormInput(),
      'subscription_type'        => new sfWidgetFormInput(),
      'auto_refill_amount'       => new sfWidgetFormInput(),
      'subscription_id'          => new sfWidgetFormInput(),
      'last_auto_refill'         => new sfWidgetFormDateTime(),
      'auto_refill_min_balance'  => new sfWidgetFormInput(),
      'c9_customer_number'       => new sfWidgetFormInput(),
      'registration_type_id'     => new sfWidgetFormInput(),
      'imsi'                     => new sfWidgetFormInput(),
      'uniqueid'                 => new sfWidgetFormInput(),
      'plain_text'               => new sfWidgetFormInput(),
      'ticketval'                => new sfWidgetFormInput(),
      'to_date'                  => new sfWidgetFormDate(),
      'from_date'                => new sfWidgetFormDate(),
      'i_customer'               => new sfWidgetFormInput(),
      'usage_alert_sms'          => new sfWidgetFormInput(),
      'usage_alert_email'        => new sfWidgetFormInput(),
      'sim_type_id'              => new sfWidgetFormPropelChoice(array('model' => 'SimTypes', 'add_empty' => false)),
      'comments'                 => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorPropelChoice(array('model' => 'Customer', 'column' => 'id', 'required' => false)),
      'first_name'               => new sfValidatorString(array('max_length' => 255)),
      'last_name'                => new sfValidatorString(array('max_length' => 255)),
      'country_id'               => new sfValidatorPropelChoice(array('model' => 'Country', 'column' => 'id')),
      'city'                     => new sfValidatorString(array('max_length' => 255)),
      'po_box_number'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mobile_number'            => new sfValidatorString(array('max_length' => 255)),
      'device_id'                => new sfValidatorPropelChoice(array('model' => 'Device', 'column' => 'id', 'required' => false)),
      'email'                    => new sfValidatorString(array('max_length' => 255)),
      'password'                 => new sfValidatorString(array('max_length' => 255)),
      'is_newsletter_subscriber' => new sfValidatorBoolean(array('required' => false)),
      'created_at'               => new sfValidatorDateTime(array('required' => false)),
      'updated_at'               => new sfValidatorDateTime(array('required' => false)),
      'customer_status_id'       => new sfValidatorPropelChoice(array('model' => 'EntityStatus', 'column' => 'id')),
      'address'                  => new sfValidatorString(array('max_length' => 255)),
      'fonet_customer_id'        => new sfValidatorPropelChoice(array('model' => 'FonetCustomer', 'column' => 'fonet_customer_id', 'required' => false)),
      'referrer_id'              => new sfValidatorPropelChoice(array('model' => 'AgentCompany', 'column' => 'id', 'required' => false)),
      'telecom_operator_id'      => new sfValidatorPropelChoice(array('model' => 'TelecomOperator', 'column' => 'id')),
      'date_of_birth'            => new sfValidatorDate(array('required' => false)),
      'other'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'subscription_type'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'auto_refill_amount'       => new sfValidatorNumber(array('required' => false)),
      'subscription_id'          => new sfValidatorInteger(array('required' => false)),
      'last_auto_refill'         => new sfValidatorDateTime(array('required' => false)),
      'auto_refill_min_balance'  => new sfValidatorNumber(array('required' => false)),
      'c9_customer_number'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'registration_type_id'     => new sfValidatorInteger(array('required' => false)),
      'imsi'                     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'uniqueid'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'plain_text'               => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'ticketval'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'to_date'                  => new sfValidatorDate(array('required' => false)),
      'from_date'                => new sfValidatorDate(array('required' => false)),
      'i_customer'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'usage_alert_sms'          => new sfValidatorInteger(array('required' => false)),
      'usage_alert_email'        => new sfValidatorInteger(array('required' => false)),
      'sim_type_id'              => new sfValidatorPropelChoice(array('model' => 'SimTypes', 'column' => 'id')),
      'comments'                 => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('customer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customer';
  }


}
