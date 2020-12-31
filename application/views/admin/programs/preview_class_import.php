<?php
    $classHeader = is_array($importData) ? array_shift($importData) : [];
    $programId   = !empty($_POST['program_id']) ? $_POST['program_id'] : null;
    $groupId     = !empty($_POST['group_id']) ? $_POST['group_id'] : null;
    $filePath    = !empty($_POST['full_path']) ? $_POST['full_path'] : null;
    $pledgeMeter = !empty($_POST['pledge_meter']) ? $_POST['pledge_meter'] : null;
?>
<?php if (!empty($importData)) { ?>
<form id ="confirmClasses" action='/programs/process_class_file/<?=$programId;?>' method='post'>
  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    <div class="row">
        <div class="col-md-9">
            <h2>Populate Classes > Verify Data</h2>
            <div class='alert alert-success alert-class-success' style='display:none; color:green;' >The classes were added successfully</div>
            <div class='alert alert-danger alert-class-error' style='display:none; color:red' >There was an error adding the classes</div>
            <div class='alert alert-danger alert-class-required-fields' style='display:none; color:red' >There Class Name and Grade are required fields</div>
            <div class='alert alert-danger  alert-class-duplicate' style='display:none; color:red;overflow: hidden' >
                Duplicate classes found. Please delete or rename these class names: <span class="class-duplicate"></span>
            </div>
            <div class='alert alert-danger  alert-class-exists' style='display:none; color:red;overflow: hidden' >
                Classes already exist. Please delete or rename these class names: <span class="class-exists"></span>
            </div>
            <div class='alert alert-danger  alert-class-name-column-error' style='display:none; color:red;overflow: hidden' >
                Sorry. Please choose only one column to import as the class name.
            </div>

            <input type='hidden' name='program_id' value='<?php echo $programId;?>' >
            <input type='hidden' name='group_id' value='<?php echo $groupId;?>' >
            <input type='hidden' name='full_path' value='<?php echo $filePath;?>' >
            <input type='hidden' name='pledge_meter' value='<?php echo $pledgeMeter;?>' >
            <table class="table table-condensed table-hover">
            <thead>
                <tr class='row'>
                    <th><h4><?=!empty($classHeader[0]) ? $classHeader[0] : null;?></h4>
                        <select name='column1'>
                            <option data-name = 'true' value ='name' selected>Class Name (Last Name) </option>
                            <option data-name = 'true' value ='name-last-first' selected>Class Name (Last, First) </option>
                            <option data-name = 'true' value ='name-full' selected>Class Name (Full Name) </option>
                            <option value ='grade'>Grade</option>
                            <option value ='number_of_participants'># of students</option>
                            <option value =''>--skip--</option>
                        </select>
                    </th>
                    <th><h4><?=!empty($classHeader[1]) ? $classHeader[1] : null;?></h4>
                        <select name='column2'>
                            <option data-name = 'true' value ='name' selected>Class Name (Last Name) </option>
                            <option data-name = 'true' value ='name-last-first' selected>Class Name (Last, First) </option>
                            <option data-name = 'true' value ='name-full' selected>Class Name (Full Name) </option>
                            <option value ='grade' selected>Grade</option>
                            <option value ='number_of_participants'># of students</option>
                            <option value =''>--skip--</option>
                        </select>
                    </th>
                    <th><h4><?=!empty($classHeader[2]) ? $classHeader[2] : null;?></h4>
                        <select name='column3'>
                            <option data-name = 'true' value ='name' selected>Class Name (Last Name) </option>
                            <option data-name = 'true' value ='name-last-first' selected>Class Name (Last, First) </option>
                            <option data-name = 'true' value ='name-full' selected>Class Name (Full Name) </option>
                            <option value ='grade'>Grade</option>
                            <option value ='number_of_participants' selected># of students</option>
                            <option value =''>--skip--</option>
                        </select>
                    </th>
                </tr>
            </thead>
            <?php foreach ($importData as $class) { ?>
            <tr class = 'row items'>
                <td class='name'><?=!empty($class[0]) ? $class[0] : null;?></td>
                <td class='grade'><?=!empty($class[1]) ? $class[1] : null;?></td>
                <td class='participants'><?=!empty($class[2]) ? $class[2] : null;?></td>
            </tr>
            <?php } ?>
            </table>
        </div>
    </div>
    <div class='form-group'>
        <div class="form-actions">
            <input type="submit" name="submit" value="Complete Import" class="btn btn-primary btn-info process-classes" >
            <span class='loading-process-classes' style = 'display:none'>Loading...</span>
        </div>
    </div>
</form>

<?php } else { ?>
 <div class="row">
    <div class="col-md-9">
        <div class='alert alert-danger alert-class-error' style='color:red' >Either the file was not selected or no data was found!</div>
    </div>
 </div>
<?php } ?>
