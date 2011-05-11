<h2 class="inner"><?php echo lang('ext_contact.title');?></h2>
<?php if (validation_errors()): ?>
<div class="error-box">
	<?php echo validation_errors();?>
</div>
<?php endif; ?>

<?php echo form_open('extendedcontact/sendc'); ?>
                    
					<p>
						<label for="name"><?php echo lang('ext_contact.name_label');?>:</label>
						<input type="text" class="text" name="name" id="name" value="<?php echo set_value('name');?>"/>
						<span id="hints"><?php echo lang('ext_contact.hint_required');?></span>
					</p>
					<p>
						<label for="email"><?php echo lang('ext_contact.email_label');?>:</label>
						<input type="text" class="text" name="email" id="email" value="<?php echo set_value('email');?>"/>
						<span id="hints"><?php echo lang('ext_contact.hint_required');?></span>
					</p>
					<p>
						<label for="phone"><?php echo lang('ext_contact.phone_label');?>:</label>
						<input type="text" class="text" name="phone" id="phone" value="<?php echo set_value('phone');?>"/>
						<span id="hints"><?php echo lang('ext_contact.hint_optional');?></span>
					</p>
					<p>
						<label for="text"><?php echo lang('ext_contact.message_label');?>:</label>
						<textarea class="text" name="text" id="text"><?php echo set_value('text');?></textarea>
						<span id="hints"><?php echo lang('ext_contact.hint_required');?></span>
					</p>
					<p>
						<input type="submit" class="submit" value="<?php echo lang('ext_contact.send_label');?>" />
					</p>
<?php echo form_close();?>