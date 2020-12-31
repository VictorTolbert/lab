<?php
$ck_editor = true;

if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif ($this->session->flashdata('error_message')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('error_message')}</div>";
} elseif ($this->session->flashdata('message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
}

echo $this->session->flashdata('success');
?>
<h3 class="center">Program Content</h3>
<?php
echo form_open_multipart('microsites/edit/' . $program->id, ['class' => 'col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3', 'id' => 'microsite_form']);
echo form_hidden('program_id', $program->id);
echo form_hidden('school_name', $program->school_name);
echo form_hidden('env', $env);
$field_val = (empty($_POST['name'])) ? $program->school_name : $this->input->post('name');
echo bootstrap_field_val('text', 'name', 'Name', $field_val, form_error('name'), null, null, null, 'disabled="disabled"');
?>
<div class="form-group">
  <label for="school_logo_image" class="control-label">Program/School Logo</label>
  <div class="controls">
    <label class="btn btn-default btn-file">
      upload photo
      <input type="file" name="program_logo_image" style="display:none" id="school_logo_image_input" />
    </label>
    <?php
      echo form_error('program_logo_image', '<div class="error">', '</div>');
      $this->load->view('dashboard/partials/crop_image', ['crop_image' => $program_logo_image]);
    ?>
  </div>
</div>
<?php
  $field_val = (empty($_POST['slug'])) ? $program->microsite->slug : $this->input->post('slug');
  echo bootstrap_field_val('text', 'slug', 'Slug', $field_val, form_error('slug'));

  $this->load->helper('microsite_helper');
  $default_color_theme = get_default_color_theme_hex_code();
?>
<div class="form-group">
  <label for="color_theme">Select Custom Color</label>
  <div class="controls">
    <input class="form-control" type='text' name="color_theme" id="input_color_theme" value="<?= ($color_theme) ? $color_theme : $default_color_theme ?>"/>
  </div>
</div>
<?php

$field_val = $program->microsite->intro_vid_override->original_url;

echo bootstrap_field_val('text', 'intro_vid_override', 'Intro Video Override', $field_val, form_error('intro_vid_override'));

$field_val = $program->microsite->intro_vid_override->description;
echo bootstrap_field_val('text', 'intro_vid_override_desc', 'Intro Video Override Description', $field_val, form_error('intro_vid_override_desc'));

$field_val = $program->microsite->get_pledges_vid_override->original_url;
echo bootstrap_field_val('text', 'get_pledges_vid_override', 'Get Pledges Video Override', $field_val, form_error('get_pledges_vid_override'));

$field_val = $program->microsite->teacher_video_override->original_url;
echo bootstrap_field_val('text', 'teacher_video_override', 'Teacher Dashboard Video Override', $field_val, form_error('teacher_video_override'));

$field_val = $program->microsite->hide_character_videos ? 'checked' : '';
?>
<div class="form-group">
  <label for="hide_character_videos" class="control-label">Hide Character Videos</label>
  <div class="controls">
    <input class="" type="checkbox" id="hide_character_videos" name="hide_character_videos" value="1"<?=$program->microsite->hide_character_videos ? ' checked' : ''; ?>/>
  </div>
</div>
<?
echo '<h4>Overview Videos</h4>';
$field_val = $program->microsite->video_1->original_url;
echo bootstrap_field_val('text', 'video_1', 'School Video', $field_val, form_error('video_1'));

$field_val = $program->microsite->video_1->description;
echo bootstrap_field_val('text', 'video_1_desc', 'School Video Title', $field_val, form_error('video_1_desc'));

$field_val = $program->microsite->video_2->original_url;
echo bootstrap_field_val('text', 'video_2', 'Video 2', $field_val, form_error('video_2'));

$field_val = $program->microsite->video_2->description;
echo bootstrap_field_val('text', 'video_2_desc', 'Video 2 Title', $field_val, form_error('video_2_desc'));

$field_val = (empty($program->microsite->video_3->original_url)) ? '' : $program->microsite->video_3->original_url;
echo bootstrap_field_val('text', 'video_3', 'Video 3', $field_val, form_error('video_3'));

$field_val = (empty($program->microsite->video_3->description)) ? '' : $program->microsite->video_3->description;
echo bootstrap_field_val('text', 'video_3_desc', 'Video 3 Title', $field_val, form_error('video_3_desc'));

$field_val = $program->microsite->video_4->original_url;
echo bootstrap_field_val('text', 'video_4', 'Video 4', $field_val, form_error('video_4'));

$field_val = $program->microsite->video_4->description;
echo bootstrap_field_val('text', 'video_4_desc', 'Video 4 Title', $field_val, form_error('video_4_desc'));

$field_val = (empty($program->microsite->video_5->original_url)) ? '' : $program->microsite->video_5->original_url;
echo bootstrap_field_val('text', 'video_5', 'Video 5', $field_val, form_error('video_5'));

$field_val = (empty($program->microsite->video_5->description)) ? '' : $program->microsite->video_5->description;
echo bootstrap_field_val('text', 'video_5_desc', 'Video 5 Title', $field_val, form_error('video_5_desc'));

$field_val = (empty($_POST['pic_1'])) ? '' : $this->input->post('pic_1');
echo form_hidden('pic_1', $field_val);
$field_val = (empty($_POST['pic_2'])) ? '' : $this->input->post('pic_2');
echo form_hidden('pic_2', $field_val);
$field_val = (empty($_POST['pic_3'])) ? '' : $this->input->post('pic_3');
echo form_hidden('pic_3', $field_val);
?>
<h4>Funds Raised For:</h4>
<div class="form-group" id="pic_1">
  <?= form_label('We are raising funds for...', 'funds_raised_for_input', ['class' => 'control-label']); ?>
  <div class="controls">
    <textarea
      type="textarea"
      id="funds_raised_for_input"
      name="funds_raised_for"
      class="form-control"
      onkeyup="tk_admin.character_limit_counter(event, better_funds_for_char_limit)"
      maxlength="300"><?= $program->microsite->funds_raised_for;  ?></textarea>
    <p class="edit_content_subtext">NOTE: This will be used in a sentence. "We are raising funds for a new playground."</p>
  </div>
</div>
<div class="form-group" id="pic_1">
  <label for="funds_raised_img_1" class="control-label">Image 1</label>
  <div class="controls" id="pic_1">
    <a id="pic-search-1" class="btn btn-primary pic-search">Search</a>
    <span id="funds_raised_or_1"> OR </span>
    <span id="funds_raised_img_1_section" class="funds_raised_img_section" data-pic="1">
      <label class="btn btn-default btn-file">
        upload photo
        <input class="funds_raised_img_1" type="file" name="funds_raised_img_1" style="display:none" id="funds_raised_img_1_input" data-pic="1" />
      </label>
      <?php
      echo form_error('funds_raised_img_1', '<div class="error">', '</div>');
      $this->load->view('dashboard/partials/crop_image', ['crop_image' => $funds_raised_img_1]);
      ?>
    </span>
  </div>
</div>
<div id="pic_1_wrapper" class="form-group hide">
  <?= form_label('Image 1 Description', 'pic_1_desc', ['class' => 'control-label']); ?>
  <div class="controls">
    <?php
    $field_val = (empty($program->microsite->pic_1->description)) ? '' : $program->microsite->pic_1->description;
    echo form_input(['class' => 'pic-toggle', 'name' => 'pic_1_desc', 'maxlength' => '50'], $field_val);
    ?>
  </div>
</div>
<div class="form-group" id="pic_2">
  <label for="funds_raised_img_2" class="control-label">Image 2</label>
  <div class="controls" id="pic_2">
    <a id="pic-search-2" class="btn btn-primary pic-search">Search</a>
    <span id="funds_raised_or_2"> OR </span>
    <span id="funds_raised_img_2_section" class="funds_raised_img_section" data-pic="2"> 
      <label class="btn btn-default btn-file">
        upload photo
        <input class="funds_raised_img_2" type="file" name="funds_raised_img_2" style="display:none" id="funds_raised_img_2_input" data-pic="2" />
      </label>
      <?php
      echo form_error('funds_raised_img_2', '<div class="error">', '</div>');
      $this->load->view('dashboard/partials/crop_image', ['crop_image' => $funds_raised_img_2]);
      ?>
    </span>
  </div>
</div>
<div id="pic_2_wrapper" class="form-group hide">
  <?= form_label('Image 2 Description', 'pic_2_desc', ['class' => 'control-label']); ?>
  <div class="controls">
    <?php
      $field_val = (empty($program->microsite->pic_2->description)) ? '' : $program->microsite->pic_2->description;
      echo form_input(['class' => 'pic-toggle', 'name' => 'pic_2_desc', 'maxlength' => '50'], $field_val);
    ?>
  </div>
</div>
<div class="form-group" id="pic_3">
  <label for="funds_raised_img_3" class="control-label">Image 3</label>
  <div class="controls" id="pic_3">
    <a id="pic-search-3" class="btn btn-primary pic-search">Search</a>
    <span id="funds_raised_or_3"> OR </span>
    <span id="funds_raised_img_3_section" class="funds_raised_img_section" data-pic="3"> 
      <label class="btn btn-default btn-file">
        upload photo
        <input class="funds_raised_img_3" type="file" name="funds_raised_img_3" style="display:none" id="funds_raised_img_3_input" data-pic="3" />
      </label>
      <?php
      echo form_error('funds_raised_img_3', '<div class="error">', '</div>');
      $this->load->view('dashboard/partials/crop_image', ['crop_image' => $funds_raised_img_3]);
      ?>
    </span>
  </div>
</div>
<div id="pic_3_wrapper" class="form-group hide">
  <?= form_label('Image 3 Description', 'pic_3_desc', ['class' => 'control-label']); ?>
  <div class="controls">
  <?php
    $field_val = (empty($program->microsite->pic_3->description)) ? '' : $program->microsite->pic_3->description;
    echo form_input(['class' => 'pic-toggle', 'name' => 'pic_3_desc', 'maxlength' => '50'], $field_val);
  ?>
  </div>
</div>
<div class="form-group">
  <?= form_label($this->lang->line('about_program_header'), 'overview_text_override', ['class' => 'control-label']); ?>
  <div class="abt-the-prg-desc">
    <?= $this->lang->line('about_program_short_desc') ?>
  </div>
  <div class="controls" id="overview_text_override_frame">
    <textarea  name="overview_text_override" class="input-xlarge"><?= $overview_text_override ?></textarea>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        CKEDITOR.on( 'dialogDefinition', function( ev ) {
          if (ev.data.name == 'link') {
            try {
              // Hide some of the link popup's target options for security reasons
              ev.data.definition.dialog.parts.dialog.$.classList.add('hide-custom-target-opts');
            } catch(err) {
              // Still allow browser to render popup if browser doesn't support classList add
            }
            
          }
        });
        CKEDITOR.config.plugins += ",link";
        CKEDITOR.replace("overview_text_override");
      });
    </script>
    <span class="help-inline">
      <?= form_error('overview_text_override'); ?>
    </span>
  </div>
