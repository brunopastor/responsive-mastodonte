<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />    
    <?php include_partial('global/assets'); ?>
    <?php include_stylesheets() ?>
    <link rel="stylesheet" type="text/css" media="only screen and (min-width: 50px) and (max-width: 520px)" href="/css/mobile.css">
    <?php include_javascripts() ?>
  </head>
  <body style="background-color: #ffffff;">

    <header id="top">
      <div class="wrapper-login">
        <div id="title"><span><?php echo image_tag('/images/frontend/logo.png', array('absolute' => true)); ?></span></div>        
      </div>
    </header>
    
    <div id="pagetitle">
      <div class="wrapper-login"></div>
    </div>

    <div id="page">
      
      <div class="wrapper-login">
        
        <?php echo $sf_content ?>

      </div>

    </div>
	
    <!-- Page footer -->
    <!-- <footer id="bottom">
      <div class="wrapper-login">
        <p>Copyright &copy; 2011 <b><a href="#" title="">Mastodonte</a></b></p>
      </div>
    </footer>-->
    <!-- End of Page footer -->
    
  </body>
</html>
