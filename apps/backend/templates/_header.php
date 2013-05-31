<!-- Header -->
<header id="top">
  <div class="wrapper">

    <!-- Title/Logo - can use text instead of image -->
    <div id="title"><a href="#"></a></a></div>

    <!-- Top navigation -->
    <div id="topnav">
      <!-- <a href="#"><img class="avatar" SRC="/images/user_32.png" alt="" /></a>-->
  
      Hola <b><?php echo sfContext::getInstance()->getUser()->getUsername(); ?></b>
      <!-- <span>|</span> <a href="#">Settings</a>-->
      
      <span>|</span> <a href="<?php echo url_for('@sf_guard_signout'); ?>">Salir</a><br />
      <!-- <small>You have <a href="#" class="high"><b>1</b> new message!</a></small>-->
    </div>
    <!-- End of Top navigation -->

    <!-- Main navigation -->
    <div id="navigation">
    <nav id="menu">
      <ul class="sf-menu">
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 1</a>
        </li>
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 2</a>
        </li>
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 3</a>
        </li>
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 4</a>
        </li>
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 5</a>
        </li>
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 6</a>
        </li>
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 7</a>
        </li>
        <li <?php echo (has_slot('table_example1') ? 'class="current"' : ''); ?>>
          <a href="<?php echo url_for('@table_example1') ?>">Table 8</a>
        </li>
        
      </ul>
    </nav>
    </div>
    <!-- End of Main navigation -->

    <!-- Aside links -->
    <!-- <aside><b>English</b> &middot; <a href="#">Spanish</a> &middot; <a href="#">German</a></aside>-->
    <!-- End of Aside links -->
</header>
<!-- End of Header -->


<!-- Page title -->
<div id="pagetitle">
  <div class="wrapper">
    <h1>
      <?php if (has_slot('nav')): ?>
        <?php include_slot('nav'); ?>
      <?php endif; ?>
    </h1>    
    <!-- Quick search box -->
    <!-- <form action="" method="get"><input class="" type="text" id="q" name="q" /></form> -->
  </div>
</div>
<!-- End of Page title -->