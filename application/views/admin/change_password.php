<form action="change_password" method="post" class="form-horizontal">
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    <?php
    if ($user->password) {
        echo bootstrap_field_val(
          'password', 'oldpass', 'Current Password',
          '', form_error('oldpass') ?: $password_error
        );
    }

    echo bootstrap_field_val(
      'password', 'password', 'New Password',
      '', form_error('password'), '', 'At least six characters.'
    );
    echo bootstrap_field_val(
      'password', 'password2', 'Confirm New Password',
      '', form_error('password2'), '', 'Please type new password again.'
    );
    ?>
    <button type="submit" class="btn btn-primary">Change</button>
    <a href="edit" class="btn btn-default">Cancel</a>
</form>
