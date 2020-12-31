<div class="navbar navbar-danger">
  <div class="container-fluid">
    <div class="navbar-header">
      <button role="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-collapse-edit" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand"><?php echo $program->event_name; ?></div>
    </div>
    <div class="collapse navbar-collapse nav-collapse-edit">
      <ul class="nav navbar-nav" id="program-edit-tabs">
        <li <?= ($active == 'programs') ? 'class="active"' : ''; ?>>
          <a href="/admin/programs/edit/<?php echo $program->id; ?>#program" data-toggle="tab">Program</a>
        </li>
        <?php if(is_admin()): ?>
          <li><a id="tab-groups" href="/admin/programs/edit/<?php echo $program->id; ?>#groups" data-toggle="tab">Groups</a></li>
          <li><a id="tab-prizes" href="/admin/programs/edit/<?php echo $program->id; ?>#prizes" data-toggle="tab">Manage Prizes</a></li>
          <li><a id="tab-pledge-periods" href="/admin/programs/edit/<?php echo $program->id; ?>#pledge-periods" data-toggle="tab">Pledge Periods</a></li>
          <li><a id="tab-merchant" href="/admin/programs/edit/<?php echo $program->id; ?>#merchant" data-toggle="tab">Merchant</a></li>
          <li><a id="tab-content" href="/admin/programs/edit/<?php echo $program->id; ?>#content" data-toggle="tab">Content</a></li>
          <li><a id="tab-pledge-settings" href="/admin/programs/edit/<?php echo $program->id; ?>#pledge-settings" data-toggle="tab">Pledge Settings</a></li>
          <li><a href="/admin/programs/dashboard/<?php echo $program->id; ?>">View</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
