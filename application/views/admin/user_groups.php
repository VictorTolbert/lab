          <div class="row">
            <div class="col-md-12">


                  <?php

                    $heading = ( empty($user_type) ) ? "<h2>User Groups</h2>" : "<h2>Users Groups > {$user_type}</h2>";
                    echo $heading;

                  ?>


                    <div class="row">

                      <div class="col-md-2">
                        <?php
                            echo form_open('', [ 'class' => '' ]);
                            echo form_dropdown('user_group_type', $user_groups_type_select, 0, 'id="user_group_type"');
                            echo form_close();
                        ?>
                      </div>
                    </div>


            <div class="col-md-6">

              <?php

              if (isset($message) && ! empty($message)) {
                echo "<div class='alert alert-success'>{$message}</div>";
              } elseif (isset($error_message) && ! empty($error_message)) {
                echo "<div class='alert alert-danger'>{$error_message}</div>";
              }

              ?>
             <br>
              <table id="user-groups-table" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th class="actions">Actions</th><th>Name</th><th>Description</th><th>Type</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach($user_groups as $u): ?>
                      <tr>
                        <td>
                          <a class="btn btn-warning btn-sm" id="edit_<?php echo $u->id; ?>" data-action="edit_usergroup" data-userGroupId="<?php echo $u->id; ?>" href="<?php echo site_url('admin/user_groups/edit/' . $u->id); ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                          <a class="btn btn-danger btn-sm" data-action="delete-entity" href="<?php echo site_url("user_groups/delete/{$u->id}"); ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        </td>
                        <td>
                          <a href="<?php echo site_url('/admin/user_groups/edit/' . $u->id); ?>"><?php echo "{$u->name}"; ?></a>
                        </td>
                        <td><?php echo $u->description; ?></td>
                        <td><?php echo $u->type; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
              </table>

              <?php  echo $pagination; ?>

            </div><!--/span6-->

            <div class="col-md-4">
             <!-- <h2 id="form_title">Create New User</h2> -->
            </div>

            <?php echo form_open('admin/user_group/quick_create', [ 'id' => 'quick_create' ]); ?>

            <div class="col-md-5"><!-- Add/edit user form -->
                <legend>Quick-Create New Group</legend>
                <?php

                  echo form_label('Name', 'name');
                  echo form_input([ 'name' => 'name', 'class' => 'form-control m-bot-10' ]);
                  echo form_label('Description', 'description');
                  echo form_input([ 'name' => 'description', 'class' => 'form-control m-bot-10' ]);
                  echo form_label('Type', 'type');
                  echo form_dropdown('type', $group_types);

                  echo '<div class="form-actions">';
                  echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
                  echo '</div>';

                ?>

            </div>

            <?php echo form_close(); ?>

          </div><!-- span12 -->

          </div><!-- /row -->

