<div class="navbar navbar-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="buton" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-collapse-tk-view" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand"><?php echo $program->event_name; ?></div>
    </div>
    <div class="collapse navbar-collapse nav-collapse-tk-view">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($active_sub_tab === 'dashboard') ? 'active' : ''; ?>">
          <a href="<?php echo site_url('admin/programs/dashboard/' . $program->id); ?>">Dashboard</a>
        </li>
        <?php if (! is_org_admin()): ?>
          <li class="<?php echo ($active_sub_tab === 'todos') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/programs/todos/' . $program->id); ?>">
              To Do<?php
              if ($program_todos_count > 0) {
                  ?>&nbsp;&nbsp;<span class="badge badge-todos"><?php echo $program_todos_count; ?></span><?php
              } ?>
            </a>
          </li>
        <?php endif; ?>
        <li class="<?php echo ($active_sub_tab === 'pledges') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/pledges/' . $program->id); ?>">Pledges</a></li>
        <li class="<?php echo ($active_sub_tab === 'prizes') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/prizes/' . $program->id); ?>">Prizes</a></li>
        <li class="<?php echo ($active_sub_tab === 'students') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/students/' . $program->id); ?>">
          Participants<?php
          if ($student_with_pending_count > 0) {
              ?>&nbsp;&nbsp;<span class="badge badge-todos"><?php echo $student_with_pending_count; ?></span><?php
          } ?></a>
        </li>
        <li class="<?php echo ($active_sub_tab === 'teachers') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/teachers/' . $program->id); ?>">Teachers</a></li>
        <li class="<?php echo ($active_sub_tab === 'sponsors') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/sponsors/' . $program->id); ?>">Sponsors</a></li>
        <li class="<?php echo ($active_sub_tab === 'parents') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/parents/' . $program->id); ?>">Parents</a></li>
        <li class="<?php echo ($active_sub_tab === 'classes') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/classes/' . $program->id); ?>">Classes</a></li>
      <?php if (! is_org_admin_collections()): ?>
        <li class="<?php echo ($active_sub_tab === 'reports') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/reports/' . $program->id); ?>">Reports</a></li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown">Communications</a>
          <ul id="communication" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a target="_blank" tabindex="-1" href="<?php echo site_url('/admin/programs/communication/parent-collection-letter/' . $program->id) ?>">Parent Collection Letter and Email - <em>Follow Up Day</em></a></li>
            <li><a target="_blank" tabindex="-1" href="<?php echo site_url('/admin/programs/communication/collection-reminder/' . $program->id) ?>">Parent Collection Letter and Email - <em>After Collections 1 & 2</em></a></li>
            <li><a target="_blank" tabindex="-1" href="<?php echo site_url('/admin/programs/communication/unpaid-sponsor-follow-up/' . $program->id) ?>">Unpaid Sponsor Payment Request - <em>After Collection #1</em></a></li>
            <li><a target="_blank" tabindex="-1" href="<?php echo site_url('/admin/programs/communication/unpaid-sponsor-follow-up/' . $program->id . '/1') ?>">Unpaid Sponsor Payment Request - <em>After Collection #2</em></a></li>
            <li><a target="_blank" tabindex="-1" href="<?php echo site_url('/admin/programs/communication/sponsor-follow-up/' . $program->id) ?>">Sponsor Thank You Email - After Collection #2</a></li>
          </ul>
        </li>
      <?php endif; ?>
        <li class="<?php echo ($active_sub_tab === 'payments') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/payments/' . $program->id); ?>">Payments</a></li>
        <?php if (show_corporate_matching($program->id)):?>
          <li class="<?php echo ($active_sub_tab === 'corporate_match') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/programs/' . $program->id . '/corporate-matching'); ?>">Corporate Match</a></li>
        <?php endif; ?>
        <li class="<?php echo ($active_sub_tab === 'collections') ? 'active' : ''; ?>"><a href="<?php echo site_url('programs/collect/' . $program->collection_refer_key); ?>">Collections</a></li>
        <?php if (! is_org_admin()):?>
          <li><a href="<?php echo site_url('/admin/schools/edit/' . $program->school_id . '#programs'); ?>">View School</a></li>
          <li><a href="<?php echo site_url('admin/programs/edit/' . $program->id); ?>">Edit</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<?php $this->load->view('admin/programs/partials/prize_report_modals'); ?>
