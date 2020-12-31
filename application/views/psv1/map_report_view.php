<?php echo $site_header; ?>

<?php echo $site_sidebar; ?>
<div class="container">
    <div class="row">
    	<div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5 top10">
    		<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
    	</div>
    </div>
	<div class="row" id="ignorePDF">
    	<p>November 8, 2019</p>
    	<p>RE: Perimeter Church 2019 Q3 Engagement Statement</p>
    	<p>Dear Debra Potter,</p>
    	<p>Attached you’ll find your Live The Promise Quarterly Engagement Statement for Perimeter Church. As always, thank you for partnering with us to benefit vulnerable children! We cannot help children without you! You have the people—the families and volunteers—and we have the systems, guidance, and relationships you need for accelerated impact.</p>
    	
    	<p>Church giving is essential to this thriving movement aiding vulnerable children—whether they are in local families, foster care, or an adoption process. Each church we serve costs Promise686 approximately $1,800 annually. Some churches will prayerfully choose to give more than this amount and some will need to give less or even nothing at all. We have created an online giving link where your church can make contributions and even automate them to recur at custom intervals.</p>
    	
    	<p>Please contact us if we can support you more or if you have any questions. I pray that the Family Advocacy Ministry (“FAM”) within your church is growing and impacting more and more children in need.</p>
    	<p>Sincerely,<br />
    	Andy Cook<br />
    	CEO, Promise686, Inc.
    	</p>
    </div>
</div>

<!-- top navigation -->
<?php echo $site_footer;?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<script src="<?php echo base_url();?>js/html2canvas.min.js?v=<?php echo $cache_bust;?>" type="text/javascript"></script>
<script>

$(document).ready(function(){
  var pdf = new jsPDF('p', 'pt', 'letter');
  pdf.canvas.height = 72 * 11;
  pdf.canvas.width = 72 * 8.5;

  pdf.fromHTML(document.body);

  pdf.save('test.pdf');
});

</script>