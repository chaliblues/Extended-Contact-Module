<?php

/**
 * @author chaliblues
 * @copyright 2011
 */
//construct the form values

$subject=$contact_info->subject;
$email_to=$contact_info->emailto;
$postal_zip=$contact_info->postal_zip;
$email=$contact_info->email;
$tel=$contact_info->tel;
$mobile=$contact_info->mobile;
$fax=$contact_info->fax;
$town_city=$contact_info->town_city;
$street_address=$contact_info->street_address;

echo form_open('admin/extendedcontact/settings_submit','class="crud"');
echo '<h2>'.lang('ext_contact.contacts_title').'</h2>';
?>
<fieldset>
 <ol>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.subject_label');?></label>
 <input type="text" id="subject" name="subject" value="<?php if(set_value('subject')==NULL){echo $subject;}else{echo set_value('subject');}?>"/>
 <span class="required-icon tooltip">required</span>
 <span id="hints"><?php echo lang('ext_contact.subject_hint');?></span>
 </li>
 <li class="odd">
 <label for="title"><?php echo lang('ext_contact.emailto_label');?></label>
 <input type="text" id="email_to" name="email_to" value="<?php if(set_value('email_to')==NULL){echo $email_to;}else{echo set_value('email_to');}?>"/>
 <span class="required-icon tooltip">required</span>
 <span id="hints"><?php echo lang('ext_contact.emailto_hint');?> </span>
 </li>
 </ol>
</fieldset>
<?php
echo '<strong><font color="green">'.lang('ext_contact.hint').'</font></strong>';
echo '<h2>'.lang('ext_contact.address_title').'</h2>
';
?>
<fieldset>
 <ol>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.postal_zip_label');?></label>
 <input type="text" id="postal_zip" name="postal_zip" value="<?php if(set_value('postal_zip')==NULL){echo $postal_zip;}else{echo set_value('postal_zip');}?>"/>
 </li>
 <li class="odd">
 <label for="title"><?php echo lang('ext_contact.email_label');?></label>
 <input type="text" id="email" name="email" value="<?php if(set_value('email')==NULL){echo $email;}else{echo set_value('email');}?>"/>
 </li>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.tel_label');?></label>
 <input type="text" id="tel" name="tel" value="<?php if(set_value('tel')==NULL){echo $tel;}else{echo set_value('tel');}?>"/>
 </li>
 <li class="odd">
 <label for="title"><?php echo lang('ext_contact.mobile_label');?></label>
 <input type="text" id="mobile" name="mobile" value="<?php if(set_value('mobile')==NULL){echo $mobile;}else{echo set_value('mobile');}?>"/>
 </li>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.fax_label');?></label>
 <input type="text" id="fax" name="fax" value="<?php if(set_value('fax')==NULL){echo $fax;}else{echo set_value('fax');}?>"/>
 </li>
 </ol>
</fieldset>
<?php
echo '<h2>'.lang('ext_contact.location_title').'</h2>';
?>
<fieldset>
 <ol>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.town_city_label');?></label>
 <input type="text" id="town_city" name="town_city" value="<?php if(set_value('town_city')==NULL){echo $town_city;}else{echo set_value('town_city');}?>"/>
 </li>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.street_address_label');?></label>
 <textarea id="street" name="street" cols="60" rows="6">
 <?php if(set_value('street_address')==NULL){echo $street_address;}else{echo set_value('street_address');}?>
 </textarea>
 </li>
 </ol>
 <div class="buttons float-right padding-top">
		<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
 </div>
</fieldset>
<?php

echo form_close();

?>