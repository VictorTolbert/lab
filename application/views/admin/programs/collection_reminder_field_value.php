Thank you so much for supporting the <?php echo $program_data->event_name; ?>.  <?php echo ($program_data->payee) ? $program_data->payee : '{Payable To}'; ?> is grateful!  As a school, we've collected <?php echo ($program_data->total_pct_collected) ? $program_data->total_pct_collected : '{School Total Collected %}' ?> of the total amount pledged.  However, our school goal is to collect 100%, so we can purchase <?= $funds_raised_for ?> that will transform our school!  And we need your help!

Based on your student's pledges, our records show that there is $[OUTSTANDING_AMOUNT] outstanding.  Please collect this amount from your student's sponsors and return it to school by <?php echo ($program_data->due_date) ? date('m/j/Y', strtotime($program_data->due_date)) : '{Due Date}' ?> (checks payable to <?php echo ($program_data->payee) ? $program_data->payee : '{Payable To}' ?>), or your sponsors can pay online if a valid email address was entered with the pledge<?php echo $program_data->sponsor_convenience_fee != '0.00' ? ' ($' . $program_data->sponsor_convenience_fee . ' sponsor convenience fee applies)' : ''; ?>.  If you are writing one check to cover multiple students' pledges, please clearly mark how it should be split.

If your student has turned in all pledged donations, and you feel you've received this in error, let us know by clicking the link below. Again, thank you so much for all you've done to make our program a success.

<a href="<?= base_url() ?>help">Click here to request help.</a>

$[DISCLAIMER]

$[PLEDGELIST]
