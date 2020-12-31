<html>
  <body>
    <div>
      <?php
      $body = str_replace('$[EDIT_DELETE_PLEDGE_LINK]', '<a href="' . site_url('/auth/login/'.$parent_fr_code) . '">Edit or Delete a Pledge</a>', $body);
      echo $body;
      ?>
    </div>
  </body>
</html>
