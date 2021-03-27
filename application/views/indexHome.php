<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php
        if (isset($title)):
          echo $title;
        endif;
      ?>
    </title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/responsee.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<!---<a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="assets/frontend/img/premium-features.png" alt=""></a>--->
    <!-- HEADER -->
    <?php
      if (isset($header)):
        echo $header;
      endif;
    ?>
    
	<?php
		if (isset($main)):
			echo $main;
		endif;
	?>
	
	<?php
		if (isset($footer)):
			echo $footer;
		endif;
	?>
    
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/responsee.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/template-scripts.js"></script>   
   </body>
</html>