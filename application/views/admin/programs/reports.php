<h3>Reports</h3>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Prize Delivery Reports</strong></div>
      <div class="panel-body">
        <ul class="list-group" id="reports">
          <? if ($prize_report_permission): ?>
            <li class="list-group-item">
              <strong>Delivery By Class By Student</strong>
              <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/prizes/report/class-prize-pdf/' . $program->id) ?>" class="btn btn-info" data-confirm="true" <?= $disabled ?>>PDF</a></div>
              <p>
                A line item prize delivery report detailing the expected prizes for each student per class. This report will also provide the Inventory List of prizes and the statuses of each.
              </p>
            </li>
            <li class="list-group-item">
              <strong>Delivery By Grade By Prize</strong>
              <div class="m-5-vert"><a class="btn btn-info" href="<?php echo site_url('/admin/prizes/report/grade-prize-pdf/' . $program->id) ?>" data-confirm="true" <?= $disabled ?>>PDF</a></div>
              <p>
                A line item prize delivery report detailing the prizes and the students expected to receive them per grade.
              </p>
            </li>
            <li class="list-group-item">
              <strong>Delivery By Grade By Student</strong>
              <div class="m-5-vert"><a class="btn btn-info" target="_blank" href="<?php echo site_url('/admin/prizes/report/grade-student-prize-pdf/' . $program->id) ?>" data-confirm="true" <?= $disabled ?>>PDF</a></div>
              <p>
                A line item prize delivery report listing the students and the expected prizes per grade.
              </p>
            </li>
          <? endif; ?>
          <li class="list-group-item">
            <strong>Prize Inventory</strong>
            <div class="m-5-vert"><a class="btn btn-success" target="_blank" href="<?php echo site_url('/admin/prizes/report/prize-inventory-csv/' . $program->id) ?>">CSV</a></div>
            <p>
              This report includes the inventory code and the inventory status of each prize.
            </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Pledge Reports</strong></div>
      <div class="panel-body">
        <ul class="list-group" id="reports">
          <li class="list-group-item">
            <strong>Pledges by Class</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/pledges/report/class-pledges-pdf/' . $program->id) ?>" class="btn btn-info">PDF</a></div>
            <p>
              This report provides a status to determine if student star videos have been created and further details regarding pledges and pledge types. This displays all registered students per class for each grade.
          </p>
          </li>
          <li class="list-group-item">
            <strong>Program Participant Summary</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/pledges/report/class-pledges-csv/' . $program->id) ?>" class="btn btn-success">CSV</a></div>
            <p>
              This report tells us if a video was created in addition to the participant and parent ID. This displays all registered students and their pledge information.
            </p>
          </li>
          <li class="list-group-item">
            <strong>All Pledges</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/pledges/report/all-pledges-csv/' . $program->id) ?>" class="btn btn-success">CSV</a></div>
            <p>
              This report will provide all details of every pledge per Program.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Team Summary</strong>
            <div class="m-5-vert">
              <a target="_blank" href="<?php echo site_url('/admin/pledges/report/comp-report-csv/' . $program->id) ?>" class="btn btn-success">CSV</a>
              <a target="_blank" href="<?php echo site_url('/admin/pledges/report/comp-report-pdf/' . $program->id) ?>" class="btn btn-warning">HTML</a>
            </div>
            <p>
              This report will provide the total pledged students for each class and their pledge status in addition to totals per grade
            </p>
          </li>
          <li class="list-group-item">
            <strong>Team Pledge-O-Meter</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/pledges/report/team-pledge-o-meter-pdf/' . $program->id) ?>" class="btn btn-info">PDF</a></div>
            <p>
              This report will provide the total pledge per unit for each teacher, and the overall total for all teachers.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Teacher Pledges</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/pledges/report/teacher-pledge-report-csv/' . $program->id) ?>" class="btn btn-success">CSV</a></div>
            <p>
              This report will list the teacher’s name, email address, and pledge total.
            </p>
          </li>
          <li class="list-group-item">
            <strong>States</strong>
            <div class="m-5-vert">
              <a target="_blank" href="<?php echo site_url('/admin/pledges/report/pledges-by-state-csv/' . $program->id) ?>" class="btn btn-success">CSV</a>
              <a target="_blank" href="<?php echo site_url('/admin/pledges/report/pledges-by-state/' . $program->id) ?>" class="btn btn-info">PDF</a>
            </div>
            <p>
              This report provides the total number of pledges by state.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Countries</strong>
            <div class="m-5-vert">
              <a target="_blank" href="<?php echo site_url('/admin/pledges/report/countries-report-csv/' . $program->id) ?>" class="btn btn-success">CSV</a>
              <a target="_blank" href="<?php echo site_url('/admin/pledges/report/countries-report-pdf/' . $program->id) ?>" class="btn btn-info">PDF</a>
            </div>
            <p>
              This report provides a list of all the countries where pledges were provided
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Program Reports</strong></div>
      <div class="panel-body">
        <ul class="list-group" id="reports">
          <li class="list-group-item">
            <strong>Event Day Tracker</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/report/event-day-tracker-pdf/' . $program->id) ?>" class="btn btn-info">PDF</a></div>
            <p>
              This report provides a printout for <?php echo xss_filter(ucwords($unit->name_plural)); ?> to be recorded.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Teacher Labels</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/code_labels/' . $program->id) ?>" class="btn btn-info">PDF</a></div>
            <p>
              This report provides the Student and Teacher Registration Code for the Program, which can be printed and cut for individual distribution.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Codes</strong>
            <div class="m-5-vert">
              <a target="_blank" href="<?php echo site_url('/admin/programs/report/codes/' . $program->id)  . '/PDF'?>" class="btn btn-info">PDF</a>
              <a target="_blank" href="<?php echo site_url('/admin/programs/report/codes/' . $program->id)  . '/HTML'?>" class="btn btn-warning">HTML</a>
            </div>
            <p>
              This report provides the Student and Teacher Registration Code for the Program.
            </p>
          </li>
          <li class="list-group-item">
            <strong>T-Shirt Sizes</strong>
            <div class="m-5-vert">
              <a target="_blank" href="<?php echo site_url('/admin/programs/shirt-size-csv-report/' . $program->id)?>" class="btn btn-success">CSV</a>
            </div>
            <p>This report will display the t-shirt sizes for all participants in a class as well as the total count of all sizes for the entire Program.</p>
          </li>
          <li class="list-group-item">
            <strong>Shipping Addresses Report</strong>
            <div class="m-5-vert">
              <a target="_blank" href="<?php echo site_url('/admin/programs/shipping-addresses-csv-report/' . $program->id)?>" class="btn btn-success">CSV</a>
            </div>
            <p>This report will provide the shipping information in addition to the names of the participants who earned prizes.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Collection</strong></div>
      <div class="panel-body">
        <ul class="list-group" id="reports">
          <li class="list-group-item">
            <strong>Participant Collection Summary</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/report/participant-collection-summary/' . $program->id) ?>" class="btn btn-success">CSV</a></div>
            <p>
              This report will provide the collection details for the total pledged amount per participant. Parent contact information is provided as well.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Registered, No Pledge</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/report/registered-no-pledge/' . $program->id) ?>" class="btn btn-success">CSV</a></div>
            <p>
              This report will serve as an opportunity to see which students have registered, but have yet to receive pledges. The parents’ contact information is provided as well.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Collection Details</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/report/collection-details/' . $program->id) ?>" class="btn btn-success">CSV</a></div>
            <p>
              This is a line item report of all participants with displaying their collection amount.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Parent Collection Letter and Email</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/communication/collection-reminder/' . $program->id) ?>" class="btn btn-warning">HTML</a></div>
            <p>
              This report will take you to the "Parent Collection Letter and Email - After Collections 1 &amp; 2" editable communication to notify parents of outstanding pledges.
            </p>
          </li>
          <? if (program_has_braintree($program)): ?>
          <li class="list-group-item">
            <strong>Merchant Transactions</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/report/merchant-transactions/' . $program->id) ?>" class="btn btn-success">CSV</a></div>
            <p>
            This report will provide all transactions and details from BrainTree.
            </p>
          </li>
          <li class="list-group-item">
            <strong>Merchant Deposits</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/report/merchant-deposits/' . $program->id) ?>" class="btn btn-info">PDF</a></div>
            <p>
              This PDF will provide the disbursement date, the amount deposited, and the invoiced amount of all deposits.
            </p>
          </li>
          <? endif; ?>
          <li class="list-group-item">
            <strong>Payment Request Email Log</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('/admin/programs/report/payment-request-log/' . $program->id) ?>" class="btn btn-warning">HTML</a></div>
            <p>
              This report will list all sponsors who have been notified of payment requests. The sponsor’s email address and name of the student is provided.
            </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Giving Market</strong></div>
      <div class="panel-body">
        <ul class="list-group" id="reports">
          <li class="list-group-item">
            <strong>Participant Certificates</strong>
            <div class="m-5-vert"><a target="_blank" href="<?php echo site_url('admin/programs/report/giving-market-certificates/' . $program->id) ?>" class="btn btn-info">PDF</a></div>
            <p>This sheet lists all participants along with their credits</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
