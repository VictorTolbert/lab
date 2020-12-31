<div class="row">
  <div class="col-md-12">
    <h2>Prizes</h2>
    <? if (is_sys_admin()): ?>
      <a href="<?= site_url('admin/prizes/new') ?>">Add New Prize</a>
    <? endif; ?>
    <form action="https://danlocal.boosterthon.com/admin/prizes" id="prize_search" class="form-search form-inline m-bot-10" method="post" accept-charset="utf-8">
      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <div class="form-group">
        <input type="text" name="term" value="" placeholder="Search prizes" class="form-control search-query">
      </div>
      <button name="submit" class="btn btn-default" id="submit_search" type="submit">Search</button>
    </form>
    <table id="prizes-table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th class="actions">Actions</th>
          <th>Name</th>
          <th>Inventory Code</th>
          <th>Picture</th>
          <th>Video</th>
        </tr>
      </thead>
      <tbody>
        <? foreach($prizes as $prize): ?>
          <tr>
            <td>
              <a class="btn btn-sm btn-primary" href="<?= site_url('admin/prizes/' .$prize->id); ?>"><i class="glyphicon glyphicon-eye-open"></i> View</a>
              <? if (is_sys_admin()): ?>
                <a class="btn btn-sm btn-warning" id="edit_<?= $prize->id; ?>" data-id="<?= $prize->id; ?>" href="<?= site_url('admin/prizes/edit/' . $prize->id); ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
              <? endif; ?>
            </td>
            <td class="lh-sm">
              <?= $prize->name; ?>
            </td>
            <td class="lh-sm">
              <?= $prize->inventory_code; ?>
            </td>
            <? if (!empty($prize->picture)): ?>
              <td class="lh-sm"><a target="_blank" href="<?= s3_url('prizes/' . $prize->picture); ?>">Prize Image</a></td>
            <? else: ?>
              <td class="lh-sm">No Prize Image</td>
            <? endif; ?>
            <? if (!empty($prize->video)): ?>
              <td class="lh-sm"><a target="_blank" href="<?= vimeo_url($prize->video); ?>">Prize Video</a></td>
            <? else: ?>
              <td class="lh-sm">No Video</td>
            <? endif; ?>
          </tr>
        <? endforeach; ?>
      </tbody>
    </table>
    <?= $pagination; ?>
  </div>
</div>