</div>

<?php if (!empty($program->custom_url)) { ?>
<div class="form-group">
  <?= form_label('Thank You Text', 'thank_you_text_override', ['class' => 'control-label']); ?>
  <div class="thank-you-text-desc">
    <?= $this->lang->line('thank_you_override_short_desc') ?>
  </div>
  <div class="controls" id="thank_you_text_override_frame">
    <textarea  name="thank_you_text_override" class="input-xlarge"><?= $thank_you_text_override ?></textarea>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        CKEDITOR.on( 'dialogDefinition', function( ev ) {
          if (ev.data.name == 'link') {
            try {
              // Hide some of the link popup's target options for security reasons
              ev.data.definition.dialog.parts.dialog.$.classList.add('hide-custom-target-opts');
            } catch(err) {
              // Still allow browser to render popup if browser doesn't support classList add
            }
          }
        });
        CKEDITOR.config.plugins += ",link";
        CKEDITOR.replace("thank_you_text_override");
      });
    </script>
    <span class="help-inline">
      <?= form_error('thank_you_text_override'); ?>
    </span>
  </div>
</div>
<?php } ?>

<div class="form-group">
  <div class="controls">
    <input class="toggle-target" data-target="#custom_alert_1" type="checkbox" id="custom_alert_active" name='custom_alert_active' value='1'<?=$custom_program_alert->active ? ' checked' : ''; ?>/>
    <label for="custom_alert_active" class="control-label">Enable Alert</label>
    <label class="toggle-target" data-target="#custom_alert_1" for="custom_alert_active"></label>
  </div>
