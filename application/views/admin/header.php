<?php
//if($this->session->userdata('admin')=='')
   // header("Location:".base_url()."index.php/admin/");
?>
<div id="header">
				<div id="logo">
					<a href="<?php echo base_url();?>index.php/"><img src="<?php echo base_url();?>images/header.jpg" alt="" /></a>
				</div>
			</div>
			<div id="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<!--<li><a href="#">Tentang Kami</a></li>
					<li><a href="#">My Cart</a></li>
					<li><a href="#">Kontak Kami</a></li>-->
                    <?php if($this->session->userdata('admin')!='')
					{
					?>
                    <li><a href="<?php echo base_url();?>index.php/admin/signout">Signout</a></li>
                    <?php } ?>
				</ul>
			</div>