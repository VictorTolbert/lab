<h2>
    User &gt; <?php echo $user->username ?: "{$user->first_name} {$user->last_name}"; ?>
    <small>(<?php echo $user->email; ?>)</small>
</h2>

<p>A new random password will be issued.</p>

<?php
    echo form_open($action),
         form_hidden('user_id', $user->id),
        form_submit(
          [ 'name'  => 'submit',
                             'class' => 'btn btn-primary',
                             'value' => 'Confirm Password Reset' ]
        ),
         "<a href='$redirect' class='btn btn-default'>Cancel</a>",
         form_close();
    ?>
