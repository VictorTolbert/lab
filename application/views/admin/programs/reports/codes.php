<?php
if($codes_html):?>
<h3>Codes</h3>
  <?php
endif;?>
<div class="row">
    <div class="col-md-12" id="report-container">
        <?php  if (!empty($classes)) {  ?>
            <table class="table table-striped table-bordered report-compact codes-pdf" >
                <thead>
                    <tr class="report-header">
                        <th>Class Name</th>
                        <th>Grade</th>
                        <th>Student Code</th>
                        <th>Teacher Code</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($classes as $class) {
                    $class->team_member_code = !empty($class->team_member_code) ? substr($class->team_member_code, 0, 4) . '-' . substr($class->team_member_code, 4, 8) : null;
                  ?>
                    <tr>
                        <td class="class-name"><?=$class->name?></td>
                        <td class="grade-name"><?=$class->grade_name?></td>
                        <td class="registration-code"><?=$class->registration_code?></td>
                        <td class="registration-code"><?=$class->team_leader_code?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php  } else {   ?>
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <td>Sorry, there are no classes for this program.</td>
                    </tr>
                </tbody>
            </table>
        <?php  } ?>
    </div>
</div>
