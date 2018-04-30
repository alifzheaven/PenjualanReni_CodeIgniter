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
					<a href="#">Daftar Produk</a>
				</div>
				<?php include("left.php"); ?>
                
				<div id="right">
					<h1 class="bar">Kategori<a  style="float:right;" href="<?php echo base_url();?>/index.php/admin/add_category">Tambah Kategori Baru</a></h1>
                    <?php if($categories=='empty')
					echo " Sorry - No category found";
					else
					{
						?>
					<table id="cart">
						<thead>
							<th>No</th>
							<th>Nama Kategori</th>
							<th>Aksi</th>
						</thead>
						<tbody>
                        <?php 
						$i=1;
						foreach($categories as $cat)
						{
							?>
							<tr>
								<td align="center"><?php echo $i; //$cat->cat_id;?></td>
								<td><?php echo $cat->cat_name;?></td>
								<td align="center"><a href="<?php echo base_url();?>index.php/admin/products/<?php echo $cat->cat_id;?>">Veiw</a> | 
                                <a href="<?php echo base_url();?>index.php/admin/edit_category/<?php echo $cat->cat_id;?>">Edit</a> | 
                                <a href="<?php echo base_url();?>index.php/admin/remove_category/<?php echo $cat->cat_id;?>">Delete</a></td>
							</tr>
                          <?php $i++; } ?>  
							
						</tbody>
					</table>
					<?php  } ?>
				</div>		
				<div class="clear"></div>
				<div id="footer">
			</div>
			</div>
	
	</div>
</body>
</html>