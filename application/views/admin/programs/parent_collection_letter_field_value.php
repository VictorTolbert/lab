Thank you so much for supporting the <?= xss_filter($program_data->event_name); ?>.  The <?= $program_data->payee ? xss_filter($program_data->payee) : '{Payable To}'; ?> is grateful!  As a school, we've collected <?= ($program_data->total_pct_collected) ? xss_filter($program_data->total_pct_collected) : '{School Total Collected %}' ?> of the total amount pledged.  Our school goal is to collect 100%, so we can make some fun purchases that will transform our school.  And we need your help!

Based on your student's pledges, our records show that there is $[OUTSTANDING_AMOUNT] to be collected.  Please collect this amount from your student's sponsors and return it to school by <?= ($program_data->due_date) ? date('m/j/Y', strtotime($program_data->due_date)) : '{Due Date}' ?> (checks payable to <?= ($program_data->payee) ? xss_filter($program_data->payee) : '{Payable To}' ?>), or your sponsors can pay online if a valid email address was entered with the pledge.  If you are writing one check to cover multiple students' pledges, please clearly mark how it should be split.

If you've turned in your pledges already, great job! We will be entering them in the system soon. If you have other questions, click “here”: $[LOGIN_URL].

$[DISCLAIMER]

$[PLEDGELIST]
