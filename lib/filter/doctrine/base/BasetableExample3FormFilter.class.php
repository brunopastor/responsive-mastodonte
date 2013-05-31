<?php

/**
 * tableExample3 filter form base class.
 *
 * @package    mdResponsive
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasetableExample3FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'field1' => new sfWidgetFormFilterInput(),
      'field2' => new sfWidgetFormFilterInput(),
      'choice' => new sfWidgetFormChoice(array('choices' => array('' => '', 'value1' => 'value1', 'value2' => 'value2', 'value3' => 'value3'))),
    ));

    $this->setValidators(array(
      'field1' => new sfValidatorPass(array('required' => false)),
      'field2' => new sfValidatorPass(array('required' => false)),
      'choice' => new sfValidatorChoice(array('required' => false, 'choices' => array('value1' => 'value1', 'value2' => 'value2', 'value3' => 'value3'))),
    ));

    $this->widgetSchema->setNameFormat('table_example3_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tableExample3';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'field1' => 'Text',
      'field2' => 'Text',
      'choice' => 'Enum',
    );
  }
}
