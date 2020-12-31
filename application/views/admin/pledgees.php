<?php
if ($this->session->flashdata('success')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('success')}</div>";
}
?>
<h2>View <?php echo $sponsor->name ?></h2>


<p>
    <a class="btn btn-warning" href="/admin/users/edit/<?php echo $sponsor->id; ?>">
        <i class="glyphicon glyphicon-pencil"></i> Edit
    </a>
</p>
<p><strong> Email:</strong> <?php echo $sponsor->email; ?><strong>&nbsp;&nbsp; Phone: </strong><?php echo $sponsor->phone; ?></p>
<br>
<?php if (!empty($childProfiles)) { ?>
<div class="row">
    <div class="col-md-12">
        <table id="child-pledgee-table" class="table table-striped" >
            <thead>
                <tr>
                    <th class="actions">Action</th>
                    <th>Child</th>
                    <th>Program Name</th>
                    <th>Class</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($childProfiles as $profile) {   ?>
                <tr>
                    <td>
                         <a class="btn btn-primary" href="/admin/users/profile/<?php echo $profile->id; ?>">
                            <i class="glyphicon glyphicon-eye-open"></i> View
                        </a>
                    </td>
                    <td><?php echo $profile->name; ?></td>
                    <td><?php echo $profile->program_name; ?></td>
                    <td><?php echo $profile->classroom_name ?></td>
                    <td><?php echo $profile->grade;  ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php } ?>

<br>
<br>
<?php if (!empty($participantProfiles)) { ?>
<div class="row">
    <div class="col-md-12">
        <table id="participant-pledgee-table" class="table table-striped" >
            <thead>
                <tr>
                    <th class="actions">Action</th>
                    <th>Pledgee</th>
                    <th>Program Name</th>
                    <th>Class</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participantProfiles as $profile) {   ?>
                <tr>
                    <td>
                        <a class="btn btn-primary" href="/admin/users/profile/<?php echo $profile->id; ?>">
                            <i class="glyphicon glyphicon-eye-open"></i> View
                        </a>
                    </td>
                    <td><?php echo $profile->name; ?></td>
                    <td><?php echo $profile->program_name; ?></td>
                    <td><?php echo $profile->classroom_name ?></td>
                    <td><?php echo $profile->grade;  ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php } ?>