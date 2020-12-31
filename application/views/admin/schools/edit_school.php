<div class="row">
  <div class="tab-content">
    <div class="tab-pane active" id="school">
      <div class="col-md-12">
        <?php $this->load->view('admin/schools/partials/school'); ?>
      </div>
    </div>
    <div class="tab-pane" id="merchant">
      <div class="col-md-12">
        <?php $this->load->view('admin/schools/partials/merchant'); ?>
      </div>
    </div>
    <div class="tab-pane" id="org-admin">
      <div class="col-md-12">
        <?php $this->load->view('admin/schools/partials/organization_administrators'); ?>
      </div>
    </div>
    <div class="tab-pane" id="programs">
      <div class="col-md-12">
        <?php $this->load->view('admin/schools/partials/programs'); ?>
      </div>
    </div>
  </div>
</div>
