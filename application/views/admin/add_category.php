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
			<div id="content" class="checkout">

				<?php include("left.php"); ?>
				<div id="right">
				  <h1 class="bar">Tambah Kategori Baru</h1>
                
				<?php if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
                <?php if($this->uri->segment(3)!='') { ?><div id="errors"> Maaf - Kategori Sudah Ada</div> <?php } ?>
                
                
				  <form method="post" id="admin" action="<?php echo base_url();?>index.php/admin/add_category">
				    <p>
				      <label>Nama Kategori:</label>
				      <input name="name" type="text" id="name" value="<?=set_value('name');?>" />
			        </p>
				    <input type="submit" name="submit" value="Tambah Kategori" />
                    <input type="hidden" name="action" value="1" />
			      </form>
			  </div>
<div class="clear"></div>
				<div id="footer">
			</div>
			</div>
	
	</div>
</body>
</html>