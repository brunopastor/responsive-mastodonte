<?php

/**
 * tableExample2 form base class.
 *
 * @method tableExample2 getObject() Returns the current form's model object
 *
 * @package    mdResponsive
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasetableExample2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'field1'      => new sfWidgetFormInputText(),
      'field2'      => new sfWidgetFormInputText(),
      'choice'      => new sfWidgetFormChoice(array('choices' => array('value1' => 'value1', 'value2' => 'value2', 'value3' => 'value3'))),
      'multichoice' => new sfWidgetFormChoice(array('choices' => array('value1' => 'value1', 'value2' => 'value2', 'value3' => 'value3'))),
      'imagen'      => new sfWidgetFormInputText(),
      'checkbox'    => new sfWidgetFormInputCheckbox(),
      'radio'       => new sfWidgetFormChoice(array('choices' => array('value1' => 'value1', 'value2' => 'value2', 'value3' => 'value3'))),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'field1'      => new sfValidatorPass(array('required' => false)),
      'field2'      => new sfValidatorPass(array('required' => false)),
      'choice'      => new sfValidatorChoice(array('choices' => array(0 => 'value1', 1 => 'value2', 2 => 'value3'), 'required' => false)),
      'multichoice' => new sfValidatorChoice(array('choices' => array(0 => 'value1', 1 => 'value2', 2 => 'value3'), 'required' => false)),
      'imagen'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'checkbox'    => new sfValidatorBoolean(array('required' => false)),
      'radio'       => new sfValidatorChoice(array('choices' => array(0 => 'value1', 1 => 'value2', 2 => 'value3'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('table_example2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tableExample2';
  }

}
