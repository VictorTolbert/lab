<div class="row">
    <div class="col-md-12" id="report-container">

        <table class="table table-striped table-bordered report-compact" id="class-pledge-report">
            <thead>
                <tr class="report-header report-header-compact">
                    <th colspan="15">
                        <div id="report-title">Countries Pledges Report - <?php echo date('m/d/Y g:i:sA'); ?></div>
                        <div id="class-name"><? echo $program->name ?></div>
                    </th>
                </tr>
                <tr>
                    <th>Country</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num_countries = 0;
                foreach ($countries_report as $country) {
                  $num_countries ++;
                  ?>
                    <tr>
                      <td><?php echo $country->name;?></td>
                      <td/>
                  </tr>
                  <?php
                }
                ?>
                <tfoot class="totals">
                    <tr>
                      <th>Total</th>
                      <th><?php echo $num_countries;?></th>
                    </tr>
                </tr>

            </tbody>
        </table>

    </div>
</div>
