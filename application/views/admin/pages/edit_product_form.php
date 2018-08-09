<?php 
$message=$this->session->userdata('message');
if (isset($message))
{
	echo $message;
	$this->session->unset_userdata('message');
}
?>

<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update New Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('product/update_product', 'class="form-horizontal" name="edit_product" '); ?>
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name </label>
							  <div class="controls">
								<input type="text" name="product_name" value="<?php echo $product_info->product_name ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>

								<input type="hidden" name="product_id" value="<?php echo $product_info->product_id ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Price </label>
							  <div class="controls">
								<input type="number" name="product_price" value="<?php echo $product_info->product_price ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Product Manufacturer</label>
								<div class="controls">
								  <select name="manufacturer_id" id="selectError3" value="<?php echo $product_info->manufacturer_id?>" >
								  	<option>Select Manufacturer</option>
								  	<?php foreach($manufacturer_info as $manufacturer) { ?>
								  	<option value="<?php echo $manufacturer->manufacturer_id?>"><?php echo $manufacturer->manufacturer_name; ?></option>
								  	<?php } ?>

								  </select>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label" for="selectError3">Product Category</label>
								<div class="controls">
								  <select name="category_id" id="selectError3" value="<?php echo $product_info->category_id?>" >
								  	<option>Select Category</option>

								  	<?php foreach($category_info as $category){ ?>
								  	<option value="<?php echo $category->category_id ?>"> <?php echo $category->category_name; ?></option>

								  	<?php } ?>

								  </select>
								</div>
							  </div>



							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Short Description </label>
							  <div class="controls">
								<input type="text" name="product_short_desc" value="<?php echo $product_info->product_short_desc ?>" class="span6 typeahead"  id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_desc" id="textarea2" rows="3"><?php echo $product_info->product_long_desc ?></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Quantity </label>
							  <div class="controls">
								<input type="number" name="product_qty" value="<?php echo $product_info->product_qty ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Product image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="product_image" type="file">

								<input class="input-file uniform_on" id="fileInput" name="product_old_image" value="<?php echo $product_info->product_image?>" type="hidden">

								<img src="<?php echo base_url().$product_info->product_image?>" width="50" height="50" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Top Product</label>
							  <div class="controls">
							  	<?php
							  	if($product_info->top_product==1)
							  	{
							  	  ?>
							  	 <input name="top_product" type="checkbox" checked>

							  	 <?php
							  	}

							  	else
							  	{
							  		?>
							  		<input name="top_product" type="checkbox" >
							  	<?php } ?>
								
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>

			<script>
				document.forms['edit_product'].elements['category_id'].value=<?php echo $product_info->category_id ?>;

				document.forms['edit_product'].elements['manufacturer_id'].value=<?php echo $product_info->manufacturer_id ?>

			</script>
