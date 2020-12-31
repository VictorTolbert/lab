   <div class="row">
            <div class="col-md-12">

             <h2>Users > Create New User</h2>


<?php

    echo $success;

    echo form_open_multipart('admin/user/create', [ 'class' => 'form-horizontal' ]);

    echo bootstrap_field('text', 'first_name', 'First Name', form_error('first_name'));
    echo bootstrap_field('text', 'last_name', 'Last Name', form_error('last_name'));
    echo bootstrap_field('text', 'email', 'Email', form_error('email'));
    echo bootstrap_field('text', 'dob', 'Date of Birth', form_error('dob'));

    echo '<div class="form-group">';
    echo form_label('User Groups', 'user_type[]', [ 'class' => 'control-label' ]);
    echo '<div class="controls">';
    echo form_multiselect('user_type[]', $user_groups, $this->input->post('user_type'));
    echo form_error('user_type');
    echo '</div></div>';

    echo bootstrap_field('text', 'address', 'Street Address', form_error('address'));
    echo bootstrap_field('text', 'city', 'City', form_error('city'));
    echo bootstrap_field('text', 'state', 'State', form_error('state'));
    echo bootstrap_field('text', 'zip', 'Zip/postal code', form_error('zip'));
    echo bootstrap_field('text', 'country', 'Country', form_error('country'));
    echo bootstrap_field('text', 'phone', 'Phone', form_error('phone'));

    echo '<div class="form-actions">';
    echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
    echo '</div>';

    echo form_close();

    ?>

</div>
