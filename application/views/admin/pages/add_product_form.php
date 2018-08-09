<?php 
$message=$this->session->message;
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open_multipart('product/save_product', 'class=form-horizontal'); ?>
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name </label>
							  <div class="controls">
								<input type="text" name="product_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Price </label>
							  <div class="controls">
								<input type="number" name="product_price" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Product Manufacturer</label>
								<div class="controls">
								  <select name="manufacturer_id" id="selectError3">
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
								  <select name="category_id" id="selectError3">
								  	<option>Select Category</option>

								  	<?php foreach($category_info as $category){ ?>
								  	<option value="<?php echo $category->category_id ?>"><?php echo $category->category_name; ?></option>

								  	<?php } ?>

								  </select>
								</div>
							  </div>



							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Short Description </label>
							  <div class="controls">
								<input type="text" name="product_short_desc" class="span6 typeahead"  id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_desc" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Quantity </label>
							  <div class="controls">
								<input type="number" name="product_qty" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Product image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="product_image" type="file">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Top Product</label>
							  <div class="controls">
								<input name="top_product" type="checkbox" >
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
					   <?php echo form_close()?> 

					</div>
				</div>
			</div>
