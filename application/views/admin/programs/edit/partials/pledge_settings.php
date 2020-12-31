<?php
if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif (isset($error_message) && ! empty($error_message)) {
  echo "<div class='alert alert-danger'>{$error_message}</div>";
} elseif ($this->session->flashdata('pledge_settings_message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('pledge_settings_message')}</div>";
}

if ($this->session->flashdata('pledge_settings_error_message')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('pledge_settings_error_message')}</div>";
}
?>


<h3>Pledge Flagging Settings</h3>
<?= form_open('/admin/programs/pledges/settings/' . $program_pledge_settings->program_id, [ 'class' => '' ]); ?>
<div class="row">
  <div class="col-md-3 col-sm-6">
    <?php
    $field_val = ( empty($_POST['flag_high_donation']) ) ? $program_pledge_settings->flag_high_donation : $this->input->post('flag_high_donation');
    echo bootstrap_field_val('text', 'flag_high_donation', 'High Donation', $field_val, form_error('flag_high_donation'), null, null, null, 'maxlength="3"');
    ?>
  </div>
  <div class="col-md-3 col-sm-6">
    <?php
    $field_val = ( empty($_POST['flag_high_cumulative_per_period']) ) ? $program_pledge_settings->flag_high_cumulative_per_period : $this->input->post('flag_high_cumulative_per_period');
    echo bootstrap_field_val('text', 'flag_high_cumulative_per_period', 'Cumulative Pledge Amount', $field_val, form_error('flag_high_cumulative_per_period'), null, null, null, 'maxlength="4"');
    ?>
  </div>
  <div class="col-md-3 col-sm-6">
    <?php
    $field_val = ( empty($_POST['flag_high_quantity_per_period']) ) ? $program_pledge_settings->flag_high_quantity_per_period : $this->input->post('flag_high_quantity_per_period');
    echo bootstrap_field_val('text', 'flag_high_quantity_per_period', 'Pledges In Period', $field_val, form_error('flag_high_quantity_per_period'), null, null, null, 'maxlength="2"');
    ?>
  </div>
  <div class="col-md-3 col-sm-6">
    <?php
    $field_val = ( empty($_POST['flag_payment_scheduled_high_value']) ) ? $program_pledge_settings->flag_payment_scheduled_high_value : $this->input->post('flag_payment_scheduled_high_value');
    echo bootstrap_field_val('text', 'flag_payment_scheduled_high_value', 'Payment Scheduled High Value', $field_val, form_error('flag_payment_scheduled_high_value'), null, null, null, 'maxlength="6"');
    ?>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="form-group">
      <label for="weekend_challenge_amount" class="control-label">Weekend Challenge Pledge Amount (for teacher email templates)</label>
      <div class="controls">
        <input type="text" name="weekend_challenge_amount" value="<?=$program_pledge_settings->weekend_challenge_amount?>" class="form-control " maxlength="4">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <?php
    $field_val = ( empty($_POST['flat_donate_only']) ) ? $program_pledge_settings->flat_donate_only : $this->input->post('flat_donate_only');
    echo '<div class="form-group">';
    echo form_label('Flat Donation Only', 'flat_donate_only', ['class' => 'control-label']);
    echo '<div class="controls">';
    echo form_hidden('flat_donate_only', '0');
    echo form_checkbox('flat_donate_only', '1', (bool)$field_val, ['id' => 'flat_donate_only']);
    echo '</div></div>';
    ?>
  </div>
  <div class="col-md-12">
    <? $field_val = ( empty($_POST['ppu_donations_only']) ) ? $program_pledge_settings->ppu_donations_only : $this->input->post('ppu_donations_only'); ?>
    <div class="form-group">
      <?= form_label('Pledge Per Unit Only', 'ppu_donations_only', ['class' => 'control-label']); ?>
      <div class="controls">
        <?= form_hidden('ppu_donations_only', 'null'); ?>
        <?= form_checkbox('ppu_donations_only', '1', (bool)$field_val, ['id' => 'ppu_donations_only']); ?>
      </div>
    </div>
    <? $field_val = ( empty($_POST['minimize_flat_donation']) ) ? $program_pledge_settings->minimize_flat_donation : $this->input->post('minimize_flat_donation'); ?>
    <div class="form-group">
      <?= form_label('Toggle Pledge Type', 'minimize_flat_donation', ['class' => 'control-label']); ?>
      <div class="controls">
        <?= form_hidden('minimize_flat_donation', 'null'); ?>
        <?= form_checkbox('minimize_flat_donation', '1', (bool)$field_val, ['id' => 'minimize_flat_donation']); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="family_pledging_enabled" class="control-label">Family Pledging Enabled</label>
      <div class="controls">
        <input type="checkbox" name="family_pledging_enabled" value="1" <?=($program_pledge_settings->family_pledging_enabled) ? 'checked' : null;?>>
      </div>
    </div>
  </div>
