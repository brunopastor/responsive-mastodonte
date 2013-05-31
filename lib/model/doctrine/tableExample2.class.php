<?php

/**
 * tableExample2
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    mdResponsive
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class tableExample2 extends BasetableExample2
{
	const FOLDER_IMAGEN_NAME = 'tablas2';

  public function getObjectClass(){
    return get_class();
  }  
  
  /**
   * Devuelve la ruta a partir de /uploads
   * 
   * @return string
   */
  public function getImagenSrc()
  {
    if($this->getImagen() == '')
      return 'no-image.jpg';
    
      return '/' . self::FOLDER_IMAGEN_NAME . '/' . $this->getImagen();
  }  
}
