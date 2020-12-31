<div class="row">
  <div class="tab-content">
    <div class="tab-pane active" id="merchant">
      <div class="col-md-12">
        <div class="row">
        <a class="btn btn-default" href="/admin/programs/edit/<?php echo $program->id ?>#merchant" >Return to Program Merchant Edit</a>
          <table id="merchant-transactions" class="table table-striped">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Merchant ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Amount</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="cc-trans-detail-modal">
  <div class="modal-body">
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
