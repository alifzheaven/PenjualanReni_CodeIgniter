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
					<h1 class="bar">Konfirmasi Pesanan</h1>
					<h2>Terimakasih banyak telah memimilih rumah idaman Anda di ""</h2>
					<h2>Nomor Pesanan Anda Adalah: <?php echo $this->session->userdata('order_id'); ?></h2>
					<p>Anda akan segera menerima email berisi detail pemesanan and no. faktur.</p>
					<br />
					<p><strong>Catatan:</strong> Anda dapat melihat status pesanan di halaman Dashboard.</p>
				</div>		
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			</div>
	
	</div>
</body>
</html>