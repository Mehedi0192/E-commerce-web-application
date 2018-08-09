<?php $message=$this->session->message;
if(isset($message))
{
	echo $message;
	$this->session->unset_userdata('message');
}
?>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Manufacturer</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php echo form_open('manufacturer/update_manufacturer', 'class=form-horizontal'); ?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Manufacturer Name </label>
							  <div class="controls">
								<input type="text" value="<?php echo $manufacturer_data->manufacturer_name?>" name="manufacturer_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
								<input type="hidden" name="manufacturer_id" value="<?php echo $manufacturer_data->manufacturer_id?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Manufacturer Short Description </label>
							  <div class="controls">
								<input type="text" name="manufacturer_short_desc" value="<?php echo $manufacturer_data->manufacturer_short_desc?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>
        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Manufacturer Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="manufacturer_long_desc" id="textarea2" rows="3"><?php echo $manufacturer_data->manufacturer_long_desc?></textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						<?php echo form_close() ?> 

					</div>
				</div><!--/span-->

			</div><!--/row-->