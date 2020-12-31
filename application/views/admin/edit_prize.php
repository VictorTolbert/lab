<div class="row">
  <div class="col-md-6 col-md-offset-3" id="prize-edit">
    <? if (isset($_GET['s'])): ?>
      <h3>Prize added!</h3>
    <? endif; ?>
    <h2>Prize > Edit > <?= $prize->name;?></h2>
    <?
      echo form_open_multipart('admin/prizes/edit/' . $prize->id, ['class' => '']);
      $field_val = (empty($_POST['name'])) ? $prize->name : $this->input->post('name');
      echo bootstrap_field_val('text', 'name', 'Name', $field_val, form_error('name'));
      $field_val = (empty($_POST['inventory_code'])) ? $prize->inventory_code : $this->input->post('inventory_code');
      echo bootstrap_field_val('text', 'inventory_code', 'Inventory Code', $field_val, form_error('inventory_code'));
    ?>
    <label class="btn btn-default btn-file">
      Upload Photo<input type="file" name="picture" style="display:none;">
    </label>
    <?= form_error('picture') ?>
    <?
    if (!empty($prize->picture)) {
      echo "<img id='prize-edit-image' src='" . s3_url('prizes/' . $prize->picture) . "'/>";
    }

      $field_val = (empty($_POST['video'])) ? $prize->video : $this->input->post('video');
      echo bootstrap_field_val('text', 'video', 'Video (Vimeo ID)', $field_val, form_error('video'));
    if (!empty($prize->video)) {
      echo '<iframe src="' . $this->config->item('vimeo_base_url') . $prize->video . '" width="100%" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
    }

      echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
      echo form_close();
    ?>
  </div>
</div>
