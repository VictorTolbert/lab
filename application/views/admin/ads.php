<h1 class="col-md-12 center">Admin Ads</h1>
<?php foreach ($ads as $ad) { ?>
  <form class="col-md-12" method="post" action="/admin_ads/update_ad">
  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    <input type="hidden" name="id" value="<?= $ad->id; ?>"/>
    <div>
      <h2>Sponsor - <?=$ad->name?></h2>
      <h3>locations</h3>
      <ul>
        <?php foreach ($ad->locations as $location) { ?>
          <li><?= $location; ?></li>
        <?php } ?>
      </ul>
    </div>
    <div>
      <h3>ad text</h3>
      <textarea class="col-md-12 col-sm-12 col-xs-12 h-200 m-bot-10" name="ad_text" maxlength="2000"><?= $ad->ad_text; ?></textarea>
    </div>
    <div class="center">
      <input type="submit" value="Save" class="btn btn-md btn-default m-bot-10"/>
    </div>
  </form>
<?php } ?>
