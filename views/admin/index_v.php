<?php

/**
 * @author chaliblues
 * @copyright 2011
 */

echo form_open('admin/extendedcontact/settings_submit','class="crud"');
echo '<h2>'.lang('ext_contact.contacts_title').'</h2>';
?>
<fieldset>
 <ol>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.subject_label');?></label>
 <input type="text" id="subject" name="subject"/>
 <span class="required-icon tooltip">required</span>
 </li>
 <li class="odd">
 <label for="title"><?php echo lang('ext_contact.emailto_label');?></label>
 <input type="text" id="email_to" name="email_to"/>
 <span class="required-icon tooltip">required</span>
 </li>
 </ol>
</fieldset>
<?php

echo '<h2>'.lang('ext_contact.address_title').'</h2>';
?>
<fieldset>
 <ol>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.postal_zip_label');?></label>
 <input type="text" id="postal_zip" name="postal_zip"/>
 </li>
 <li class="odd">
 <label for="title"><?php echo lang('ext_contact.email_label');?></label>
 <input type="text" id="email" name="email"/>
 </li>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.tel_label');?></label>
 <input type="text" id="tel" name="tel"/>
 </li>
 <li class="odd">
 <label for="title"><?php echo lang('ext_contact.mobile_label');?></label>
 <input type="text" id="mobile" name="mobile"/>
 </li>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.fax_label');?></label>
 <input type="text" id="fax" name="fax"/>
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
 <input type="text" id="town_city" name="town_city"/>
 </li>
 <li class="even">
 <label for="title"><?php echo lang('ext_contact.street_address_label');?></label>
 <textarea id="street" name="street" cols="60" rows="6">
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