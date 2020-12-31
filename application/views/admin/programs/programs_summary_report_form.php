<?
if ($this->session->flashdata('error')) {
  echo "<div class='alert alert-danger'>".$this->session->flashdata('error')."</div>";
}

$success_message = ($success) ? $success.' '.$this->session->flashdata('enqueue_success') : $this->session->flashdata('enqueue_success');
?>

<?php if ($error || $success_message) { ?>
  <div class='alert alert-<?= ($error) ? 'danger' : 'success' ?>'>
    <?=($error) ? $error : $success_message?>
  </div>
<?php } ?>

<div class="row">
  <div class="tab-content">
    <div class="tab-pane active" id="pledge">
      <div class="col-md-12">
        <h3><?= $title ?></h3>
        <hr />
        <div id="programs_summary_form">
          <?= $this->session->flashdata('success'); ?>
          <form action="<?= $form_url; ?>" class="col-md-4" method="post" accept-charset="utf-8">
          <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <?
            if ($semesters) { ?>
              <div class="form-group">
                <select name="semester" class="form-control semester req">
                  <option selected disabled>Semester</option>
                  <? foreach ($semesters as $key => $semester): ?>
                    <option value="<?= $key; ?>"><?= $semester; ?></option>
                  <? endforeach; ?>
                </select>
                <span class="help-inline">
                  <?= form_error('semester'); ?>
                </span>
              </div>
              <?
            } else {
              $default_start_value = $default_start_value ? $default_start_value : null; ?>
              <div class="form-group">
                <label for="ts_start">Time Start</label>
                <input type="text" name="ts_start" value="<?= $default_start_value; ?>" class="datepicker form-control">
              </div>
              <div class="form-group">
                <label for="ts_end">Time End</label>
                <input type="text" name="ts_end" value="" class="datepicker form-control">
              </div>
            <? } ?>
            <input type="submit" name="submit" value="Generate Report" class="btn btn-info">
          </form>
          <div class="float-clear">
            <? $this->load->view('admin/programs/partials/report_link_list'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

