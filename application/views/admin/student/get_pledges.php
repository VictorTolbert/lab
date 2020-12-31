    <div class="navbar">
      <div class="navbar-inner">
        <a class="navbar-brand" href="#">Student: Get Pledges Content</a>
        <ul class="nav" id="dash-sub-nav">
          <li class="active"><a href="#" data-pg="0">How To Get Pledges</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#" data-pg="1">Action Prompter</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#" data-pg="2">Share This</a></li>
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
                          'name'        => 'video',
                          'id'          => 'video',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('How to get pledges video', 'video');
            echo form_upload($data);

            ?>
            <p>Pull video uploaded to this section from database for delete/update options.</p>
            <br />
            <button class="btn btn-primary" type="submit">Update</button>

        </div> <!-- End Slide -->

        <div class="item">

            <?php //move to sub nav

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

        </div><!-- End Slide -->

        <div class="item">

            <?php //move to sub nav SHARE THIS

            $data = [
                          'name'        => 'share_head',
                          'id'          => 'share_head',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Share Header', 'share_head');
            echo form_input($data);


            $data = [
                          'name'        => 'share_head_text',
                          'id'          => 'share_head_text',
                          'value'       => '',
                          'maxlength'   => '100',
                          'size'        => '50',
                          'style'       => 'width:95%',
                        ];

            echo form_label('Share Text', 'share_text');
            echo form_textarea($data);

            ?>

            <br />
            <button class="btn btn-primary" type="submit">Update</button>
        </div> <!-- End Slide -->