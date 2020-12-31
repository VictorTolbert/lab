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
          <p><strong>Important! Failure to generate report correctly may result in distributing duplicate store credit or students not receiving store credit.</strong></p>
          <p><strong>Each report you generate will show new store credit purchased within your customized start and end date. Your first report should start when pledging opens and end on the first day of the Giving Market at 8am.</strong></p>
          <p><strong>Each proceeding report should start from the end of the previously generated report without overlap in order to see new store credit purchased.  For example, your 1st report could have ended at Monday 7:59am, so your 2nd report would start at 8:00am Monday and end at 7:59am Tuesday in order to see new store credit purchased during this time to distribute for the Giving Market on Tuesday.</strong></p>
          <?= $this->session->flashdata('success'); ?>
          <form action="<?= $form_url; ?>" class="col-md-4" method="post" accept-charset="utf-8">
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <? $default_start_value = $default_start_value ? $default_start_value : null; ?>
            <div class="form-group">
              <label for="ts_start">Time Start</label>
              <input type="text" name="ts_start" value="<?= $default_start_value; ?>" class="giving-market-datepicker form-control">
            </div>
            <div class="form-group">
              <label for="ts_end">Time End</label>
              <input type="text" name="ts_end" value="" class="giving-market-datepicker form-control">
            </div>
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

