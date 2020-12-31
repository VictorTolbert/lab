    <h3>Payments</h3>

    <table id="data-table" class="table table-striped table-program-payments">
        <thead>
            <tr>
                <th class="actions">Actions</th>
                <th>Date Entered</th>
                <th>Payer Name</th>
                <th>Order ID</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Check Number</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <style type="text/css">
        [data-type='cash'] {
            display:inline-block;
        }
        [data-type='check'] {
            display:inline-block;
        }
    </style>
<?php if (!is_sys_admin()): ?>
    <style type="text/css">
        [data-type='CC'] + .btn-delete-payment,
        [data-type='CC'] + .btn-edit-payment {
            display:none;
        }
    </style>
<?php endif; ?>
