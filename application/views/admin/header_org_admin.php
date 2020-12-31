<li class="<?php echo ( $active === 'schools' ) ? 'active' : ''; ?>">
  <a class="clear-session" href="<?php echo site_url('admin/schools'); ?>">Schools</a>
</li>
<li class="<?=( $active === 'prizes' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/prizes')?>">Prizes</a>
</li>
<li class="<?=( $active === 'prize_list' ) ? 'active' : ''?>">
  <a class="clear-session" href="<?=site_url('admin/prizelist')?>">Prize List</a>
</li>
