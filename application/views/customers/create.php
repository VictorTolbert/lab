<!DOCTYPE html>
<html lang = "en">

   <head>
      <meta charset = "utf-8">
      <title>Create Customer</title>
   </head>

   <body>
      <form method="" action="">
         <?php
            echo form_open('customers/store');
            echo form_label('ID.');
            echo form_input(array('id' => 'id','name' => 'id'));
            echo "<br/>";

            echo form_label('Name');
            echo form_input(array('id' => 'name','name' => 'name'));
            echo "<br/>";

            echo form_submit(array('id' => 'submit','value' => 'Add'));
            echo form_close();
         ?>
      </form>
   </body>

</html>