</div>
<h3>Recommended Pledge Amounts</h3>
<div class="row">
  <div class="col-md-3 col-sm-6 recommended_pledge_amount_clmn">
    <div class="row">
      <div class="col-xs-6">
        <p class="recommended_pledge_amount_clmn_header">Defaulted Odd Pledge Amount</p>
      </div>
      <div class="col-xs-6">
        <!-- <p class="recommended_pledge_amount_clmn_header">Flat Odd<br />(Top To Bottom)</p> -->
        <p class="recommended_pledge_amount_clmn_header">Per Lap Odd<br />(Top To Bottom)</p>
      </div>
    </div>
    <!-- <div class="row"> -->
    <?php
    $perlap_a_amounts = ($this->input->post('perlap_a')) ?: $program_pledge_settings->recommended_pledge_amounts['perlap_a'];
    $ppl_default_a    = ($this->input->post('ppl_default_a')) ?: $program_pledge_settings->recommended_pledge_amounts['ppl_default_a'];
    $ppl_default_b    = ($this->input->post('ppl_default_b')) ?: $program_pledge_settings->recommended_pledge_amounts['ppl_default_b'];
    foreach ($perlap_a_amounts as $key => $value) :
      ?>
      <div class="row">
        <div class="col-xs-6">
          <input id="ppl_default_a_<?=$key?>" class="deselectable" type="radio" name="ppl_default_a" value="<?=$value?>"<?=$value == $ppl_default_a ? ' checked="checked"' : '';?>>
        </div>
        <div class="col-xs-6">
          <input type="text" name="perlap_a[]" value="<?=$value?>" class="form-control syncvalue" maxlength="5" data-sync="ppl_default_a_<?=$key?>">
        </div>
      </div>
      <?php
    endforeach;
    ?>
  </div>
  <div class="col-md-3 col-sm-6 recommended_pledge_amount_clmn">
    <div class="row">
      <div class="col-xs-6">
        <p class="recommended_pledge_amount_clmn_header">Defaulted Even PPU Pledge Amount</p>
      </div>
      <div class="col-xs-6">
        <p class="recommended_pledge_amount_clmn_header">Per Lap Even<br />(Top To Bottom)</p>
      </div>
    </div>
    <?php
    $perlap_b_amounts = ($this->input->post('perlap_b')) ?: $program_pledge_settings->recommended_pledge_amounts['perlap_b'];
    foreach ($perlap_b_amounts as $key => $value) :
      ?>
      <div class="row">
        <div class="col-xs-6">
          <input id="ppl_default_b_<?=$key?>" class="deselectable" type="radio" name="ppl_default_b" value="<?=$value?>"<?=$value == $ppl_default_b ? ' checked="checked"' : '';?>>
        </div>
        <div class="col-xs-6">
          <input type="text" name="perlap_b[]" value="<?=$value?>" class="form-control syncvalue" maxlength="5" data-sync="ppl_default_b_<?=$key?>">
        </div>
      </div>
      <?php
    endforeach;
    ?>
  </div>
  <div class="col-md-3 col-sm-6 recommended_pledge_amount_clmn">
    <div class="row">
      <div class="col-xs-6">
        <p class="recommended_pledge_amount_clmn_header">Defaulted Odd PPU Pledge Amount</p>
      </div>
      <div class="col-xs-6">
        <p class="recommended_pledge_amount_clmn_header">Flat Odd<br />(Top To Bottom)</p>
      </div>
    </div>
    <?php
    $flat_a_amounts = ($this->input->post('flat_a')) ?: $program_pledge_settings->recommended_pledge_amounts['flat_a'];
    $flat_default_a = ($this->input->post('flat_default_a')) ?: $program_pledge_settings->recommended_pledge_amounts['flat_default_a'];
    $flat_default_b = ($this->input->post('flat_default_b')) ?: $program_pledge_settings->recommended_pledge_amounts['flat_default_b'];
    foreach ($flat_a_amounts as $key => $value) :
      ?>
      <div class="row">
        <div class="col-xs-6">
          <input id="flat_default_a_<?=$key?>" class="deselectable" type="radio" name="flat_default_a" value="<?=$value?>"<?=$value == $flat_default_a ? ' checked="checked"' : '';?>>
        </div>
        <div class="col-xs-6">
          <input type="text" name="flat_a[]" value="<?=$value?>" class="form-control syncvalue" maxlength="5" data-sync="flat_default_a_<?=$key?>">
        </div>
      </div>
      <?php
    endforeach;
    ?>
  </div>
  <div class="col-md-3 col-sm-6 recommended_pledge_amount_clmn">
    <div class="row">
      <div class="col-xs-6">
        <p class="recommended_pledge_amount_clmn_header">Defaulted Even Flat Pledge Amount</p>
      </div>
      <div class="col-xs-6">
        <p class="recommended_pledge_amount_clmn_header">Flat Even<br />(Top To Bottom)</p>
      </div>
    </div>
    <?php
    $flat_b_amounts = ($this->input->post('flat_b')) ?: $program_pledge_settings->recommended_pledge_amounts['flat_b'];
    foreach ($flat_b_amounts as $key => $value) :
      ?>
      <div class="row">
        <div class="col-xs-6">
          <input id="flat_default_b_<?=$key?>" class="deselectable" type="radio" name="flat_default_b" value="<?=$value?>"<?=$value == $flat_default_b ? ' checked="checked"' : '';?>>
        </div>
        <div class="col-xs-6">
          <input type="text" name="flat_b[]" value="<?=$value?>" class="form-control syncvalue" maxlength="5" data-sync="flat_default_b_<?=$key?>">
        </div>
      </div>
      <?php
    endforeach;
    ?>
  </div>
</div>
<div class="form-actions">
  <?= form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]); ?>
</div>
<?= form_close();
