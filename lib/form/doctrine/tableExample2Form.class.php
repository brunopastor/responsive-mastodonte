<?php

/**
 * tableExample2 form.
 *
 * @package    mdResponsive
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tableExample2Form extends BasetableExample2Form
{
  public function configure()
  {
  	$this->widgetSchema['field2'] = new sfWidgetFormTextarea();

  	$this->widgetSchema['multichoice'] = new sfWidgetFormChoice(array('choices' => $this->getWidget('multichoice')->getChoices(), 'multiple' => true));

    $this->widgetSchema['radio'] = new sfWidgetFormSelectRadio(array('choices' => $this->getWidget('radio')->getChoices()));

  	$this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
      'file_src'  => '/uploads' . $this->getObject()->getImagenSrc(),
      'is_image'  => true,
      'edit_mode' => (!$this->isNew() && $this->getObject()->getImagen() != ""),
      'delete_label' => 'Tabla2_eliminar la imagen actual',
      'template'  => '<div class="md_auto_image">%file%<br />%input%<br />%delete_label% %delete%</div>',
    ));

    $this->widgetSchema->setHelp('imagen', 'Tabla2_Help Logo');

    $mime_types = array(
      'image/jpeg',
      'image/pjpeg',
      'image/png',
      'image/x-png',
      'image/gif'
    );
    
    $this->validatorSchema['imagen'] = new sfValidatorFile(array(
      'required'   => true,
      'path'       => sfConfig::get('sf_upload_dir') . '/' . tableExample2::FOLDER_IMAGEN_NAME,
      'mime_types' => $mime_types,
      'required' => false
    ));
 
    $this->validatorSchema['imagen_delete'] = new sfValidatorPass();

    $this->validatorSchema['multichoice'] = new sfValidatorChoice(array('choices' => $this->getWidget('multichoice')->getChoices(), 'required' => false));
  }
}
