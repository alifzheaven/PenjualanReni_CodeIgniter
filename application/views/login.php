<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" type="text/css">
	</head>
<body>
	<div id="wrapper">
			<?php include("header.php"); ?>
			<div id="content">

				<?php include("left.php"); ?>
				<div id="right">
					<h1 class="bar">Login</h1>
                    <p>Anda harus login untuk menyelesaikan transaksi</p></br>
                    <?php if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
                <?php if($this->uri->segment(2)=='failed') { ?><div id="errors"> Maaf - Username/Password Tidak Valid</div> <?php } ?>
				
		  <form action="<?=base_url();?>index.php/login" method="post" enctype="multipart/form-data" id="login">
					<p>
						<label>Username:</label>
						<input type="text" name="username" value="<?=set_value('username');?>"> 
				</p>
			<p>
			  <label>Password:</label>
				<input type="password" name="password" value="<?=set_value('password');?>"> 

		      <input name="login_action" type="hidden" id="login_action" value="true" />
			  </p>
				<p>
					<input type="submit" value="Login">
		    <p>Belum memiliki akun? <a href="<?=base_url();?>index.php/register">Klik disini untuk registrasi</a></p>
				</form>
				
			  </div>		
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			</div>
	
	</div>
</body>
</html>