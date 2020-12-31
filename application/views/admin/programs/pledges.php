              <h3>Pledges</h3>

              <div class="col-md-6">
                        <?php

                           echo '<a class="btn btn-danger delete-multiple" href="' . site_url("admin/pledges/delete/multiple") . '" id="delete-multiple"><i class="glyphicon glyphicon-trash"></i> Delete Selected</a> ';
                          echo '<a class="btn btn-success confirm-multiple" href="' . site_url("admin/pledges/confirm/multiple") . '" id="confirm-multiple"><i class="glyphicon glyphicon-ok-sign"></i> Confirm Selected</a>';

                        ?>
               </div>
               <br/><br/>

              <table id="pledges-table" class="table table-striped">
                  <thead>
                      <tr>
                          <th>Select</th><th class="actions">Actions</th><th>Participant</th><th>Classroom</th><th>Pledge</th><th>Type</th><th>Estimated</th><th>Entered</th><th>Status</th><th>Substatus</th>
                          <th>Sponsor</th>
                      </tr>
                  </thead>
                <tbody></tbody>
              </table>
