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
				<div id="breadcrumb">
					<a href="#">&nbsp;</a>
				</div>
				<?php include("left.php"); ?>
                
				<div id="right">
                                 <h1 class="bar">Pelanggan : <?=$this->uri->segment(3);?></h1>   	
                                 <p>
                                     <br>Nama           :  <?=$customer->full_name;?></br>
                                     <br>Email          :  <?=$customer->email;?></br>
                                     <br>Tanggal Bergabung    :  <?=$customer->date_joined;?></br>
                                     <br>Jenis Akun   :  <?=$customer->account_type;?></br>
                                     <br>Nama Perusahaan   :  <?=$customer->company_name;?></br>
                                     
                                 </p>
				</div>		
				<div class="clear"></div>
				<div id="footer">
			</div>
			</div>
	
	</div>
</body>
</html>