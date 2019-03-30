<?php
	defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $sitename;?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<div class="container">
  		<h1><?php echo $sitename;?></h1>
  		<hr/>
  		<h3> 
  			<?php 
  					foreach ($menus as $menu) {
  						?>
<a href="<?php echo base_url(); ?>index.php/Home/<?php echo $menu->menutitle; ?>"><?php echo $menu->menutitle;?></a> &nbsp; &nbsp;
  				<?php
  					}
  			?>
  		</h3>
  		<hr/>
      <div style="background:orange;height:400px;line-height:400px;text-align: center;"> 

          <h1 style="font-weight: bold;padding: 20px;">This is a AboutPage !</h1> 

      </div>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>



