	</div><!--/.row-->
	
	<div class="promise-footer top30 text-center">
		<p>Copyright 2017-<?php echo date('Y');?> <a href="http://promise686.org" target="_blank">Promise686</a></p>
		<div class="hidden-print"><p class="top20"><a href="<?php echo base_url();?>terms-of-service">Terms</a> | <a href="<?php echo base_url();?>privacy-policy">Privacy</a></p></div>
	</div>
	<div id="copytoclipboard" value="" style="position: absolute; left: -9999999px;"></div>
	</div>	<!--/.main-->
	
	
	<script>
		var quilmodalloaded = false;
		var quillcomposemsg;
		function getBaseUrl(){
			return '<?php echo base_url();?>';
		}

		

		<?php 
			if(!empty($_SESSION['affiliate']['id_affiliate'])){
				switch($_SESSION['affiliate']['id_affiliate']){
					case 20:
						echo "var default_pos_lat = '28.55'; \r\n";
						echo "var default_pos_lng = '-81.4312674'; \r\n";
					break;
					case 43:
						echo "var default_pos_lat = '29.422124'; \r\n";
						echo "var default_pos_lng = '-98.5259784'; \r\n";
					break;
				}
			}else{
				echo "var default_pos_lat = '33.940240' \r\n"; 
				echo "var default_pos_lng = '-84.212209' \r\n";
			}
		?>

	</script>
	<?php $cache_bust = get_cur_cache_bust();?>
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/chart.min.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/moment-with-locales.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>	
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>	
	<script src="<?php echo base_url();?>js/bootstrap-datetimepicker.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/bootstrap-switch.min.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/jquery.matchHeight.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/croppie.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/jquery.validate.min.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/custom.js?v=<?php echo $cache_bust;?>" type="text/javascript" ></script>	
	<!-- <script src="<?php echo base_url();?>js/bootstrap-multiselect.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>-->
	<script src="<?php echo base_url();?>js/jquery.multiselect.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/readmore.min.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	
	<!-- Datatables -->
	<script src="<?php echo base_url("js/datatables1.10.22/datatables.min.js?v=".$cache_bust);?>" type="text/javascript" ></script>  
	<script src="<?php echo base_url("js/datatables1.10.22/Buttons-1.6.5/js/buttons.print.min.js?v=".$cache_bust);?>" type="text/javascript" ></script>  
	<script src="<?php echo base_url("js/datatables1.10.22/Buttons-1.6.5/js/buttons.colVis.min.js?v=".$cache_bust);?>" type="text/javascript" ></script>  
	<script src="<?php echo base_url("js/datatables1.10.22/Buttons-1.6.5/js/buttons.html5.min.js?v=".$cache_bust);?>" type="text/javascript" ></script>  
	<!--
    <script src="<?php echo base_url("js/datatables.net/js/jquery.dataTables.min.js?v=".$cache_bust);?>" type="text/javascript" ></script>
    <script src="<?php echo base_url("js/datatables.net-bs/js/dataTables.bootstrap.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-buttons/js/dataTables.buttons.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-buttons-bs/js/buttons.bootstrap.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-buttons/js/buttons.flash.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-buttons/js/buttons.html5.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-buttons/js/buttons.print.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-keytable/js/dataTables.keyTable.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-responsive/js/dataTables.responsive.min.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-responsive-bs/js/responsive.bootstrap.js?v=".$cache_bust);?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/datatables.net-scroller/js/dataTables.scroller.min.js?v=".$cache_bust);?>" type="text/javascript" ></script>  
