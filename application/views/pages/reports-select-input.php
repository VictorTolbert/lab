<select class="form-contol input-lg" name="report_name" id="report_name" required="">
	<option value="">Select Report</option>


	<optgroup label="KPI">
		<option value="kpi_report" data-outputhtml="1" data-hasmap="1">Key Performance Indicators</option>
	</optgroup>


	<optgroup label="MAP">
		<option value="map_report" data-outputhtml="1" data-hasmap="1">Church MAP Report</option>
	</optgroup>


	<optgroup label="Churches">
		<option value="total_churches_by_state" data-outputcsv="1" data-outputhtml="1" data-hasmap="1">Total Churches By State</option>
		<option value="all_churches" data-outputcsv="1" data-outputhtml="0" data-hasmap="0">Export all Churches</option>
	</optgroup>

	<optgroup label="Advocates">
		<option value="total_advocates_by_state">Total Advocates By State</option>
		<option value="total_advocates_by_affiliate" disabled="">Total Advocates By Affiliate</option>
		<option value="total_advocates_new" disabled="">Total New Advocates</option>
		<option value="export_advocates_all" data-outputcsv="1">Export all Advocates</option>
	</optgroup>

	<optgroup label="Care Communities">
		<option value="total_communities_by_state" disabled="">Total Care Communities By State</option>
		<option value="total_communities_by_affiliate" disabled="">Total Care Communities By Affiliate</option>
		<option value="total_communities_by_advocate" disabled="">Total Care Communities By Advocate</option>
		<option value="total_communities_by_church">Total Care Communities By Church</option>
		<option value="total_communities_by_status">Total Care Communities By Status</option>
		<option value="total_communities_new" disabled="">Total New Care Communities</option>
		<option value="export_communities_all" data-outputcsv="1">Export all Care Communities</option>
	</optgroup>

	<optgroup label="Families">
		<option value="total_families_by_state" disabled="">Total Foster Families By State</option>
		<option value="total_families_by_affiliate" disabled="">Total Foster Families By Affiliate</option>
		<option value="total_families_by_advocate" disabled="">Total Foster Families By Advocate</option>
		<option value="total_families_new" disabled="">Total New Foster Families</option>
		<option value="export_families_all" data-outputcsv="1">Export all Families</option>
	</optgroup>
	<optgroup label="People">
		<option value="export_people_all" data-outputcsv="1" data-hasvolrole="1">Export all People</option>
		<option value="export_volunteers_serving" data-outputcsv="1" data-hasvolrole="1">Export Serving Volunteers</option>
		<option value="export_volunteers_active" data-outputcsv="1" data-hasvolrole="1">Export Active Volunteers</option>

	</optgroup>
</select>