</div>
<div id="custom_alert_1"<?=$custom_program_alert->active ? '' : ' style="display:none"'; ?>>
  <?php
  $field_val = ( empty($_POST['custom_alert_start']) ) ? $custom_program_alert->start : $this->input->post('custom_alert_start');
  echo bootstrap_field_val('text', 'custom_alert_start', 'Alert Start', $field_val, form_error('custom_alert_start'), 'span5 datepicker-pledge-periods');
  $field_val = ( empty($_POST['custom_alert_end']) ) ? $custom_program_alert->end : $this->input->post('custom_alert_end');
  echo bootstrap_field_val('text', 'custom_alert_end', 'Alert End', $field_val, form_error('custom_alert_end'), 'span5 datepicker-pledge-periods');
  ?>
  <div class="form-group">
    <?= form_label('Custom Alert', 'custom_alert_text', ['class' => 'control-label']); ?>
    <div class="controls" id="custom_alert_text_frame">
      <textarea  name="custom_alert_text" class="input-xlarge"><?= $custom_program_alert->text; ?></textarea>
      <script>
        document.addEventListener("DOMContentLoaded", function(event) {
          CKEDITOR.config.plugins += ",link";
          CKEDITOR.replace("custom_alert_text");
        });
      </script>
      <span class="js_help hide error">Please fill out the alert text.</span>
      <span class="help-inline">
        <?= form_error('overview_text_override'); ?>
      </span>
    </div>
  </div>