-->	
	
	<!-- TextExt  --->
	<script src="<?php echo base_url("js/textext/textext.core.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.tags.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.autocomplete.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.suggestions.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.filter.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.focus.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.prompt.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.ajax.js");?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url("js/textext/textext.plugin.arrow.js");?>" type="text/javascript" charset="utf-8"></script>
	
	
	<!-- Calendar Stuff -->
	<link href="<?= base_url();?>js/fullcalendar/packages/core/main.css" rel="stylesheet" />
	<link href="<?= base_url();?>js/fullcalendar/packages/daygrid/main.css" rel="stylesheet" />
	<link href="<?= base_url();?>js/fullcalendar/packages/timegrid/main.css" rel="stylesheet" />
	<script src="<?= base_url();?>js/fullcalendar/packages/core/main.js"></script>
	<script src="<?= base_url();?>js/fullcalendar/packages/interaction/main.js"></script>
	<script src="<?= base_url();?>js/fullcalendar/packages/daygrid/main.js"></script>
	<script src="<?= base_url();?>js/fullcalendar/packages/timegrid/main.js"></script>
	<script src="<?php echo base_url();?>js/calendar.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	
	<!-- block UI -->
	<script src="<?= base_url();?>js/jquery.blockUI.min.js?v=<?php echo $cache_bust;?>"></script>
	
	<!-- Autocomplete -->
	<!-- <script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>	-->
	<script src="<?php echo base_url();?>js/jquery.autocomplete.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
	
	<!-- Quill -->
	<script src="<?php echo base_url("js/quill.js?v=".$cache_bust);?>" type="text/javascript"></script>
	
	<!-- Mentions -->
	<script src="<?php echo base_url("js/jquery.tokeninput.js?v=".$cache_bust);?>" type="text/javascript"></script>

	<!-- Google Maps JS Library -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?= $this->website_model->get_google_maps_api_key();?>&libraries=places"></script>
	
	<!-- Intro.js -->
	<script src="<?= base_url();?>js/intro.js"></script>
	
	<!-- Clipboard.js -->
	<script src="<?= base_url();?>js/clipboard.min.js"></script>
	
	<!-- trumbowyg -->
	<script type="text/javascript" src="<?php echo base_url("js/trumbowyg/trumbowyg.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/trumbowyg/plugins/upload/trumbowyg.upload.min.js");?>"></script>

	
	<?php if(empty($_SESSION['user_timezone_offset'])){?>
		<script>
		 $(document).ready(function() {
				
				var visitortime 			= new Date();
				var visitorzone			= Intl.DateTimeFormat().resolvedOptions().timeZone;
				var visitortimezone 	= "GMT " + -visitortime.getTimezoneOffset()/60;
				$.ajax({
					type: "GET",
					url: "<?php echo base_url();?>settimezone",
					data: 'time='+ visitortimezone+'&tz='+visitorzone,
					success: function(){
						//location.reload();
						console.log(visitortimezone);
					}
				});
			});
		</script>

	<?php }?>
	<?php if(empty($env_scope) || (!empty($env_scope) && strtolower($env_scope) != 'frontend')){?>
	<script>
		$(document).ready(function() {
			

			
			//checkmsgs();
			checknotify();
			
			setInterval(function () {
				//checkmsgs();
			},30000);
			
			setInterval(function () {
				//checknotify();
			},30000);
			
			
			
			var msg_rids;
			var msg_data;
				
			var quillcomposemsg = new Quill('#compose-message-modal-form-editor', {
				theme: 'snow'
			});
			
			//Attach quill to data of modal element for retrieval in other functions
			$('#composemessagemodal').data('quill', quillcomposemsg);
			
			quillcomposemsg.on('text-change', function() {
				var justHtml = quillcomposemsg.root.innerHTML;
				$('#compose-message-modal-form-body').val(justHtml);
			});
			
			//Fixes to allow tab directly into text area of quill editor
			$(".ql-toolbar").find(":button").attr('tabindex', '-1');
			$(".ql-picker-options").attr('tabindex', '-1');
			
			
			$('.btn-msg-send').on('click', function(e) {
				var errros 		= 0;
				e.preventDefault();
				var modalid		= '#compose-message';
				var formid		= '';
				
				$(this).attr('disabled', true);
				
				if($(this).data('modalid').length > 0){
					modalid		= $(this).data('modalid');
					formid = modalid;
					formid +='-modal-form';
				}
				
				if ($(formid).valid()){
				
					//show_block_ui(1099);
				
					$.ajax({
						type: "POST",
						url:  '<?php echo base_url();?>messages/save',
						data: $(this).closest('form').serialize(),
						error: function(){ 
							hide_block_ui();
							$(this).attr('disabled', false);
						},
						success: function(ajaxdata) {
							$(this).attr('disabled', false);
							var result = JSON.parse(ajaxdata);
							//hide_block_ui();
							if(result.st == 0){
								$(modalid+'-modal-footer').toggleClass('hide');
								$(modalid+'-modal-body').toggleClass('hide');
								$(modalid+'-modal-body-error-msg-text').html(result.msg);
								$(modalid+'-modal-body-error').toggleClass('hide');
								
							}else{
								$(modalid+'-modal-footer').toggleClass('hide');
								$(modalid+'-modal-body').toggleClass('hide');
								$(modalid+'-modal-body-success').toggleClass('hide');
								
								console.log(modalid);
								setTimeout(function(){ 
									$(modalid).modal('hide');
								}, 2000);
								if(result.source == 'need'){
									$(modalid).on('hidden.bs.modal', function(e) {
										//ps_modal_need_default();
									});
								}
							}
						}	
					});
				}else{
					$(this).attr('disabled', false);
				}
				
			});
			

				
			$('.btn-msg-trigger').on('click', function(e) {
				populate_compose_modal($(this));
				$('.btn-msg-send').attr('disabled', false);
			});
			
			$('.btn-msg-mark-read').on('click', function(e) {
				e.preventDefault();
				mark_message_read($(this));
			});
			
			$('#composemessagemodal').on('show.bs.modal', function(e) {
				
			});
			$('#composemessagemodal').on('hidden.bs.modal', function(e) {
				quillcomposemsg.setContents([{ insert: '\n' }]);
				$('#compose-message-modal-form-subject').val('');
				$('#ajax-target-compose-message-recpient').html('<input type="text" class="form-control" name="compose_message_modal_form_recipient" id="compose-message-modal-form-recipient">');
				$('#compose-message-modal-footer').removeClass('hide');
				$('#compose-message-modal-body').removeClass('hide');
				$('#compose-message-modal-body-success').addClass('hide');
				$('#compose-message-modal-body-error').addClass('hide');
				$('#compose-message-modal-form-json-data').val('');
			});
		});
		
		var ps_list_all_churches = [
		<?php 
			$i 			= 0;
			$all_shown	= array();
			foreach($churches as $cur){
				$cur['show_church_city_state']			= 1;
				if(!in_array($cur['id_church'], $all_shown)){
					echo  "{data: '".$cur['id_church']."',	value: '".addslashes($this->churches_model->get_church_name($cur))."'},\r\n";
					$all_shown[]	= $cur['id_church'];
				}
			}?>
		];
			
		var allchurches = ps_list_all_churches;	
		
	</script>
	<?php }?>
	<script>
		 $(document).ready(function() {
			$('.clickable-row').on('click', function() {
				if($(this).data('href')){
					window.location.href = $(this).data('href');
				}
			});
		});

		function modal_assignment_change_view(showval){
			
			if(showval == 'reset'){
				$('.modal-add-assignment-view').addClass('hide');
				$('.btn-modal-assignment-save').addClass('hide');
				$('.fetch_results').find('input:text').val(''); 
				$('#modal-addassignment-title').html('Select an option');
				$('#add-assignment-modal-footer').removeClass('hide');
				$('#add-assignment-modal-body').removeClass('hide');
				$('#modal-assignment-view-select').removeClass('hide');
				$('#add-assignment-modal-body-success').addClass('hide');
				$('#add-assignment-modal-body-error').addClass('hide');
				$('#delete-assignment-modal-body-success').addClass('hide');
				$('#delete-assignment-modal-body-error').addClass('hide');
				$('#modal-assignment-delete-method-warning-delete').addClass('hide');
				$('#modal-assignment-delete-method-warning-remove').addClass('hide');
				$('#delete-assignment-modal-footer').removeClass('hide');
				$('#delete-assignment-modal-body').removeClass('hide');
			}else{
				$('#modal_addassignment_view').val(showval);
				$('.modal-add-assignment-view').addClass('hide');
				$('#'+showval).removeClass('hide');
				$('#addassignment').find(':input').removeAttr('required');
				$('#'+showval+' 	.is-required').attr('required', "true");
				if(showval != 'modal-assignment-view-select'){
					$('.btn-modal-assignment-save').removeClass('hide');
				}	
			}
		}
		
		function instantiate_add_assignment_buttons(){
			var selected_view;
			$('#add-assignment-modal-footer').removeClass('hide');
			$('.btn-open-confirm-delete-assign').on('click', function(e) {
				if(!!$(this).data('ida')){
					$('#id_assignment_encoded_for_delete').val($(this).data('ida'));
				}
				if(!!$(this).data('method')){
					$('#modal-delete-assignment-method').val($(this).data('method'));
					$('.modal-assignment-delete-method').html($(this).data('method'));
					$('#modal-assignment-delete-method-warning-'+$(this).data('method')).toggleClass('hide');
					$('.capitalize').css('textTransform', 'capitalize');
				}
			});		
			
			$('.btn-assignment-select').on('click', function(e) {
				e.preventDefault();
				
				//pass variables from data vals to modal
				if(!!$(this).data('idp')){
					$('#modal-add-assignment-id-people').val($(this).data('idp'));
					$('#modal-assignment-view-family-new-url').prop('href', '<?= base_url();?>families/edit/0?parent_ids[]='+$(this).data('idp'));
				}
				
				if(!!$(this).data('hideactionbtns')){
					$('#add-assignment-modal-footer').addClass('hide');
				}
				
		
				if($(this).data('title')){
					$('#modal-addassignment-title').html($(this).data('title'));
				}
				
				if($(this).data('view')){
					modal_assignment_change_view($(this).data('view'));
					var sel_view = $(this).data('view');
					
					$.ajax({
						type: "GET",
						url:  '<?php echo base_url();?>home/ajax_get_modal_select_menus',
						data: {'modal': sel_view},
						success: function(ajaxdata) {
							var result = JSON.parse(ajaxdata);
							if(result.st == 1){
								if(result.menus){
									$.each(result.menus, function(index, el){
										$('.ajax-target-'+sel_view+'-'+index).html(el);
									});
								}
							}
						}	
					});
				}
			});
		}
		
		$(document).ready(function() {
			instantiate_add_assignment_buttons();
				
			//Check to load view if supplied
			$('#addassignment').on('shown.bs.modal', function (e) {
				if($(this).data('view')){
					modal_assignment_change_view($(this).data('view'));	
				}
			});
				
			//Reset Modal to defaults
			$('#addassignment').on('hidden.bs.modal', function () {
				modal_assignment_change_view('reset');
			});
			$('#confirmdeleteassign').on('hidden.bs.modal', function () {
				modal_assignment_change_view('reset');
			});
		});
		
		$(document).ready(function() {
			$('.btn-modal-assignment-save').on('click', function(e) {
				e.preventDefault();
				var people_id_encoded = $('#id_people_encoded_for_assignment').val();
				if(!people_id_encoded){
					
				}
				$.ajax({
					type: "POST",
					url:  '<?php echo base_url();?>people/ajax_save_assignment',
					data: $('#add-assignment-modal-form').serialize(),
					success: function(ajaxdata) {
						var result = JSON.parse(ajaxdata);
						console.log(result);
						if(result.st == 1){
							$('#add-assignment-modal-footer').toggleClass('hide');
							$('#add-assignment-modal-body').toggleClass('hide');
							$('#add-assignment-modal-body-success').toggleClass('hide');
							console.log('<?php echo base_url();?>people/ajax_make_assignment_editor/'+people_id_encoded);
							$.ajax({
								url: '<?php echo base_url();?>people/ajax_make_assignment_editor/'+people_id_encoded,
								dataType: "html",
								success: function(ajaxdata) {
									var resulttable = JSON.parse(ajaxdata);
									$('#ajax-target-assignments-table').html(resulttable.html);
									instantiate_add_assignment_buttons();
								}
							});
							
							setTimeout(function(){ 
								$('#addassignment').modal('hide');
							}, 2000);
							
						}
					}	
				});
			});
			
			$('.btn-modal-assignment-delete').on('click', function(e) {
				var people_id_encoded = $('#id_people_encoded_for_assignment').val();
				var ida = $('#id_assignment_encoded_for_delete').val();
				var method = $('#modal-delete-assignment-method').val();
				$.ajax({
					type: "POST",
					url:  '<?php echo base_url();?>people/ajax_delete_assignment?ida='+ida+'&method='+method,
					data: $('#delete-assignment-modal-form').serialize(),
					success: function(ajaxdata) {
						var result = JSON.parse(ajaxdata);
						console.log(result);
						if(result.st == 1){
							$('#delete-assignment-modal-footer').toggleClass('hide');
							$('#delete-assignment-modal-body').toggleClass('hide');
							$('#delete-assignment-modal-body-success').toggleClass('hide');
							$('#delete-assignment-modal-body-success-msg').html(result.html);
							$.ajax({
								url: '<?php echo base_url();?>people/ajax_make_assignment_editor/'+people_id_encoded,
								dataType: "html",
								success: function(ajaxdata) {
									var resulttable = JSON.parse(ajaxdata);
									$('#ajax-target-assignments-table').html(resulttable.html);
									
									instantiate_add_assignment_buttons();
								}
							});
							
							setTimeout(function(){ 
								$('#confirmdeleteassign').modal('hide');
								$('body').removeClass('modal-open');
								$('.modal-backdrop').remove();
							}, 2000);
							
						}else{
							$('#delete-assignment-modal-body').toggleClass('hide');
							$('#delete-assignment-modal-footer').toggleClass('hide');
							$('#delete-assignment-modal-body-error').toggleClass('hide');	
							$('#delete-assignment-modal-body-error-msg').html(result.html);
						}
					}	
				});
			});
		});
		
		$(document).ready(function() {
			$('.btn-modal-notify').on('click', function(e) {
				e.preventDefault();
				$('#modal-notify-header').html($(this).data('title'));
				if(!!$(this).data('ajaxurl')){
					$.ajax({
						url: $(this).data('ajaxurl'),
						type: "GET",
						success: function(ajaxdata) {
							var result = JSON.parse(ajaxdata);
							$('#modal-notify-body').html(result.html);
							console.log($(this).data(result));
						}
					});
					
				}else{
					$('#modal-notify-body').html($(this).data('msg'));
					console.log($(this).data('msg'));
				}
				
			});
			
			$('#modal-notify').on('hidden.bs.modal', function(e) {
				$('#modal-notify-header').html('');
				$('#modal-notify-body').html('');
			});
					
			<?php 
			if(!empty($_GET['modal-notify']) && 1== 2){ 
				if(!empty($_GET['modal-title'])){
					echo "$('#modal-notify-header').html('".urldecode($_GET['modal-title'])."');";
				}
				if(!empty($_GET['modal-ajax-url'])){
					echo "$.ajax({
						url: $(this).data('".url_dec($_GET['modal-ajax-url'])."'),
						type: \"GET\",
						success: function(ajaxdata) {
							var result = JSON.parse(ajaxdata);
							$('#modal-notify-body').html(result.html);
							$('#modalnotify').modal('show');
						}
					});";
				}
			?>
			
		
		<?php }?>
			
		});
	</script>
