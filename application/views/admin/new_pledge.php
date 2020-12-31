<div class="row">
  <div class="tab-content">
    <div class="tab-pane active" id="pledge">
      <h2 class="text-center">Pledge > New > <?= $user->first_name.' '.$user->last_name?> (user id #<?= $user->id ?>)</h2>
      <div class="col-md-4 col-md-offset-4">
        <div>
          <a href="/admin/programs/students/<?=$program_id?>">Back to Program Student List</a>
        </div>
        <?
        if ($this->session->flashdata('success')) {
          echo '<div class="alert alert-success">';
          echo $this->session->flashdata('success');
          echo '</div>';
        }

        echo $this->session->flashdata('error');
        echo form_open('admin/pledges/new/' . $user->id);
        echo form_hidden('pledge_laps', $user->laps);
        echo form_hidden('default_num_laps', $default_num_laps);
        echo form_hidden('participant_user_id', $user->id);
        echo form_hidden('program_id', $program_id);
        echo form_hidden('group_id', $group);
        echo form_hidden('business_sponsor_type_id', $business_sponsor_type_id);
        $field_val = ( empty($_POST['type']) ) ? '' : $_POST['type'];
        echo '<div class="form-group">';
        echo form_label('Type', 'type', [ 'class' => 'control-label' ]);
        echo form_dropdown('type', $pledge_types['options'], $field_val, 'id="edit_pledge_type"');
        echo form_error('type');
        echo '</div>';
        $field_val = ( empty($_POST['amount']) ) ? '' : $this->input->post('amount');
        echo bootstrap_field_val('text', 'amount', 'Amount', $field_val, form_error('amount'), null, null, null, 'id="edit_pledge_amt"');
        echo '<div id="total_amount_wrapper">';
        $field_val = ( empty($_POST['total_amount']) ) ? '' : $this->input->post('total_amount');
        echo bootstrap_field_val('text', 'total_amount', 'Total Amount', $field_val, form_error('total_amount'), null, null, null, 'readonly="readonly"');
        echo '</div>';
        //Sponsor info
        $field_val = ( empty($_POST['sponsor_type']) ) ? 0 : $_POST['sponsor_type'];
        echo '<div class="form-group ', form_error('sponsor_type') ? 'error' : '', '">';
        echo form_label('Sponsor Type', 'sponsor_type', [ 'class' => 'control-label' ]);
        echo form_dropdown('sponsor_type', $sponsor_types, $field_val);
        echo '<span class="help-inline">',
                  form_error('sponsor_type') ? 'Sponsor type is required' : '',
             '</span>';
        echo '</div>';

        echo "<div id='business-row' class='row " . $business_display_class . "'>";
        echo "<div class='col-sm-12'>";
        echo "<div id='show_business_pledge_fields' class='panel panel-default bottom-10'>";
        echo "<div class='panel-heading text-center'>";
        echo "Business Information";
        echo "</div>";
        echo "<div class='panel-body'>";
        $field_val = ( empty($_POST['business_name']) ) ? '' : $this->input->post('business_name');
        echo bootstrap_field_val('text', 'business_name', 'Business Name<span class="required-identifier text-danger">*</span>', $field_val, form_error('business_name'), 'bottom-10', null, null, 'maxlength="50" placeholder="Business Name" ' . $business_name_required);
         $field_val = ( empty($_POST['business_website']) ) ? '' : $this->input->post('business_website');
        echo bootstrap_field_val('text', 'business_website', 'Business Website', $field_val, form_error('business_website'), 'form-control', null, null, 'maxlength="50" placeholder="Business Website"');
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        $field_val = ( empty($_POST['first_name']) ) ? '' : $this->input->post('first_name');
        echo bootstrap_field_val('text', 'first_name', 'First Name<span class="required-identifier text-danger">*</span>', $field_val, form_error('first_name'), 'form-control', null, null, 'required');
        $field_val = ( empty($_POST['last_name']) ) ? '' : $this->input->post('last_name');
        echo bootstrap_field_val('text', 'last_name', 'Last Name<span class="required-identifier text-danger">*</span>', $field_val, form_error('last_name'), 'form-control', null, null, 'required');
        $field_val = ( empty($_POST['email']) ) ? '' : $this->input->post('email');
        echo bootstrap_field_val('text', 'email', 'Email/Username<span class="required-identifier text-danger">*</span>', $field_val, form_error('email'), 'form-control', null, null, 'required');
        $field_val = ( empty($_POST['phone']) ) ? '' : $this->input->post('phone');
        echo bootstrap_field_val('text', 'phone', 'Phone', $field_val, form_error('phone'));
        $field_val = ( empty($_POST['state']) ) ? '' : $_POST['state'];
        echo '<div class="form-group">';
        echo form_label('State', 'state', [ 'class' => 'control-label' ]);
        echo form_dropdown('state', $states, $field_val);
        echo form_error('state');
        echo '</div>';
        $field_val = ( empty($_POST['country']) ) ? 'US' : $_POST['country'];
        echo '<div class="form-group">';
        echo form_label('country', 'Country', [ 'class' => 'control-label' ]);
        echo form_dropdown('country', $countries, $field_val);
        echo form_error('country');
        echo '</div>';
        echo '<div class="form-actions">';
        echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-success', 'value' => 'Create Pledge' ]);
        echo '</div>';
        echo form_close();
        ?>
      </div>
    </div>
  </div>
</div>
