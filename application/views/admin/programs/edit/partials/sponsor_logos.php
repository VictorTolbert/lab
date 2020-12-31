<?php
$i = 1;
foreach ($sponsor_logos as $sponsor_logo) {
  ?>
  <div class="mb-8 mt-4" id="sponsor_logo_<?= $i ?>_wrapper">
  <div class="form-group sponsor_logos mb-2" id="sponsor_logo_<?php $i ?>" data-count="<?= $i ?>">
    <label for="sponsor_logo_1" class="control-label mb-2">Logo <?= $i ?></label>
    <div class="controls" id="sponsor_logo_<?= $i ?>">
      <label class="btn btn-default btn-file">
        Upload Logo
        <input class="sponsor_logo_<?= $i ?>" type="file" name="sponsor_logo_<?= $i ?>" style="display:none" id="sponsor_logo_<?= $i ?>_input" data-pic="sponsor_logo_<?= $i ?>" />
      </label>
    </div>
    <?php
    echo form_error('sponsor_logo_img_2', '<div class="error">', '</div>');
    $sponsor_logo->name              = 'sponsor_logo_img_' . $i;
    $sponsor_logo->entity_id         = $sponsor_logo->id;
    $sponsor_logo->s3_path           = 'sponsor_logos/' . $sponsor_logo->image_name;
    $sponsor_logo->filename          = $sponsor_logo->image_name;
    $sponsor_logo->data['count']     = $i;
    $sponsor_logo->data['programId'] = $program->id;
    $sponsor_logo->data['entity']    = "sponsor_logo";
    $this->load->view('dashboard/partials/crop_image', ['crop_image' => $sponsor_logo, 'i' => $i]);
    ?>
  </div>
  <div id="sponsor_logo<?= $i ?>_wrapper" class="form-group hide">
    <?= form_label('Image 2 Description', 'sponsor_logo' .  $i . '_desc', ['class' => 'control-label']); ?>
    <div class="controls">
      <?php
        echo form_input(['class' => 'pic-toggle', 'name' => 'sponsor_logo', 'maxlength' => '50'], $sponsor_logo->image_name);
      ?>
    </div>
  </div>
  </div>
  <?php
    $i++;
}

  $this->load->view('admin/programs/edit/partials/new_sponsor_logos', ['i' => $i, 'programId' => isset($program->id) ? $program->id : $programId]);
?>
