 <div class="row">
    <div class="col-md-8">
    <?php echo $this->session->flashdata('success'); ?>

      <h2>Notes for <a href="/admin/users/profile/<?php echo $profile['user_id']?>"><?php echo $profile['last_name'] . ', ' .  $profile['first_name']; ?></a></h2>
      <a href="/admin/programs/students/<?php echo $profile['program_id']; ?>/4">Back to Pending Students</a>

          <table id="notes-table" class="table table-striped table-bordered">
        <thead>
                     <tr>
                          <th>Note</th><th>Created</th><th>Last Updated</th><th>Actions</th>
                      </tr>
          </thead>
        <tbody></tbody>
        <tfoot>
                     <tr>
                          <th>Note</th><th>Created</th><th>Last Updated</th><th>Actions</th>
                      </tr>
          </tfoot>
        </table>

        <br/><br/>


            <?php echo form_open('admin/users/add_note/' . $profile['user_id'], [ 'id' => 'add_note' ]); ?>


                <legend>Add Note</legend>
                <?php

                  echo form_label('Note:', 'note');
                  echo form_textarea([ 'name' => 'note' , 'class' => 'span12']);
                  echo '<div class="form-actions">';
                  echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
                  echo '</div>';

                ?>



            <?php echo form_close(); ?>

</div><!-- /row -->

