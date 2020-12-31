    <div class="navbar">
      <div class="navbar-inner">
        <a class="navbar-brand" href="#">Student: Dashboard Content</a>
        <ul class="nav" id="dash-sub-nav">
          <li class="active"><a href="#" data-pg="0">Welcome</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#" data-pg="1">Character Videos</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#" data-pg="2">Your School</a></li>
          <li class="divider-vertical"></li>
        </ul>
      </div>
    </div>

    <div id="sub-nav-carousel" class="carousel slide" data-interval="6000">
      <!-- Carousel items -->
      <div class="carousel-inner">

        <div class="active item">

            <?php

            $data = [
                          'name'        => 'header',
                          'id'          => 'header',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Dashboard Text Header', 'header');
            echo form_input($data);


            $data = [
                          'name'        => 'list',
                          'id'          => 'list',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Insert List', 'list');
            echo form_textarea($data);

            ?>
            <br />
            <button class="btn btn-primary" type="submit">Update</button>

        </div><!-- End Slide -->

        <div class="item">

            <?php  //split this into a sub nav section later

            $data = [
                          'name'        => 'char_countdown',
                          'id'          => 'char_countdown',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Character Countdown Header', 'char_countdown');
            echo form_input($data);


            $data = [
                          'name'        => 'countdown_text',
                          'id'          => 'countdown_text',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Character Countdown Text', 'countdown_text');
            echo form_textarea($data);

            //videos for character countdown

            $data = [
                          'name'        => 'video_1',
                          'id'          => 'video_1',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Video 2', 'video_2');
            echo form_input($data);

            $data = [
                          'name'        => 'video_2',
                          'id'          => 'video_2',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Video 2', 'video_2');
            echo form_input($data);

            $data = [
                          'name'        => 'video_3',
                          'id'          => 'video_3',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Video 3', 'video_3');
            echo form_input($data);

            $data = [
                          'name'        => 'video_4',
                          'id'          => 'video_4',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Video 4', 'video_4');
            echo form_input($data);

            $data = [
                          'name'        => 'video_5',
                          'id'          => 'video_5',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Video 5', 'video_5');
            echo form_input($data);

            //text option below videos

            $data = [
                          'name'        => 'choose_leadership',
                          'id'          => 'choose_leadership',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Choose Leadership Header', 'choose_leadership');
            echo form_input($data);


            $data = [
                          'name'        => 'choose_leadership_text',
                          'id'          => 'choose_leadership_text',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Choose Leadership Text', 'choose_leadership_text');
            echo form_textarea($data);

            ?>

            <br />
            <button class="btn btn-primary" type="submit">Update</button>

        </div><!-- end slide -->


        <div class="item">
            <?php //move to sub nav

            $data = [
                          'name'        => 'images[]',
                          'id'          => 'images[]',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Images ( multi-upload )', 'images[]');
            echo form_upload($data);

            ?>
            <p>Pull images uploaded to this section from database for delete/update options.</p>
            <br />
            <button class="btn btn-primary" type="submit">Update</button>
        </div> <!-- end slide -->