<?php
$this->load->model('pledge_model');
$this->load->library('ion_auth');
?>
<script type='text/javascript'>
      var oTable;
      var deferLoadSearch = false;
      var user_search = {
        table_settings: false,
        init: function(){
          user_search.table_settings = oTable.fnSettings();
          $('#users-table_filter').html($('#users-table-search').html());
          $('#users-table-search').html('')
          $('#user-search').on('click', function() {
            user_search.filter();
          });
          $('#user-search-field').bind('keyup', function() {
            if (event.keyCode == 13) {
              user_search.filter();
            }
          });
        },
        filter: function() {
          column_to_filter = $('#user-search-column').val();
          if (column_to_filter > 0) {
            $('#user-search-column option').each(function(a,b) {
              column_option = $(b).val();
              if ($(b).val() != column_to_filter) {
                user_search.table_settings.aoColumns[column_option].bSearchable = false;
              } else {
                user_search.table_settings.aoColumns[column_option].bSearchable = true;
              }
            });
            oTable._fnBuildSearchArray(user_search.table_settings, 1);
            oTable.fnFilter($('#user-search-field').val().trim());
          }
        }
      };
      $(document).ready(function() {
          var columnDefs = new Array;
          $('#<?php echo $id ?> thead tr th').each(function(){
              columnDefs.push({ "bSortable": !$(this).attr('notSortable'), "bSearchable": !$(this).attr('notSearchable') });
          });
          oTable = $('#<?php echo $id ?>').dataTable( {
          "bProcessing": true,
          "bServerSide": true,
          "aaSorting": [<?php echo $sort?>],
          "iDeferLoading": <?php echo !empty($user_search_limit) ? 0 : 'null' ?>,
          "aoColumns" : columnDefs,
          "iDisplayLength": 50,
          "bAutoWidth": false,
          <?php if (!empty($edit_url)): ?>
          "fnDrawCallback": function () {
             if ($('#users-table').data('edit_mode') == true) {
              $('#<?php echo $id ?> tbody td .edit').editable( function(value, settings) {
                  $.ajax( {
                      "dataType": 'json',
                      "type": "POST",
                      "url": '<?php echo $edit_url ?>',
                      "data": { id : $(this).attr('id'),
                                value : value,
                                field : $(this).data('field'),
                                model : $(this).data('model')
                              }

                    } );
                  return(value);
              },
              {
                  onsubmit: function(settings, td) {
                    var input = $(td).find('input').context;
                    $(this).validate({
                        rules: {
                            'value' : $(input).data('validation')
                        }
                    });
                    return ($(this).valid());
                  },
                  height    : '14px',
                  width     : '30px',
                  indicator : '<img src="/img/loading.gif">',
                  tooltip   : 'Click to edit...',
                  onblur    : 'ignore',
                  submit    : '<a class="submit_all"></a>'
              } ).click(function(evt) {
                    $(this).find('input').keydown(function(event) {
                        if (event.which == 9) { //'TAB'
                            $form = $(this).closest('form');
                            $form.submit();
                            $form.next('form').find(':input').focus();
                       }
                    })
              }).trigger('click')
            }
          },
          <?php endif; ?>
          "fnServerData": function ( sSource, aoData, fnCallback ) {
            if ($('#user_type').val()) {
              aoData.push( { "name": "user_type", "value": $('#user_type').val() } );
            }
            $.ajax( {
              "dataType": 'json',
              "type": "POST",
              "url": sSource,
              "data": aoData,
              "success": fnCallback
            } );
          },
          "fnInitComplete": function() {
            <?php if (empty($user_search_limit)): ?>
              oTable.fnSetFilteringDelay(<?php echo $filterdelay ? $filterdelay : 250 ?>, <?php echo $enteronly ? 'true' : 'false' ?>);
            <?php else: ?>
              deferLoadSearch = true;
            <?php endif; ?>
          },
          "sAjaxSource": "<?php echo $url ?>",
          "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
            <?php if ($this->ion_auth->in_group(User_group_model::SYSADMIN) == false) { ?>
            if ($(nRow).find("td:contains('<?php echo Pledge_model::STRING_PAID; ?>')").length >0 || $(nRow).find("td:contains('<?php echo Pledge_model::STRING_PAID_PENDING; ?>')").length >0){
              $(nRow).find('td').find('input').attr('disabled','disabled');
              $(nRow).find('td').find('a[data-action=delete-entity]').addClass('hideElem');
            }
            if ($(nRow).find("td:contains('<?php echo Pledge_model::STRING_PAID_PENDING; ?>')").length >0) {
              $(nRow).find('td').find('a[data-action=edit-pledge]').addClass('hideElem');
            }
            <?php } ?>
          }
        })<?php
        if (!empty($column_filter)) {
          echo ".columnFilter({$column_filter})";
        } ?>;
        if (deferLoadSearch) {
          oTable.fnSetFilteringDelay(<?php echo $filterdelay ? $filterdelay : 250 ?>, <?php echo $enteronly ? 'true' : 'false' ?>);
          user_search.init();
        }
      });
    </script>
