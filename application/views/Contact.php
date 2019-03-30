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
  		<div class="col-md-4"> 

		<form action="<?php echo base_url('index.php/Home/Contactsave');?>" method= "post" >
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Email</label>
		    <input name="email" type="emil" class="form-control" id="exampleInputPassword1" placeholder="email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Address</label>
		    <textarea name="address" class="form-control" rows='4' ></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Phone </label>
		    <input name="phone" type="text" class="form-control" id="exampleInputPassword1" placeholder= "phone">
		  </div>
		  <button type="submit" class="btn btn-info">save</button>
		</form>
  		</div>
  		<div class="col-md-8"> 

  			<table class="table table-striped table-bordered">
  					<tr> 
  							<th>Sl</th>
  							<th>name</th>
  							<th>Email</th>
  							<th>phone</th>
  							<th>action</th>
  					</tr>
<?php $i=0;
	foreach ($contacts as $contact) {
		
$i++;
	?>

  					<tr> 
  							<td><?php echo $i;?></td>
  							<td><?php echo $contact->name; ?></td>
  							<td><?php echo $contact->email;?></td>
  							<td><?php echo $contact->phone;?></td>
    <td> 
  		<a href="#" type="button" class="btn btn-warning" data-toggle="modal" data-target="#contactedit<?php echo $contact->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
  		<a href="<?php echo base_url('index.php/Home/contactdelete/');?><?php echo $contact->id;?>" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
  	</td>


<!-- Modal -->
<div class="modal fade" id="contactedit<?php echo $contact->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit contact info </h4>
      </div>
      <div class="modal-body">


    <form action="<?php echo base_url('index.php/Home/contactpudateByid/');?><?php echo $contact->id;?>" method= "post" >
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $contact->name;?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input name="email" type="emil" class="form-control" id="exampleInputPassword1" value="<?php echo $contact->email;?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <textarea name="address" class="form-control" rows='4' ><?php echo $contact->address;?></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Phone </label>
        <input name="phone" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $contact->phone;?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">edit</button>
      </div>
    </form>

      </div>
    </div>
  </div>
</div>

  </tr>
<?php
	}
?>
			</table>

  		</div>


  	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>