</div>
<?php
  $sponsor_logo_home_dashboard_selected = $program->display_sponsor_logos_on_home_dashboard ? 'checked="checked"' : null;
  $sponsor_logo_pledge_page_selected    = $program->display_sponsor_logos_on_pledge_page ? 'checked="checked"' : null;
?>

<div class="form-group">
  <label for="sponsor_logos_active" class="control-label">Sponsor Logos</label>
  <div class="controls">
    <input class="toggle-target" data-target="#sponsor_logos_1,#sponsor_logo_options" type="checkbox" id="sponsor_logos_active" name='sponsor_logos_active' value='1'<?=$sponsor_logos_active ? ' checked' : ''; ?>/>
    <label class="toggle-target" data-target="#sponsor_logos_1,#sponsor_logo_options" for="sponsor_logos_active"></label>
  </div>
  <div id="sponsor_logo_options" class="collapse" style="<?= $sponsor_logos_active ? '' : 'display:none'; ?>">
    <p>Select where the logos should appear.</p>
    <div class="form-group" style="margin-left: 20px">
      <div class="controls">
        <input type="checkbox" value="1" name="sponsor_logo_home_dashboard" <?php echo $sponsor_logo_home_dashboard_selected; ?> >
        <label for="sponsor_logo_home_dashboard" class="control-label">Home Dashboard</label>
      </div>
    </div>
    <div class="form-group" style="margin-left: 20px">
      <div class="controls">
        <input type="checkbox" value="1" name="sponsor_logo_pledge_page" <?php echo $sponsor_logo_pledge_page_selected; ?>>
        <label for="sponsor_logo_pledge_page" class="control-label">Sponsor Pledge Page</label>
      </div>
    </div>
  </div>
  <div class="abt-the-prg-desc">
    For optimal quality, we recommend uploading logos with a minimum of 200 pixels by 200 pixels.
  </div>
</div>
<div id="sponsor_logos_1" style="<?= $sponsor_logos_active ? '' : 'display:none'; ?>">
  <?php
  /**
   *
   * Sponsor Logo
   *
   */
    $this->load->view('admin/programs/edit/partials/sponsor_logos');
  ?>
  </div>
<div class="form-actions">
  <?= form_submit(['name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit']); ?>
</div>
<?= form_hidden('pic-target'); ?>
<?= form_close(); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="pic-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h3>Select an Image</h3>
        <div class="form-inline">
          <?= form_input(['name' => 'search', 'class' => 'form-control', 'value' => '']); ?>
          <button id="pic-search" class="btn btn-primary" type="submit">Search</button>
        </div>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <a href="#pic-modal" class="btn btn-default" data-toggle="modal">Close</a>
      </div>
    </div>
  </div>
</div>

 
<div class="modal fade" tabindex="-1" role="dialog" id="delete-pic-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h3>Are you sure you want to delete this?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="delete-pic-confirmed">Yes</button>
        <a href="#delete-pic-modal" class="btn btn-default" data-toggle="modal">No</a>
      </div>
    </div>
  </div>
</div>
