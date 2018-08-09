<div class="box-content">
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open('category/update_category', 'class=form-horizontal');?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category Name </label>
							  <div class="controls">
								<input type="text" name="category_name" value="<?php echo $category_data->category_name?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
								<input type="hidden" name="category_id" value="<?php echo $category_data->category_id?>">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Category Short Description </label>
							  <div class="controls">
								<input type="text" name="category_short_desc" value="<?php echo $category_data->category_short_desc?>" class="span6 typeahead"  id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="category_long_desc" id="textarea2" rows="3"><?php echo $category_data->category_long_desc?> </textarea>
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
