   <div class="row">
        <div class="col-md-12">
         <h2>User Groups > Edit User Group > <?php echo $user_group->description ?></h2>
         <div class="container col-md-4">
            <?php

            echo $this->session->flashdata('success');

            echo form_open('user_groups/edit/' . $user_group->id, [ 'class' => 'form-group' ]);

            $field_val = ( empty($_POST['name']) ) ? $user_group->name : $this->input->post('name');
            echo bootstrap_field_val('text', 'name', 'Name', $field_val, form_error('name'));
            $field_val = ( empty($_POST['description']) ) ? $user_group->description : $this->input->post('description');
            echo bootstrap_field_val('text', 'description', 'Description', $field_val, form_error('description'));

            $field_val = ( empty($_POST['type']) ) ? $user_group->type : $this->input->post('type');
            echo '<div class="form-group">';
            echo form_label('Type', 'type', [ 'class' => 'control-label' ]);
            echo '<div class="controls">';
            echo form_dropdown('type', $group_types, $field_val);
            echo '</div></div>';

            echo '<div class="form-actions">';
            echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
            echo '</div>';

            echo form_close();

            ?>
        </div>
</div>