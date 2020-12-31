<div class="navbar navbar-success">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="buton" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-collapse-green" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand"><?php echo $school->name; ?></div>
    </div>
    <div class="navbar-collapse collapse nav-collapse-green">
      <ul class="nav navbar-nav" id="program-edit-tabs">
        <li><a id="tab-programs" href="/admin/school/edit/<?php echo $school->id; ?>#programs" data-toggle="tab">Programs</a></li>
        <?php if((is_sys_admin() || is_org_admin() || is_admin()) && !is_org_admin_collections()):?>
          <li><a id="tab-merchant" href="/admin/school/edit/<?php echo $school->id; ?>#merchant" data-toggle="tab">Merchant Account</a></li>
        <?php endif; ?>
        <?php if (!is_org_admin_collections()):?>
          <li>
            <a id="tab-org-admin" href="/admin/school/edit/<?php echo $school->id; ?>#org-admin" data-toggle="tab">Locker Administrators</a>
          </li>
          <li <?= ($active == 'schools') ? 'class="active"' : ''; ?>>
            <a href="/admin/schools/edit/<?php echo $school->id; ?>#school" data-toggle="tab" id="tab-school">School Info</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
