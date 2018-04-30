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
					<h1 class="bar">Checkout</h1>
                    <?php if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
					<form action="<?=base_url();?>index.php/front/order_step2" method="post" enctype="multipart/form-data" id="admin">
						<h2>Alamat Pengiriman</h2>

						<p>
							<label>Alamat 1: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat 2:</label>	
							<input name="address1" type="text" id="address1" value="<?=set_value('address1');?>">
													
							<input name="address2" type="text" id="address2" value="<?=set_value('address2');?>"> 
						</p>
						<p>
							<label>Kota:</label>
							<input name="city" type="text" id="city" value="<?=set_value('city');?>"> 
						</p>
						<p>
							<label>Negara/Provinsi:</label>
							<select name="county" >
							<optgroup label="Indonesia">
							<option>Aceh</option>
							<option>Bali</option>
							<option>Banten</option>
							<option>Bengkulu</option>
							<option>Gorontalo</option>
							<option>Jakarta</option>
							<option>Jambi</option>
							<option>Jawa Barat</option>
							<option>Jawa Tengah</option>
							<option>Jawa Timur</option>
							<option>Kalimantan Barat</option>
							<option>Kalimantan Selatan</option>
							<option>Kalimantan Tengah</option>
							<option>Kalimantan Timur</option>
							<option>Kalimantan Utara</option>
							<option>Kepulauan Bangka Belitung</option>
							<option>Kepulauan Riau</option>
							<option>Lampung</option>
							<option>Maluku</option>
							<option>Maluku Utara</option>
							<option>Nusa Tenggara Barat</option>
							<option>Nusa Tenggara Timur</option>
							<option>Papua</option>
							<option>Papua Barat</option>
							<option>Riau</option>
							<option>Sulawesi Barat</option>
							<option>Sulawesi Selatan</option>
							<option>Sulawesi Tengah</option>
							<option>Sulawesi Utara</option>
							<option>Sumatera Barat</option>
							<option>Sumatera Selatan</option>
							<option>Sumatera Utara</option>
							<option>Yogyakarta</option>
							</optgroup>
							</select>
    					</p>
						<p>
							<label>Kode Pos:</label>
							<input name="post_code" type="text" id="post_code" value="<?=set_value('post_code');?>"> 
						</p>
					<br />
					<h2>Detail Pesanan</h2>
                    <?php
					if($products!='empty')
					{
					?>
					<table id="cart">
						<thead>
							<th>Produk</th>
							<th class="qty-column">Jml</th>
							<th>Harga</th>
							<th>Total</th>
						</thead>
						<tbody>
                        <?php 
						$total_price	=	0;
						foreach($products as $product) {	
						$total_price += $product->item_total_price;
						?>
							<tr>
								<td><?=$product->item_name;?></td>
								<td><?=$product->item_quantity;?></td>
								<td>Rp. <?=number_format($product->item_price,2,',','.');?></td>
								<td>Rp. <?=number_format($product->item_total_price,2,',','.');?></td>
							</tr>
                          <?php } ?>  
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Sub Total</strong></td>
								<td>Rp. <?=number_format($total_price,2,',','.');?></td>
							<tr>
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Pph (5%)</strong></td>
								<td>Rp. <?php $vat = ($total_price*(0.05)); echo number_format($vat,2,',','.');?></td>
							<tr>
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Total</strong></td>
								<td>Rp. <?=number_format(($total_price+$vat),2,',','.');?></td>
							<tr>
						</tbody>
					</table>
                    <?php } 
					else header("Location:".base_url()); ?>
					<input name="vat" type="hidden" id="vat" value="<?=$vat;?>" />
                    <input name="sub_total" type="hidden" id="sub_total" value="<?=$total_price;?>" />
                    <input name="total_price" type="hidden" id="total_price" value="<?=$total_price+$vat;?>" />
                    <input name="checkout_action" type="hidden" id="checkout_action" value="true" />
<br />
					<input type="submit" value="Kirim Pesanan">
					</form>
				</div>		
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			</div>
	
	</div>
</body>
</html>