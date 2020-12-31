<li class="<?=( $active === 'programs' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/programs')?>">Programs</a>
</li>
<li class="<?=( $active === 'users' ) ? 'active' : '' ?>">
  <a class="clear-session" href="<?=site_url('admin/users')?>">Users</a>
</li>
<li class="<?=( $active === 'user_groups' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/user_groups')?>">User Groups</a>
</li>
<li class="<?=( $active === 'schools' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/schools')?>">Schools</a>
</li>
<li class="<?=( $active === 'prizes' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/prizes')?>">Prizes</a>
</li>
<li class="<?=( $active === 'prize_list' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/prizelist')?>">Prize List</a>
</li>
<li class="dropdown">
  <a href="#" data-toggle="dropdown">Tasks</a>
  <ul id="admin-reports" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li><a class="clear-session" href="<?=site_url('admin/user_tasks/lists')?>">Task Lists</a></li>
    <li><a class="clear-session" href="<?=site_url('admin/user_tasks/templates')?>">Task Templates</a></li>
  </ul>
</li>
<li class="dropdown">
  <a href="#" data-toggle="dropdown">Admin Reports</a>
  <ul id="admin-reports" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li><a target="_blank" tabindex="-1" href="<?=site_url('/admin/pledges/report/all-programs-all-pledges-csv')?>">All Programs - All Pledges (CSV)</a></li>
    <li><a target="_blank" tabindex="-1" href="<?=site_url('admin/programs/report/programs-summary-csv')?>">Programs Summary (CSV)</a></li>
    <li><a target="_blank" tabindex="-1" href="<?=site_url('admin/programs/report/merchant-deposit-summary-csv')?>">Merchant Deposit Summary (CSV)</a></li>
  </ul>
</li>
<li class="<?=( $active === 'transaction_fix' ) ? 'active' : '' ?>">
  <a class="clear-session" href="<?=site_url('admin/online-transaction-fix')?>">
    Transaction Fixes
  </a>
</li>
<li>
  <a class="clear-session" href="<?=site_url('admin/test-payment-email')?>">
    Test Payment Emails
  </a>
</li>
<li class="<?=( $active === 'admin_stats' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin_stats') ?>">
    System Admin
  </a>
</li>
<li class="<?=( $active === 'schools' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/student_star')?>">Student Star</a>
</li>
<li class="<?=( $active === 'admin_ads' ) ? 'active' : '';?>">
  <a class="clear-session" href="<?=site_url('admin_ads')?>">
    Ads
  </a>
</li>
<li class="<?=( $active === 'system_alert' ) ? 'active' : '';?>">
  <a class="clear-session" href="<?=site_url('admin/system_alert')?>">
    System Alert
  </a>
</li>
