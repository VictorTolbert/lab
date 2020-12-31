<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
    if (!isset($active)) {
      $active = 'Admin';
    } ?>
    <title>The Locker | <?php echo ucwords($active); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo asset_url('bootstrap_3/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/bootstrap-responsive.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/bootstrap-image-gallery.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/admin_styles.css'); ?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo site_url('favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

  <body class="admin">
    <div class="container-fluid" id="content-container">

<?php
if (! empty($coll_reminder)) {
  foreach ($coll_reminder as $student) { ?>
    <h2>Student Pledge Collection Reminder</h2><br />
    <table id="collection_reminder_header">
        <tr>
            <td><span class="collection_label">Name</span></td>
            <td><span class="collection_value"><?php echo $student->participant_name ?></span></td>

            <td><span class="collection_label">Total Pledged</span></td>
            <td><span class="collection_value"><?php echo '$'.$student->pledged ?></span></td>
        </tr>
        <tr>
            <td><span class="collection_label">School</span></td>
            <td><span class="collection_value"><?php echo $student->program->name ?></span></td>

            <td><span class="collection_label">Received Payments</span></td>
            <td><span class="collection_value">$<?php echo (empty($student->collected)) ? '0.00' : $student->collected ?></span></td>
        </tr>
        <tr>
            <td><span class="collection_label">Class</span></td>
            <td><span class="collection_value"><?php echo $student->class ?></span></td>

            <td><span class="collection_label">Payments Scheduled</span></td>
            <td><span class="collection_value">$<?php echo (empty($student->scheduled)) ? '0.00' : $student->scheduled; ?></span></td>
        </tr>
        <tr>
            <td><span class="collection_label">Grade</span></td>
            <td><span class="collection_value"><?php echo $student->grade_name ?></span></td>

            <td><span class="collection_label">Outstanding</span></td>
            <td><span class="collection_value"><?php echo "$".$student->outstanding ?></span></td>
        </tr>
        <tr>
            <td><span class="collection_label text-capitalize"><?=ucwords($unit_data->name_plural)?> Completed</span></td>
            <td><span class="collection_value"><?php echo ($student->laps) ? $student->laps : '0*'?></span></td>

            <td><span class="collection_label">Due Date</span></td>
            <td><span class="collection_value"><?php echo date("m/d/Y", strtotime($student->program->due_date)) ?></span></td>
        </tr>
    </table>
    <div id="collection_reminder_body">
        <p>
            <?php
            $disclaimer = $student->laps > 0 ? '' : '*If your student was unable to participate in the '.$event_name.', a pledge ' . $unit_data->modifier . ' ' . $unit_data->name . ' is calculated using ' . $unit_data->default_multiplier . ' ' . $unit_data->name . ' (the average number of ' . $unit_data->name_plural . ' completed).';
            $body       = str_replace(
              ["$[OUTSTANDING_AMOUNT]", "$[PLEDGELIST]", "$[LOGIN_URL]", '$[DISCLAIMER]'],
              ['$'.$student->outstanding, '', site_url('/auth/login') . '/' . $student->parent_fr_code, $disclaimer],
              $letter_body
            );
            echo nl2br(trim($body));
            ?>
            <br />
            <br />
            <span class='bold-underline'>Pledges</span>
            <table class="student_pledge_list">
                <tr>
                    <th>Sponsor Name</th>
                    <th>Pledge Amount</th>
                    <th>Pledge Type</th>
                    <th>Total</th>
                </tr>

            <?php
            foreach ($student->pledges as $pledge) {
                $per_unit_sentence = ($pledge->pledge_type == 'Flat Donation') ? $pledge->pledge_type : $unit_data->modifier . ' ' . $unit_data->name;
              ?>
                <tr>
                    <td><?php echo $pledge->sponsor_name;?></td>
                    <td>$<?php echo $pledge->amount;?></td>
                    <td class="text-capitalize"><?=ucwords($per_unit_sentence)?></td>
                    <td>$<?php echo $pledge->total;?></td>
                </tr>
                <?
            }
            ?>
            </table>
            <!-- Scheduled Payments -->
            <br/>
            <span class='bold-underline'>Scheduled Payments</span><br/>
            <table class="student_pledge_list">
                <?php
                if (! empty($student->scheduled_payments)) {
                  ?>
                  <tr>
                      <th>Sponsor Name</th>
                      <th>Scheduled Amt.</th>
                  </tr>
                    <?php
                    foreach ($student->scheduled_payments as $payment) {
                      ?>
                        <tr>

                            <td><?php echo $payment->payer_name;?></td>

                            <td>$<?php echo $payment->amount;?></td>

                        </tr>

                      <?php
                    }
                    ?>

            </table>

            <br/>

            † Payments split between multiple participants are indicated by an (*) displayed after specific payment amount.

                  <?php
                } else {
                  ?>

            </table>

            <span class="italics">No Scheduled Payments to Display</span>

                  <?php
                }
                ?>

            <!-- Received Payments -->

            <br />

            <br />

            <span class='bold-underline'>Received Payments</span><br/>

            <table class="student_pledge_list">

            <?php if (! empty($student->payments)) { ?>
                <tr>

                    <th>Payer Name</th>

                    <th>Payment</th>

                    <th>Type</th>

                    <th>Check #</th>

                    <th>Payment Amt. <span classs="no_decoration">†</span><th>

                </tr>

                <?php foreach ($student->payments as $payment) { ?>
                    <tr>

                        <td><?php echo $payment->payer_name;?></td>

                        <td>$<?php echo $payment->amount;?></td>

                        <td><?php echo $payment->type;?></td>

                        <td><?php echo $payment->check_number;?></td>

                        <td>$<?php echo $payment->collected .

                                        ($payment->split ? '*' : '');?></td>

                    </tr>

                <?php } ?>

            </table>

            <br/>

            <?php } else { ?>
            </table>

            <span class="italics">No Received Payments to Display</span>

            <?php } ?>

        </p>

        <?php $this->load->view('email/email_signature'); ?>

      </div>

      <div class="collection_reminder_break"></div>

    <?php
  }
} ?>

    </div><!--/.fluid-container-->
    <script>
     var csfrData = {};
     csfrData['<?php echo $csrf['name']; ?>'] = '<?php echo $csrf['hash']; ?>';
   </script>

  </body>

</html>