<?php if($this->security_model->is_user_logged_in()){?>
<?php if(!empty($_SESSION['logged_in']['id_people'])){?>
<script>
	
	$(document).on('show.bs.modal','#addneedmodal', function(e) {
		
		$('#modal-add-need-id-need-organizers').tokenInput("add", {id: <?php echo $_SESSION['logged_in']['id_people'];?>, name: '<?php echo $_SESSION['logged_in']['name_first'].' '.$this->website_model->display_format_people_name_last($_SESSION['logged_in']);?>'});
		
		instantiate_form_validation();
		instantiate_form_submit_protection();
	});
	
	$(document).on('hide.bs.modal','#addneedmodal', function(e) {
		ps_modal_need_default();
	});
	
	
	function ps_instantiate_btn_add_people_roles(){
		$('.btn-add-people-role').click(function(e){
			e.preventDefault();
			var next = parseFloat($(this).data('rolecount'));
			next++;
			$(this).data('rolecount', next);
			var menu_selector = $('#ajax-src-modal-edit-people-role-selector').html();
			var date_selector = $('#ajax-src-modal-edit-people-role-date').html();
			menu_selector = menu_selector.replace('modal-edit-people-role-type-', 'modal-edit-people-role-type-'+next);
			date_selector = date_selector.replace('modal-edit-people-role-date-', 'modal-edit-people-role-date-'+next);
			
			$('#ajax-target-modal-edit-people-role-requests').append('<div class="form-group"><div class="col-md-3 col-sm-3 col-xs-12">'+menu_selector+'</div><div class="col-md-6 col-sm-6 col-xs-12"><?php echo $this->website_model->input_menu_statuses("id_role", "", "id_role", "input-lg", array("view" => "edit_family_parent_role"));?></div><div class="col-md-1 col-sm-1 col-xs-12"><input type="text" class="form-control tooltip-wide" name="vols_max[]" id="modal-edit-people-role-vols-max-'+next+'" placeholder="Vols Needed" value="1"  data-toggle="tooltip" data-html="false" data-placement="top" title="" aria-hidden="true" data-original-title="This is the maximum number of volunteers that are required to fulfill this role. Once this number of volunteers have claimed a fulfillment role then no one else will be able to claim a role in fulfilling this role."></div>'+date_selector+'</div>');
			instantiate_pickers();
			instantiate_tooltips();
		});
	}
	
</script>
<a href="#" id="ps-atlwdg-trigger" class="ps-jira-issue-trigger">Help, Feedback, or  Report Issue</a>
<script type="text/javascript" src="https://promiseserves.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/-egccmf/b/24/a44af77267a987a660377e5c46e0fb64/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=9fb3a69d"></script>

<script>

window.ATL_JQ_PAGE_PROPS = {
	"triggerFunction": function(showCollectorDialog) {
		jQuery("#ps-atlwdg-trigger").click(function(e) {
			e.preventDefault();
			showCollectorDialog();
		});
	},
	fieldValues: {
		fullname : '<?php echo !empty($user['name_formatted']) ? $user['name_formatted'] : null;?>',
		email : '<?php echo !empty($user['people_email_primary']) ? format_email($user['people_email_primary']) : null;?>'
	}, 
	environment : function() {
	
		var env_info = {};

		if ( window.ADDITIONAL_CUSTOM_CONTEXT ) {
			env_info[ 'Additional Context Information' ] = window.ADDITIONAL_CUSTOM_CONTEXT;
		}

		return env_info;
	}
};


</script>
<?php }?>



<div class="modal fade" id="composemessagemodal" tabindex="-1" role="dialog" aria-labelledby="composemessagemodal" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
			<form class="form-horizontal" id="compose-message-modal-form" action="<?php echo base_url();?>messages/save" method="post">
				<div class="modal-header">
					Send a Message
				</div>
				<div class="modal-body" id="compose-message-modal-body">
					
						<div class="form-group">
							<div class="col-xs-2">
								To:
							</div>
							<div class="col-xs-10" id="ajax-target-compose-message-recpient">
								<input type="text" class="form-control" name="compose_message_modal_form_recipient" id="compose-message-modal-form-recipient">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
								Subject:
							</div>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="msg_title" id="compose-message-modal-form-subject">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
								Message:
							</div>
							<div class="col-xs-10">
								<div id="compose-message-modal-form-editor" style="min-height: 250px;"></div>
							</div>
						</div>
					
				</div>
				<div class="hide" id="compose-message-modal-body-success">
					<div class="row top40"></div>
					<h4 class="text-center">Your message was sent successfully!</h4>
					<div class="row top40"><br /><br /></div>
					<div class="text-center">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					<div class="row top40"><br /></div>
				</div>
				<div class="hide" id="compose-message-modal-body-error">
					<div class="row top40"></div>
					<h4 class="text-center">Whoops, There was a problem sending your message!</h4>
					<p id="compose-message-modal-body-error-msg-text" class="text-center">Please try again.</p>
					<div class="row top40"><br /><br /></div>
					<div class="text-center">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
					</div>
					<div class="row top40"><br /></div>
				</div>
				<div class="modal-footer" id="compose-message-modal-footer">
				<div class="top10">
						<input type="checkbox" name="bcc_me"> Send me a copy of this message (BCC)
					</div>
					<div class="top10">
						<input type="hidden" name="recipient_ids" id="recipient-ids" value="">
						<input type="hidden" name="msg_type" id="msg_type" value="msg_to_people">
						<input type="hidden" name="msg_body" id="compose-message-modal-form-body" value="">
						<input type="hidden" name="t" value="<?php echo get_submitted_by_human_challenge();?>">
						<input type="hidden" name="json_data" id="compose-message-modal-form-json-data" value="">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-danger btn-ok btn-msg-send" data-modalid="#compose-message"><i class="fa fa-paper-plane-o"></i> Send</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="addassignment" tabindex="-1" role="dialog" aria-labelledby="addassignment" aria-hidden="true">
<?php 
	if(empty($item)){
		$item['id_people']		= null;
		$item['id_church']		= null;
	}
	$item['set_session']       = 1;
	$defaults	               = $this->website_model->get_footer_modal_default_vars($item);
	
	?>
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center modal-lg">
			<div class="modal-content">
				<form class="form-horizontal" id="add-assignment-modal-form" action="<?php echo base_url();?>people/ajax_save_assignment" method="post">
					<div class="modal-header" id="modal-addassignment-title">
						What would you like to add to this person's profile?
					</div>
					<div class="modal-body">
						<div id="add-assignment-modal-body">
							<div class="well modal-add-assignment-view" id="modal-assignment-view-select">
								<div class="row top20 text-center">
									<a class="btn btn-primary btn-assignment-select btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-community" href="#">Add to care community</a>
								</div>
								<div class="row top20">
									<a class="btn btn-primary btn-assignment-select btn-lg btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-event" href="#">Add to event</a>
								</div>
								<?php if($this->security_model->user_has_access(60)){?>
									<div class="row top20">
										<a class="btn btn-primary btn-assignment-select btn-lg btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-church" href="#">Add to church <small>(advocate, volunteer, church staff)</small></a>
									</div>
								<?php }?>
								<?php if($this->security_model->user_has_access(90)){?>
									<div class="row top20">
										<a class="btn btn-primary btn-assignment-select btn-lg btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-staff" href="#">Add to affiliate staff</a>
									</div>
								<?php }?>
								<div class="row top20">
									<a class="btn btn-primary btn-assignment-select btn-lg btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-family" href="#">Add to an existing family</a>
								</div>
								<div class="row top20">
									<a class="btn btn-primary btn-assignment-select btn-lg btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-family-new" href="#" data-hideactionbtns="1">Add to a new family</a>
								</div>
							</div>
							<div class="well modal-add-assignment-view hide" id="modal-assignment-view-staff">
								<h2 class="text-center">Add as a staff member</h2>
								<?php if($this->security_model->user_has_access(95)){?>	
								<div class="form-group">
									<div class="col-xs-2">
										Affiliate
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-staff-0">
										</div>
									</div>
								</div>
								<?php }else{?>
									<input type="hidden" name="force_affiliate" value="1">
								<?php }?>
								<div class="form-group">
									<div class="col-xs-2">
										Role
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-staff-1">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>								
							</div>
							<div class="well modal-add-assignment-view hide" id="modal-assignment-view-family">
								<h2 class="text-center">Add to an existing family</h2>
								<div class="form-group">
									<div class="col-xs-2">
										Family
									</div>
									<div class="col-xs-10" id="ajax-target-modal-assign-family-id-family">
										<div class="ajax-target-modal-assignment-view-family-0">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-xs-2">
										Family Role
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-family-1">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								
							</div>
							<div class="well modal-add-assignment-view hide" id="modal-assignment-view-family-new">
								<h2 class="text-center">Add to a new family</h2>
								<div class="form-group">
									<div class="col-xs-12">
									<p class="text-center">Are you sure you want to create a new family with this person?</p>
									</div>
								</div>
								<div class="form-group">
									<p class="text-center">
										<a class="btn btn-primary" href="#" id="modal-assignment-view-family-new-url">Yes, create a new family</a>
										&nbsp;&nbsp;
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									</p>
								</div>
							</div>
							<div class="well modal-add-assignment-view hide" id="modal-assignment-view-event">
								<h2 class="text-center">Add to event</h2>
								<div class="form-group">
									<div class="col-xs-2">
										Event
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-event-0">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-2">
										Action
									</div>
									<div class="col-xs-10">
										<select id="event_attendee_status" name="event_attendee_status" class="input-lg form-control is-required" required>
											<option value="rsvp_only">RSVP to event</option>
											<option value="attended_event">Attended event</option>
											<option value="responded_event">Attended event & completed response card</option>
										</select>
									</div>
								</div>
							</div>
							<div class="well modal-add-assignment-view hide" id="modal-assignment-view-community">
								<h2 class="text-center">Add to care community</h2>
								<div class="form-group">
									<div class="col-xs-4">
										Care Community *
									</div>
									<div class="col-xs-8">
										<div class="ajax-target-modal-assignment-view-community-0">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-4">
										Role *
									</div>
									<div class="col-xs-8">
										<div class="ajax-target-modal-assignment-view-community-1">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-4">
										Meal Week
									</div>
									<div class="col-xs-8">
										<div class="ajax-target-modal-assignment-view-community-2">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-4">
										Meal Day
									</div>
									<div class="col-xs-8">
										<div class="ajax-target-modal-assignment-view-community-3">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-4">
										Team Start Date *
									</div>
									<div class="col-xs-8">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
														<input type="text" style="width: 100px" data-placement="right" name="date_start_human_community" id="modal-add-assignment-view-datepicker-start" class="form-control date pick-date" required="required" value="<?php echo set_value('date_start_human_community', date_offset('m/d/Y')); ?>">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									(*) Required
								</div>
							</div>
							<div class="well modal-add-assignment-view hide" id="modal-assignment-view-church">
								<h2 class="text-center">Add to church</h2>
								<div class="form-group">
									<div class="col-xs-2">
										Church
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-church-0">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-2">
										Role
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-church-1">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-2">
										Role Start Date
									</div>
									<div class="col-xs-10">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
														<input type="text" style="width: 100px" data-placement="right" name="date_start_human_church" id="modal-add-assignment-view-church-datepicker-start" class="form-control date pick-date" required="required" value="<?php echo set_value('date_start_human_church', date_offset('m/d/Y')); ?>">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="well modal-add-assignment-view hide" id="modal-assignment-view-group">
								<h2 class="text-center">Add to group</h2>
								<div class="form-group">
									<div class="col-xs-2">
										Group Name
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-group-0">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-2">
										Role
									</div>
									<div class="col-xs-10">
										<div class="ajax-target-modal-assignment-view-group-1">
											<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hide" id="add-assignment-modal-body-success">
						<div class="row top40"></div>
						<h4 class="text-center">Your assignment was successfully added!</h4>
						<div class="row top40"><br /><br /></div>
						<div class="text-center">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						<div class="row top40"><br /></div>
					</div>
					<div class="hide" id="add-assignment-modal-body-error">
						<div class="row top40"></div>
						<h4 class="text-center">Whoops, There was a problem creating this assignment!</h4><p class="text-center">Please try again.</p>
						<div class="row top40"><br /><br /></div>
						<div class="text-center">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
						</div>
						<div class="row top40"><br /></div>
					</div>
					<div id="add-assignment-modal-footer" class="modal-footer">
						<input type="hidden" name="id_assignment" id="modal-add-assignment-id-assignment" value="">
						<input type="hidden" name="id_people" id="modal-add-assignment-id-people" value="<?php echo $item['id_people'];?>">
						<input type="hidden" name="assignment_view" id="modal_addassignment_view" value="">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary hide btn-ok btn-modal-assignment-save"> Save</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="modal fade" id="addneedmodal" tabindex="-1" role="dialog" aria-labelledby="needmodal" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog modal-lg vertical-align-center">
			<div class="modal-content">
				<form class="form-horizontal form-validate form-protect-submit" id="add-need-modal-form" action="<?php echo base_url();?>messages/save" method="post">
					<div class="modal-header">
						<h3><span class="modal-need-details-title">Add a New Need</span> <span class="pull-right"><a href="#" data-dismiss="modal">X</a></span></h3>
					</div>
					<div class="modal-body" id="add-need-modal-body">
						<div class="form-group">
							<div class="col-sm-1 col-xs-1 text-right">
								<i class="fas fa-hand-holding-heart fa-2x" aria-hidden="true"></i> <small class="pull-right"> *</small>
							</div>
							<div class="col-xs-10 text-left" id="ajax-target-modal-need-title">
								<input type="text" class="form-control modal-add-need-edit-element" name="need_name" id="modal-add-need-title" placeholder="Need Subject - Short description of need" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-1 col-xs-1 text-right">
								<i class="fas fa-hands-helping fa-2x"></i> <small class="pull-right"> *</small>
							</div>
							<div class="col-xs-10 text-left" id="ajax-target-modal-need-type">
								<?php //echo  $this->website_model->input_menu_statuses('id_need_type', '', 'id_need_type', 'input-lg input-limiter', array('view' => 'edit_needs_id_need_type')) ;
									echo $this->website_model->input_menu_need_types('id_need_type', '', 'modal-add-need-need-type', 'form-control modal-add-need-edit-element', array('for_families_existing' => 1, 'required' => 1));
								?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-1 col-xs-1 text-right">
								<i class="fas fa-users fa-2x"></i> <small class="pull-right"> *</small>
							</div>
							<div class="col-xs-10 text-left" id="ajax-target-modal-need-type">
								<?php echo $this->website_model->input_menu_communities('id_community', '', 'modal-add-need-id-community', 'form-control is-required modal-add-need-edit-element', array('required'=> 1, 'show_all_church_option' => 1));?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-1 col-xs-1 text-right">
								<i class="fas fa-sticky-note fa-2x"></i> <small class="pull-right"> *</small>
							</div>
							<div class="col-xs-10" id="ajax-target-modal-need-desc">
								<textarea name="need_desc" class="form-control modal-add-need-edit-element" id="modal-add-need-desc" cols="10" rows="6" placeholder="Detailed description of the need and the information necessary for the volunteer to complete the task." required ></textarea>
								
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 col-sm-3">
								Due Date
							</div>
							<div class="col-xs-9 col-sm-9">
								<div class="form-group">
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="col-md-6">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
														<input type="text" style="width: 100px" data-placement="right" name="need_date_start_human" id="modal-add-need-datepicker-start" class="form-control date pick-date ignorevalidate" value="<?php echo date_offset('m/d/Y');?>">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-clock-o"></i></span>
														<input type="text" style="width: 100px" name="need_time_start_human" id="modal-add-need-timepicker-start" class="form-control pick-time ignorevalidate"  value="<?php echo date_offset('h:00 A', time()+3600);?>">
													</div>
												</div>
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('event_date_only'); ?> <?php echo form_error('event_time_only'); ?></span>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="col-xs-3 col-sm-3">
								Volunteers Needed <small class="pull-right"> *</small>
								<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="This is the maximum number of volunteers that are required to fulfill this need. Once this number of volunteers have claimed a fulfillment role then no one else will be able to claim a role in fulfilling this need."></i>
							</div>
							<div class="col-xs-9 col-sm-9">
								<input type="text" class="form-control modal-add-need-edit-element" name="vols_max" id="modal-add-need-vols-max" placeholder="Maximum number of volunteers needed to fulfill this need" required>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-xs-3 col-sm-3">
								Need Organizers <small class="pull-right"> *</small>
								<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="These are the people who will be central point of contact for facilitating the need and coordinating the volunteers to fulfill the need."></i>
							</div>
							<div class="col-xs-9 col-sm-9">
								<?php echo $this->website_model->input_tagger('id_need_organizers', '', 'modal-add-need-id-need-organizers', 'form-control modal-add-need-edit-element', array('data' => array('role-limit' => '', 'limit-id' => ''), 'placeholder' => ''));?>
								<input type="hidden" class="modal-add-need-edit-element" name="id_need_organizers_prev" id="modal-add-need-id-need-organizers-prev" value="">
								
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 col-sm-3">
								Invite Volunteers
								<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="If you leave this field blank then a message will be sent to the entire team (or entire church if selected) to see who will claim the need. If you want to send the need notification to only a select group of people then please enter their names below."></i>
							</div>
							<div class="col-xs-9 col-sm-9">
								<?php echo $this->website_model->input_tagger('id_need_assignees', '', 'modal-add-need-id-need-assignees', 'form-control modal-add-need-edit-element', array('data' => array('role-limit' => '', 'limit-id' => ''), 'placeholder' => 'Leave this field blank to invite the entire team to participate'));?>
								<input type="hidden" class="modal-add-need-edit-element" name="id_need_assignees_prev" id="modal-add-need-id-need-assignees-prev" value="">
								
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-xs-3 col-sm-3">
								Service Hours
							</div>
							<div class="col-xs-9 col-sm-9">
								<input type="text" class="form-control modal-add-need-edit-element" name="time_estimated" id="modal-add-need-id-need-time-estimated" placeholder="Number of service hours to credit to volunteer">
							</div>
						</div>
					</div>

					<div class="hide" id="add-need-modal-body-success" style="min-height: 200px;">
						<div class="row top40"></div>
						<h4 class="text-center">Your need request was sent successfully!</h4>
						<div class="row top40"></div>
						<div class="text-center">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<div class="hide" id="add-need-modal-body-error" style="min-height: 200px;">
						<div class="row top40"></div>
						<h4 class="text-center">Whoops, There was a problem sending your message!</h4><p class="text-center">Please try again.</p>
						<div class="row top40"></div>
						<div class="text-center">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
						</div>
					</div>
					<div class="modal-footer" id="add-need-modal-footer">
						
						<div class="col-xs-2 col-sm-6 col-md-6">
							<span class="gutter10">(*) Required</span>	
						</div>
						<div class="col-xs-5 col-sm-3 col-md-3">
							<button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancel</button>
						</div>
						<div class="col-xs-5 col-sm-3 col-md-3">
							<button type="submit" class="btn btn-danger btn-ok btn-msg-send btn-lg btn-block" data-modalid="#add-need"><i class="fa fa-paper-plane-o"></i> Send</button>
						</div>
						
						<input type="hidden" name="msg_type" id="need-notes-modal-msg-type" value="need_add">
						<input type="hidden" name="need_notes_body" id="need-notes-modal-form-body" value="">
						<input type="hidden" name="t" value="<?php echo get_submitted_by_human_challenge();?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="calendardetailmodal" tabindex="-1" role="dialog" aria-labelledby="calendardetailmodal" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog modal-lg vertical-align-center">
			<div class="modal-content">
				<form class="form-horizontal" id="modal-calendar-event-form" action="<?php echo base_url();?>needs/save" method="post">
					<div class="modal-header">
						Calendar Details - <span id="calendardetailmodal-header-date">Today</span>
					</div>
					<div class="modal-body" id="modal-calendar-event-body">
						
						
					</div>
					<div class="hide" id="need-desc-modal-body-success">
						<div class="row top40"></div>
						<h4 class="text-center">Your message was sent successfully!</h4>
						<div class="row top40"></div>
						<div class="text-center">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<div class="hide" id="need-desc-modal-body-error">
						<div class="row top40"></div>
						<h4 class="text-center">Whoops, There was a problem sending your message!</h4><p class="text-center">Please try again.</p>
						<div class="row top40"></div>
						<div class="text-center">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
						</div>
					</div>
					<div class="modal-footer" id="need-desc-modal-footer">
						<input type="hidden" name="assigned_ids" id="modal-calendar-event-assigned-ids" value="">
						<input type="hidden" name="t" value="<?php echo get_submitted_by_human_challenge();?>">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-danger btn-ok btn-msg-send" ><i class="fa fa-paper-plane-o"></i> Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	

<div class="modal fade" id="confirmdeleteassign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center modal-lg">
			<div class="modal-content" >
				<form method="post" class="form-horizontal" id="delete-assignment-modal-form" action="<?php base_url();?>people/ajax_delete_assignment">
					<div class="modal-header">
						Confirm Delete
					</div>
					<div class="modal-body">
						<div id="delete-assignment-modal-body">
							<h2 class="text-center" id="confirm-delete-assign-message">Are you sure you want to <span class="modal-assignment-delete-method">remove</span> this role assignment?</h2>
							<div id="modal-assignment-delete-method-warning-delete" class="hide"><p class="text-center"><strong>Use this option only if this record is incorrect!</strong></p><p>This role will permenantly be deleted from the system and will no longer show up on this person's role assignment history. Please use this option only if this assignment is incorrect and needs to be permanantly deleted. Otherwise use the remove option instead so that this assignment will continue to be displayed on this person's role assignment history.</p></div>
							<?php if($this->security_model->user_has_access(85)){ ?>
							<div id="modal-assignment-delete-method-warning-remove" class="hide"><p class="text-center"><strong>Use this option if you are removing this person from this role!</strong></p><p>This option is to be used when the role assignment is correct, but the status needs to be changed (e.g. a volunteer stops serving on a care community).</p></div>
							<?php }else{?>
							<div id="modal-assignment-delete-method-warning-remove" class="hide"><p class="">Removing a role assignment will remove the volunteer from this current role. Please do this only if you are certain that the volunteer should no longer be assigned to this role.</p></div>
							<?php }?>
							<div class="row top40"><br /></div>
						</div>
					
						<div class="hide" id="delete-assignment-modal-body-success">
							<div class="row top40"></div>
							<h4 class="text-center"><span id="delete-assignment-modal-body-success-msg"></span></h4>
							<div class="row top40"><br /><br /></div>
							<div class="text-center">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
							<div class="row top40"><br /></div>
						</div>
						<div class="hide" id="delete-assignment-modal-body-error">
							<div class="row top40"></div>
							<h4 class="text-center"><span id="delete-assignment-modal-body-error-msg"></span></p>
							<div class="row top40"><br /><br /></div>
							<div class="text-center">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
							</div>
							<div class="row top40"><br /></div>
						</div>
					</div>
					<div class="modal-footer" id="delete-assignment-modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok btn-modal-assignment-delete"><span class="modal-assignment-delete-method capitalize">Remove</span></a>
						
					</div>
					<input type="hidden" name="id_assignment_encoded" id="id_assignment_encoded_for_delete" value="">
					<input type="hidden" name="method" id="modal-delete-assignment-method" value="">
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="confirmrequestaction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center modal-lg">
			<div class="modal-content" >
				<form method="post" class="form-horizontal" id="confirm-request-action-modal-form" action="<?php base_url();?>family/ajax_request_action">
					<div class="modal-header">
						Confirm <span class="modal-assignment-delete-method">Ignore</span>
					</div>
					<div class="modal-body">
						<div id="delete-assignment-modal-body">
							<h2 class="text-center" id="modal-confirm-request-action-message">Are you sure you want to <span class="modal-confirm-request-action-method">ignore</span> this request?</h2>
							<div id="modal-assignment-delete-method-warning-delete" class="hide"><p>This request will be ignored in the future and volunteers / advocates at your church will not have the ability to respond to this need.</p></div>
							
							<div id="modal-assignment-delete-method-warning-remove" class="hide"><p class="">By confirming this request you are agreeing to respond to this need. It will not be available for other churches to claim once you confirm the </p></div>
							
							<div class="row top40"><br /></div>
						</div>
					
						<div class="hide" id="delete-assignment-modal-body-success">
							<div class="row top40"></div>
							<h4 class="text-center"><span id="delete-assignment-modal-body-success-msg"></span></h4>
							<div class="row top40"><br /><br /></div>
							<div class="text-center">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
							<div class="row top40"><br /></div>
						</div>
						<div class="hide" id="delete-assignment-modal-body-error">
							<div class="row top40"></div>
							<h4 class="text-center"><span id="delete-assignment-modal-body-error-msg"></span></p>
							<div class="row top40"><br /><br /></div>
							<div class="text-center">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
							</div>
							<div class="row top40"><br /></div>
						</div>
					</div>
					<div class="modal-footer" id="delete-assignment-modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok btn-modal-assignment-delete"><span class="modal-assignment-delete-method capitalize">Remove</span></a>
						
					</div>
					<input type="hidden" name="id_assignment_encoded" id="id_assignment_encoded_for_delete" value="">
					<input type="hidden" name="method" id="modal-delete-assignment-method" value="">
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalcalendareventdetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center modal-lg">
			<div class="modal-content modal-calendar-event-details-view">
				<div class="modal-header">
					<h3>Details - <span class="modal-calendar-event-details-title"></span> <span class="pull-right"><a href="#" data-dismiss="modal">X</a></span></h3>
					<h4 class="modal-calendar-event-details-title-date"></h4>
				</div>
				<div class="modal-body modal-calendar-event-details-body hide">
					
				</div>
				<div class="modal-body modal-calendar-event-details-body-loading">
					<div class="row top30 text-center">
						<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
						<h2 class="text-center">Loading...</h2>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3">
						<div class="col-sm-3 col-xs-3">
							<a class="btn btn-primary btn-modal-calendar-edit btn-modal-event-confirm-toggle btn-block btn-modal-with-ajax" data-toggle="modal" data-modalheader="Confirm Need" data-ajaxurl="" href="#modalnotify" >Confirm</a>
						</div>
						<div class="col-sm-3 col-xs-3">
							<button type="button" class="btn btn-danger btn-modal-calendar-edit btn-modal-event-delete-toggle btn-block">Delete</button>
						</div>
						<div class="col-sm-3 col-xs-3">
							<button type="button" class="btn btn-primary btn-modal-calendar-edit btn-modal-event-edit-toggle btn-block">Edit</button>
						</div>
						<div class="col-sm-3 col-xs-3">
							<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-content modal-calendar-event-details-delete hide">
				<div class="modal-header">
						
						<h3><span class="modal-calendar-event-details-title">Delete - <span class="modal-calendar-event-details-title"></span>?<span class="pull-right"><a href="#" data-dismiss="modal">X</a></span></h3>
						<h4 class="modal-calendar-event-details-title-date"></h4>
				</div>
				<div class="modal-body modal-calendar-event-delete-body">
					<p class="text-center">Are you sure you wish to delete the event <span class="modal-calendar-event-details-title"></span>?</p>
					<p class="text-center"><strong>This cannot be undone.</strong></p>
					<p class="text-center">All event assignees will be removed from the event and any upcoming reminders will not be sent.</p>
				</div>
				<div class="modal-body modal-calendar-event-delete-body-confirmed hide">
					<p class="text-center"> <span class="modal-calendar-event-details-title"></span> was successfully deleted.</p>
				</div>
				<div class="modal-footer modal-calendar-event-delete-footer">
					<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3">
						<div class="col-sm-6 col-xs-6">
							<button id="modal-calendar-event-button-delete-confirm" class="btn btn-primary modal-calendar-event-details-delete-confirm btn-block" data-ide="">Yes</button>
						</div>
						<div class="col-sm-6 col-xs-6">
							<button class="btn btn-default btn-modal-event-delete-cancel btn-block">No</button>
						</div>
					</div>
				</div>
				<div class="modal-footer modal-calendar-event-delete-footer-confirmed hide">
					<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3">
						<div class="col-sm-6 col-xs-6 text-center">
							<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-content modal-calendar-event-details-edit hide">
				<form class="form-horizontal" id="form-modal-calendar-event-details" method="post" action="<?= base_url();?>events/save">
					<div class="modal-header">
						
						<h3><span class="modal-calendar-event-details-title">Add New Calendar Item</span> <span class="pull-right"><a href="#" data-dismiss="modal">X</a></span></h3>
						<h4 class="modal-calendar-event-details-title-date"></h4>
						
					</div>
					
					<div class="modal-body modal-calendar-event-edit-body">
						<div class="">
							<div class="form-group">
								<div class="col-sm-1 col-xs-1 text-right">
									<i class="fa fa-calendar-plus-o fa-2x"></i>
								</div>
								<div class="col-sm-11 col-xs-11">
									<input type="text" name="event_name" id="modal-calendar-event-edit-event-name" class="form-control modal-calendar-edit-element is-required" value="" placeholder="Calendar Item name (e.g. Event Name, Meal Name)" required>
								</div>
							</div>
						</div>
					<?php if($this->security_model->user_has_access(95)){?>		
						<div class="" id="modal-calendar-event-edit-wrapper-id-affiliate">					
							<div class="form-group">
								<div class="col-sm-1 col-xs-1 text-right">
									<i class="fa fa-sitemap fa-2x"></i>
								</div>
								<div class="col-sm-6 col-xs-11">
									<?php echo $this->website_model->input_menu_affiliates('id_affiliate', $this->affiliates_model->get_active_affiliate_id(), 'modal-calendar-event-id-affiliate', 'form-control', array('view' => 'edit_affiliates', 'required' =>1));?>
								</div>
							</div>
						</div>
						<?php }?>
						<div class="" id="modal-calendar-event-edit-wrapper-event-type">
							<div class="form-group">
								<div class="col-sm-1 col-xs-1 text-right">
									<i class="fa fa-calendar fa-2x"></i>
								</div>
								<div class="col-sm-6 col-xs-11">
									<select name="event_type" id="modal-calendar-event-edit-event-type" required class="form-control modal-calendar-edit-element col-xs-12 col-sm-12">
										<option value="">Select a Calendar Item Type</option>
										<?php if($this->security_model->user_has_access(60)){?>
										<optgroup label="Events" id="modal-calendar-event-edit-event-type-optgroup-event">
											<option value="event_awareness" data-cat="training">Awareness Event</option>
											<option value="event_training" data-cat="training">Orientation Event</option>
											<option value="event_combined" data-cat="training">Awareness / Orientation Event</option>
										</optgroup>
										<?php }?>
										<optgroup label="Meals" id="modal-calendar-event-edit-event-type-optgroup-meal">
											<option value="event_meal_reg" data-showidcommunity="1" data-nameassignee="Meal Provider(s)" data-namecontact="Team Leader(s)" data-cat="meal">Regular Meal</option>
											<option value="event_meal_extra" data-showidcommunity="1" data-nameassignee="Meal Provider(s)" data-namecontact="Team Leader(s)" data-cat="meal">Extra Meal</option>
										</optgroup>
										<optgroup label="Needs" id="modal-calendar-event-edit-event-type-optgroup-need">
											<option value="event_need_transport" data-showidcommunity="1" data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Transportation</option>
											<option value="event_need_babysitting" data-showidcommunity="1"  data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Babysitting</option>
											<option value="event_need_mentoring"  data-showidcommunity="1"  data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Mentoring</option>
											<option value="event_need_service" data-showidcommunity="1"  data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Service Project</option>
										</optgroup>
										</optgroup>
										<optgroup label="Other Events" id="modal-calendar-event-edit-event-type-optgroup-other">
											<option value="event_gathering" data-showidcommunity="1">Gathering</option>
											<option value="event_birthday" data-showidcommunity="1" data-showallday="1" data-cat="other">Birthday</option>
											<option value="event_anniversary" data-showidcommunity="1" data-showallday="1" data-cat="other">Anniversary</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
						<div class="top20 hide" id="modal-calendar-event-edit-wrapper-id-community">
							<div class="form-group">
								<div class="col-sm-1 col-xs-1 text-right">
									<i class="fa fa-users fa-2x"></i>
								</div>
								<div class="col-sm-11 col-xs-11">
									<div class="control-group">
										
										<?php echo $this->website_model->input_menu_communities('id_community', '', 'modal-calendar-event-edit-event-id-community', 'form-control is-required modal-calendar-edit-element', array('required'=> 0));?>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 text-center">
										<span class="error_notify_modal_calendar error_event_id_community text-danger"><?php echo form_error('community_name'); ?></span>
										</div>
								</div>
						</div>
						<div class="top20">
							<div class="form-group">
								<div class="col-sm-1 col-xs-1 hidden-xs text-right">
									<i class="fa fa-clock-o fa-2x"></i>
								</div>
								<div class="col-sm-11 col-xs-12" id="modal-calendar-event-edit-wrapper-dates-specific">
									<div class="col-sm-2 col-sm-offset-1 col-xs-6">
										<div class="control-group">
											<div class="controls">
												<div class="">
													<span class="add-on input-group-addon"> Start Date </span>
													<input type="text"  data-placement="right" name="event_date_start_human" id="modal-calendar-event-edit-date-start-human" class="form-control date pick-date modal-calendar-event-edit-date-start modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="<?php echo date_offset('m/d/Y');?>" data-usermod="false">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-2 col-xs-6">
										<div class="control-group">
											<div class="controls">
												<div class="">
													<span class="add-on input-group-addon"> Start Time </span>
													<input type="text" name="event_time_start_human" id="modal-calendar-event-edit-time-start-human" class="form-control pick-time time modal-calendar-event-edit-time-start modal-calendar-event-edit-control modal-calendar-edit-element" required="required"  value="<?php echo date_offset('g:00');?>" data-usermod="false">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-2 hidden-xs" style="display: table; vertical-align:middle; text-align: center">
										<i class="fa fa-minus top20"></i>
									</div>
									<div class="col-sm-2 col-xs-6 xs-top10">
										<div class="control-group">
											<div class="controls">
												<div class="">
													<span class="add-on input-group-addon"> End Date </span>
													<input type="text" data-placement="right" name="event_date_end_human" id="modal-calendar-event-edit-date-end-human" class="form-control date pick-date modal-calendar-event-edit-date-end modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="<?php echo date_offset('m/d/Y');?>" data-usermod="false">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-2 col-xs-6 xs-top10">
										<div class="control-group">
											<div class="controls">
												<div class="">
													<span class="add-on input-group-addon"> End Time </span>
													<input type="text" name="event_time_end_human" id="modal-calendar-event-edit-time-end-human" class="form-control pick-time time modal-calendar-event-edit-time-end modal-calendar-event-edit-control modal-calendar-edit-element" required="required"  value="<?php echo date_offset('g:00');?>" data-usermod="false">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 text-center">
										<span class="error_notify_modal_calendar error_event_date_time text-danger"><?php echo form_error('error_event_date_time'); ?></span>
									</div>
								</div>
							
								<div class="col-sm-11 col-xs-12 hide" id="modal-calendar-event-edit-wrapper-dates-allday">
									<div class="col-sm-2 col-xs-3">
										<div class="control-group">
											<div class="controls">
												<div class="">
													<span class="add-on input-group-addon"> Date </span>
													<input type="text"  data-placement="right" name="event_date_start_human_allday" id="modal-calendar-event-edit-date-start-allday-human" class="form-control date pick-date modal-calendar-event-edit-date-start modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="<?php echo date_offset('m/d/Y');?>" data-usermod="false">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="top20">
							<fieldset>
								<legend><a href="#modal-calendar-edit-event-advanced" data-toggle="collapse" class="collapse-toggle-indicator">More <i class="fa fa-caret-right"></i></a></legend>
								<div id="modal-calendar-edit-event-advanced" class="collapse" >
									<?php if(1 == 2){?>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											Repeat every
										</label>
										
										<div class="col-xs-2 col-sm-2">
											<input class="form-control" id="modal-calendar-event-repeat-int" name="repeat_int" value="1" disabled>
										</div>
										<div class="col-xs-4 col-sm-3">
											<select class="form-control" name="repeat_freq" value="" id="modal-calendar-event-repeat-freq">
												<option value="">Never</option>
												<option value="annual">Year(s)</option>
												<option value="month">Month(s)</option>
												<option value="weekly">Week(s)</option>
											</select>
										</div>
										<label class="control-label col-md-2 col-sm-2 col-xs-6 top5 xs-top5">
											Until
										</label>
										<div class="col-xs-6 col-sm-2">
											<div class="control-group">
												<div class="controls">
													<div class="">
														<input type="text"  data-placement="right" name="event_date_recur_end_human" id="modal-calendar-event-edit-date-recur-end" class="form-control date pick-date modal-calendar-event-edit-recur-date-end modal-calendar-event-edit-control modal-calendar-edit-element" value="" placeholder="Forever" data-usermod="false">
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php }?>
									<div class="form-group" style="display: none;">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											Event Location
										</label>
										<div class="col-sm-9 col-xs-9">
											<input type="text" name="place_address" id="modal-calendar-event-edit-event-place-address" class="form-control modal-calendar-edit-element" value="" placeholder="Optional - full name & address of location">
											<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_location_name" id="modal-calendar-event-edit-event-location-name">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_address_street" id="modal-calendar-event-edit-address-street">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_address_city" id="modal-calendar-event-edit-address-city" value="">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_address_state" id="modal-calendar-event-edit-address-state" value="">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_address_zip" id="modal-calendar-event-edit-address-zip" value="">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_address_county" id="modal-calendar-event-edit-address-county" value="">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_address_country" id="modal-calendar-event-edit-address-country" value="">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_geo_lat" id="modal-calendar-event-edit-event-geo-lat" value="">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="event_geo_lng" id="modal-calendar-event-edit-geo-lng" value="">
											<input type="hidden" class="modal-calendar-event-edit-geocode"  name="place_id_provider" id="modal-calendar-event-edit-place-id-provider" value="">
										</div>
									</div>
									<div class="form-group modal-calendar-event-edit-hide-cat-training modal-calendar-event-edit-hideable">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											<span id="modal-calendar-event-edit-label-assignee">Assignees</span> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="This field contains the list of people who are assigned to participate in the event. In the case of a meal or need event, these people would be the ones providing the meal or fulfilling the need."></i>
										</label>
										<div class="col-sm-9 col-xs-9">
											<?php echo $this->website_model->input_tagger('id_event_assignees', '', 'modal-calendar-event-edit-id-assignees', 'form-control modal-calendar-edit-element', array('data' => array('role-limit' => '', 'limit-id' => '')));?>
											<input type="hidden" name="id_event_assignees_prev" id="modal-calendar-event-edit-id-assignees-prev" value="">
										</div>
									</div>
									<div class="form-group" >
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											Event Description
										</label>
										<div class="col-sm-9 col-xs-9">
											<textarea name="event_desc" id="modal-calendar-event-edit-event-desc" class="form-control modal-calendar-edit-element" value="" placeholder="Optional - description / details" rows="5" cols="10"></textarea>
										</div>
									</div>
									
								<?php if($this->security_model->user_has_access(36)){?>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											Church
										</label>
										<div class="col-sm-9 col-xs-9">
											<?php echo $this->website_model->input_menu_churches('id_church', $_SESSION['logged_in']['id_home_church'], 'modal-calendar-event-id-church', 'form-control', array('view' => 'select_church', 'force_selector' => 1));?>
										</div>
									</div>
								<?php }?>
									
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											<span id="modal-calendar-event-edit-label-contact">Event Contact</span> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="This field is to set the organizers of the event. The people listed in this box will be shown as the point person for all questions related to the event. In the case of a meal or need this will mostly often be the team leader."></i>
										</label>
										<div class="col-sm-9 col-xs-9">
											<?php echo $this->website_model->input_tagger('id_event_contacts', '', 'modal-calendar-event-edit-id-event-contacts', 'form-control modal-calendar-edit-element input-lg', array());?>
											<input type="hidden" name="id_event_contacts_prev" id="modal-calendar-event-edit-id-contacts-prev" value="">
										</div>
										<span class="error_id_event_contact text-danger"><?php echo form_error('community_name'); ?></span>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											Time Zone
										</label>
										<div class="col-sm-9 col-xs-9">
											<?php echo $this->website_model->input_menu_time_zones('event_time_zone', $this->website_model->get_default_php_timezone(), 'event_time_zone', 'input-lg', array('view' => 'simple_us_only', 'required' => 1));?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">
											Send Event Reminder
										</label>
										<div class="col-sm-9 col-xs-9">
											<input type="checkbox" id="modal-calendar-event-edit-send-reminder" name="send_event_reminder" class="btn-switch" value="1"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" id="modal-calendar-event-edit-send-reminder-prev" name="send_event_reminder_prev" value="<?php if(!empty($item['send_event_reminder'])){ echo $item['send_event_reminder']; } ?>">
										<span class="text-danger"><?php echo form_error('send_event_reminder'); ?></span>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
					<div class="modal-footer">
						<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3">
							<div class="col-sm-6 col-xs-6">
								<button type="button" class="btn btn-primary btn-modal-calendar-event-details-save btn-block">Save</button>
							</div>
							<div class="col-sm-6 col-xs-6">
								<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
							</div>
						</div>
						<input type="hidden" name="id_event_encoded" id="modal-calendar-event-edit-id-event" class="modal-calendar-edit-element" value="">
						<input type="hidden" name="calendar_event" value="1">
					</div>
				</form>	
			</div>
			
			<div class="modal-content modal-calendar-event-details-edit-result hide">
				<div class="modal-header">
					<h3>Details - <span class="modal-calendar-event-details-title"></span></h3>
					<h4 class="modal-calendar-event-details-title-date"></h4>
				</div>
				<div class="modal-body modal-calendar-event-edit-result-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
			
			
		</div>
	</div>
</div>
<?php } //end if logged in?>

