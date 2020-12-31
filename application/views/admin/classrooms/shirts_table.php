<!DOCTYPE html>
<html lang="en">

<head>
<link href="<?=asset_url(auto_version('/bootstrap_3/css/bootstrap.min.css'))?>" rel="stylesheet">
</head>

<body>
  <div class="col-xs-12">
    <h1 class="page-header text-center">T-Shirt Sizes</h1>
    <p class="text-muted text-center">This page can only be edited approximately 1 or more weeks before the Pep Rally date</p>

    <form method="post" action="#">
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <? if ($can_edit_sizes) { ?>
        <br />
        <button class="btn btn-success btn-block btn-lg" type="submit">Save</button>
        <br />
      <? } ?>

      <table class="table table-hover">
        <tr>
          <th>Grade</th>
          <th>Classroom</th>
          <th>Youth S</th>
          <th>Youth M</th>
          <th>Youth L</th>
          <th>Adult S</th>
          <th>Adult M</th>
          <th>Adult L</th>
          <th>Adult XL</th>
          <th>Adult 2XL</th>
          <th>Adult 3XL</th>
          <th>Adult 4XL</th>
        </tr>
        <? foreach ($classroom_sizes as $key => $classroom) { ?>
          <input type="hidden" name="classroom_sizes[<?=$key?>][classroom_id]" value="<?=$classroom->id?>">
          <tr>
            <td><?=$classroom->grade_name?></td>
            <td><?=$classroom->classroom_name?></td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" pattern="^[0-9]{1,5}$" title="Numbers Only" placeholder="Youth S" type="text" name="classroom_sizes[<?=$key?>][youth_s]" class="form-control" value="<?=$classroom->youth_s?>"></td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Youth M" type="text" name="classroom_sizes[<?=$key?>][youth_m]" class="form-control" value="<?=$classroom->youth_m?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Youth L" type="text" name="classroom_sizes[<?=$key?>][youth_l]" class="form-control" value="<?=$classroom->youth_l?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Adult S" type="text" name="classroom_sizes[<?=$key?>][adult_s]" class="form-control" value="<?=$classroom->adult_s?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1,5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Adult M" type="text" name="classroom_sizes[<?=$key?>][adult_m]" class="form-control" value="<?=$classroom->adult_m?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Adult L" type="text" name="classroom_sizes[<?=$key?>][adult_l]" class="form-control" value="<?=$classroom->adult_l?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Adult XL" type="text" name="classroom_sizes[<?=$key?>][adult_xl]" class="form-control" value="<?=$classroom->adult_xl?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Adult 2XL" type="text" name="classroom_sizes[<?=$key?>][adult_2xl]" class="form-control" value="<?=$classroom->adult_2xl?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Adult 3XL" type="text" name="classroom_sizes[<?=$key?>][adult_3xl]" class="form-control" value="<?=$classroom->adult_3xl?>"</td>
            <td><input <?=$can_edit_sizes ? '' : 'disabled="disabled"';?> pattern="^[0-9]{1-5}$" oninvalid="setCustomValidity('sizes should only contain numbers');" oninput="setCustomValidity('');" placeholder="Adult 4XL" type="text" name="classroom_sizes[<?=$key?>][adult_4xl]" class="form-control" value="<?=$classroom->adult_4xl?>"</td>
          </tr>
        <? } ?>
      </table>

      <? if ($can_edit_sizes) { ?>
        <br />
        <button class="btn btn-success btn-block btn-lg" type="submit">Save</button>
        <br />
      <? } ?>
    </form>
  </div>
  <script>
    // document.querySelector("input").addEventListener("keypress", function (evt) {
    //   if (evt.which < 48 || evt.which > 57) {
    //     evt.preventDefault();
    //   }
    // });
  </script>
  <script>
     var csfrData = {};
     csfrData['<?php echo $csrf['name']; ?>'] = '<?php echo $csrf['hash']; ?>';
   </script>
</body>
