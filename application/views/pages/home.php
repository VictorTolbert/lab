<main class="flex-1 bg-gray-100">
	<header class="container px-8 py-4">
		<!-- Breadcrumb -->
		<nav class="flex" aria-label="Breadcrumb">
			<ol class="flex items-center space-x-4">
				<li>
					<div>
						<a href="#" class="text-gray-400 hover:text-gray-500">
							<svg class="flex-shrink-0 w-5 h-5" x-description="Heroicon name: home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
							</svg>
							<span class="sr-only">Home</span>
						</a>
					</div>
				</li>
				<li>
					<div class="flex items-center">
						<svg class="flex-shrink-0 w-5 h-5 text-gray-400" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
						</svg>
						<a href="<?= base_url('dashboard') ?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Dashboard</a>
					</div>
				</li>
			</ol>
		</nav>
	</header>



	<section class="grid gap-8 px-8 lg:grid-cols-2">
		<!-- Upcoming Items Modules -->
		<div class="overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow">
			<div class="px-4 py-5 text-center sm:p-6">
				<h3 class="font-bold">Upcoming Items</h3>

				<p>No relevant upcoming items in the next 30 days</p>

				<!-- <form>
					<input id="x" value="Editor content goes here" class="trix-content" type="hidden" name="content">

					<trix-editor input="x"></trix-editor>

					<div class="trix-content">Stored content here</div>

				</form> -->

			</div>
		</div>

		<!-- Assigned Cases Module -->
		<div class="overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow">
			<div class="px-4 py-5 sm:p-6">
				<h3>Cases Items</h3>
				<div>
					<button type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-primary-700 bg-primary-100 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
						<svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
						Actions
					</button>
				</div>

				<!-- Form Example -->
				<form class="w-full">
					<div class="flex flex-wrap mb-2 -mx-3">
						<div class="w-full px-3 mb-6 md:w-1/4 md:mb-0">
							<input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="query" name="query" value="" type="text" placeholder="Search Term">
						</div>
						<div class="w-full px-3 mb-6 md:w-1/4 md:mb-0">
							<div class="relative">
								<select class="block w-full px-4 py-3 pr-8 font-sans leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="conference" name="conference">
									<option value="">-- Select Conference --</option>
									<option value="con">
										!!Con
									</option>
									<option value="alterconf">
										AlterConf
									</option>
									<option value="cascadia-php">
										Cascadia PHP
									</option>
									<option value="conffreaks">
										ConfFreaks
									</option>
									<option value="devopsdays">
										DevOpsDays
									</option>
									<option value="dinosaur-js">
										Dinosaur JS
									</option>
									<option value="emberconf">
										EmberConf
									</option>
									<option value="fwdays">
										fwdays
									</option>
									<option value="goruco">
										Goruco
									</option>
									<option value="laracon-au">
										Laracon AU
									</option>
									<option value="laracon-eu">
										Laracon EU
									</option>
									<option value="laracon-us">
										Laracon US
									</option>
									<option value="loadays">
										LOADays
									</option>
									<option value="nordic-js">
										Nordic JS
									</option>
									<option value="php-srbijaphp-serbia">
										PHP Srbija/PHP Serbia
									</option>
									<option value="php-uk-conference">
										PHP UK Conference
									</option>
									<option value="phpce">
										phpCE
									</option>
									<option value="railsconf">
										RailsConf
									</option>
									<option value="react-finland">
										React Finland
									</option>
									<option value="reactjsday">
										reactjsday
									</option>
									<option value="ruby-conf">
										Ruby Conf
									</option>
									<option value="scotlandphp">
										ScotlandPHP
									</option>
									<option value="sunshinephp">
										SunshinePHP
									</option>
									<option value="symphonylive-usa">
										SymphonyLive USA
									</option>
									<option value="uphill-conf">
										Uphill Conf
									</option>
								</select>
								<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
									<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
										<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
									</svg>
								</div>
							</div>
						</div>
						<div class="w-full px-3 mb-6 md:w-1/4 md:mb-0">
							<div class="relative">
								<select class="block w-full px-4 py-3 pr-8 font-sans leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="event" name="event">
									<option selected="" value="">-- Select Event --</option>
									<option value="con-2014">
										!!Con 2014 - 2014, Manhattan
									</option>
									<option value="con-2015">
										!!Con 2015 - 2015, New York City
									</option>
									<option value="con-2016">
										!!Con 2016 - 2016, New York City
									</option>
									<option value="con-2017">
										!!Con 2017 - 2017, New York City
									</option>
									<option value="con-2018">
										!!Con 2018 - 2018, New York City
									</option>
									<option value="con-2019">
										!!Con 2019 - 2019, New York City
									</option>
									<option value="net-fwdays19">
										.NET fwdays'19 - 2019, Київ
									</option>
									<option value="alterconf-atlanta-ga-2015">
										AlterConf Atlanta, GA - 2015 - 2015, Atlanta, GA
									</option>
									<option value="alterconf-austin-tx-2015">
										AlterConf Austin, TX - 2015 - 2015, Austin, TX
									</option>
									<option value="alterconf-austin-tx-2017">
										AlterConf Austin, TX - 2017 - 2017, Austin, TX
									</option>
									<option value="alterconf-berlin-germany-2017">
										AlterConf Berlin, Germany - 2017 - 2017, Berlin, Germany
									</option>
									<option value="alterconf-boston-ma-2014">
										AlterConf Boston, MA - 2014 - 2014, Boston, MA
									</option>
									<option value="alterconf-chicago-il-2015">
										AlterConf Chicago, IL - 2015 - 2015, Chicago, IL
									</option>
									<option value="alterconf-chicago-il-2017">
										AlterConf Chicago, IL - 2017 - 2017, Chicago, IL
									</option>
									<option value="alterconf-detroit-mi-2015">
										AlterConf Detroit, MI - 2015 - 2015, Detroit, MI
									</option>
									<option value="alterconf-dublin-ireland-2016">
										AlterConf Dublin, Ireland - 2016 - 2016, Dublin, Ireland
									</option>
									<option value="alterconf-lagos-nigeria-2017">
										AlterConf Lagos, Nigeria - 2017 - 2017, Lagos, Nigeria
									</option>
									<option value="alterconf-london-england-2017">
										AlterConf London, England - 2017 - 2017, London, England
									</option>
									<option value="alterconf-los-angeles-ca-2015">
										AlterConf Los Angeles, CA - 2015 - 2015, Los Angeles, CA
									</option>
									<option value="alterconf-melbourne-australia-2017">
										AlterConf Melbourne, Australia - 2017 - 2017, Melbourne, Australia
									</option>
									<option value="alterconf-minneapolis-mn-2016">
										AlterConf Minneapolis, MN - 2016 - 2016, Minneapolis, MN
									</option>
									<option value="alterconf-new-york-city-ny-2014">
										AlterConf New York City, NY - 2014 - 2014, New York City, NY
									</option>
									<option value="alterconf-new-york-city-ny-2016">
										AlterConf New York City, NY - 2016 - 2016, New York City, NY
									</option>
									<option value="alterconf-new-york-city-ny-2017">
										AlterConf New York City, NY - 2017 - 2017, New York City, NY
									</option>
									<option value="alterconf-paris-france-2016">
										AlterConf Paris, France - 2016 - 2016, Paris, France
									</option>
									<option value="alterconf-portland-or-2015">
										AlterConf Portland, OR - 2015 - 2015, Portland, OR
									</option>
									<option value="alterconf-portland-or-2016">
										AlterConf Portland, OR - 2016 - 2016, Portland, OR
									</option>
									<option value="alterconf-portland-or-2017">
										AlterConf Portland, OR - 2017 - 2017, Portland, OR
									</option>
									<option value="alterconf-san-francisco-ca-2016">
										AlterConf San Francisco, CA - 2016 - 2016, San Francisco, CA
									</option>
									<option value="alterconf-san-francisco-ca-2017">
										AlterConf San Francisco, CA - 2017 - 2017, San Francisco, CA
									</option>
									<option value="alterconf-seattle-wa-2015">
										AlterConf Seattle, WA - 2015 - 2015, Seattle, WA
									</option>
									<option value="alterconf-seattle-wa-2017">
										AlterConf Seattle, WA - 2017 - 2017, Seattle, WA
									</option>
									<option value="alterconf-sfoakland-ca-2015">
										AlterConf SF/Oakland, CA - 2015 - 2015, SF/Oakland, CA
									</option>
									<option value="alterconf-toronto-on-2015">
										AlterConf Toronto, ON - 2015 - 2015, Toronto, ON
									</option>
									<option value="alterconf-washington-dc-2016">
										AlterConf Washington D.C. - 2016 - 2016, Washington D.C.
									</option>
									<option value="cascadiaphp-2018">
										CascadiaPHP 2018 - 2018, Portland, Oregon
									</option>
									<option value="cascadiaphp-2019">
										CascadiaPHP 2019 - 2019,
									</option>
									<option value="dinosaur-js-2016">
										Dinosaur JS 2016 - 2016, Denver, Colorado
									</option>
									<option value="dinosaur-js-2017">
										Dinosaur JS 2017 - 2017, Space Gallery, Denver, Colorado
									</option>
									<option value="dinosaur-js-2018">
										Dinosaur JS 2018 - 2018, Denver, Colorado
									</option>
									<option value="dinosaur-js-2019">
										Dinosaur JS 2019 - 2019, Denver, Colorado
									</option>
									<option value="emberconf-2014">
										EmberConf 2014 - 2014, Portland, OR
									</option>
									<option value="goruco-2008">
										Goruco 2008 - 2008, Pace Plaza, Pace University Campu, Lower Manhattan
									</option>
									<option value="goruco-2009">
										Goruco 2009 - 2009, 1 Pace Plaza, Pace University Campus, Lower Manhattan
									</option>
									<option value="goruco-2010">
										Goruco 2010 - 2010, 1 Pace Plaza, Pace University Campus, Lower Manhattan
									</option>
									<option value="goruco-2011">
										Goruco 2011 - 2011, 1 Pace Plaza, Pace University Campus, Lower Manhattan
									</option>
									<option value="goruco-2012">
										Goruco 2012 - 2012, New York
									</option>
									<option value="goruco-2013">
										Goruco 2013 - 2013, New York
									</option>
									<option value="goruco-2014">
										Goruco 2014 - 2014, New York
									</option>
									<option value="goruco-2015">
										Goruco 2015 - 2015, New York
									</option>
									<option value="goruco-2016">
										Goruco 2016 - 2016, New York
									</option>
									<option value="goruco-2017">
										Goruco 2017 - 2017, New York City
									</option>
									<option value="goruco-2018">
										Goruco 2018 - 2018, New York City
									</option>
									<option value="laracon-au">
										Laracon AU - 2018, Sydney
									</option>
									<option value="laracon-eu">
										Laracon EU - 2016, Amsterdam
									</option>
									<option value="laracon-eu">
										Laracon EU - 2014, Amsterdam
									</option>
									<option value="laracon-eu">
										Laracon EU - 2018, Amsterdam
									</option>
									<option value="laracon-eu">
										Laracon EU - 2019, Amsterdam
									</option>
									<option value="laracon-eu">
										Laracon EU - 2017, Amsterdam
									</option>
									<option value="laracon-eu">
										Laracon EU - 2013, Amsterdam
									</option>
									<option value="laracon-eu">
										Laracon EU - 2015, Amsterdam
									</option>
									<option value="laracon-us">
										Laracon US - 2017, New York
									</option>
									<option value="laracon-us">
										Laracon US - 2015, Louisville, Kentucky
									</option>
									<option value="laracon-us">
										Laracon US - 2018, Chicago, Illinois
									</option>
									<option value="laracon-us">
										Laracon US - 2016, Louisville, Kentucky
									</option>
									<option value="laracon-vii">
										Laracon VII - 2019, Times Square, NYC
									</option>
									<option value="loadays-2014">
										LOADays 2014 - 2014, Antwerp, Belgium
									</option>
									<option value="loadays-2015">
										LOADays 2015 - 2015, Antwerp, Belgium
									</option>
									<option value="loadays-2018">
										LOADays 2018 - 2018, Belgium
									</option>
									<option value="loadays-2019">
										LOADays 2019 - 2019, Antwerp, Belgium
									</option>
									<option value="nordicjs-2014">
										Nordic.js 2014 - 2014, Värmdö
									</option>
									<option value="nordicjs-2015">
										Nordic.js 2015 - 2015, Stockholm
									</option>
									<option value="php-fwdays13">
										PHP fwdays'13 - 2013, Киев
									</option>
									<option value="php-fwdays14">
										PHP fwdays'14 - 2014, Киев
									</option>
									<option value="php-fwdays15">
										PHP fwdays'15 - 2015, Киев
									</option>
									<option value="php-fwdays16">
										PHP fwdays'16 - 2016, Киев
									</option>
									<option value="php-fwdays17">
										PHP fwdays'17 - 2017, Kyiv
									</option>
									<option value="php-fwdays18">
										PHP fwdays'18 - 2018, Kyiv
									</option>
									<option value="php-fwdays19">
										PHP fwdays'19 - 2019, Kyiv
									</option>
									<option value="php-srbijaphp-serbia-2016">
										PHP Srbija/PHP Serbia 2016 - 2016, Opera &amp; Theatre Madlenianum, Belgrade, Serbia
									</option>
									<option value="php-srbijaphp-serbia-2017">
										PHP Srbija/PHP Serbia 2017 - 2017, Opera &amp; Theatre Madlenianum, Belgrade, Serbia
									</option>
									<option value="php-srbijaphp-serbia-2018">
										PHP Srbija/PHP Serbia 2018 - 2018, Madlenianum Theatre, Belgrade, Serbia
									</option>
									<option value="php-srbijaphp-serbia-2019">
										PHP Srbija/PHP Serbia 2019 - 2019, Madlenianum Opera &amp; Theatre, Belgrade, Serbia
									</option>
									<option value="php-t-dayphp-serbia-2014">
										PHP T-Day/PHP Serbia 2014 - 2014, Belgrade, Serbia
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2008, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2006, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2015, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2014, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2010, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2019, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2009, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2013, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2018, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2016, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2012, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2007, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2017, London
									</option>
									<option value="php-uk-conference">
										PHP UK Conference - 2011, London
									</option>
									<option value="phpce-2017">
										phpCE 2017 - 2017, Hotel Ossa Congress &amp; Spa Rawa Mazowiecka, Poland
									</option>
									<option value="phpce-2018">
										phpCE 2018 - 2018, Clarion Congress Hotel Prague Czech Republic
									</option>
									<option value="railsconf-2008">
										RailsConf 2008 - 2008,
									</option>
									<option value="railsconf-2009">
										RailsConf 2009 - 2009,
									</option>
									<option value="railsconf-2010">
										RailsConf 2010 - 2010,
									</option>
									<option value="railsconf-2011">
										RailsConf 2011 - 2011,
									</option>
									<option value="railsconf-2012">
										RailsConf 2012 - 2012,
									</option>
									<option value="railsconf-2013">
										RailsConf 2013 - 2013,
									</option>
									<option value="railsconf-2014">
										RailsConf 2014 - 2014,
									</option>
									<option value="railsconf-2015">
										RailsConf 2015 - 2015,
									</option>
									<option value="railsconf-2016">
										RailsConf 2016 - 2016,
									</option>
									<option value="railsconf-2017">
										RailsConf 2017 - 2017,
									</option>
									<option value="railsconf-2018">
										RailsConf 2018 - 2018,
									</option>
									<option value="react-finland-2018">
										React Finland 2018 - 2018,
									</option>
									<option value="react-finland-2019">
										React Finland 2019 - 2019,
									</option>
									<option value="reactjsday-2015">
										reactjsday 2015 - 2015,
									</option>
									<option value="reactjsday-2016">
										reactjsday 2016 - 2016,
									</option>
									<option value="reactjsday-2017">
										reactjsday 2017 - 2017,
									</option>
									<option value="reactjsday-2018">
										reactjsday 2018 - 2018,
									</option>
									<option value="reactjsday-2019">
										reactjsday 2019 - 2019,
									</option>
									<option value="rubyconf-2007">
										RubyConf 2007 - 2007, Omni Charlotte Hotel in Charlotte, North Carolina, USA
									</option>
									<option value="rubyconf-2008">
										RubyConf 2008 - 2008, Orlando, Florida
									</option>
									<option value="rubyconf-2009">
										RubyConf 2009 - 2009, San Francisco
									</option>
									<option value="rubyconf-2010">
										RubyConf 2010 - 2010, New Orleans
									</option>
									<option value="rubyconf-2011">
										RubyConf 2011 - 2011, New Orleans, Louisiana
									</option>
									<option value="rubyconf-2012">
										RubyConf 2012 - 2012, Denver, Colorado
									</option>
									<option value="rubyconf-2013">
										RubyConf 2013 - 2013, Miami Beach
									</option>
									<option value="rubyconf-2014">
										RubyConf 2014 - 2014, San DIego
									</option>
									<option value="rubyconf-2015">
										RubyConf 2015 - 2015, San Antonio
									</option>
									<option value="rubyconf-2016">
										RubyConf 2016 - 2016, Cincinnati
									</option>
									<option value="rubyconf-2017">
										RubyConf 2017 - 2017, New Orleans
									</option>
									<option value="rubyconf-2018">
										RubyConf 2018 - 2018, Los Angeles
									</option>
									<option value="rubyconf-2019">
										RubyConf 2019 - 2019, Nashville
									</option>
									<option value="scotlandphp-2017">
										ScotlandPHP 2017 - 2017, EICC, Edinburgh
									</option>
									<option value="solidayphp-serbia-2015">
										SOLIDay/PHP Serbia 2015 - 2015, Belgrade, Serbia
									</option>
									<option value="sunshinephp-2013">
										SunshinePHP 2013 - 2013,
									</option>
									<option value="sunshinephp-2014">
										SunshinePHP 2014 - 2014,
									</option>
									<option value="sunshinephp-2015">
										SunshinePHP 2015 - 2015,
									</option>
									<option value="sunshinephp-2016">
										SunshinePHP 2016 - 2016,
									</option>
									<option value="sunshinephp-2017">
										SunshinePHP 2017 - 2017,
									</option>
									<option value="sunshinephp-2018">
										SunshinePHP 2018 - 2018,
									</option>
									<option value="sunshinephp-2019">
										SunshinePHP 2019 - 2019,
									</option>
									<option value="uphill-conf-2018">
										Uphill Conf 2018 - 2018, Bern, Switzerland
									</option>
								</select>
								<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
									<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
										<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
									</svg>
								</div>
							</div>
						</div>
						<div class="w-full px-3 mb-6 md:w-1/4 md:mb-0">
							<button class="px-4 py-2 font-bold text-white bg-gray-500 rounded shadow hover:bg-gray-400 focus:shadow-outline focus:outline-none" type="submit">
								Search
							</button>

						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Dashboard Calendar -->
		<div class="overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow">
			<!-- <header class="px-4 py-5 sm:px-6"></header> -->
			<div class="px-4 py-5 sm:p-6">
				<div id='calendar'></div>
			</div>
		</div>

		<!-- Training module -->
		<article class="overflow-hidden bg-white rounded-lg shadow">
			<header class="px-4 sm:p-6">
				<div class="px-4 py-5 border-b border-gray-200 sm:px-6">
					<div class="flex flex-wrap items-center justify-between -mt-2 -ml-4 sm:flex-nowrap">
						<div class="mt-2 ml-4">
							<h3 class="flex items-center text-2xl font-medium leading-6 text-gray-900">
								<svg class="w-10 h-10 mr-1 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
								</svg>
								<span>Training</span>
							</h3>
						</div>
						<div class="flex-shrink-0 mt-2 ml-4">
							<button type="button" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">

								<span>Thinkrific</span>
								<svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
									<path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</header>
			<div class="px-4 sm:px-6">
				<div class="px-4 py-5 sm:px-6">
					<nav aria-label="Progress">
						<ol class="overflow-hidden">
							<li class="relative pb-10">
								<!-- Complete Step -->
								<div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-primary-600" aria-hidden="true"></div>
								<a href="#" class="relative flex items-start group">
									<span class="flex items-center h-9">
										<span class="relative z-10 flex items-center justify-center w-8 h-8 rounded-full bg-primary-600 group-hover:bg-primary-800">
											<!-- Heroicon name: check -->
											<svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
										</span>
									</span>
									<span class="flex flex-col min-w-0 ml-4">
										<span class="text-xs font-semibold tracking-wide uppercase">Module One</span>
										<span class="text-sm text-gray-500">Vitae sed mi luctus laoreet.</span>
									</span>
								</a>
							</li>

							<li class="relative pb-10">
								<!-- Current Step -->
								<div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
								<a href="#" class="relative flex items-start group" aria-current="step">
									<span class="flex items-center h-9" aria-hidden="true">
										<span class="relative z-10 flex items-center justify-center w-8 h-8 bg-white border-2 rounded-full border-primary-600">
											<span class="h-2.5 w-2.5 bg-primary-600 rounded-full"></span>
										</span>
									</span>
									<span class="flex flex-col min-w-0 ml-4">
										<span class="text-xs font-semibold tracking-wide uppercase text-primary-600">Module Two</span>
										<span class="text-sm text-gray-500">Cursus semper viverra facilisis et et some more.</span>
									</span>
								</a>
							</li>

							<li class="relative pb-10">
								<div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
								<a href="#" class="relative flex items-start group">
									<span class="flex items-center h-9" aria-hidden="true">
										<span class="relative z-10 flex items-center justify-center w-8 h-8 bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
											<span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
										</span>
									</span>
									<span class="flex flex-col min-w-0 ml-4">
										<span class="text-xs font-semibold tracking-wide text-gray-500 uppercase">Module 3</span>
										<span class="text-sm text-gray-500">Penatibus eu quis ante.</span>
									</span>
								</a>
							</li>

							<li class="relative pb-10">
								<div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
								<a href="#" class="relative flex items-start group">
									<span class="flex items-center h-9" aria-hidden="true">
										<span class="relative z-10 flex items-center justify-center w-8 h-8 bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
											<span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
										</span>
									</span>
									<span class="flex flex-col min-w-0 ml-4">
										<span class="text-xs font-semibold tracking-wide text-gray-500 uppercase">Module 4</span>
										<span class="text-sm text-gray-500">Faucibus nec enim leo et.</span>
									</span>
								</a>
							</li>

							<li class="relative">
								<a href="#" class="relative flex items-start group">
									<span class="flex items-center h-9" aria-hidden="true">
										<span class="relative z-10 flex items-center justify-center w-8 h-8 bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
											<span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
										</span>
									</span>
									<span class="flex flex-col min-w-0 ml-4">
										<span class="text-xs font-semibold tracking-wide text-gray-500 uppercase">Module Five</span>
										<span class="text-sm text-gray-500">Iusto et officia maiores porro ad non quas.</span>
									</span>
								</a>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</article>

		<!-- Families Awaiting Communities -->
		<article class="overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow">
			<div class="px-4 py-5 sm:p-6">
				<h3>Families Awaiting Communities</h3>

				Families Awaiting Communities
				Anthony and Kristin Oliva
				Church Match
				Added 07/22/2019

				Actions
				View
				Claim
				Ignore
				<form class="mt-4 sm:max-w-lg">
					<fieldset class="w-full">
              <!-- <label for="language" class="sr-only">Language</label> -->
              <div class="relative">
                <select id="language" name="language" class="block w-full py-2 pl-3 pr-10 text-base text-gray-900 bg-white border border-gray-300 rounded-md appearance-none bg-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option selected="">Active Care Communities assigned to me</option>
                  <option selected="">Active Care Communities assigned to my church(es)</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-400" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
