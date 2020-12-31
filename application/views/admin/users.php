<div class="row">
  <div class="col-md-12">
    <h2>Users</h2>
    <a id="sync-users" href="#" class="btn btn-default disable-onclick">
      <i class="glyphicon glyphicon-download"></i> sync with salesforce
    </a>
    <?php
    if (isset($message) && !empty($message)) {
      echo "<div class='alert alert-success'>{$message}</div>";
    } elseif (isset($error_message) && !empty($error_message)) {
      echo "<div class='alert alert-danger'>{$error_message}</div>";
    }
    ?>
    <div id="users-table-search">
      <div class="form-inline m-bot-10">
        <div class="form-group">
          <select id="user-search-column" name="user_search_column" class="form-control">
            <option value="0">-Search By-</option>
            <option value="1">First Name</option>
            <option value="2">Last Name</option>
            <option value="3">Email</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" id="user-search-field" class="form-control"></input>
        </div>
        <div class="form-group">
          <button id="user-search" class="btn btn-success">Search</button>
        </div>
      </div>
    </div>
    <table id="users-table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th notSearchable="true" class="actions">Actions</th><th>First Name</th><th>Last Name</th><th>Email</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div><!--/span6-->
  <?php echo form_open('admin/user/quick_create', ['id' => 'quick_create']); ?>
  <div class="col-md-4 col-md-offset-4"><!-- Add/edit user form -->
    <legend>Quick-Create New User</legend>
    <div class="form-group">
      <?php
      echo form_label('First Name', 'first_name');
      echo form_input(['name' => 'first_name']);
      ?>
    </div>
    <div class="form-group">
      <?php
      echo form_label('Last Name', 'last_name');
      echo form_input(['name' => 'last_name']);
      ?>
    </div>
    <div class="form-group">
      <?php
      echo form_label('Email', 'email');
      echo form_input(['name' => 'email']);
      ?>
    </div>
    <?php
    echo form_submit(['name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit']);
    ?>
  </div>
  <?php echo form_close(); ?>
</div><!-- /row -->
<div id="sync-status-modal" class="modal fade col-md-6 col-md-offset-3" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content center">
    <div class="modal-header">
      <h3 id="myModalLabel">Synchronizing with Salesforce</h3>
    </div>
    <div class="modal-body">
      <img src="<?php echo asset_url('img/loading.gif') ?>"/>
    </div>
  </div>
</div>
<div id="sync-status" class="modal fade col-md-6 col-md-offset-3" tabindex="-1">
  <div class="modal-content">
    <div class="modal-header center">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Sync Complete!</h3>
    </div>
    <div class="modal-body">Users and Teams successfully synchronized.</div>
    <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
  </div>
</div>
