     <footer>
        <p>&copy; Booster <?php echo date('Y'); ?></p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">var environment_logout = "<?= ENVIRONMENT ?>"</script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/jquery.dateFormat-1.0.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/load-image.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/timepicker.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/data_tables/js/jquery.dataTables.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/jquery.dataTables.columnFilter.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/jquery.dataTables.filteringDelay.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo asset_url(auto_version('bootstrap_3/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/jquery.tablesorter.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/admin.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/image_editor.js')); ?>"></script>
    <?php if ($ck_editor) { ?>
    <script type="text/javascript" src="/assets/js/ckeditor/ckeditor.js"></script>
    <?php } ?>
    <?php
    // Emit references to JS files that depend on the above libraries
    // such as jQuery - typically initialisation for JS features
    // on a page. View variable 'footer_js' can be a string (for single file)
    // or an array. File paths are relative to assets/js/ directory.
    if (!empty($footer_js)) {
      foreach ((array)$footer_js as $src) {
        echo '<script type="text/javascript" src="' . asset_url(auto_version('js/' . $src)) . '"></script>';
      }
    }

    if (!empty($footer_js_cdn)) {
      foreach ((array)$footer_js_cdn as $src) {
        echo '<script type="text/javascript" src="' . $src . '"></script>';
      }
    }

    // $footer_init defines an initialisation function to be called
    // (normally a global name defined in the file referenced by $footer_js).
    // If defined, the variable $footer_init_param is JSON-encoded to become
    // a single parameter to the function.
    if (!empty($footer_init)) {
      foreach ((array)$footer_init as $f_init) {
        echo '<script type="text/javascript">',
                  $f_init, '(', isset($footer_init_param) ? json_encode($footer_init_param) : '', ')',
               '</script>';
      }
    }
    ?>

    <?php if (!empty($data_table_prizes)): ?>
    <script type='text/javascript'>
      var prize_table_id = '<?php echo $data_table_prizes['id'] ?>';
      var prize_table_searchable = '<?php echo $data_table_prizes['not_searchable'] ?>';
      var prize_table_url = '<?php echo $data_table_prizes['url'] ?>';
      var prize_table_column_filter = <?php echo $data_table_prizes['column_filter'] ?>;
    </script>
    <script type="text/javascript" src="<?php echo asset_url(auto_version('js/admin/prizes.js')); ?>"></script>
    <?php endif; ?>

    <?php
    if (!empty($data_table)) {
      $this->load->view('admin/datatable', $data_table);
    } ?>

    <div class="modal fade" style="display:none;" id="logout-check-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header"><h3>Are you still there?</h3></div>
          <div class="modal-body">
            <h4>
              You've been inactive for 5 minutes, please click
              "I'm Here!" within 30 seconds, or you will be automatically logged out.
            </h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">I'm Here!</button>
          </div>
        </div>
      </div>
    </div>
    <script>
     var csfrData = {};
     csfrData['<?php echo $csrf['name']; ?>'] = '<?php echo $csrf['hash']; ?>';
   </script>
  </body>
</html>
