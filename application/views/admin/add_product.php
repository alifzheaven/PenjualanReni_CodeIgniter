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
				  <h1 class="bar">Tambah Produk baru</h1>
                  	
					<?php if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
                	<?php if($this->uri->segment(4)!='') { ?><div id="errors"> Maaf - Kategori Sudah Ada</div> <?php } ?>
                    
				  <form action="<?php echo base_url();?>index.php/admin/add_product" method="post" enctype="multipart/form-data" id="admin">
				    <p>
				      <label>Nama Produk:</label>
				      <input name="title" type="text" id="title"  value="<?=set_value('title');?>"/>
			        </p>
				    <p>
				      <label>Harga:</label>
				      <input name="price" type="text" id="price" value="<?=set_value('price');?>"/>
			        </p>
				    <p>
				      <label>Jumlah:</label>
				      <input name="stock" type="text" id="stock" value="<?=set_value('stock');?>" />
			        </p>
				    <p>
				      <label>Gambar:</label>
				      <input type="file" name="file" id="file" />
			        </p>
				    <p>
				      <label>Kategori:</label>
				      <select name="cat_id" id="cat_id">
                      <?php
					  
					 $categories = $this->admin_model->getAllCategories();
					 foreach($categories as $category)
					 {
					 ?>
				      	<option value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
                        
                      <?php
					  }
					  ?>  
			          </select>
			        </p>
				    <p>
				      <label>Keterangan:</label>
				      <textarea name="desc" id="desc"><?=set_value('company_name');?></textarea>
			        </p>
				    <input type="submit" name="submit" value="Tambah Produk" />
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