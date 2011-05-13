<h2 class="inner"><?php echo lang('ext_contact.title');?></h2>

<?php
  
 echo '<div id="sent">'.$this->session->flashdata('success').'</div>';
 if($contact_info==NULL)
 {
    //No contact info 
 }
 else
 {
    echo '<ul class="contact">';
        $row=$contact_info;
		if($row->postal_zip!=NULL)
		{
			echo '<li><span id="label">'.lang('ext_contact.address_label').':</span> '.$row->postal_zip.'</li>';
		}
		if($row->email!=NULL)
		{
			echo '<li><span id="label">'.lang('ext_contact.email_label').':</span> '.$row->email.'</li>';
		}
		if($row->tel!=NULL)
		{
			echo '<li><span id="label">'.lang('ext_contact.tel_label').':</span> '.$row->tel.'</li>';
		}
		if($row->mobile!=NULL)
		{
			echo '<li><span id="label">'.lang('ext_contact.mobile_label').':</span> '.$row->mobile.'</li>';
		}
		if($row->fax!=NULL)
		{
			echo '<li><span id="label">'.lang('ext_contact.fax_label').':</span> '.$row->fax.'</li>';
		}
		if($row->town_city!=NULL)
		{
			echo '<li><span id="label">'.lang('ext_contact.town_city_label').':</span> '.$row->town_city.'</li>';
		}
		if($row->street_address!=NULL)
		{
			echo '<li><span id="label">'.lang('ext_contact.streetaddress_label').':</span> '.$row->street_address.'</li>';
		}
		
		
	
	echo '</ul><hr/><div class="clear"></div>';
 }
?>

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