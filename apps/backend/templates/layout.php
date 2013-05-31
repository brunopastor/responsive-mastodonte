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
  <body>

    <?php include_partial('global/header'); ?>    

    <!-- Page content -->
    <div id="page">
      <!-- Wrapper -->
      <div class="wrapper">

        <?php echo $sf_content ?>

      </div>
      <!-- End of Wrapper -->
    </div>
    <!-- End of Page content -->    

    <div style="clear:both"></div>

    <?php include_partial('global/footer'); ?>
    
  </body>
</html>
</div>
