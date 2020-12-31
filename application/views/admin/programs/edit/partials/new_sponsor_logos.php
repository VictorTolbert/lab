<?php if ($i <= $allowedSponsorLogosCount) {
  if ($i !== 1) {
    ?>
  <button id="sponsor_logo_<?= $i ?>_add_button" type="button" class="btn btn-default mb-4 sponsor_logo_add" data-toggle="collapse" data-target="#sponsor_logo_<?= $i ?>">+ Additional Sponsor Logo</button>
  <?php } ?>
  <div class="mb-8 mt-4" id="sponsor_logo_<?= $i ?>_wrapper">
    <div class="form-group sponsor_logos collapse <?= $i === 1 ? 'in' : ''?>" id="sponsor_logo_<?= $i ?>" data-count="<?= $i ?>">
      <label for="sponsor_logo_img_<?= $i ?>" class="control-label">Logo <?= $i ?></label>
      <div class="controls" id="sponsor_logo_<?= $i ?>">
        <span id="sponsor_logo_img_<?= $i ?>_section" class="sponsor_logo_img_section" data-pic="sponsor_logo_<?= $i ?>"> 
          <label class="btn btn-default btn-file">
            Upload Logo
            <input class="sponsor_logo_img_<?= $i ?>" type="file" name="sponsor_logo_img_<?= $i ?>" style="display:none" id="sponsor_logo_<?= $i ?>_input" data-pic="sponsor_logo_<?= $i ?>" />
          </label>
          <?php
            echo form_error('sponsor_logo_img_' . $i, '<div class="error">', '</div>');
            $newSponsorLogo                    = new stdClass();
            $newSponsorLogo->name              = 'sponsor_logo_img_' . $i;
            $newSponsorLogo->data['programId'] = $programId;
            $newSponsorLogo->url               = '';
            $newSponsorLogo->data['count']     = $i;
            $newSponsorLogo->data['entity']    = "sponsor_logo";
            $this->load->view('dashboard/partials/crop_image', ['crop_image' => $newSponsorLogo, 'i' => $i]);
          ?>
        </span>
      </div>
    </div>
    <div id="sponsor_pic_<?= $i ?>_wrapper" class="form-group hide">
      <?= form_label('Image 3 Description', 'pic_3_desc', ['class' => 'control-label']); ?>
      <div class="controls">
        <?php
          $field_val = (empty($program->microsite->pic_3->description)) ? '' : $program->microsite->pic_3->description;
          echo form_input(['class' => 'pic-toggle', 'name' => 'pic_' . (3 + $i) . '_desc', 'maxlength' => '50'], $field_val);
        ?>
      </div>
    </div>
  </div>
  <?php
}
?>