<div class="modal fade" id="modalnotify" tabindex="-1" role="dialog" aria-labelledby="modalnotify" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center" id="modalnotify-modal-dialog">
			<div class="modal-content">
				<div class="modal-header" >
					<div class="col-xs-11 col-sm-11">
						<span id="modal-notify-header"></span>
					</div>
					<div class="col-xs-1 col-sm-1">
						<span class="text-center"><a href="#" data-dismiss="modal">X</a></span>
					</div>
				</div>
				<div class="modal-body" id="modal-notify-body">
					
				</div>
				<div class="modal-footer xs-top10">
					<div id="modal-notify-btn-group-form" class="hide">
    					<div class="col-sm-12 col-xs-12 text-center">
    						<div class="col-md-3 col-sm-2 col-xs-6 col-sm-offset-2 col-md-offset-3 text-center">
    							<button type="button" data-dismiss="modal" class="btn btn-secondary btn-lg btn-block" id="modal-notify-footer-button-cancel"><i class="fas fa-times-circle"></i> Cancel</button>
    						</div>
    						<div class="col-xs-12 visible-xs hidden-sm hidden-md hidden-lg">&nbsp;</div>
    						<div class="col-md-3 col-sm-2 col-xs-6 text-center">
    							<button type="button" class="btn btn-primary btn-lg btn-block btn-modal-notify-submit" id="modal-notify-footer-button-save"><i class="fas fa-check-circle"></i> Save</button>
    						</div>
    					</div>
					</div>
					<div id="modal-notify-btn-group-default">
						<button type="button" class="btn btn-default btn-modal-close center-block" data-dismiss="modal" id="modal-notify-footer-button-close"><i class="fas fa-times-circle"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalchurchcheck" tabindex="-1" role="dialog" aria-labelledby="modalchurchcheck" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center" id="modalchurchcheck-modal-dialog">
			<div class="modal-content">
				<div class="modal-header" >
					<div class="col-xs-11 col-sm-11">
						<span id="modal-church-check-header"></span>
					</div>
					<div class="col-xs-1 col-sm-1">
						<span class="text-center"><a href="#" data-dismiss="modal">X</a></span>
					</div>
				</div>
				<div class="modal-body" id="modal-church-check-body">
					
				</div>
				<div class="modal-footer xs-top10">
					<div id="modal-church-check-btn-group-form" class="hide">
    					<div class="col-sm-12 col-xs-12 text-center">
    						<div class="col-md-6 col-sm-6 col-xs-6 text-center">
    							<button type="button" data-dismiss="modal" class="btn btn-secondary btn-lg btn-block" id="modal-church-check-footer-button-cancel"><i class="fas fa-times-circle"></i> Cancel</button>
    						</div>
    						<div class="col-xs-12 visible-xs hidden-sm hidden-md hidden-lg">&nbsp;</div>
    						<div class="col-md-6 col-sm-6 col-xs-6 text-center">
    							<button type="button" class="btn btn-primary btn-lg btn-block btn-modal-church-check-next" id="modal-church-check-footer-button-save"><i class="fas fa-check-circle" aria-hidden="true"></i> Save</button>
    						</div>
    					</div>
					</div>
					<div id="modal-church-check-btn-group-default">
						<button type="button" class="btn btn-default btn-modal-close center-block" data-dismiss="modal" id="modal-church-check-footer-button-close"><i class="fas fa-times-circle"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!------ GRPR Cookie --->
<?php 
	if(!$this->security_model->has_gdpr_cookie() && empty($_GET['bypass_gdpr'])){
		echo $this->security_model->make_gdpr_accost();
	}
?>

