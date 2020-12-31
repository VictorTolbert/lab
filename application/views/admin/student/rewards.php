    <div class="navbar">
      <div class="navbar-inner">
        <a class="navbar-brand" href="#">Student: Rewards Content</a>
        <ul class="nav" id="dash-sub-nav">
          <li class="active"><a href="#" data-pg="0">Reward Tracker</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#" data-pg="1">Activity Rewards</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#" data-pg="2">Weekend Challenge</a></li>
          <li class="divider-vertical"></li>
        </ul>
      </div>
    </div>

    <div id="sub-nav-carousel" class="carousel slide" data-interval="6000">
      <!-- Carousel items -->
      <div class="carousel-inner">

        <div class="active item">

            <?php //move to sub nav

            $data = [
                          'name'        => 'reward',
                          'id'          => 'reward',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Reward Image', 'reward');
            echo form_upload($data);

            ?>
            <p>Pull image uploaded to this section from database for delete/update options.</p>
            <br />
            <button class="btn btn-primary" type="submit">Update</button>

        </div> <!-- End Slide -->

        <div class="item">

            <?php //move to sub nav PHONE SCRIPT

            $data = [
                          'name'        => 'ph_script_head',
                          'id'          => 'ph_script_head',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Phone Script Header', 'ph_script_head');
            echo form_input($data);


            $data = [
                          'name'        => 'ph_script_text',
                          'id'          => 'ph_script_text',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Phone Script (wysiwyg *need to choose editor*)', 'ph_script_text');
            echo form_textarea($data);

            ?>

            <br />
            <button class="btn btn-primary" type="submit">Update</button>

        </div> <!-- End Slide -->

        <div class="item">

            <?php //move to sub nav WEEKEND CHALLENGE

            $data = [
                          'name'        => 'white_board_image[]',
                          'id'          => 'white_board_image[]',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('White Board Images ( will there ever be more than 3 images? )', 'white_board_image[]');
            echo form_upload($data);

            ?>
            <p>Pull images uploaded to this section from database for delete/update options.</p>

            <?php

            $data = [
                          'name'        => 'wknd_challenge_head',
                          'id'          => 'wknd_challenge_head',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Weekend Challenge Header', 'wknd_challenge_head');
            echo form_input($data);

            $data = [
                          'name'        => 'wknd_challenge_text',
                          'id'          => 'wknd_challenge_text',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Weekend Challenge Text', 'wknd_challenge_text');
            echo form_textarea($data);

            ?>

            <br />
            <button class="btn btn-primary" type="submit">Update</button>
        </div> <!-- End Slide -->