<!DOCTYPE html>
<html lang="en">

<head>
  <link href="<?=asset_url(auto_version('/bootstrap_3/css/bootstrap.min.css'))?>" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset_url('fontawesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= asset_url('css/admin_styles.css'); ?>">
</head>

<body>
  <div class="container">
    <h1 class="page-header text-center">T-Shirt Sizes</h1>
    <? if ($success_message) { ?>
      <div class="alert alert-success"><?=$success_message?></div>
    <? } ?>
    <? if (validation_errors()) { ?>
      <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
    <? } ?>
    <p class="text-muted text-center">All sizes must be submitted 5 weeks before your Pep Rally on <?=date("M d, Y", strtotime($program->pep_rally));?>.</p>
    <?php if (!$can_edit_sizes) { ?>
      <p class="text-muted text-center">If sizes are not submitted by this date, then we will automatically estimate sizes for you.</p>
    <?php } ?>
    <p class="text-muted text-center"><strong>Homeroom teachers,</strong> please select your class below and submit the shirt sizes for your classroom.</p>
    <p class="text-muted text-center"><strong>Faculty and staff,</strong> please submit your name and shirt size in the Faculty Shirt Size section.</p>
    <div class="panel panel-default">
      <div
        class="panel-heading collapse_target cursor-pointer"
        data-collapsetarget=".panel-body-faculty"
        style="overflow:auto">
        Faculty Shirt Sizes
        <button
          class="pull-right btn-no-style">
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </button>
      </div>
      <div class="panel-body panel-body-faculty" style="<?= (set_value('program_id')) ? '' : 'display: none;' ?>">
        <form class="form-horizontal" method="post" action="#">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          <input type="hidden" name="program_id" value="<?= $program->id ?>">
          <div class="row mb-2">
            <div class="col-xs-6 col-sm-5 mb-2">
                <input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> required class="form-control alpha-only" type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">
            </div>
            <div class="col-xs-6 col-sm-5 mb-2">
                <input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> required class="form-control alpha-only" type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>">
            </div>
            <div class="col-xs-12 col-sm-2 mb-2">
              <select required <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> class="form-control grey-placeholder" name="shirt_size">
                <option value="" disabled selected>Select A Size</option>
                <option <?= set_select('shirt_size', 'adult_s') ?> value="adult_s">Adult S</option>
                <option <?= set_select('shirt_size', 'adult_m') ?> value="adult_m">Adult M</option>
                <option <?= set_select('shirt_size', 'adult_l') ?> value="adult_l">Adult L</option>
                <option <?= set_select('shirt_size', 'adult_xl') ?> value="adult_xl">Adult XL</option>
                <option <?= set_select('shirt_size', 'adult_2xl') ?> value="adult_2xl">Adult 2XL</option>
                <option <?= set_select('shirt_size', 'adult_3xl') ?> value="adult_3xl">Adult 3XL</option>
                <option <?= set_select('shirt_size', 'adult_4xl') ?> value="adult_4xl">Adult 4XL</option>
                <option <?= set_select('shirt_size', 'adult_5xl') ?> value="adult_5xl">Adult 5XL</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3 col-sm-offset-9 col-xs-12">
              <? if ($can_edit_sizes) { ?>
                <input class="btn btn-primary btn-round w-100" type="submit">
              <? } ?>
            </div>
          </div>
        </form>
      </div>
    </div>
    <? foreach ($classroom_sizes as $key => $classroom) { ?>
      <form class="form-horizontal" method="post" action="#">
      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <div class="panel panel-default">
          <div
            class="panel-heading collapse_target cursor-pointer"
            style="overflow:auto"
            data-collapsetarget=".panel-body<?=$key?>">
            <?=$classroom->grade_name?> : <?=$classroom->classroom_name?>
            <? if ($classroom->class_submitted == "Submitted") { ?>
              <? if ($classroom->class_total > 1) { ?>
                <strong class='text-success'><?= $classroom->class_total ?> Shirts Submitted!</strong>
              <? } elseif ($classroom->class_total == 1) { ?>
                <strong class='text-success'><?= $classroom->class_total ?> Shirt Submitted!</strong>
              <? } ?>
            <? } ?>
            <button
              class="pull-right btn-no-style">
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
          </div>
          <div class="panel-body panel-body<?=$key?>" style="display:none;">
            <input type="hidden" name="classroom_sizes[<?=$key?>][classroom_id]" value="<?=$classroom->id?>">
            <div class="row mw-800 center-block">
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="youth_xs_<?=$key?>">Youth XS</label>
                  <input id="youth_xs_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" title="Numbers Only" min="0" type="number" name="classroom_sizes[<?=$key?>][youth_xs]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->youth_xs?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="youth_s_<?=$key?>">Youth S</label>
                  <input id="youth_s_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" title="Numbers Only" min="0" type="number" name="classroom_sizes[<?=$key?>][youth_s]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->youth_s?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="youth_m_<?=$key?>">Youth M</label>
                  <input id="youth_m_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][youth_m]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->youth_m?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 mw-170">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="youth_l_<?=$key?>">Youth L</label>
                  <input id="youth_l_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][youth_l]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->youth_l?>">
                </div>
              </div>
            </div>
            <div class="row mw-800 center-block">
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="adult_s_<?=$key?>">Adult S</label>
                  <input id="adult_s_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][adult_s]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->adult_s?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="adult_m_<?=$key?>">Adult M</label>
                  <input id="adult_m_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][adult_m]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->adult_m?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="adult_l_<?=$key?>">Adult L</label>
                  <input id="adult_l_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][adult_l]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->adult_l?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="adult_xl_<?=$key?>">Adult XL</label>
                  <input id="adult_xl_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][adult_xl]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->adult_xl?>">
                </div>
              </div>
            </div>
            <div class="row mw-800 center-block">
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="adult_2xl_<?=$key?>">Adult 2XL</label>
                  <input id="adult_2xl_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$"  min="0" type="number" name="classroom_sizes[<?=$key?>][adult_2xl]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->adult_2xl?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="adult_3xl_<?=$key?>">Adult 3XL</label>
                  <input id="adult_3xl_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][adult_3xl]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->adult_3xl?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="well text-center box-shadow">
                  <label class="control-label pt-0 mb-2" for="adult_4xl_<?=$key?>">Adult 4XL</label>
                  <input id="adult_4xl_<?=$key?>" <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" min="0" type="number" name="classroom_sizes[<?=$key?>][adult_4xl]" class="mw-65 text-center centered hide-number-spinner form-control addmeup<?=$key?>" value="<?=$classroom->adult_4xl?>">
                </div>
              </div>
            </div>
            <div class="row mw-800 center-block">
              <div class="col-xs-6">
                <p for="adult_4xl_<?=$key?>">Total Shirts: <span data-itemstosum=".addmeup<?=$key?>"></span></p>
              </div>
              <div class="col-xs-6 text-right">
                <div class="row">
                  <div class="col-xs-offset-6 col-xs-6">
                    <? if ($can_edit_sizes) { ?>
                      <button class="btn btn-primary btn-round w-100" type="submit">Submit</button>
                    <? } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    <? } ?>
  </div>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo asset_url(auto_version('bootstrap_3/js/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo asset_url(auto_version('js/site.common.js')); ?>"></script><script>
     var csfrData = {};
     csfrData['<?php echo $csrf['name']; ?>'] = '<?php echo $csrf['hash']; ?>';
   </script>
</body>