</svg>
                </div>
              </div>
            </fieldset>


          </form>


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="overflow-hidden bg-white shadow sm:rounded-md">
  <ul class="divide-y divide-gray-200">
    <li>
      <a href="#" class="block hover:bg-gray-50">
        <div class="flex items-center px-4 py-4 sm:px-6">
          <div class="flex items-center flex-1 min-w-0">
            <div class="flex-shrink-0">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
              <div>
                <p class="text-sm font-medium text-indigo-600 truncate">Ricardo Cooper</p>
                <p class="flex items-center mt-2 text-sm text-gray-500">
                  <!-- Heroicon name: mail -->
                  <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="truncate">ricardo.cooper@example.com</span>
                </p>
              </div>
              <div class="hidden md:block">
                <div>
                  <p class="text-sm text-gray-900">
                    Applied on
                    <time datetime="2020-01-07">January 7, 2020</time>
                  </p>
                  <p class="flex items-center mt-2 text-sm text-gray-500">
                    <!-- Heroicon name: check-circle -->
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Completed phone screening
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <!-- Heroicon name: chevron-right -->
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
      </a>
    </li>

    <li>
      <a href="#" class="block hover:bg-gray-50">
        <div class="flex items-center px-4 py-4 sm:px-6">
          <div class="flex items-center flex-1 min-w-0">
            <div class="flex-shrink-0">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
              <div>
                <p class="text-sm font-medium text-indigo-600 truncate">Kristen Ramos</p>
                <p class="flex items-center mt-2 text-sm text-gray-500">
                  <!-- Heroicon name: mail -->
                  <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="truncate">kristen.ramos@example.com</span>
                </p>
              </div>
              <div class="hidden md:block">
                <div>
                  <p class="text-sm text-gray-900">
                    Applied on
                    <time datetime="2020-01-07">January 7, 2020</time>
                  </p>
                  <p class="flex items-center mt-2 text-sm text-gray-500">
                    <!-- Heroicon name: check-circle -->
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Completed phone screening
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <!-- Heroicon name: chevron-right -->
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
      </a>
    </li>

    <li>
      <a href="#" class="block hover:bg-gray-50">
        <div class="flex items-center px-4 py-4 sm:px-6">
          <div class="flex items-center flex-1 min-w-0">
            <div class="flex-shrink-0">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
              <div>
                <p class="text-sm font-medium text-indigo-600 truncate">Ted Fox</p>
                <p class="flex items-center mt-2 text-sm text-gray-500">
                  <!-- Heroicon name: mail -->
                  <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="truncate">ted.fox@example.com</span>
                </p>
              </div>
              <div class="hidden md:block">
                <div>
                  <p class="text-sm text-gray-900">
                    Applied on
                    <time datetime="2020-01-07">January 7, 2020</time>
                  </p>
                  <p class="flex items-center mt-2 text-sm text-gray-500">
                    <!-- Heroicon name: check-circle -->
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Completed phone screening
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <!-- Heroicon name: chevron-right -->
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
      </a>
    </li>
  </ul>
</div>




			</div>
		</article>


	</section>
</main>
