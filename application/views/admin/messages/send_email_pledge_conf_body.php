Hi <?= ($message_info->parent[0]->first_name) ? $message_info->parent[0]->first_name : '{Parent First Name}' ?>!

We wanted to run <?= ($message_info->student->first_name) ? $message_info->student->first_name : '{Student First Name}' ?>'s recent pledges by you.  Please "reply" to this email to confirm the pledges below have been entered correctly so that <?= ($message_info->student->first_name) ? $message_info->student->first_name : '{Student First Name}' ?> can be rewarded with educational rewards.

A list of the pledges that have been entered so far:

<?php
$hasPPL = false;
foreach ($message_info->pledges as $pledge) {
  echo $pledge->sponsor_name.PHP_EOL;
  $pledge_type_string = $pledge->pledge_type_id === '3' ? 'Flat Donation' : 'Pledge ' . ucwords($message_info->unit_data->modifier . ' ' . $message_info->unit_data->name);
  echo '$'.$pledge->amount.' '. $pledge_type_string;

  if ($pledge->pledge_type_id === '1') {
    $hasPPL = true;
  }

  if ($pledge->pledge_type_id === '1') {
    echo PHP_EOL.'Estimated Pledge: $'.$pledge->total_low.' - $'.$pledge->total_high;
  }

  echo PHP_EOL;
  echo PHP_EOL;
}
?>

Pledge Total: <?php

if ($hasPPL) {
  echo '$'. number_format($message_info->student->range_total_low, 2, '.', '')
    . ' - $'
    . number_format($message_info->student->range_total_high, 2, '.', '');
} else {
  echo ($message_info->student->pledged) ? '$'.$message_info->student->pledged : '{Total Pledged}';
}
?>

<b>Not correct?</b>  $[EDIT_DELETE_PLEDGE_LINK]

<b>Good to go?</b> Reply back "yes."

IMPORTANT! All pledged <?=$message_info->unit_data->modifier;?> <?=$message_info->unit_data->name;?> amounts will be multiplied by the number of <?=$message_info->unit_data->name_plural;?> your student completes the day of the <?= $message_info->student->event_name; ?>. On average, ALL students complete 30-35 <?=$message_info->unit_data->name_plural;?>.

Thank You!

- Boosterthon Support Team

Participant Details:
Student Name: <?= ($message_info->student->first_name || $message_info->student->last_name ) ? $message_info->student->first_name .' '. $message_info->student->last_name : '{Student Name}'?>
Student Class:  <?= ($message_info->student->class_name) ? $message_info->student->class_name : '{Student Class}'?>
