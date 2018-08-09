<div class="box-content">
	<div style="color:green; font-size: 26px;">
		<?php if(isset($success_message))
		{
			echo $success_message;
		}
		?>
	</div>

		<?php echo validation_errors() ;?>
		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Register New Admin</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
						
						<?php echo form_open('admin/register_new_admin', 'class=form-horizontal');?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Admin Name </label>
							  <div class="controls">
								<input type="text" name="user_name" class="span6 typeahead" value="<?php echo set_value('user_name')?>" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							  <?php echo form_error('user_name') ?>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Admin Email </label>
							  <div class="controls">
								<input type="email" name="user_email" class="span6 typeahead" value="<?php echo set_value('user_email')?>" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							  <?php echo form_error('user_email') ?>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Admin Password </label>
							  <div class="controls">
								<input type="password" name="user_password" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Confirm Password </label>
							  <div class="controls">
								<input type="password" name="confirm_password" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" required>
							  </div>
							  <?php echo form_error('confirm_password') ?>
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
