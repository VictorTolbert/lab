    <div class="navbar">
      <div class="navbar-inner">
        <a class="navbar-brand" href="#">Student: My Pledges Content</a>
        <ul class="nav" id="dash-sub-nav">
          <li class="active"><a href="#" data-pg="0">Pledge Goal</a></li>
        </ul>
      </div>
    </div>

        <?php

        $data = [
                      'name'        => 'pledge_goal_head',
                      'id'          => 'pledge_goal_head',
                      'value'       => '',
                      'maxlength'   => '100',
                      'size'        => '50',
                      'style'       => 'width:95%',
                    ];

        echo form_label('Pledge Goal Header', 'pledge_goal_head');
        echo form_input($data);

        $data = [
                      'name'        => 'pledge_goal_text',
                      'id'          => 'pledge_goal_text',
                      'value'       => '',
                      'maxlength'   => '100',
                      'size'        => '50',
                      'style'       => 'width:95%',
                    ];

        echo form_label('Pledge Goal Text', 'pledge_goal_text');
        echo form_textarea($data);

        ?>

        <br />
        <button class="btn btn-primary" type="submit">Update</button>