<div class="row">
  <div class="col-md-12">
    <h2 class="center">Prizes > Create Prize</h2>
    <?php if (!empty($success)): ?>
      <h3 class="center">Prize added!</h3>
    <?php endif; ?>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <form action="/admin/prizes/new" id="new_prize_form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="">
            <?= form_error('name'); ?>
          </div>
          <div class="form-group">
            <label for="inventory_code">Inventory Code</label>
            <input class="form-control" type="text" name="inventory_code" value="">
            <?= form_error('inventory_code'); ?>
          </div>
          <div class="form-group">
            <label class="btn btn-default btn-file">Select Photo
              <input type="file" name="picture" style="display:none;">
            </label>
            <?= form_error('picture'); ?>
          </div>
          <div class="form-group">
            <label for="video">Vimeo URL</label>
            <input class="form-control" type="text" name="video" value="">
            <?= form_error('video'); ?>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-info">
        </form>
      </div>
    </div>
  </div>
</div>

