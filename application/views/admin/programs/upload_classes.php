<div class="container">
    <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
        <?php
        $displayError = !empty($error_message) ? true : false;
        ?>
        <?php if ($displayError) { ?>
        <div>You must have at least one group in order to import classes.</div>
        <?php } ?>


        <?php if (!$displayError) { ?>
        <form id ="addClassForm" action="/programs/preview_class_import/<?=$program_id;?>" method="post" accept-charset="utf-8" class="" enctype="multipart/form-data">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <div class="form-group">
        <div class="controls"><h3>Upload Class List</h3></div>
        <label for="group_id" class="control-label">Group</label>
        <div class="controls">
            <select name="group_id" id='group_id' class="form-control">
                <?php foreach ($groups_dropdown as $key => $value) { ?>
                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                <?php } ?>
            </select>
            <input id = 'filePath' type ="hidden" name ="full_path" value="" />
            <input id = 'programId' type ="hidden" name ="program_id" value="<?php echo $program_id; ?>" />
        </div>
        </div>

        <div class="form-group">

            <label for="pledge-meter" class="control-label">Pledge O'Meter Goal <span class="help-block help-block-upload-classes-pledge-meter" id="pledge-meter-help">*per lap</span></label>
            <div class="controls">
               <span class="input-group">
                  <span class="input-group-addon">$</span>
                  <input class="form-control numeric" id="pledge_meter" name="pledge_meter" type="text" value="0.00" placeholder="Pledge O'Meter Goal">
              </span>

            </div>
        </div>


        <div class="form-group">
            <label for="userfile" class="control-label">Class List</label>

            <div id = "myDropzone" class="controls drop-area">
                <div class="dz-message dz-default"><b>Drop File</b> or <b>Click Here</b><br><i>to upload</i> </div>
                <div class="fallback">
                    <input name="file" type="file" class="form-control" multiple />
                </div>
            </div>
            <div class='alert alert-success alert-file' style='display:none; color:green;' >The file was added successfully</div>
            <div class='alert alert-success alert-form' style='display:none; color:green;' >The classes were added successfully</div>
            <div class='alert alert-danger alert-file' style='display:none; color:red' >There was an error adding the file</div>
            <div class='alert alert-danger alert-form' style='display:none; color:red' >There was an error adding the classes</div>
            <div class='alert alert-danger alert-group' style='display:none; color:red' >The group id is required</div>
            <div class='alert alert-danger alert-pledge' style='display:none; color:red' >The pledge must be numeric</div>
            <div class='alert alert-success progress' style='display:none; color:green; width:0px'></div>
        </div><!-- /control-group -->

        <div class="form-actions">
        <input type="submit" name="submit" value="Submit" class="btn btn-info add-class  "  >
        <span class='loading' style = 'display:none'>Loading...</span>
        </div>
        </form>
        <?php } ?>
    </div>
</div>
