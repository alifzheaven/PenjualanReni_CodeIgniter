<?php 
if($this->session->userdata('admin')==''    && $logincheck=='')
  redirect(base_url()."index.php/admin/login");
?>
<div id="left">
					<h1 class="bar">Admin</h1>
					<ul id="cats">
						<li><a href="<?php echo base_url();?>index.php/admin/orders">Pemesanan</a></li>
						<li><a href="<?php echo base_url();?>index.php/admin/customers">Pelanggan</a></li>
						<li><a href="<?php echo base_url();?>index.php/admin/products">Produk</a></li>
						<li><a href="<?php echo base_url();?>index.php/admin/categories">Kategori</a></li>
					</ul>
				</div>