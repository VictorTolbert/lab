<form class="form-horizontal" id="form-modal-calendar-event-details" method="post" action="http://promiserves.test/events/save">


	<div class="modal-body modal-calendar-event-edit-body">
		<div class="">
			<div class="form-group">
				<div class="text-right col-sm-1 col-xs-1">
					<i class="fa fa-calendar-plus-o fa-2x"></i>
				</div>
				<div class="col-sm-11 col-xs-11">
					<input type="text" name="event_name" id="modal-calendar-event-edit-event-name" class="form-control modal-calendar-edit-element is-required" value="" placeholder="Calendar Item name (e.g. Event Name, Meal Name)" required>
				</div>
			</div>
		</div>

		<div class="" id="modal-calendar-event-edit-wrapper-id-affiliate">
			<div class="form-group">
				<div class="text-right col-sm-1 col-xs-1">
					<i class="fa fa-sitemap fa-2x"></i>
				</div>
				<div class="col-sm-6 col-xs-11">
					<select name="id_affiliate" id="modal-calendar-event-id-affiliate" class="form-control" required="required">
						<option value="0">Select an Affiliate</option>
						<option value="16">4KIDS</option>
						<option value="30">4KIDS of Central Texas</option>
						<option value="24">Agape of Central Alabama</option>
						<option value="35">Belong + Bloom</option>
						<option value="39">Centre County Orphan Alliance</option>
						<option value="9">Chosen For Life</option>
						<option value="8">Clement Arts</option>
						<option value="29">Coalition of Care</option>
						<option value="28">CoMission</option>
						<option value="20">Commission 127</option>
						<option value="44">DC127</option>
						<option value="36">Dwell Orphan Care</option>
						<option value="45">ema</option>
						<option value="21">Every Church Every Child</option>
						<option value="26">FAM Anchor Churches</option>
						<option value="7">Florida1.27</option>
						<option value="34">Fostering Family Ministries</option>
						<option value="18">Fostering Joy</option>
						<option value="12">Fostering the Family</option>
						<option value="32">GoProject</option>
						<option value="17">Grace Fellowship</option>
						<option value="5">Hands of Hope</option>
						<option value="25">Hope 1312 Collective</option>
						<option value="19">Hope Community Church</option>
						<option value="15">Kansas City Gracepoint</option>
						<option value="38">Nebraska 117</option>
						<option value="33">New Oaks Community</option>
						<option value="40">Ohio Ministry Network</option>
						<option value="14">Olive Crest Family Care</option>
						<option value="37">Project Belong</option>
						<option value="1" selected="selected">Promise686</option>
						<option value="27">Restoration 225</option>
						<option value="6">Restoration Rome</option>
						<option value="43">South Texas Alliance for Orphans</option>
						<option value="13">Starfish Ministry</option>
						<option value="42">The Advocate Mission</option>
						<option value="4">Welcomed</option>
						<option value="22">Wellroot Family Services</option>
					</select>
				</div>
			</div>
		</div>
		<div class="" id="modal-calendar-event-edit-wrapper-event-type">
			<div class="form-group">
				<div class="text-right col-sm-1 col-xs-1">
					<i class="fa fa-calendar fa-2x"></i>
				</div>
				<div class="col-sm-6 col-xs-11">
					<select name="event_type" id="modal-calendar-event-edit-event-type" required class="form-control modal-calendar-edit-element col-xs-12 col-sm-12">
						<option value="">Select a Calendar Item Type</option>
						<optgroup label="Events" id="modal-calendar-event-edit-event-type-optgroup-event">
							<option value="event_awareness" data-cat="training">Awareness Event</option>
							<option value="event_training" data-cat="training">Orientation Event</option>
							<option value="event_combined" data-cat="training">Awareness / Orientation Event</option>
						</optgroup>
						<optgroup label="Meals" id="modal-calendar-event-edit-event-type-optgroup-meal">
							<option value="event_meal_reg" data-showidcommunity="1" data-nameassignee="Meal Provider(s)" data-namecontact="Team Leader(s)" data-cat="meal">Regular Meal</option>
							<option value="event_meal_extra" data-showidcommunity="1" data-nameassignee="Meal Provider(s)" data-namecontact="Team Leader(s)" data-cat="meal">Extra Meal</option>
						</optgroup>
						<optgroup label="Needs" id="modal-calendar-event-edit-event-type-optgroup-need">
							<option value="event_need_transport" data-showidcommunity="1" data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Transportation</option>
							<option value="event_need_babysitting" data-showidcommunity="1" data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Babysitting</option>
							<option value="event_need_mentoring" data-showidcommunity="1" data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Mentoring</option>
							<option value="event_need_service" data-showidcommunity="1" data-nameassignee="Need Fulfiller(s)" data-namecontact="Need Organizer(s)" data-cat="need">Service Project</option>
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
				<div class="text-right col-sm-1 col-xs-1">
					<i class="fa fa-users fa-2x"></i>
				</div>
				<div class="col-sm-11 col-xs-11">
					<div class="control-group">

						<select name="id_community" id="modal-calendar-event-edit-event-id-community" class="form-control is-required modal-calendar-edit-element">
							<option value="">Select a community</option>
							<option value="2038" data-idchurch="" style="color: #aaa;"> (1st)</option>
							<option value="2066" data-idchurch="" style="color: #aaa;"> (1st)</option>
							<option value="2167" data-idchurch="" style="color: #aaa;"> (1st)</option>
							<option value="1683" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="1832" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="1971" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2081" data-idchurch="2117" style="color: #aaa;">(1st)</option>
							<option value="2347" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2471" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2478" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2482" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2485" data-idchurch="1291" style="color: #aaa;">(1st)</option>
							<option value="2498" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2499" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2510" data-idchurch="2550" style="color: #aaa;">(1st)</option>
							<option value="2517" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2518" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2519" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2520" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2536" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2538" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2546" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2554" data-idchurch="" style="color: #aaa;">(1st)</option>
							<option value="2006" data-idchurch="1505" style="color: #000;"><strong> Brad and Christina Cowherd(1st) - Active</strong></option>
							<option value="1958" data-idchurch="1272" style="color: #000;"><strong> Horner, Jeff and Elizabeth(3rd) - Active</strong></option>
							<option value="1706" data-idchurch="1505" style="color: #000;"><strong> Lee Del and Fred Gardner(1st) - Active</strong></option>
							<option value="1927" data-idchurch="1685" style="color: #000;"><strong> Routledge team(1st) - Active</strong></option>
							<option value="1725" data-idchurch="1505" style="color: #000;"><strong> Timothy and Jennifer Cardinal(1st) - Active</strong></option>
							<option value="1617" data-idchurch="1336" style="color: #aaa;">Aaron & Rebecca Stinson(1st)</option>
							<option value="2452" data-idchurch="1885" style="color: #000;"><strong>Abadjian, Shant and Jen(1st) - Active</strong></option>
							<option value="1977" data-idchurch="1940" style="color: #000;"><strong>Abraham, Scott and Beth(1st) - Active</strong></option>
							<option value="1097" data-idchurch="1275" style="color: #000;"><strong>Accardi, Richard & Kim (1st) - Active</strong></option>
							<option value="1655" data-idchurch="1505" style="color: #aaa;">Adam and Caitlin Nations(1st)</option>
							<option value="1893" data-idchurch="1885" style="color: #000;"><strong>Adams(1st) - Active</strong></option>
							<option value="1799" data-idchurch="1673" style="color: #000;"><strong>Adams Family(1st) - Active</strong></option>
							<option value="2241" data-idchurch="2110" style="color: #000;"><strong>Adams, Jake and Sarah(1st) - Active</strong></option>
							<option value="1689" data-idchurch="1678" style="color: #000;"><strong>Adams, John and Cassie(1st) - Active</strong></option>
							<option value="2112" data-idchurch="1568" style="color: #000;"><strong>Adyniec, Gary and Vicki(3rd) - Active</strong></option>
							<option value="2074" data-idchurch="1622" style="color: #000;"><strong>Aghaei , Maryam(1st) - Active</strong></option>
							<option value="1290" data-idchurch="1288" style="color: #aaa;">Albury, Dusty & Heather(1st)</option>
							<option value="1441" data-idchurch="0" style="color: #000;"><strong>Alderson, Bryce & Nicole(1st) - Active</strong></option>
							<option value="1774" data-idchurch="1595" style="color: #000;"><strong>Alec O'Conner and Madison Morgan(1st) - Active</strong></option>
							<option value="1847" data-idchurch="1345" style="color: #aaa;">Alfonso and Shalondra Taylor(1st)</option>
							<option value="2000" data-idchurch="1428" style="color: #000;"><strong>Alkire, Heather(1st) - Active</strong></option>
							<option value="2075" data-idchurch="1208" style="color: #aaa;">Alkire, Mary(1st)</option>
							<option value="1625" data-idchurch="1336" style="color: #000;"><strong>Allan & Amanda Rice(1st) - Active</strong></option>
							<option value="1578" data-idchurch="1367" style="color: #aaa;">Allen & Marcia Crosby(1st)</option>
							<option value="1268" data-idchurch="1332" style="color: #000;"><strong>Allen, Josh & Sable (1st) - Active</strong></option>
							<option value="2013" data-idchurch="2064" style="color: #aaa;">Allen, Laurie and Mike(1st)</option>
							<option value="2109" data-idchurch="1810" style="color: #aaa;">Allen, Wendy and Jason(1st)</option>
							<option value="1702" data-idchurch="1505" style="color: #000;"><strong>Amanda Merida Group(1st) - Active</strong></option>
							<option value="1858" data-idchurch="1364" style="color: #000;"><strong>Amato, Olivia and Mitchell(1st) - Active</strong></option>
							<option value="1567" data-idchurch="1332" style="color: #aaa;">Amy McFall(1st)</option>
							<option value="2153" data-idchurch="1888" style="color: #aaa;">Anderson, Alexis(1st)</option>
							<option value="1496" data-idchurch="1428" style="color: #000;"><strong>Anderson, Josh & Carlin(1st) - Active</strong></option>
							<option value="1019" data-idchurch="1209" style="color: #aaa;">Anderson, Korey & Lindsey(1st)</option>
							<option value="1494" data-idchurch="1506" style="color: #000;"><strong>Andrew & Bethany James(1st) - Active</strong></option>
							<option value="2505" data-idchurch="2260" style="color: #000;"><strong>Andrews Family(1st) - Active</strong></option>
							<option value="1642" data-idchurch="" style="color: #000;"><strong>Annie Bullington(1st) - Active</strong></option>
							<option value="1321" data-idchurch="1342" style="color: #000;"><strong>Araujo, Paulo & Luci (1st) - Active</strong></option>
							<option value="1450" data-idchurch="1364" style="color: #aaa;">Arkin, Andy(1st)</option>
							<option value="1190" data-idchurch="1333" style="color: #000;"><strong>Arnold, Frank & Ann (1st) - Active</strong></option>
							<option value="2433" data-idchurch="1851" style="color: #000;"><strong>Arnold, Tim and Dawn(1st) - Active</strong></option>
							<option value="1008" data-idchurch="1202" style="color: #aaa;">Arrington, Tom & Alison(1st)</option>
							<option value="2404" data-idchurch="1885" style="color: #aaa;">Ashford(1st)</option>
							<option value="2031" data-idchurch="1685" style="color: #000;"><strong>Atkins team(1st) - Active</strong></option>
							<option value="1833" data-idchurch="1689" style="color: #000;"><strong>Atkinson, Patrick and Aimee(1st) - Active</strong></option>
							<option value="2071" data-idchurch="1595" style="color: #000;"><strong>Aubrey & Chris Jenkins(1st) - Active</strong></option>
							<option value="1744" data-idchurch="1682" style="color: #aaa;">Austin, Kevin and Angie(1st)</option>
							<option value="1646" data-idchurch="1620" style="color: #aaa;">Ayers, Ryan & Andi(1st)</option>
							<option value="1278" data-idchurch="" style="color: #000;"><strong>Ayers, Ryan & Andrea (1st) - Active</strong></option>
							<option value="2180" data-idchurch="1599" style="color: #000;"><strong>Bagby, Jennifer(1st) - Active</strong></option>
							<option value="1879" data-idchurch="1353" style="color: #aaa;">Baggett, Jonathan and Carolyn(1st)</option>
							<option value="1790" data-idchurch="1515" style="color: #000;"><strong>Bailey, Rebecca and Corrine(1st) - Active</strong></option>
							<option value="2234" data-idchurch="1336" style="color: #000;"><strong>Baine, Mike and Brianne(2nd) - Active</strong></option>
							<option value="1071" data-idchurch="1271" style="color: #aaa;">Baird, Amanda & Jacob (1st)</option>
							<option value="1035" data-idchurch="1288" style="color: #000;"><strong>Baird, Paul & Tracy(1st) - Active</strong></option>
							<option value="2227" data-idchurch="1291" style="color: #000;"><strong>Balbuena, Adaluz(1st) - Active</strong></option>
							<option value="1119" data-idchurch="1283" style="color: #000;"><strong>Ballantine, Jason & Holly (1st) - Active</strong></option>
							<option value="1897" data-idchurch="1918" style="color: #000;"><strong>Ballard-Borsuk(1st) - Active</strong></option>
							<option value="1936" data-idchurch="1766" style="color: #000;"><strong>Banks, Sarah Steele(1st) - Active</strong></option>
							<option value="2273" data-idchurch="1588" style="color: #aaa;">Banta, Bryan and Dustyn(1st)</option>
							<option value="1945" data-idchurch="1595" style="color: #000;"><strong>Barbieri Family(1st) - Active</strong></option>
							<option value="1204" data-idchurch="1336" style="color: #000;"><strong>Barefoot, Steve & Jill (1st) - Active</strong></option>
							<option value="1784" data-idchurch="1311" style="color: #aaa;">Barge-Hood, Patrick Hood and Kristen Barge-Hood(1st)</option>
							<option value="2056" data-idchurch="2181" style="color: #aaa;">Barker, Ryan and Jessica(1st)</option>
							<option value="1016" data-idchurch="1207" style="color: #aaa;">Barnes, Justin & Nicole(1st)</option>
							<option value="2336" data-idchurch="1568" style="color: #000;"><strong>Barnes, Michael and Cara(1st) - Active</strong></option>
							<option value="1487" data-idchurch="1286" style="color: #aaa;">Barrett, John & Jolene(1st)</option>
							<option value="2059" data-idchurch="1885" style="color: #000;"><strong>Barrow(1st) - Active</strong></option>
							<option value="1075" data-idchurch="1271" style="color: #000;"><strong>Batchelor, Bill & Coley(1st) - Active</strong></option>
							<option value="1851" data-idchurch="1486" style="color: #000;"><strong>Bateman, Rochele and Daniel(1st) - Active</strong></option>
							<option value="2325" data-idchurch="2320" style="color: #000;"><strong>Baum, Danielle(1st) - Active</strong></option>
							<option value="2113" data-idchurch="1568" style="color: #000;"><strong>Bautista, Danny and Julie(1st) - Active</strong></option>
							<option value="1174" data-idchurch="1294" style="color: #aaa;">Bearden, Brody & Trisha (1st)</option>
							<option value="1921" data-idchurch="1356" style="color: #000;"><strong>Beavers, Corey and Jeannie(1st) - Active</strong></option>
							<option value="2009" data-idchurch="1888" style="color: #aaa;">Bechler, Rachel and Kevin(1st)</option>
							<option value="2106" data-idchurch="1810" style="color: #aaa;">Becker, Bethany and Adam(1st)</option>
							<option value="1999" data-idchurch="1428" style="color: #000;"><strong>Beckling, John and Amy(1st) - Active</strong></option>
							<option value="2503" data-idchurch="1956" style="color: #000;"><strong>Becky and Charlie Moss(1st) - Active</strong></option>
							<option value="1057" data-idchurch="1222" style="color: #000;"><strong>Bedient, Ben & Jessica (1st) - Active</strong></option>
							<option value="1730" data-idchurch="1325" style="color: #000;"><strong>Bedient, Ben and Jessica(1st) - Active</strong></option>
							<option value="2551" data-idchurch="2643" style="color: #aaa;">Bedwell, Wes and Michelle(1st)</option>
							<option value="2114" data-idchurch="1568" style="color: #000;"><strong>Bell, Joshua and Brooke(1st) - Active</strong></option>
							<option value="2230" data-idchurch="1568" style="color: #000;"><strong>Bell, Ryan and Theresa(1st) - Active</strong></option>
							<option value="2443" data-idchurch="1851" style="color: #000;"><strong>Belzile, Josh and Shannon(1st) - Active</strong></option>
							<option value="1104" data-idchurch="1275" style="color: #aaa;">Bennett, Brian & Laine (1st)</option>
							<option value="2434" data-idchurch="1851" style="color: #000;"><strong>Bennett, Jeremy and Faith(1st) - Active</strong></option>
							<option value="1220" data-idchurch="1351" style="color: #000;"><strong>Benson, Tati (1st) - Active</strong></option>
							<option value="2318" data-idchurch="1852" style="color: #000;"><strong>Bentley, Mark and Nicole(1st) - Active</strong></option>
							<option value="2048" data-idchurch="1900" style="color: #aaa;">Berger, John and Kathy(2nd)</option>
							<option value="1993" data-idchurch="1900" style="color: #aaa;">Berger, Kathy and John(1st)</option>
							<option value="2079" data-idchurch="1333" style="color: #000;"><strong>Berglund, Molly and Cam(1st) - Active</strong></option>
							<option value="2147" data-idchurch="1885" style="color: #000;"><strong>Bergman(1st) - Active</strong></option>
							<option value="2464" data-idchurch="2646" style="color: #000;"><strong>Berry, Joel and Heather(1st) - Active</strong></option>
							<option value="1504" data-idchurch="1651" style="color: #aaa;">Bess(1st)</option>
							<option value="1525" data-idchurch="1333" style="color: #aaa;">Bethany & Brandon Dozier(1st)</option>
							<option value="2306" data-idchurch="1515" style="color: #000;"><strong>Bevel, Jeff and Angie(1st) - Active</strong></option>
							<option value="1082" data-idchurch="1283" style="color: #aaa;">Bilbro, Blake & Julie (1st)</option>
							<option value="1526" data-idchurch="1333" style="color: #000;"><strong>Billie Rae and Jimmy King(1st) - Active</strong></option>
							<option value="2447" data-idchurch="1851" style="color: #000;"><strong>Billingsley, Jason and Dala(1st) - Active</strong></option>
							<option value="2194" data-idchurch="2426" style="color: #000;"><strong>Bird, Gus and Charis(1st) - Active</strong></option>
							<option value="2181" data-idchurch="2106" style="color: #aaa;">Birschbach, Jill and Pat(1st)</option>
							<option value="2381" data-idchurch="1320" style="color: #aaa;">Bishop, Abbey and Cody(1st)</option>
							<option value="2382" data-idchurch="1320" style="color: #aaa;">Bishop, Cody and Abby(1st)</option>
							<option value="2521" data-idchurch="1900" style="color: #aaa;">Blackmon, Jake and Christina(1st)</option>
							<option value="2084" data-idchurch="2060" style="color: #aaa;">Blake, Kyle and Kendall(1st)</option>
							<option value="1092" data-idchurch="1283" style="color: #000;"><strong>Blaze, Larry & Wendy (1st) - Active</strong></option>
							<option value="2528" data-idchurch="1322" style="color: #000;"><strong>Bloom, Rebecca(1st) - Active</strong></option>
							<option value="2145" data-idchurch="1588" style="color: #000;"><strong>Blount, Carolyn(1st) - Active</strong></option>
							<option value="1193" data-idchurch="1335" style="color: #000;"><strong>Blouse, Jimmy & Kasey (1st) - Active</strong></option>
							<option value="1914" data-idchurch="1673" style="color: #000;"><strong>Bock Family(1st) - Active</strong></option>
							<option value="2426" data-idchurch="1889" style="color: #aaa;">Bodet, Emily(1st)</option>
							<option value="1249" data-idchurch="1315" style="color: #000;"><strong>Boik, Bob & Stephanie (1st) - Active</strong></option>
							<option value="2002" data-idchurch="1428" style="color: #aaa;">Bolen, Matt and Jennifer(1st)</option>
							<option value="1020" data-idchurch="1209" style="color: #aaa;">Bollinger Family(1st)</option>
							<option value="2500" data-idchurch="1622" style="color: #aaa;">Bondoc, Maria(1st)</option>
							<option value="1456" data-idchurch="1494" style="color: #000;"><strong>Borud Care Community(1st) - Active</strong></option>
							<option value="1309" data-idchurch="1309" style="color: #aaa;">Boswell, Jason & Natalie(1st)</option>
							<option value="1676" data-idchurch="1309" style="color: #000;"><strong>Boswell, Landon and Madison(1st) - Active</strong></option>
							<option value="1620" data-idchurch="1336" style="color: #aaa;">Brad & Cat Kinney(1st)</option>
							<option value="1519" data-idchurch="1333" style="color: #000;"><strong>Brad & Sallie Starrett(1st) - Active</strong></option>
							<option value="2073" data-idchurch="1518" style="color: #000;"><strong>Bradberry, Amanda(1st) - Active</strong></option>
							<option value="1692" data-idchurch="1353" style="color: #aaa;">Bradley, Zach and Robin(1st)</option>
							<option value="1267" data-idchurch="1333" style="color: #aaa;">Bradum, Randy & Laura (1st)</option>
							<option value="2028" data-idchurch="1485" style="color: #000;"><strong>Bramstedt, Jerry and Julie(1st) - Active</strong></option>
							<option value="1573" data-idchurch="1262" style="color: #000;"><strong>Bran & Carolyn Mills(1st) - Active</strong></option>
							<option value="1604" data-idchurch="1300" style="color: #aaa;">Brandon & Brooke Sears(1st)</option>
							<option value="1587" data-idchurch="1294" style="color: #000;"><strong>Brandon & Tawanda Brown(1st) - Active</strong></option>
							<option value="1292" data-idchurch="1352" style="color: #000;"><strong>Brannon, Leah & Rachel (1st) - Active</strong></option>
							<option value="1218" data-idchurch="1351" style="color: #000;"><strong>Braucher, Chuck & Karen (1st) - Active</strong></option>
							<option value="2179" data-idchurch="1599" style="color: #000;"><strong>Breckwoldt, Ashley(1st) - Active</strong></option>
							<option value="1720" data-idchurch="1622" style="color: #000;"><strong>Brehme, Jennifer(1st) - Active</strong></option>
							<option value="1430" data-idchurch="1475" style="color: #aaa;">Breniser(1st)</option>
							<option value="1532" data-idchurch="1349" style="color: #aaa;">Brent & Meredith Dykes(1st)</option>
							<option value="1621" data-idchurch="1336" style="color: #000;"><strong>Brentt & Stephanie Wimpey(1st) - Active</strong></option>
							<option value="1520" data-idchurch="1333" style="color: #aaa;">Brett & Michelle Gamblin(3rd)</option>
							<option value="1481" data-idchurch="1506" style="color: #aaa;">Brett & Nicole Bradley(1st)</option>
							<option value="1618" data-idchurch="1336" style="color: #aaa;">Brian & Shari King(1st)</option>
							<option value="1619" data-idchurch="1336" style="color: #aaa;">Brian & Shari King(2nd)</option>
							<option value="1200" data-idchurch="1336" style="color: #000;"><strong>Bringolf, Robert & Deanna (1st) - Active</strong></option>
							<option value="1289" data-idchurch="1351" style="color: #000;"><strong>Broacher, Karen & Chuck (1st) - Active</strong></option>
							<option value="1972" data-idchurch="1594" style="color: #aaa;">Brockmeyer , Amber(1st)</option>
							<option value="1546" data-idchurch="1345" style="color: #aaa;">Brody & Trisha Bearden(2nd)</option>
							<option value="1586" data-idchurch="1294" style="color: #aaa;">Brody & Trisha Bearden(1st)</option>
							<option value="1601" data-idchurch="1223" style="color: #aaa;">Brody & Trisha Bearden(3rd)</option>
							<option value="1953" data-idchurch="1382" style="color: #000;"><strong>Brooke, Michael and Leigh(1st) - Active</strong></option>
							<option value="2110" data-idchurch="1492" style="color: #aaa;">Brooks, Jessica and Bryon(1st)</option>
							<option value="1674" data-idchurch="1309" style="color: #000;"><strong>Brooks, Morgan and Gail(1st) - Active</strong></option>
							<option value="1165" data-idchurch="1293" style="color: #000;"><strong>Brooks, Steve & Kelly (1st) - Active</strong></option>
							<option value="2088" data-idchurch="1293" style="color: #aaa;">Brooks, Steven and Kelly(1st)</option>
							<option value="2525" data-idchurch="2084" style="color: #aaa;">Brown Family(1st)</option>
							<option value="1170" data-idchurch="1294" style="color: #aaa;">Brown, Caleb & Jenny (1st)</option>
							<option value="1256" data-idchurch="1320" style="color: #000;"><strong>Brown, Jene (1st) - Active</strong></option>
							<option value="1911" data-idchurch="1226" style="color: #000;"><strong>Brown, Levonia(1st) - Active</strong></option>
							<option value="1214" data-idchurch="1350" style="color: #aaa;">Brown, Margaret (1st)</option>
							<option value="2437" data-idchurch="1851" style="color: #000;"><strong>Brown, Nate and Rachael(1st) - Active</strong></option>
							<option value="1561" data-idchurch="1293" style="color: #aaa;">Bruce MacPherson(1st)</option>
							<option value="1329" data-idchurch="1366" style="color: #aaa;">Brudney, Philip & Rachel(1st)</option>
							<option value="1462" data-idchurch="1483" style="color: #000;"><strong>Bruesewitz Community(1st) - Active</strong></option>
							<option value="1448" data-idchurch="0" style="color: #000;"><strong>Brundgardt, Matt & Lindsey(1st) - Active</strong></option>
							<option value="1817" data-idchurch="1594" style="color: #000;"><strong>Bruno Family(1st) - Active</strong></option>
							<option value="1498" data-idchurch="1383" style="color: #000;"><strong>Bryant, Joseph & Amanda(1st) - Active</strong></option>
							<option value="1770" data-idchurch="1327" style="color: #000;"><strong>Bryant, Sara and Chris(1st) - Active</strong></option>
							<option value="1143" data-idchurch="1288" style="color: #aaa;">Bryant, Ty & Kristen(1st)</option>
							<option value="1743" data-idchurch="1682" style="color: #aaa;">Bryson, Katie and Clint(1st)</option>
							<option value="1890" data-idchurch="1261" style="color: #000;"><strong>Buchanan, Karen and Eric(1st) - Active</strong></option>
							<option value="1639" data-idchurch="1336" style="color: #000;"><strong>Bucky & Stacy Kirk(1st) - Active</strong></option>
							<option value="1483" data-idchurch="1242" style="color: #aaa;">Buffington, Brian & Brooke(1st)</option>
							<option value="2018" data-idchurch="1444" style="color: #000;"><strong>Bulko, Becky(1st) - Active</strong></option>
							<option value="2157" data-idchurch="1461" style="color: #000;"><strong>Bulko, Becky(1st) - Active</strong></option>
							<option value="1654" data-idchurch="1240" style="color: #aaa;">Bullington, Annie(1st)</option>
							<option value="1098" data-idchurch="1275" style="color: #aaa;">Burchik, Brian & Erin (1st)</option>
							<option value="1059" data-idchurch="1226" style="color: #000;"><strong>Burg, Tim & Karen (1st) - Active</strong></option>
							<option value="2211" data-idchurch="1737" style="color: #aaa;">Burks, Will and Jessica(1st)</option>
							<option value="2351" data-idchurch="1333" style="color: #000;"><strong>Burnsed, Joel and Liza(1st) - Active</strong></option>
							<option value="2019" data-idchurch="1461" style="color: #000;"><strong>Burrell , Tandi and Robbie(1st) - Active</strong></option>
							<option value="1463" data-idchurch="1483" style="color: #aaa;">Burris Community(1st)</option>
							<option value="1047" data-idchurch="1220" style="color: #000;"><strong>Burris, Danielle (1st) - Active</strong></option>
							<option value="2352" data-idchurch="1718" style="color: #000;"><strong>Burt, Evan and Rebecca(1st) - Active</strong></option>
							<option value="2165" data-idchurch="2283" style="color: #000;"><strong>Burtelson, Chad and Kelly(1st) - Active</strong></option>
							<option value="2024" data-idchurch="1996" style="color: #000;"><strong>Bussart, Cindy and Jeremy(1st) - Active</strong></option>
							<option value="2466" data-idchurch="1630" style="color: #aaa;">Butler Family(1st)</option>
							<option value="2307" data-idchurch="1515" style="color: #000;"><strong>Butler, Chris and Brittany(1st) - Active</strong></option>
							<option value="1749" data-idchurch="1518" style="color: #000;"><strong>Bybee, Kristy(1st) - Active</strong></option>
							<option value="2229" data-idchurch="1960" style="color: #000;"><strong>Cahall, Daniel and CeCe(2nd) - Active</strong></option>
							<option value="2058" data-idchurch="1960" style="color: #aaa;">Cahall, Daniel and CeCe(1st)</option>
							<option value="1266" data-idchurch="1332" style="color: #000;"><strong>Cahoon, Gavin & Michelle (1st) - Active</strong></option>
							<option value="1585" data-idchurch="1294" style="color: #aaa;">Caleb & Jenny Brown(1st)</option>
							<option value="1549" data-idchurch="1273" style="color: #aaa;">Cameron & Erin Woodard(1st)</option>
							<option value="1211" data-idchurch="1349" style="color: #aaa;">Cameron, Bessie (1st)</option>
							<option value="2092" data-idchurch="1349" style="color: #000;"><strong>Cameron, Bessie(1st) - Active</strong></option>
							<option value="2115" data-idchurch="1568" style="color: #aaa;">Campbell, Jonathan and Angie(1st)</option>
							<option value="2060" data-idchurch="1885" style="color: #aaa;">Campos(1st)</option>
							<option value="1417" data-idchurch="1270" style="color: #000;"><strong>Canary, LAKISHA(1st) - Active</strong></option>
							<option value="2020" data-idchurch="1505" style="color: #000;"><strong>Candace & Michael Hebert(1st) - Active</strong></option>
							<option value="2258" data-idchurch="1515" style="color: #000;"><strong>Cape, Breanna(1st) - Active</strong></option>
							<option value="1078" data-idchurch="1283" style="color: #aaa;">Capps, Danielle (1st)</option>
							<option value="1407" data-idchurch="1270" style="color: #aaa;">Cappuccio, Tony & Karma(1st)</option>
							<option value="2021" data-idchurch="1505" style="color: #aaa;">Carelle Bailey(1st)</option>
							<option value="1584" data-idchurch="1294" style="color: #aaa;">Carl & Alicea Jones(1st)</option>
							<option value="1320" data-idchurch="1323" style="color: #000;"><strong>Carlile, Dustin & Kelsie(2nd) - Active</strong></option>
							<option value="1797" data-idchurch="1515" style="color: #aaa;">Carpenter, Clay and Stacy(2nd)</option>
							<option value="1665" data-idchurch="1219" style="color: #aaa;">Carr, Nick and Katina(1st)</option>
							<option value="2378" data-idchurch="1208" style="color: #000;"><strong>Carroll, Crisany & Hunter(1st) - Active</strong></option>
							<option value="1147" data-idchurch="1288" style="color: #aaa;">Carson, Ryan & April(1st)</option>
							<option value="1731" data-idchurch="1260" style="color: #aaa;">Carter, Christopher and Brianne(1st)</option>
							<option value="2052" data-idchurch="1996" style="color: #aaa;">Carter, Scott(1st)</option>
							<option value="1405" data-idchurch="1386" style="color: #000;"><strong>Casas, Shannon & Brendan (1st) - Active</strong></option>
							<option value="2184" data-idchurch="1987" style="color: #000;"><strong>Cash, Nick and Dianna(1st) - Active</strong></option>
							<option value="2111" data-idchurch="1242" style="color: #000;"><strong>Cash, Zack and Amanda(1st) - Active</strong></option>
							<option value="2033" data-idchurch="1618" style="color: #000;"><strong>Casselbury, Pat and Jori(1st) - Active</strong></option>
							<option value="1524" data-idchurch="1333" style="color: #aaa;">Cat Vereen(1st)</option>
							<option value="2080" data-idchurch="1333" style="color: #000;"><strong>Cat Vereen and Mary Thompson(2nd) - Active</strong></option>
							<option value="2183" data-idchurch="1505" style="color: #aaa;">Cathy Thomas(1st)</option>
							<option value="2548" data-idchurch="2643" style="color: #aaa;">Catlin, Seth and Camil(1st)</option>
							<option value="2395" data-idchurch="2593" style="color: #000;"><strong>Caudill, Richard(1st) - Active</strong></option>
							<option value="1908" data-idchurch="1506" style="color: #000;"><strong>Celestino, Courtney and Corey(1st) - Active</strong></option>
							<option value="1027" data-idchurch="1278" style="color: #aaa;">Chalker, Willie & Laura(1st)</option>
							<option value="1583" data-idchurch="1294" style="color: #aaa;">Charlotte Sims(1st)</option>
							<option value="1432" data-idchurch="1478" style="color: #000;"><strong>Charnley(1st) - Active</strong></option>
							<option value="1032" data-idchurch="1278" style="color: #aaa;">Charron, Brian & Wendy(1st)</option>
							<option value="1412" data-idchurch="1461" style="color: #000;"><strong>Chastain, Patti(1st) - Active</strong></option>
							<option value="1250" data-idchurch="1315" style="color: #000;"><strong>Cheatham, Heather & John (1st) - Active</strong></option>
							<option value="2043" data-idchurch="1505" style="color: #000;"><strong>Chelsie and Kevin Berio(1st) - Active</strong></option>
							<option value="2281" data-idchurch="1588" style="color: #aaa;">Chery, Jean and Marie(1st)</option>
							<option value="1849" data-idchurch="1506" style="color: #000;"><strong>Chiara Hickok(1st) - Active</strong></option>
							<option value="2282" data-idchurch="1568" style="color: #000;"><strong>Chica Guizado, Jasser and Katelyn(1st) - Active</strong></option>
							<option value="2170" data-idchurch="2284" style="color: #aaa;">Chidester, Andrea(1st)</option>
							<option value="1615" data-idchurch="1336" style="color: #aaa;">Chris & Chelsea Deans(1st)</option>
							<option value="2430" data-idchurch="1515" style="color: #aaa;">Christoffersen, Brandy(1st)</option>
							<option value="1803" data-idchurch="1672" style="color: #000;"><strong>Christopher, Tommy and Diane(1st) - Active</strong></option>
							<option value="1534" data-idchurch="1349" style="color: #aaa;">Chuck & Ashley Ivey(1st)</option>
							<option value="1535" data-idchurch="1349" style="color: #aaa;">Chuck & Ashley Ivey(2nd)</option>
							<option value="1536" data-idchurch="1349" style="color: #000;"><strong>Chuck & Ashley Ivey(3rd) - Active</strong></option>
							<option value="1606" data-idchurch="1351" style="color: #aaa;">Chuck & Karen Braucher(1st)</option>
							<option value="2116" data-idchurch="1568" style="color: #000;"><strong>Churchill, Mark and Donna(1st) - Active</strong></option>
							<option value="1662" data-idchurch="1219" style="color: #000;"><strong>Clare, Jerry and Sharon(1st) - Active</strong></option>
							<option value="2042" data-idchurch="1506" style="color: #000;"><strong>Clark Family(1st) - Active</strong></option>
							<option value="1497" data-idchurch="1428" style="color: #aaa;">Clark, Crissy(1st)</option>
							<option value="1240" data-idchurch="1300" style="color: #000;"><strong>Clark, Lee & Jackie (1st) - Active</strong></option>
							<option value="1172" data-idchurch="1293" style="color: #000;"><strong>Clement, Justin & Elizabeth (1st) - Active</strong></option>
							<option value="1530" data-idchurch="1261" style="color: #aaa;">Clint & Meg Bullock(1st)</option>
							<option value="1669" data-idchurch="1505" style="color: #aaa;">Closed group -Stacia Liptak(1st)</option>
							<option value="2265" data-idchurch="2235" style="color: #aaa;">Cluff, Cody and Richelle(1st)</option>
							<option value="1878" data-idchurch="1353" style="color: #aaa;">Cofield, Charles and Blair(1st)</option>
							<option value="1805" data-idchurch="1515" style="color: #aaa;">Cofran, John and Sunday(1st)</option>
							<option value="2200" data-idchurch="2136" style="color: #000;"><strong>Colbert, Jen(1st) - Active</strong></option>
							<option value="2349" data-idchurch="1505" style="color: #000;"><strong>Cole, Darek and Heather(1st) - Active</strong></option>
							<option value="1334" data-idchurch="1327" style="color: #000;"><strong>Collazo, Yadira & Victor(1st) - Active</strong></option>
							<option value="2219" data-idchurch="1588" style="color: #aaa;">Collins, Kathy(1st)</option>
							<option value="1226" data-idchurch="1356" style="color: #000;"><strong>Colston, Joseph & Kristen (1st) - Active</strong></option>
							<option value="1715" data-idchurch="1356" style="color: #000;"><strong>Colston, Joseph and Kristen(1st) - Active</strong></option>
							<option value="2248" data-idchurch="2454" style="color: #000;"><strong>Conner Family(1st) - Active</strong></option>
							<option value="2402" data-idchurch="2594" style="color: #000;"><strong>Conner, Adam and Kensie(1st) - Active</strong></option>
							<option value="1224" data-idchurch="1356" style="color: #aaa;">Cooner, Nicholas & Sarah (1st)</option>
							<option value="1077" data-idchurch="1283" style="color: #aaa;">Cooper, Joe & Candy (1st)</option>
							<option value="2287" data-idchurch="1588" style="color: #aaa;">Cooper, Sandford and Valerie(1st)</option>
							<option value="1844" data-idchurch="1296" style="color: #000;"><strong>Copeland, Dawn and Dawn(1st) - Active</strong></option>
							<option value="1760" data-idchurch="1739" style="color: #aaa;">Cornwall, Micheal and Ashley(1st)</option>
							<option value="2226" data-idchurch="1506" style="color: #000;"><strong>Cortines, John and Megan(1st) - Active</strong></option>
							<option value="2190" data-idchurch="1898" style="color: #000;"><strong>Cotton, Debbie(1st) - Active</strong></option>
							<option value="1795" data-idchurch="1515" style="color: #aaa;">Couchman, Morgan(1st)</option>
							<option value="1080" data-idchurch="1283" style="color: #aaa;">Coulston, Michele (1st)</option>
							<option value="1087" data-idchurch="1287" style="color: #aaa;">Coulston, Michele (1st)</option>
							<option value="2555" data-idchurch="2302" style="color: #aaa;">Counts, Paul and Railey(1st)</option>
							<option value="1279" data-idchurch="" style="color: #000;"><strong>Courthouse, Childcare (1st) - Active</strong></option>
							<option value="1108" data-idchurch="1275" style="color: #000;"><strong>Cox, Doug & Denise(1st) - Active</strong></option>
							<option value="1626" data-idchurch="1336" style="color: #aaa;">Craig & Amber Wheeler(1st)</option>
							<option value="1181" data-idchurch="1297" style="color: #000;"><strong>Craig and Dana Peterson(1st) - Active</strong></option>
							<option value="2556" data-idchurch="2469" style="color: #000;"><strong>Cram, Michael and Krissy(1st) - Active</strong></option>
							<option value="2512" data-idchurch="1615" style="color: #000;"><strong>Crane, Greg and Angie(1st) - Active</strong></option>
							<option value="2364" data-idchurch="1923" style="color: #000;"><strong>Crane, Kari(1st) - Active</strong></option>
							<option value="1333" data-idchurch="1327" style="color: #aaa;">Crannell, Casey & Nikki(1st)</option>
							<option value="2534" data-idchurch="2528" style="color: #000;"><strong>Crawford, Dan and Christine(1st) - Active</strong></option>
							<option value="2527" data-idchurch="1322" style="color: #aaa;">Crawford, Kelsey Crawfords and Aaron Crawford(1st)</option>
							<option value="2237" data-idchurch="1327" style="color: #aaa;">Creekmur, Logan and Hannah(1st)</option>
							<option value="2257" data-idchurch="1885" style="color: #aaa;">Cronholm-Salat(1st)</option>
							<option value="1236" data-idchurch="1367" style="color: #aaa;">Crosby, Allen & Marcia (1st)</option>
							<option value="2069" data-idchurch="1885" style="color: #000;"><strong>Crow(1st) - Active</strong></option>
							<option value="2288" data-idchurch="1588" style="color: #aaa;">Crow, Joseph Gabriele and Sarah Crow(1st)</option>
							<option value="1083" data-idchurch="1286" style="color: #aaa;">Crowder, Eric & Cindy(1st)</option>
							<option value="1486" data-idchurch="1286" style="color: #000;"><strong>Crowder, Eric & Cindy(2nd) - Active</strong></option>
							<option value="2357" data-idchurch="2003" style="color: #000;"><strong>Cullors, Chaz and Shakira(1st) - Active</strong></option>
							<option value="1753" data-idchurch="1518" style="color: #aaa;">Cummings, Leticia and Eric(1st)</option>
							<option value="2344" data-idchurch="1885" style="color: #000;"><strong>Cure(1st) - Active</strong></option>
							<option value="1273" data-idchurch="1340" style="color: #aaa;">Currier, Nathan & Kelley (1st)</option>
							<option value="2242" data-idchurch="1630" style="color: #aaa;">Curtis, Jared and Jennifer(1st)</option>
							<option value="2256" data-idchurch="1515" style="color: #aaa;">Cyr, Mallory(1st)</option>
							<option value="2529" data-idchurch="2512" style="color: #aaa;">Dague, Greg and Erin(1st)</option>
							<option value="1046" data-idchurch="1220" style="color: #000;"><strong>Dale, & Annabelle Ward (1st) - Active</strong></option>
							<option value="1915" data-idchurch="1492" style="color: #000;"><strong>Damman, Mike and Abby(1st) - Active</strong></option>
							<option value="1616" data-idchurch="1336" style="color: #aaa;">Daniel & Paige Zezulka(1st)</option>
							<option value="1623" data-idchurch="1336" style="color: #aaa;">Dave & Leah Townsend(1st)</option>
							<option value="1553" data-idchurch="1260" style="color: #000;"><strong>David & Donna Eberhart(1st) - Active</strong></option>
							<option value="1512" data-idchurch="1333" style="color: #aaa;">David & Kelly Joslyn(1st)</option>
							<option value="1560" data-idchurch="1293" style="color: #aaa;">David & Rebecca Stephens(1st)</option>
							<option value="1614" data-idchurch="1336" style="color: #aaa;">David and Heather Rowe(2nd)</option>
							<option value="1862" data-idchurch="1336" style="color: #aaa;">David and Heather Rowe(1st)</option>
							<option value="2041" data-idchurch="1505" style="color: #000;"><strong>David and Janette Volz(1st) - Active</strong></option>
							<option value="1050" data-idchurch="1220" style="color: #000;"><strong>Davidson, Danielle (1st) - Active</strong></option>
							<option value="2277" data-idchurch="1588" style="color: #aaa;">Davila, Daniel and Diana(1st)</option>
							<option value="1283" data-idchurch="1209" style="color: #aaa;">Davis Family Matt & Jennifer(1st)</option>
							<option value="2057" data-idchurch="2181" style="color: #aaa;">Davis, Katherine and George(1st)</option>
							<option value="2516" data-idchurch="2528" style="color: #000;"><strong>Davis, Matt and Debbi(1st) - Active</strong></option>
							<option value="1173" data-idchurch="1294" style="color: #000;"><strong>Davis, Tiffany (1st) - Active</strong></option>
							<option value="1772" data-idchurch="1327" style="color: #aaa;">Dawkins, Elizabeth and Nathan(1st)</option>
							<option value="1748" data-idchurch="1518" style="color: #aaa;">De La Cruz Family(1st)</option>
							<option value="1275" data-idchurch="1343" style="color: #000;"><strong>Deal, Josh & Sabrena (1st) - Active</strong></option>
							<option value="1094" data-idchurch="1275" style="color: #000;"><strong>Deboer, Barbara (1st) - Active</strong></option>
							<option value="2137" data-idchurch="1568" style="color: #aaa;">DeJong, Jack and Terri(1st)</option>
							<option value="1991" data-idchurch="1810" style="color: #000;"><strong>Del Valle, Vinny and Katrina(1st) - Active</strong></option>
							<option value="2417" data-idchurch="1515" style="color: #000;"><strong>Dence, Gabe and Lexi(1st) - Active</strong></option>
							<option value="1285" data-idchurch="1207" style="color: #aaa;">Deramus-Shebroe, Tera(1st)</option>
							<option value="1521" data-idchurch="1333" style="color: #aaa;">Derek & Holly McTavish(2nd)</option>
							<option value="1627" data-idchurch="1336" style="color: #aaa;">Derek & Holly McTavish(1st)</option>
							<option value="1827" data-idchurch="1613" style="color: #000;"><strong>Derksen, Wes and Crystal(1st) - Active</strong></option>
							<option value="2559" data-idchurch="2260" style="color: #000;"><strong>Deschaine, Justin and Melany(1st) - Active</strong></option>
							<option value="2502" data-idchurch="1208" style="color: #aaa;">DeStefano, James and Samantha(1st)</option>
							<option value="1435" data-idchurch="1472" style="color: #000;"><strong>Devries(1st) - Active</strong></option>
							<option value="1611" data-idchurch="1382" style="color: #000;"><strong>Dewayne & Jamii Caudel(1st) - Active</strong></option>
							<option value="2105" data-idchurch="1810" style="color: #000;"><strong>Deyo, Katie(1st) - Active</strong></option>
							<option value="1012" data-idchurch="1202" style="color: #aaa;">Dezwart, April(1st)</option>
							<option value="2461" data-idchurch="1588" style="color: #aaa;">Diefenbach, David Wallace and Jennifer Diefenbach(1st)</option>
							<option value="1489" data-idchurch="1492" style="color: #000;"><strong>Dixon, Katie(1st) - Active</strong></option>
							<option value="2427" data-idchurch="1515" style="color: #000;"><strong>Dodds, Jeremy(1st) - Active</strong></option>
							<option value="1120" data-idchurch="1283" style="color: #aaa;">Dolan, Charles & Amy (1st)</option>
							<option value="1963" data-idchurch="1742" style="color: #000;"><strong>Domena Family(1st) - Active</strong></option>
							<option value="2143" data-idchurch="1572" style="color: #000;"><strong>Donahue(1st) - Active</strong></option>
							<option value="2117" data-idchurch="1568" style="color: #aaa;">Dorvil, Sam and Cyndi(1st)</option>
							<option value="1215" data-idchurch="1350" style="color: #000;"><strong>Downs, Jordan & Ashley (1st) - Active</strong></option>
							<option value="1293" data-idchurch="1324" style="color: #000;"><strong>Doyle, Tony & Holly (1st) - Active</strong></option>
							<option value="2061" data-idchurch="1960" style="color: #000;"><strong>Dressler, Sydney and Jenna(1st) - Active</strong></option>
							<option value="2368" data-idchurch="1515" style="color: #000;"><strong>Duff, Michael and Katie(1st) - Active</strong></option>
							<option value="1091" data-idchurch="1296" style="color: #000;"><strong>Dufur, Steven & Jessica(1st) - Active</strong></option>
							<option value="2289" data-idchurch="1588" style="color: #aaa;">Duncombe, Larry and Wendy(1st)</option>
							<option value="1253" data-idchurch="1316" style="color: #000;"><strong>Dunn, John & Vipi (1st) - Active</strong></option>
							<option value="1210" data-idchurch="1349" style="color: #aaa;">Dykes, Brent & Meredith (1st)</option>
							<option value="1305" data-idchurch="" style="color: #aaa;">EARNEST (1st)</option>
							<option value="1440" data-idchurch="1473" style="color: #000;"><strong>Eben(1st) - Active</strong></option>
							<option value="2406" data-idchurch="1900" style="color: #000;"><strong>Edde, Jessica(1st) - Active</strong></option>
							<option value="1967" data-idchurch="1505" style="color: #000;"><strong>Eden and Joshua Capps(1st) - Active</strong></option>
							<option value="1680" data-idchurch="1510" style="color: #000;"><strong>Edmonds, Randy and Rochelle(1st) - Active</strong></option>
							<option value="1571" data-idchurch="1441" style="color: #aaa;">Edward & Tressa Luebbers(1st)</option>
							<option value="2065" data-idchurch="1956" style="color: #000;"><strong>Edwards, Drew and Audra(1st) - Active</strong></option>
							<option value="2026" data-idchurch="1485" style="color: #000;"><strong>Ehr, Zach and KJ(1st) - Active</strong></option>
							<option value="2470" data-idchurch="1477" style="color: #aaa;">Elder, Nathan and Becca(1st)</option>
							<option value="1516" data-idchurch="1333" style="color: #000;"><strong>Eleanor Mitchell(3rd) - Active</strong></option>
							<option value="1540" data-idchurch="1350" style="color: #aaa;">Elisabeth Wise(1st)</option>
							<option value="1558" data-idchurch="1346" style="color: #000;"><strong>Elisabeth Wise(2nd) - Active</strong></option>
							<option value="2235" data-idchurch="1506" style="color: #000;"><strong>Elmellouki, Andrea(1st) - Active</strong></option>
							<option value="1541" data-idchurch="1350" style="color: #000;"><strong>Emily Maxey(1st) - Active</strong></option>
							<option value="1233" data-idchurch="1363" style="color: #aaa;">Endres, Jack & Phyllis (1st)</option>
							<option value="2035" data-idchurch="2046" style="color: #aaa;">Englis, Rose and Craig(1st)</option>
							<option value="2046" data-idchurch="1900" style="color: #aaa;">Eno, Sarah and Bob(1st)</option>
							<option value="1088" data-idchurch="1275" style="color: #aaa;">Enriquez, Carlos & Betsy (1st)</option>
							<option value="2278" data-idchurch="1588" style="color: #aaa;">Ensenwa, Victor and Paula(1st)</option>
							<option value="1703" data-idchurch="1678" style="color: #aaa;">Erath, Grace and Garrett(1st)</option>
							<option value="1593" data-idchurch="1294" style="color: #aaa;">Eric & Matthew Rubenstein(1st)</option>
							<option value="1527" data-idchurch="1333" style="color: #000;"><strong>Erika & Matt Bates(1st) - Active</strong></option>
							<option value="1500" data-idchurch="0" style="color: #aaa;">Escamilla, Judith(1st)</option>
							<option value="2022" data-idchurch="1595" style="color: #000;"><strong>Eskin Family(1st) - Active</strong></option>
							<option value="2356" data-idchurch="2222" style="color: #000;"><strong>Esmeralda Martinez(1st) - Active</strong></option>
							<option value="2010" data-idchurch="1888" style="color: #000;"><strong>Espinosa, Yorlin and Elise(1st) - Active</strong></option>
							<option value="2335" data-idchurch="1888" style="color: #aaa;">Espinoza, Traci(1st)</option>
							<option value="1426" data-idchurch="1479" style="color: #000;"><strong>Estrada(1st) - Active</strong></option>
							<option value="2476" data-idchurch="2459" style="color: #000;"><strong>Eugenio, Marius and Monica(1st) - Active</strong></option>
							<option value="1809" data-idchurch="1309" style="color: #000;"><strong>Evans, Lee and Melissa(1st) - Active</strong></option>
							<option value="2118" data-idchurch="1568" style="color: #000;"><strong>Everette, Teresa(1st) - Active</strong></option>
							<option value="2138" data-idchurch="1568" style="color: #000;"><strong>Facey, Donovan and Denissa(1st) - Active</strong></option>
							<option value="1113" data-idchurch="1278" style="color: #aaa;">Farley, Debra (1st)</option>
							<option value="2272" data-idchurch="1515" style="color: #000;"><strong>Farley, Nicole(1st) - Active</strong></option>
							<option value="2467" data-idchurch="1319" style="color: #000;"><strong>Farley, Tiffany and James(1st) - Active</strong></option>
							<option value="1816" data-idchurch="1509" style="color: #aaa;">Faylor, Erica(1st)</option>
							<option value="1288" data-idchurch="1208" style="color: #aaa;">Feaster Family(1st)</option>
							<option value="2333" data-idchurch="1328" style="color: #000;"><strong>Fedolfi, David and Kim(1st) - Active</strong></option>
							<option value="2491" data-idchurch="2612" style="color: #000;"><strong>Fee, Josh and Mandy(1st) - Active</strong></option>
							<option value="2250" data-idchurch="1630" style="color: #000;"><strong>Feliciano, Cesar and Hope(1st) - Active</strong></option>
							<option value="2290" data-idchurch="1588" style="color: #aaa;">Ferguson, David and Debra(1st)</option>
							<option value="2206" data-idchurch="1428" style="color: #aaa;">Ferguson, Lisa(1st)</option>
							<option value="2377" data-idchurch="2038" style="color: #aaa;">Fields Family(1st)</option>
							<option value="2421" data-idchurch="2409" style="color: #000;"><strong>Fiorentino, Holly and Loren(1st) - Active</strong></option>
							<option value="2358" data-idchurch="1505" style="color: #000;"><strong>Flachmeier, kemar McIntosh and Lara Flachmeier(1st) - Active</strong></option>
							<option value="2469" data-idchurch="1588" style="color: #aaa;">Flores, James Bennett and Diana Flores(1st)</option>
							<option value="1060" data-idchurch="1226" style="color: #000;"><strong>Fluker, Katrina (1st) - Active</strong></option>
							<option value="2166" data-idchurch="1568" style="color: #000;"><strong>Ford, Jeffrey and Angela(1st) - Active</strong></option>
							<option value="1410" data-idchurch="1296" style="color: #000;"><strong>Fouts, Noah & Jessica(1st) - Active</strong></option>
							<option value="2072" data-idchurch="1604" style="color: #000;"><strong>Fowler, Joe and Cindy(1st) - Active</strong></option>
							<option value="2343" data-idchurch="1852" style="color: #000;"><strong>Fox, Brent and Amy Jo - TEST(1st) - Active</strong></option>
							<option value="1517" data-idchurch="1333" style="color: #aaa;">Frank & Ann Arnold(1st)</option>
							<option value="1518" data-idchurch="1333" style="color: #000;"><strong>Frank & Ann Arnold(2nd) - Active</strong></option>
							<option value="1495" data-idchurch="1506" style="color: #000;"><strong>Frankie & Melissa Nobles(1st) - Active</strong></option>
							<option value="2496" data-idchurch="2650" style="color: #aaa;">Franzen, Ken and Amy(1st)</option>
							<option value="2479" data-idchurch="1515" style="color: #aaa;">Freund, Chelsea(1st)</option>
							<option value="1187" data-idchurch="1322" style="color: #aaa;">Friese, Zach & Mandi(1st)</option>
							<option value="2444" data-idchurch="1851" style="color: #000;"><strong>Frye, Elizabeth(1st) - Active</strong></option>
							<option value="1433" data-idchurch="1476" style="color: #000;"><strong>Fudge(1st) - Active</strong></option>
							<option value="2186" data-idchurch="1625" style="color: #000;"><strong>Fuller, Adam(1st) - Active</strong></option>
							<option value="1133" data-idchurch="1288" style="color: #aaa;">Furubotten, Kelsey(1st)</option>
							<option value="1161" data-idchurch="1290" style="color: #aaa;">Gage, Susan & Nick (1st)</option>
							<option value="1948" data-idchurch="1333" style="color: #aaa;">Gamblin, Michelle and Brett(2nd)</option>
							<option value="2280" data-idchurch="1588" style="color: #aaa;">Garcia, Jose and Jenny(1st)</option>
							<option value="1701" data-idchurch="1437" style="color: #aaa;">Gardner, Rilene(1st)</option>
							<option value="2334" data-idchurch="1270" style="color: #aaa;">Garraway, Beverly(1st)</option>
							<option value="1842" data-idchurch="1625" style="color: #aaa;">Garrison, Elle(1st)</option>
							<option value="1114" data-idchurch="1282" style="color: #aaa;">Garrison, Katie & Graham (1st)</option>
							<option value="1511" data-idchurch="1319" style="color: #aaa;">Gary & Amy Michael(2nd)</option>
							<option value="1628" data-idchurch="1336" style="color: #000;"><strong>Gary & Amy Michael(3rd) - Active</strong></option>
							<option value="1859" data-idchurch="1336" style="color: #aaa;">Gary & Amy Michael(1st)</option>
							<option value="2120" data-idchurch="1568" style="color: #000;"><strong>Gaubert, Karine(1st) - Active</strong></option>
							<option value="1137" data-idchurch="1288" style="color: #aaa;">Gautier, Jeanne & Bob(1st)</option>
							<option value="1568" data-idchurch="1441" style="color: #aaa;">Gavin & Michelle Cahoon(1st)</option>
							<option value="1700" data-idchurch="1505" style="color: #000;"><strong>Gaybrielle Crawford(1st) - Active</strong></option>
							<option value="2097" data-idchurch="1607" style="color: #000;"><strong>Geary, Curtis and Jill(1st) - Active</strong></option>
							<option value="1257" data-idchurch="1320" style="color: #000;"><strong>Gent, Lindsey & Jonathan (1st) - Active</strong></option>
							<option value="1135" data-idchurch="1288" style="color: #aaa;">Genty, Cathy(1st)</option>
							<option value="2411" data-idchurch="1515" style="color: #aaa;">Gerber(1st)</option>
							<option value="2524" data-idchurch="1599" style="color: #000;"><strong>Gibbons Family(1st) - Active</strong></option>
							<option value="1488" data-idchurch="1437" style="color: #000;"><strong>Gibson, Jody(1st) - Active</strong></option>
							<option value="2291" data-idchurch="1588" style="color: #aaa;">Gillberti, Jason Wheeler and Niki Ann Gillberti(1st)</option>
							<option value="1316" data-idchurch="1366" style="color: #aaa;">Gillespie, Josh & Jennifer(1st)</option>
							<option value="2409" data-idchurch="1522" style="color: #000;"><strong>Gilliland(1st) - Active</strong></option>
							<option value="2386" data-idchurch="1505" style="color: #000;"><strong>Giroux, Shana and Kevin(1st) - Active</strong></option>
							<option value="2121" data-idchurch="1568" style="color: #aaa;">Glashower, Kyle and Heather(2nd)</option>
							<option value="1930" data-idchurch="1766" style="color: #aaa;">Glenn, Meghann(1st)</option>
							<option value="1003" data-idchurch="1202" style="color: #aaa;">Goggins, Antonio & Dee Dee(1st)</option>
							<option value="1352" data-idchurch="1201" style="color: #aaa;">Golden, Sheretha(1st)</option>
							<option value="1164" data-idchurch="1266" style="color: #aaa;">Gonzalez, Ivanna (1st)</option>
							<option value="1136" data-idchurch="1288" style="color: #aaa;">Gonzalez, Katie & Tony (1st)</option>
							<option value="1341" data-idchurch="1288" style="color: #aaa;">Gonzalez, Tony and Katie Care Community(2nd)</option>
							<option value="1690" data-idchurch="1201" style="color: #000;"><strong>Goode, Josh and Tina(1st) - Active</strong></option>
							<option value="1192" data-idchurch="1333" style="color: #000;"><strong>Goode, Michael & Jennifer (1st) - Active</strong></option>
							<option value="1831" data-idchurch="1682" style="color: #aaa;">Goodwin, Sarah and Robert(1st)</option>
							<option value="1130" data-idchurch="1288" style="color: #aaa;">Gordon, Kelly & Matt(1st)</option>
							<option value="1894" data-idchurch="1288" style="color: #000;"><strong>Grabenkort, Beth(1st) - Active</strong></option>
							<option value="1076" data-idchurch="1271" style="color: #aaa;">Greaves, Angelyne (1st)</option>
							<option value="2541" data-idchurch="1568" style="color: #000;"><strong>Greenbaum, June(1st) - Active</strong></option>
							<option value="2151" data-idchurch="1618" style="color: #000;"><strong>Gretzon, Paul and Brittney(1st) - Active</strong></option>
							<option value="2348" data-idchurch="1505" style="color: #000;"><strong>Griffin, Sera and Jason(1st) - Active</strong></option>
							<option value="1822" data-idchurch="1350" style="color: #aaa;">Groover, Matthew and Breanna(2nd)</option>
							<option value="2316" data-idchurch="1852" style="color: #000;"><strong>Guilkey, Eric and Heidi(1st) - Active</strong></option>
							<option value="1124" data-idchurch="1285" style="color: #aaa;">Gutierrez-Foreman, Robert(1st)</option>
							<option value="1658" data-idchurch="1352" style="color: #aaa;">Haas, Blake and Allison(1st)</option>
							<option value="1994" data-idchurch="1352" style="color: #000;"><strong>Haas, Blake and Allison(2nd) - Active</strong></option>
							<option value="2365" data-idchurch="1923" style="color: #000;"><strong>Hacker, Tyler and Hailey(1st) - Active</strong></option>
							<option value="2015" data-idchurch="1993" style="color: #000;"><strong>Hackett, Bill and Caitlin(1st) - Active</strong></option>
							<option value="2477" data-idchurch="1492" style="color: #000;"><strong>Hahne Family(1st) - Active</strong></option>
							<option value="1682" data-idchurch="1510" style="color: #aaa;">Haley, Andrew and Cortney(1st)</option>
							<option value="1896" data-idchurch="1620" style="color: #000;"><strong>Hall, Emily(1st) - Active</strong></option>
							<option value="2396" data-idchurch="2593" style="color: #aaa;">Hall, Greg and Shannon(1st)</option>
							<option value="2244" data-idchurch="2036" style="color: #000;"><strong>Hall, Jerold and Jennifer(1st) - Active</strong></option>
							<option value="1154" data-idchurch="1290" style="color: #aaa;">Hall, Sharon & Keith (1st)</option>
							<option value="2122" data-idchurch="1568" style="color: #aaa;">Hallas, Jim and Kristen(1st)</option>
							<option value="2432" data-idchurch="1515" style="color: #000;"><strong>Haller, Lina and Brock(1st) - Active</strong></option>
							<option value="1599" data-idchurch="1335" style="color: #000;"><strong>Hallie Mordecai(2nd) - Active</strong></option>
							<option value="1818" data-idchurch="1514" style="color: #000;"><strong>Halverson, Christoph and Ashley(1st) - Active</strong></option>
							<option value="1750" data-idchurch="1518" style="color: #000;"><strong>Hamilton, Ga-Nesha(1st) - Active</strong></option>
							<option value="1324" data-idchurch="1224" style="color: #000;"><strong>Hampton, Terry & Nikki (1st) - Active</strong></option>
							<option value="2472" data-idchurch="2629" style="color: #aaa;">Hamric, Eric and Christina(1st)</option>
							<option value="1064" data-idchurch="1271" style="color: #aaa;">Haney, John & Kasja (1st)</option>
							<option value="1722" data-idchurch="1622" style="color: #aaa;">Hansen , Jake and Esther(1st)</option>
							<option value="2419" data-idchurch="1810" style="color: #aaa;">Hansen, Krysti and Joe(1st)</option>
							<option value="2460" data-idchurch="2645" style="color: #000;"><strong>Happy Family, Dad and Mom(1st) - Active</strong></option>
							<option value="1422" data-idchurch="1481" style="color: #000;"><strong>Hardee(1st) - Active</strong></option>
							<option value="1141" data-idchurch="1288" style="color: #aaa;">Harding, Matt & Faith (1st)</option>
							<option value="2305" data-idchurch="1515" style="color: #aaa;">Hardwick, William and Elissa(1st)</option>
							<option value="1034" data-idchurch="" style="color: #000;"><strong>Harper, Leigh & John (1st) - Active</strong></option>
							<option value="1062" data-idchurch="1511" style="color: #000;"><strong>Harper, Michael & Rachel(2nd) - Active</strong></option>
							<option value="2036" data-idchurch="2046" style="color: #aaa;">Harris, Joy(1st)</option>
							<option value="2484" data-idchurch="2610" style="color: #000;"><strong>Harshman Family(1st) - Active</strong></option>
							<option value="2108" data-idchurch="1810" style="color: #aaa;">Haynes, Deb and Mert(1st)</option>
							<option value="1237" data-idchurch="1336" style="color: #000;"><strong>Healy, Michael & Laura (1st) - Active</strong></option>
							<option value="1242" data-idchurch="1346" style="color: #000;"><strong>Heard, Joyce (1st) - Active</strong></option>
							<option value="1040" data-idchurch="1220" style="color: #000;"><strong>Hearing, Jon & Kristi (1st) - Active</strong></option>
							<option value="2363" data-idchurch="1348" style="color: #000;"><strong>Hebert, Aaron and Sarah Jane(1st) - Active</strong></option>
							<option value="1588" data-idchurch="1294" style="color: #000;"><strong>Hector & Giovanna Ibanez(1st) - Active</strong></option>
							<option value="1507" data-idchurch="1607" style="color: #000;"><strong>Hedger(1st) - Active</strong></option>
							<option value="1826" data-idchurch="1623" style="color: #000;"><strong>Heesch, Renae and Jared(1st) - Active</strong></option>
							<option value="1821" data-idchurch="1514" style="color: #000;"><strong>Hegenderfer, Josh and Andrea(1st) - Active</strong></option>
							<option value="1239" data-idchurch="1300" style="color: #aaa;">Hein, Ron & Paula (1st)</option>
							<option value="2271" data-idchurch="1515" style="color: #000;"><strong>Hemmingsen, Marty and Aimee(1st) - Active</strong></option>
							<option value="1492" data-idchurch="1490" style="color: #000;"><strong>Hendren, Nick & Emily(1st) - Active</strong></option>
							<option value="1110" data-idchurch="1276" style="color: #aaa;">Hendrix, Beverly & Doy(1st)</option>
							<option value="1123" data-idchurch="1285" style="color: #aaa;">Hendrix, Doy & Beverley(1st)</option>
							<option value="1943" data-idchurch="1288" style="color: #000;"><strong>Hendrix, Doy and Beverly(3rd) - Active</strong></option>
							<option value="1452" data-idchurch="1495" style="color: #000;"><strong>Herman, David & Noel(1st) - Active</strong></option>
							<option value="1446" data-idchurch="0" style="color: #000;"><strong>Hermreck, Betsy(1st) - Active</strong></option>
							<option value="2285" data-idchurch="1588" style="color: #aaa;">Hernandez, Francisco and Angela(1st)</option>
							<option value="1792" data-idchurch="1515" style="color: #000;"><strong>Hernandez, Jesse and Margie(1st) - Active</strong></option>
							<option value="1970" data-idchurch="1590" style="color: #000;"><strong>Herringshaw Family Community(1st) - Active</strong></option>
							<option value="1968" data-idchurch="1506" style="color: #aaa;">Hettenbach Family(1st)</option>
							<option value="2255" data-idchurch="1515" style="color: #000;"><strong>Hibbert, Warren and Nicole(1st) - Active</strong></option>
							<option value="2123" data-idchurch="1568" style="color: #000;"><strong>Higgins, Erin(1st) - Active</strong></option>
							<option value="2098" data-idchurch="1709" style="color: #000;"><strong>Hodgson, Larry and Erin(1st) - Active</strong></option>
							<option value="1418" data-idchurch="1477" style="color: #000;"><strong>Hoff(1st) - Active</strong></option>
							<option value="1100" data-idchurch="1271" style="color: #aaa;">Hoffer, Tina (1st)</option>
							<option value="1090" data-idchurch="1275" style="color: #000;"><strong>Hoffer, Tina & Mike (1st) - Active</strong></option>
							<option value="2399" data-idchurch="2594" style="color: #000;"><strong>Hogan, Mike and Brooke(1st) - Active</strong></option>
							<option value="1830" data-idchurch="1483" style="color: #aaa;">Holbrook Care Community(1st)</option>
							<option value="2224" data-idchurch="1505" style="color: #000;"><strong>Hollee and Joshua Myers(1st) - Active</strong></option>
							<option value="1437" data-idchurch="1473" style="color: #000;"><strong>Holleman(1st) - Active</strong></option>
							<option value="1330" data-idchurch="1224" style="color: #000;"><strong>Holloway, Stephen & Karen (1st) - Active</strong></option>
							<option value="1718" data-idchurch="1505" style="color: #aaa;">Holly Nuttle- Reunited Children(1st)</option>
							<option value="2243" data-idchurch="2036" style="color: #aaa;">Holly Robles(1st)</option>
							<option value="1475" data-idchurch="1492" style="color: #000;"><strong>Holman, Harmony(1st) - Active</strong></option>
							<option value="1443" data-idchurch="0" style="color: #000;"><strong>Holman, Harmony(1st) - Active</strong></option>
							<option value="1052" data-idchurch="1220" style="color: #000;"><strong>Honaker, Jesse & Lauren Honaker (1st) - Active</strong></option>
							<option value="1160" data-idchurch="1292" style="color: #aaa;">Hopkins, Steve & Kelly (1st)</option>
							<option value="2195" data-idchurch="1900" style="color: #000;"><strong>Horn, Lara and Chris(1st) - Active</strong></option>
							<option value="1777" data-idchurch="1242" style="color: #000;"><strong>Hosier, Ryan(1st) - Active</strong></option>
							<option value="1054" data-idchurch="1220" style="color: #000;"><strong>Howe, Chris & Angela (1st) - Active</strong></option>
							<option value="1470" data-idchurch="1483" style="color: #000;"><strong>Hryndej Community(1st) - Active</strong></option>
							<option value="1961" data-idchurch="1223" style="color: #aaa;">Hubbard, Keith and Sonnie(1st)</option>
							<option value="1058" data-idchurch="1223" style="color: #000;"><strong>Hubbard, Keith & Sonnie (1st) - Active</strong></option>
							<option value="1454" data-idchurch="1494" style="color: #aaa;">Huff Care Community(1st)</option>
							<option value="2124" data-idchurch="1568" style="color: #000;"><strong>Hughes, Bryan and Jamie(1st) - Active</strong></option>
							<option value="1013" data-idchurch="1208" style="color: #aaa;">Hughes, Jack & Jennifer(1st)</option>
							<option value="1063" data-idchurch="1273" style="color: #aaa;">Hughes, Josh & Lindsey (1st)</option>
							<option value="2292" data-idchurch="1588" style="color: #aaa;">Hughes, Joshua and Bailey(1st)</option>
							<option value="1026" data-idchurch="1211" style="color: #aaa;">Humphries, Jessica & Preston(1st)</option>
							<option value="1353" data-idchurch="1211" style="color: #aaa;">Humphries, Jessica & Preston(2nd)</option>
							<option value="1067" data-idchurch="1271" style="color: #aaa;">Hunt, Delois (1st)</option>
							<option value="1072" data-idchurch="1271" style="color: #000;"><strong>Hunt, Delois(1st) - Active</strong></option>
							<option value="2064" data-idchurch="1741" style="color: #000;"><strong>Hutchinson Family(1st) - Active</strong></option>
							<option value="2245" data-idchurch="2036" style="color: #000;"><strong>Iagmin, Tony and Sara(1st) - Active</strong></option>
							<option value="2104" data-idchurch="1810" style="color: #aaa;">Isosaki, Felicia and Joe(1st)</option>
							<option value="1212" data-idchurch="1349" style="color: #000;"><strong>Ivey, Keith & Ashley (1st) - Active</strong></option>
							<option value="2523" data-idchurch="2550" style="color: #aaa;">J. Johnnie Cox(1st)</option>
							<option value="2146" data-idchurch="1505" style="color: #000;"><strong>Jackie Santiago(1st) - Active</strong></option>
							<option value="2531" data-idchurch="2612" style="color: #aaa;">Jackson, Natasha(1st)</option>
							<option value="1909" data-idchurch="1701" style="color: #000;"><strong>Jackson, Treva Jackson and Wade(1st) - Active</strong></option>
							<option value="2220" data-idchurch="1588" style="color: #aaa;">Jacobs, Rick and Christine(1st)</option>
							<option value="2264" data-idchurch="2223" style="color: #aaa;">James Family Care Community(1st)</option>
							<option value="1974" data-idchurch="1348" style="color: #aaa;">James, Jennifer(1st)</option>
							<option value="1243" data-idchurch="1308" style="color: #000;"><strong>James, Parker & Nicole (1st) - Active</strong></option>
							<option value="1622" data-idchurch="1336" style="color: #aaa;">Jamie & Aimee Cheek(1st)</option>
							<option value="2495" data-idchurch="1518" style="color: #000;"><strong>Jane Morales(1st) - Active</strong></option>
							<option value="2474" data-idchurch="1505" style="color: #aaa;">Jason and Jessica Castles(1st)</option>
							<option value="2039" data-idchurch="1594" style="color: #000;"><strong>Jazmine Balliro- Henderson LAKE MARY(1st) - Active</strong></option>
							<option value="1775" data-idchurch="1505" style="color: #000;"><strong>Jeff and Erin Miller(1st) - Active</strong></option>
							<option value="1552" data-idchurch="1320" style="color: #aaa;">Jene Brown(1st)</option>
							<option value="1969" data-idchurch="1745" style="color: #000;"><strong>Jenkins Family(1st) - Active</strong></option>
							<option value="2263" data-idchurch="2223" style="color: #aaa;">Jenkins Family Care Community(1st)</option>
							<option value="2353" data-idchurch="1309" style="color: #aaa;">Jenkins, Patty(1st)</option>
							<option value="1166" data-idchurch="1293" style="color: #aaa;">Jenkins, Robert & Donna (1st)</option>
							<option value="2091" data-idchurch="1293" style="color: #aaa;">Jenkins, Robert and Donna(1st)</option>
							<option value="1762" data-idchurch="1333" style="color: #000;"><strong>Jennifer Burrell(1st) - Active</strong></option>
							<option value="1925" data-idchurch="1297" style="color: #000;"><strong>Jesse's House(1st) - Active</strong></option>
							<option value="2553" data-idchurch="2617" style="color: #aaa;">Jessica Brahbam and Clevy Brabham(1st)</option>
							<option value="1247" data-idchurch="1310" style="color: #000;"><strong>Jeter, Buzz & Laura(1st) - Active</strong></option>
							<option value="2216" data-idchurch="1505" style="color: #aaa;">Jill and Robert Eastman(1st)</option>
							<option value="1572" data-idchurch="1344" style="color: #aaa;">Jimmy & Kasey Blouse(1st)</option>
							<option value="1277" data-idchurch="1347" style="color: #000;"><strong>Joe, & Melissa Bradley (1st) - Active</strong></option>
							<option value="2327" data-idchurch="1515" style="color: #000;"><strong>Joecks Care Community(1st) - Active</strong></option>
							<option value="1641" data-idchurch="" style="color: #aaa;">Joel & Jennifer Shinpoch(1st)</option>
							<option value="1629" data-idchurch="1336" style="color: #aaa;">John & Mary Sledge(1st)</option>
							<option value="1569" data-idchurch="1441" style="color: #aaa;">John & Porsha Westbrook(1st)</option>
							<option value="1922" data-idchurch="1515" style="color: #aaa;">Johnson , Jeff and Caitlin(1st)</option>
							<option value="2439" data-idchurch="1851" style="color: #000;"><strong>Johnson, Caleb and Chinoah(1st) - Active</strong></option>
							<option value="1843" data-idchurch="1618" style="color: #000;"><strong>Johnson, DJ and Carrie(1st) - Active</strong></option>
							<option value="1073" data-idchurch="1271" style="color: #000;"><strong>Johnson, Drew & Bailie (1st) - Active</strong></option>
							<option value="2199" data-idchurch="1925" style="color: #000;"><strong>Johnson, Kaitlyn and Jonathon(1st) - Active</strong></option>
							<option value="2514" data-idchurch="1515" style="color: #aaa;">Johnson, Miulan Nihipali and Ku'uipo Johnson(1st)</option>
							<option value="1105" data-idchurch="1275" style="color: #aaa;">Johnson, Renee (1st)</option>
							<option value="2016" data-idchurch="1993" style="color: #000;"><strong>Johnson, Toma and Mark(1st) - Active</strong></option>
							<option value="2293" data-idchurch="1588" style="color: #aaa;">Joiner, Chris and Melissa(1st)</option>
							<option value="1871" data-idchurch="1486" style="color: #000;"><strong>Jolly, Ryan(1st) - Active</strong></option>
							<option value="1543" data-idchurch="1350" style="color: #aaa;">Jon & Carey-Lynn Mcllvaine(2nd)</option>
							<option value="1582" data-idchurch="1294" style="color: #aaa;">Jonathan & Jennifer Jones(1st)</option>
							<option value="1551" data-idchurch="1320" style="color: #aaa;">Jonathan & Lindsey Gent(1st)</option>
							<option value="2125" data-idchurch="1568" style="color: #aaa;">Jones, Amos and Amanda(1st)</option>
							<option value="2231" data-idchurch="1960" style="color: #000;"><strong>Jones, Autumn(1st) - Active</strong></option>
							<option value="1194" data-idchurch="1294" style="color: #000;"><strong>Jones, Carl & Alicea (1st) - Active</strong></option>
							<option value="1086" data-idchurch="1287" style="color: #aaa;">Jones, Charlotte (1st)</option>
							<option value="1138" data-idchurch="1288" style="color: #aaa;">Jones, David & Jaime (1st)</option>
							<option value="1287" data-idchurch="1288" style="color: #aaa;">Jones, David and Jaime(2nd)</option>
							<option value="1234" data-idchurch="1363" style="color: #aaa;">Jones, Josiah & Jenn (1st)</option>
							<option value="1765" data-idchurch="1297" style="color: #000;"><strong>Jones, Oliver and Ashley(1st) - Active</strong></option>
							<option value="1923" data-idchurch="1309" style="color: #000;"><strong>Jones, Wayne(1st) - Active</strong></option>
							<option value="1538" data-idchurch="1350" style="color: #aaa;">Jordan & Ashley Downs(1st)</option>
							<option value="1539" data-idchurch="1350" style="color: #000;"><strong>Jordan & Ashley Downs(2nd) - Active</strong></option>
							<option value="1184" data-idchurch="1302" style="color: #000;"><strong>Jordan, Michelle (1st) - Active</strong></option>
							<option value="2107" data-idchurch="1810" style="color: #aaa;">Joseph, Liz and Bernadin(1st)</option>
							<option value="1580" data-idchurch="1352" style="color: #000;"><strong>Josh & Christie Pineda(2nd) - Active</strong></option>
							<option value="1550" data-idchurch="1273" style="color: #aaa;">Josh & Lindsey Hughes(1st)</option>
							<option value="1570" data-idchurch="1441" style="color: #000;"><strong>Josh & Sable Allen(2nd) - Active</strong></option>
							<option value="1480" data-idchurch="1506" style="color: #aaa;">Joshua & Jessica Reynolds(1st)</option>
							<option value="1191" data-idchurch="1333" style="color: #000;"><strong>Joslyn, Kelly & David (1st) - Active</strong></option>
							<option value="1989" data-idchurch="1793" style="color: #aaa;">Joy, Richard Aaron and Melissa(1st)</option>
							<option value="1557" data-idchurch="1346" style="color: #000;"><strong>Joyce Heard(1st) - Active</strong></option>
							<option value="2414" data-idchurch="1515" style="color: #aaa;">Juachon, Amadeo(1st)</option>
							<option value="1660" data-idchurch="1594" style="color: #aaa;">Julie Baker(1st)</option>
							<option value="1589" data-idchurch="1294" style="color: #aaa;">Justin & Elizabeth Clement(1st)</option>
							<option value="1590" data-idchurch="1294" style="color: #aaa;">Justin & Elizabeth Clement(2nd)</option>
							<option value="1442" data-idchurch="0" style="color: #000;"><strong>Justin, Sarah(1st) - Active</strong></option>
							<option value="1451" data-idchurch="1495" style="color: #000;"><strong>Kaminski, Ron & Dana(1st) - Active</strong></option>
							<option value="1924" data-idchurch="1211" style="color: #aaa;">Kane, Bill & Christie(1st)</option>
							<option value="2077" data-idchurch="1885" style="color: #aaa;">Kang(1st)</option>
							<option value="1455" data-idchurch="1494" style="color: #000;"><strong>Kapp Care Community(1st) - Active</strong></option>
							<option value="2532" data-idchurch="1888" style="color: #aaa;">Kathy Stock(1st)</option>
							<option value="1576" data-idchurch="1226" style="color: #000;"><strong>Katrina Fluker(1st) - Active</strong></option>
							<option value="2185" data-idchurch="2106" style="color: #aaa;">Kautzer, Jon and Jennifer(1st)</option>
							<option value="1694" data-idchurch="1381" style="color: #000;"><strong>Keeter, Ben and Amy(1st) - Active</strong></option>
							<option value="2095" data-idchurch="1428" style="color: #000;"><strong>Keeter, Ben and Amy(1st) - Active</strong></option>
							<option value="1767" data-idchurch="1739" style="color: #aaa;">Kellum, Scooter and Chelsea(1st)</option>
							<option value="2360" data-idchurch="1505" style="color: #aaa;">Kelly Darden(1st)</option>
							<option value="1597" data-idchurch="1335" style="color: #000;"><strong>Kelly Smith(1st) - Active</strong></option>
							<option value="2008" data-idchurch="1511" style="color: #aaa;">Kelly, Tori and Charlie(1st)</option>
							<option value="2346" data-idchurch="1506" style="color: #aaa;">Kemp, Randy and Cassaundra(1st)</option>
							<option value="1066" data-idchurch="1271" style="color: #aaa;">Kennard, Gracie (1st)</option>
							<option value="2148" data-idchurch="1885" style="color: #000;"><strong>Kennedy(1st) - Active</strong></option>
							<option value="2410" data-idchurch="1475" style="color: #000;"><strong>Kennedy, Brittany and Tristan(1st) - Active</strong></option>
							<option value="1987" data-idchurch="1793" style="color: #aaa;">Kennedy, Clinton and lilia(1st)</option>
							<option value="1125" data-idchurch="1285" style="color: #000;"><strong>Kennedy, Tricia & Scott(1st) - Active</strong></option>
							<option value="1251" data-idchurch="1315" style="color: #000;"><strong>Keough, Jordan & Miranda (1st) - Active</strong></option>
							<option value="1111" data-idchurch="1276" style="color: #aaa;">Ketchup/Fleming (1st)</option>
							<option value="1025" data-idchurch="1210" style="color: #aaa;">Keyes Family (1st)</option>
							<option value="1371" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="1375" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="1379" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="1385" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="1389" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="1391" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="1400" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="1401" data-idchurch="" style="color: #aaa;">Keyes (1st)</option>
							<option value="2561" data-idchurch="2682" style="color: #000;"><strong>Kim Shaw / Attrace Chang(1st) - Active</strong></option>
							<option value="2262" data-idchurch="1971" style="color: #aaa;">Kim, Abraham Ng and Christine Kim(1st)</option>
							<option value="1566" data-idchurch="1332" style="color: #000;"><strong>Kimberly & Michael Fowler(1st) - Active</strong></option>
							<option value="1815" data-idchurch="1276" style="color: #000;"><strong>Kimberly Davis(1st) - Active</strong></option>
							<option value="1208" data-idchurch="1336" style="color: #aaa;">King, Brian & Shari King (1st)</option>
							<option value="2144" data-idchurch="1572" style="color: #aaa;">King, Curtis and Marva(1st)</option>
							<option value="2102" data-idchurch="1851" style="color: #000;"><strong>King, Katrina(1st) - Active</strong></option>
							<option value="2032" data-idchurch="1260" style="color: #000;"><strong>King, Petrina(1st) - Active</strong></option>
							<option value="1499" data-idchurch="1486" style="color: #000;"><strong>Kingsland, Corey & Julie(1st) - Active</strong></option>
							<option value="2249" data-idchurch="1309" style="color: #000;"><strong>Kinnard, Jordan(1st) - Active</strong></option>
							<option value="1206" data-idchurch="1336" style="color: #000;"><strong>Kinney, Brad & Cat (1st) - Active</strong></option>
							<option value="2126" data-idchurch="1568" style="color: #000;"><strong>Kling, Robert and Brandilyn(1st) - Active</strong></option>
							<option value="2240" data-idchurch="1940" style="color: #000;"><strong>Klutts, Natasha and Robert(1st) - Active</strong></option>
							<option value="2161" data-idchurch="1475" style="color: #000;"><strong>Knight, Robin and Larry(1st) - Active</strong></option>
							<option value="1428" data-idchurch="1479" style="color: #000;"><strong>Knipples(1st) - Active</strong></option>
							<option value="2004" data-idchurch="1428" style="color: #aaa;">Knorr, Patrick and Ashley(1st)</option>
							<option value="1248" data-idchurch="1310" style="color: #000;"><strong>Knowles, Wesley & Kimberly(1st) - Active</strong></option>
							<option value="2488" data-idchurch="2632" style="color: #aaa;">Knox, Matt and Chelsea(1st)</option>
							<option value="2260" data-idchurch="2046" style="color: #aaa;">Knutsen Community(1st)</option>
							<option value="1886" data-idchurch="1297" style="color: #000;"><strong>Konigsberg, David and Lauren(1st) - Active</strong></option>
							<option value="2366" data-idchurch="1923" style="color: #aaa;">Konkle, Brad and Jennifer(1st)</option>
							<option value="2549" data-idchurch="1923" style="color: #000;"><strong>Konkle, Brad and Jennifer(2nd) - Active</strong></option>
							<option value="1791" data-idchurch="1515" style="color: #000;"><strong>Kovacs, Tim and Darci(1st) - Active</strong></option>
							<option value="1427" data-idchurch="1479" style="color: #000;"><strong>Kreye(1st) - Active</strong></option>
							<option value="2428" data-idchurch="1892" style="color: #aaa;">Krist, Tayren and Jon(1st)</option>
							<option value="2027" data-idchurch="1485" style="color: #000;"><strong>Kuecker, Rachel and Jessica(1st) - Active</strong></option>
							<option value="2493" data-idchurch="2612" style="color: #000;"><strong>Kuester, Katie and Todd(1st) - Active</strong></option>
							<option value="2314" data-idchurch="1914" style="color: #000;"><strong>Kulig, Scott and Leslie(1st) - Active</strong></option>
							<option value="1109" data-idchurch="1278" style="color: #aaa;">Kuninsky, Jennifer & Steve (1st)</option>
							<option value="1716" data-idchurch="1505" style="color: #000;"><strong>Kyla Johnson(1st) - Active</strong></option>
							<option value="1325" data-idchurch="1271" style="color: #000;"><strong>Ladner, Philip & Jamie(1st) - Active</strong></option>
							<option value="2376" data-idchurch="2404" style="color: #000;"><strong>LaGory Family(1st) - Active</strong></option>
							<option value="1271" data-idchurch="1340" style="color: #aaa;">Lahey, Amy(1st)</option>
							<option value="2014" data-idchurch="1882" style="color: #aaa;">Lajoice, Jan(1st)</option>
							<option value="1156" data-idchurch="1290" style="color: #aaa;">LaJoie, Laura & Chad (1st)</option>
							<option value="1048" data-idchurch="1220" style="color: #000;"><strong>Lamb, Stacy (1st) - Active</strong></option>
							<option value="2487" data-idchurch="2530" style="color: #000;"><strong>Lambert, Joshua and Courtney(1st) - Active</strong></option>
							<option value="1115" data-idchurch="1282" style="color: #000;"><strong>LaMontagne, Terry(4th) - Active</strong></option>
							<option value="2328" data-idchurch="1595" style="color: #000;"><strong>Land Family(1st) - Active</strong></option>
							<option value="2539" data-idchurch="1341" style="color: #000;"><strong>Landon, Kelcie(1st) - Active</strong></option>
							<option value="1824" data-idchurch="1349" style="color: #000;"><strong>Lane, Mike and Cindy(1st) - Active</strong></option>
							<option value="1891" data-idchurch="1590" style="color: #000;"><strong>Laporte, Henry and Amy(1st) - Active</strong></option>
							<option value="2283" data-idchurch="1568" style="color: #000;"><strong>Larez, Egle and Montilla, Freddy(1st) - Active</strong></option>
							<option value="2188" data-idchurch="1883" style="color: #aaa;">Largent, Janna(1st)</option>
							<option value="1888" data-idchurch="1492" style="color: #000;"><strong>Larson, Brent and Melissa(1st) - Active</strong></option>
							<option value="1095" data-idchurch="1275" style="color: #aaa;">LaSage, Donna (1st)</option>
							<option value="2034" data-idchurch="2046" style="color: #000;"><strong>Laster, George and Cheryl(1st) - Active</strong></option>
							<option value="1602" data-idchurch="1393" style="color: #000;"><strong>Laura Peters(1st) - Active</strong></option>
							<option value="1661" data-idchurch="1294" style="color: #aaa;">Lazarus, Sharlena(1st)</option>
							<option value="1199" data-idchurch="1336" style="color: #000;"><strong>Leach, Craig & Amber (1st) - Active</strong></option>
							<option value="2103" data-idchurch="1505" style="color: #000;"><strong>Leah cawby(1st) - Active</strong></option>
							<option value="1603" data-idchurch="1300" style="color: #000;"><strong>Lee & Jackie Clark(1st) - Active</strong></option>
							<option value="2405" data-idchurch="1333" style="color: #000;"><strong>Lee, Tim(1st) - Active</strong></option>
							<option value="1947" data-idchurch="1653" style="color: #aaa;">Lehman, Lisa(1st)</option>
							<option value="1751" data-idchurch="1518" style="color: #aaa;">Lennard, Ishana(1st)</option>
							<option value="1317" data-idchurch="1224" style="color: #000;"><strong>Leslie, Brandon & Mandy (1st) - Active</strong></option>
							<option value="1265" data-idchurch="1332" style="color: #000;"><strong>Leubber, Edward & Tressa (1st) - Active</strong></option>
							<option value="1284" data-idchurch="1209" style="color: #aaa;">Libengood, Emily(1st)</option>
							<option value="1929" data-idchurch="1766" style="color: #000;"><strong>Ligon, John and Crystal(1st) - Active</strong></option>
							<option value="1836" data-idchurch="1474" style="color: #000;"><strong>Limerick, Amber(1st) - Active</strong></option>
							<option value="1782" data-idchurch="1397" style="color: #000;"><strong>Limoge, David and Chantal(1st) - Active</strong></option>
							<option value="1258" data-idchurch="1324" style="color: #000;"><strong>Lindroth, Ben & Elizabeth (1st) - Active</strong></option>
							<option value="1548" data-idchurch="1345" style="color: #aaa;">Lindsey & Aaron Cavin(1st)</option>
							<option value="2506" data-idchurch="2260" style="color: #000;"><strong>Lindsey, Doug and Tammy(1st) - Active</strong></option>
							<option value="2319" data-idchurch="1852" style="color: #000;"><strong>Loman, Matt and Emily(1st) - Active</strong></option>
							<option value="1854" data-idchurch="1641" style="color: #000;"><strong>Long, Elizabeth and Nathan(1st) - Active</strong></option>
							<option value="1786" data-idchurch="1515" style="color: #000;"><strong>Lopez, Jerry and Karen(1st) - Active</strong></option>
							<option value="2384" data-idchurch="1599" style="color: #000;"><strong>Lopez, Pedro and Arelis(1st) - Active</strong></option>
							<option value="1612" data-idchurch="1382" style="color: #000;"><strong>Lori Key(1st) - Active</strong></option>
							<option value="2322" data-idchurch="1595" style="color: #000;"><strong>Lorraine Woodward(1st) - Active</strong></option>
							<option value="1357" data-idchurch="1242" style="color: #000;"><strong>Loudermilk, Linda (1st) - Active</strong></option>
							<option value="1960" data-idchurch="1327" style="color: #000;"><strong>Lovell, Matt and Kate(1st) - Active</strong></option>
							<option value="2438" data-idchurch="1851" style="color: #000;"><strong>Lowe, Justin and Danielle(1st) - Active</strong></option>
							<option value="1222" data-idchurch="1353" style="color: #000;"><strong>Lowell, Evan & Karen(1st) - Active</strong></option>
							<option value="2007" data-idchurch="1787" style="color: #000;"><strong>Lowrey, Jerry Lowery and Michelle Lowrey(1st) - Active</strong></option>
							<option value="2456" data-idchurch="1923" style="color: #000;"><strong>Lowry, Alexis and Joshua(1st) - Active</strong></option>
							<option value="1986" data-idchurch="1793" style="color: #aaa;">Luera, Stephan(1st)</option>
							<option value="1574" data-idchurch="1262" style="color: #000;"><strong>Luis & Angela Valenzuela(1st) - Active</strong></option>
							<option value="1711" data-idchurch="1505" style="color: #aaa;">Luke Nabozny and Jess Kennedy(1st)</option>
							<option value="1781" data-idchurch="1208" style="color: #000;"><strong>Luther, Katelyn(1st) - Active</strong></option>
							<option value="1939" data-idchurch="1766" style="color: #aaa;">Lynch, Justin and Kari(1st)</option>
							<option value="1167" data-idchurch="1293" style="color: #aaa;">MacPherson, Bruce (1st)</option>
							<option value="1724" data-idchurch="1594" style="color: #aaa;">Madison Family(1st)</option>
							<option value="1996" data-idchurch="1888" style="color: #000;"><strong>Magallanes, Mari(1st) - Active</strong></option>
							<option value="1146" data-idchurch="1267" style="color: #aaa;">Maguire, Jonathan & Cecilia (1st)</option>
							<option value="2163" data-idchurch="1475" style="color: #000;"><strong>Makinster, Joe Makkinster and Sherry Makinster(1st) - Active</strong></option>
							<option value="1785" data-idchurch="1515" style="color: #000;"><strong>Maks, Melinda(1st) - Active</strong></option>
							<option value="1956" data-idchurch="1921" style="color: #aaa;">Malcolm, Brian Malcom and Brea Malcolm(1st)</option>
							<option value="1457" data-idchurch="1494" style="color: #aaa;">Malnory Care Community(1st)</option>
							<option value="1946" data-idchurch="1492" style="color: #000;"><strong>Malone , Megan and Adam(1st) - Active</strong></option>
							<option value="1733" data-idchurch="1397" style="color: #000;"><strong>Mann, Amy(1st) - Active</strong></option>
							<option value="1800" data-idchurch="1219" style="color: #000;"><strong>Mann, Amy(1st) - Active</strong></option>
							<option value="1940" data-idchurch="1494" style="color: #000;"><strong>Manny Boersma's Care Community(1st) - Active</strong></option>
							<option value="2187" data-idchurch="1780" style="color: #000;"><strong>Manuel and Wendy Arroyo(1st) - Active</strong></option>
							<option value="2294" data-idchurch="1588" style="color: #aaa;">MaQuire, Courtlandt McQuire and Michelle MaQuire(1st)</option>
							<option value="2127" data-idchurch="1568" style="color: #aaa;">Marconi, Michael and Jennifer(1st)</option>
							<option value="1544" data-idchurch="1350" style="color: #aaa;">Margaret Brown(1st)</option>
							<option value="1596" data-idchurch="1335" style="color: #aaa;">Marie & Kevin Sample(1st)</option>
							<option value="1562" data-idchurch="1293" style="color: #aaa;">Mark & Mary Elizabeth McConnell(1st)</option>
							<option value="1347" data-idchurch="1202" style="color: #aaa;">Marshall, Ann(2nd)</option>
							<option value="1000" data-idchurch="1202" style="color: #aaa;">Marshall, Ann(1st)</option>
							<option value="2164" data-idchurch="1475" style="color: #000;"><strong>Martens, Justin and Cheryl(1st) - Active</strong></option>
							<option value="2462" data-idchurch="2038" style="color: #000;"><strong>Martha Mendez(1st) - Active</strong></option>
							<option value="2078" data-idchurch="1322" style="color: #000;"><strong>Martin, Bryan and Shelley(1st) - Active</strong></option>
							<option value="1036" data-idchurch="1202" style="color: #aaa;">Martin, David & Shannon(1st)</option>
							<option value="2492" data-idchurch="2612" style="color: #000;"><strong>Marvin, Eric and Vanessa(1st) - Active</strong></option>
							<option value="1759" data-idchurch="1739" style="color: #000;"><strong>Maslin, Catherine(1st) - Active</strong></option>
							<option value="1186" data-idchurch="1317" style="color: #aaa;">Mason, Gene & Keri (1st)</option>
							<option value="1159" data-idchurch="1290" style="color: #aaa;">Mason, Paige (1st)</option>
							<option value="2053" data-idchurch="1685" style="color: #000;"><strong>Massingill team(1st) - Active</strong></option>
							<option value="2367" data-idchurch="1923" style="color: #000;"><strong>Mast, Doris(1st) - Active</strong></option>
							<option value="1358" data-idchurch="1268" style="color: #aaa;">Masters, Anthony & Tessa(1st)</option>
							<option value="1144" data-idchurch="1288" style="color: #aaa;">Masters, Tessa & Anthony (1st)</option>
							<option value="1630" data-idchurch="1336" style="color: #aaa;">Matt & Amanda Tingle(1st)</option>
							<option value="1010" data-idchurch="1209" style="color: #aaa;">Matt, & Michelle Knebel(1st)</option>
							<option value="1537" data-idchurch="1350" style="color: #aaa;">Matthew & Breanna Groover(1st)</option>
							<option value="2530" data-idchurch="2612" style="color: #000;"><strong>Maxwell, Josh and Mierya(1st) - Active</strong></option>
							<option value="2225" data-idchurch="1568" style="color: #aaa;">May, Marvin & Veronica(1st)</option>
							<option value="2171" data-idchurch="2284" style="color: #aaa;">Mayer, Hal and Chrissy(1st)</option>
							<option value="2217" data-idchurch="1949" style="color: #aaa;">McAlister, Allison(1st)</option>
							<option value="1659" data-idchurch="1641" style="color: #aaa;">McAndrew, Scott and Liliana(1st)</option>
							<option value="2128" data-idchurch="1568" style="color: #aaa;">McCall, Peter VonStetina and Amy McCall(1st)</option>
							<option value="1335" data-idchurch="1336" style="color: #000;"><strong>McCalvin, Cack & Laura (1st) - Active</strong></option>
							<option value="1209" data-idchurch="1336" style="color: #aaa;">McCalvin, Zack & Laura (1st)</option>
							<option value="1140" data-idchurch="1288" style="color: #aaa;">McCarn, Gina & Phil (1st)</option>
							<option value="1314" data-idchurch="1276" style="color: #aaa;">McCarn, Gina & Phil McCarn Group(1st)</option>
							<option value="1029" data-idchurch="1278" style="color: #aaa;">McClure, Lana & Philip(1st)</option>
							<option value="1033" data-idchurch="1278" style="color: #aaa;">McClure, Roy & Sandy(1st)</option>
							<option value="1337" data-idchurch="1242" style="color: #000;"><strong>McConnell, Mary Elizabeth & Mark(1st) - Active</strong></option>
							<option value="2082" data-idchurch="2060" style="color: #aaa;">McCormick, Alicia(1st)</option>
							<option value="1074" data-idchurch="1271" style="color: #000;"><strong>McCoy, Sheila(1st) - Active</strong></option>
							<option value="1419" data-idchurch="1477" style="color: #000;"><strong>McCracken(1st) - Active</strong></option>
							<option value="1684" data-idchurch="1325" style="color: #000;"><strong>McCullough, Lilly and Justin(1st) - Active</strong></option>
							<option value="1319" data-idchurch="1323" style="color: #000;"><strong>McDaniel, Matthew & Laura(2nd) - Active</strong></option>
							<option value="1928" data-idchurch="1441" style="color: #000;"><strong>McFall, Amy(1st) - Active</strong></option>
							<option value="2320" data-idchurch="1852" style="color: #000;"><strong>McGee, Robert and Tia(1st) - Active</strong></option>
							<option value="2515" data-idchurch="2459" style="color: #aaa;">McIlhargey, Alex and Hannah(1st)</option>
							<option value="1295" data-idchurch="1342" style="color: #000;"><strong>McIlhinney, Sean & Heather (1st) - Active</strong></option>
							<option value="1213" data-idchurch="1350" style="color: #000;"><strong>McIlvaine, Jon & Carey-Lynn (1st) - Active</strong></option>
							<option value="2400" data-idchurch="2594" style="color: #000;"><strong>Mcintosh, Jeff and Jessica(1st) - Active</strong></option>
							<option value="2139" data-idchurch="1568" style="color: #aaa;">McKennedy, Shea and Charilynn(1st)</option>
							<option value="1149" data-idchurch="1288" style="color: #aaa;">McKnight, Brenda & Mike(1st)</option>
							<option value="1150" data-idchurch="1288" style="color: #aaa;">McKnight, Michael & Kimberly Care Communtiy(1st)</option>
							<option value="1865" data-idchurch="1706" style="color: #000;"><strong>McLean, Tyler and Amanda(1st) - Active</strong></option>
							<option value="1031" data-idchurch="1278" style="color: #aaa;">McLendon, Blakley & Jonathan(1st)</option>
							<option value="1203" data-idchurch="1336" style="color: #000;"><strong>McTavish, Holly & Derek (1st) - Active</strong></option>
							<option value="2149" data-idchurch="1278" style="color: #000;"><strong>Meadows, Bryan and Britni(1st) - Active</strong></option>
							<option value="2511" data-idchurch="1923" style="color: #000;"><strong>Meeks, Matt and Jen(1st) - Active</strong></option>
							<option value="1672" data-idchurch="1505" style="color: #aaa;">Megan and Cristian Moscoso(1st)</option>
							<option value="1780" data-idchurch="1332" style="color: #000;"><strong>Megan Ward and Amanda McMillan(1st) - Active</strong></option>
							<option value="1594" data-idchurch="1640" style="color: #aaa;">Megan Ward and Amanda McMillian(1st)</option>
							<option value="1024" data-idchurch="1201" style="color: #aaa;">Melin, Natalie & Steven(1st)</option>
							<option value="1554" data-idchurch="1260" style="color: #aaa;">Melissa Barnett(1st)</option>
							<option value="2329" data-idchurch="1701" style="color: #000;"><strong>Melissa Walker(1st) - Active</strong></option>
							<option value="2067" data-idchurch="1885" style="color: #000;"><strong>Mercado(1st) - Active</strong></option>
							<option value="1217" data-idchurch="1351" style="color: #000;"><strong>Mercardante, Patrick (1st) - Active</strong></option>
							<option value="2251" data-idchurch="1630" style="color: #aaa;">Mercer Team(1st)</option>
							<option value="1438" data-idchurch="1473" style="color: #000;"><strong>Metana(1st) - Active</strong></option>
							<option value="1746" data-idchurch="1595" style="color: #000;"><strong>Metzler Family(1st) - Active</strong></option>
							<option value="1631" data-idchurch="1336" style="color: #aaa;">Michael & Crystal Woelfl(1st)</option>
							<option value="1513" data-idchurch="1333" style="color: #aaa;">Michael & Jennifer Goode(1st)</option>
							<option value="1514" data-idchurch="1333" style="color: #aaa;">Michael & Jennifer Goode(2nd)</option>
							<option value="1638" data-idchurch="1336" style="color: #000;"><strong>Michael & Kelli Elder(1st) - Active</strong></option>
							<option value="1632" data-idchurch="1336" style="color: #aaa;">Michael & Laura Healy(1st)</option>
							<option value="1255" data-idchurch="1319" style="color: #000;"><strong>Michael, Gary & Amy (1st) - Active</strong></option>
							<option value="2326" data-idchurch="2320" style="color: #aaa;">Michaels, Sarah(1st)</option>
							<option value="1531" data-idchurch="1261" style="color: #000;"><strong>Mike & Brianne Baine(1st) - Active</strong></option>
							<option value="1899" data-idchurch="1918" style="color: #000;"><strong>Milhan(1st) - Active</strong></option>
							<option value="1107" data-idchurch="1275" style="color: #000;"><strong>Miller, Randy & Heather (1st) - Active</strong></option>
							<option value="2543" data-idchurch="2616" style="color: #aaa;">Miller, Zach & Carissa(1st)</option>
							<option value="1126" data-idchurch="1288" style="color: #000;"><strong>Milligan, Lonnie & Suzanne(1st) - Active</strong></option>
							<option value="2191" data-idchurch="1898" style="color: #aaa;">Mincey, Allen and Stacy(1st)</option>
							<option value="2339" data-idchurch="1568" style="color: #aaa;">Mintz, Brandon and Faith(1st)</option>
							<option value="1219" data-idchurch="1351" style="color: #000;"><strong>Mitchell, Eleanor (1st) - Active</strong></option>
							<option value="1901" data-idchurch="1351" style="color: #aaa;">Mitchell, Eleanor(1st)</option>
							<option value="1902" data-idchurch="1333" style="color: #aaa;">Mitchell, Eleanor(2nd)</option>
							<option value="2371" data-idchurch="1923" style="color: #aaa;">Mohr, Chad and Molly(1st)</option>
							<option value="2383" data-idchurch="2192" style="color: #000;"><strong>Mohr, Jon and Angie(1st) - Active</strong></option>
							<option value="2055" data-idchurch="1594" style="color: #000;"><strong>Mollica, Jami(1st) - Active</strong></option>
							<option value="1761" data-idchurch="1739" style="color: #000;"><strong>Moon, Brad and Ashley(1st) - Active</strong></option>
							<option value="1758" data-idchurch="1622" style="color: #000;"><strong>Mooney, Lauren(1st) - Active</strong></option>
							<option value="1933" data-idchurch="1766" style="color: #aaa;">Moore Hamby, Meredith(1st)</option>
							<option value="1037" data-idchurch="1220" style="color: #000;"><strong>Moore, Daniel & Erin (1st) - Active</strong></option>
							<option value="2372" data-idchurch="1923" style="color: #aaa;">Moore, Jake and Melissa(1st)</option>
							<option value="2212" data-idchurch="1737" style="color: #aaa;">Moore, Topher and Brittney(1st)</option>
							<option value="1223" data-idchurch="1334" style="color: #000;"><strong>Moore, Wendy (1st) - Active</strong></option>
							<option value="1900" data-idchurch="1335" style="color: #aaa;">Mordecai, Ben and Hallie(1st)</option>
							<option value="1920" data-idchurch="1282" style="color: #000;"><strong>Morgan, Kevin and Sonya(3rd) - Active</strong></option>
							<option value="2202" data-idchurch="1888" style="color: #aaa;">Mosher, Wes and Jocelynn(1st)</option>
							<option value="2540" data-idchurch="1441" style="color: #aaa;">Moss, James and Michal(1st)</option>
							<option value="1768" data-idchurch="1327" style="color: #000;"><strong>Mott, Thomas and Caroline(1st) - Active</strong></option>
							<option value="1941" data-idchurch="1272" style="color: #000;"><strong>Mumma, Nelson and Katie(1st) - Active</strong></option>
							<option value="1727" data-idchurch="1709" style="color: #000;"><strong>Mummau, Myke and Patti(1st) - Active</strong></option>
							<option value="1645" data-idchurch="1522" style="color: #aaa;">Munoz(1st)</option>
							<option value="1819" data-idchurch="1514" style="color: #000;"><strong>Murphy, Matt and Julie(1st) - Active</strong></option>
							<option value="1152" data-idchurch="1290" style="color: #aaa;">Murray, Nick & Mariella Murray (1st)</option>
							<option value="1196" data-idchurch="1336" style="color: #000;"><strong>Murry, Rob & Julie (1st) - Active</strong></option>
							<option value="2193" data-idchurch="2259" style="color: #aaa;">Myers, Jena(1st)</option>
							<option value="2507" data-idchurch="2593" style="color: #000;"><strong>Myers, Seth Meyers and Karleigh Myers(1st) - Active</strong></option>
							<option value="1230" data-idchurch="1360" style="color: #000;"><strong>Nathan, & Chrissie Gallentine (1st) - Active</strong></option>
							<option value="1232" data-idchurch="1360" style="color: #000;"><strong>Nathan, & Chrissy (1st) - Active</strong></option>
							<option value="1420" data-idchurch="1477" style="color: #000;"><strong>Naught(1st) - Active</strong></option>
							<option value="2302" data-idchurch="1588" style="color: #aaa;">Neff, Derek and Michelle(1st)</option>
							<option value="1043" data-idchurch="1220" style="color: #000;"><strong>Nei, Scott & Emily (1st) - Active</strong></option>
							<option value="2062" data-idchurch="1288" style="color: #aaa;">Nelson, Andy and Emily(1st)</option>
							<option value="1327" data-idchurch="1323" style="color: #aaa;">Newberry, Eric & Christine(2nd)</option>
							<option value="1423" data-idchurch="1481" style="color: #000;"><strong>Nicholas(1st) - Active</strong></option>
							<option value="1668" data-idchurch="1505" style="color: #aaa;">No longer a group -Deanna Scott(1st)</option>
							<option value="1667" data-idchurch="1505" style="color: #aaa;">No longer a group-Julie Anderson(1st)</option>
							<option value="1244" data-idchurch="1309" style="color: #000;"><strong>Nolder, Dan & Jenn(1st) - Active</strong></option>
							<option value="2545" data-idchurch="1515" style="color: #aaa;">Nye, Jonathan and Erin(1st)</option>
							<option value="2558" data-idchurch="2260" style="color: #000;"><strong>O'Connell Family(1st) - Active</strong></option>
							<option value="2354" data-idchurch="1492" style="color: #000;"><strong>Oberndorfer, Justin and Sarah(2nd) - Active</strong></option>
							<option value="2296" data-idchurch="1588" style="color: #aaa;">Ojo, Olumide and Yvonne(1st)</option>
							<option value="1436" data-idchurch="1473" style="color: #000;"><strong>Oleson(1st) - Active</strong></option>
							<option value="2560" data-idchurch="2066" style="color: #aaa;">Oliver, Mark and Patti(1st)</option>
							<option value="1469" data-idchurch="1483" style="color: #aaa;">Olson, Jerry & Terry(1st)</option>
							<option value="1439" data-idchurch="1473" style="color: #000;"><strong>Opalka(1st) - Active</strong></option>
							<option value="2221" data-idchurch="1588" style="color: #aaa;">Orozco, Osbey and Ruby(1st)</option>
							<option value="2449" data-idchurch="1851" style="color: #000;"><strong>Orsburn, Brent and Lisa(1st) - Active</strong></option>
							<option value="1453" data-idchurch="1495" style="color: #aaa;">Ottum, Michael & Collene(1st)</option>
							<option value="1747" data-idchurch="1356" style="color: #000;"><strong>Owens, Justin and Alexa(1st) - Active</strong></option>
							<option value="1670" data-idchurch="1626" style="color: #aaa;">Owens, Michael and Donna(1st)</option>
							<option value="2475" data-idchurch="2512" style="color: #000;"><strong>O’bold, Kevin and Katie(1st) - Active</strong></option>
							<option value="2369" data-idchurch="1475" style="color: #000;"><strong>Padilla, Elizabeth and Omar(1st) - Active</strong></option>
							<option value="2233" data-idchurch="1960" style="color: #000;"><strong>Paille, Stacey and Eric(1st) - Active</strong></option>
							<option value="1776" data-idchurch="1653" style="color: #aaa;">Palmer Family(1st)</option>
							<option value="1163" data-idchurch="1283" style="color: #aaa;">Papastefanou, Rich & Ashley (1st)</option>
							<option value="2160" data-idchurch="1475" style="color: #000;"><strong>Papke, Ryan and Allison(1st) - Active</strong></option>
							<option value="1235" data-idchurch="1366" style="color: #000;"><strong>Parekh, Urmil & Patricia(2nd) - Active</strong></option>
							<option value="1610" data-idchurch="1308" style="color: #aaa;">Parker & Adelle James(1st)</option>
							<option value="1229" data-idchurch="1360" style="color: #000;"><strong>Parker, Kris & Brandi (1st) - Active</strong></option>
							<option value="1764" data-idchurch="1518" style="color: #aaa;">Parkhurst, Leah(1st)</option>
							<option value="1788" data-idchurch="1515" style="color: #aaa;">Parman, Brian and Christine(1st)</option>
							<option value="1884" data-idchurch="1883" style="color: #000;"><strong>Patey, Nicholas and Jenny(1st) - Active</strong></option>
							<option value="1523" data-idchurch="1333" style="color: #aaa;">Patrick Mercardante(2nd)</option>
							<option value="1607" data-idchurch="1351" style="color: #aaa;">Patrick Mercardante(1st)</option>
							<option value="1477" data-idchurch="1486" style="color: #000;"><strong>Patterson, Kelly & Kelly(1st) - Active</strong></option>
							<option value="2246" data-idchurch="2036" style="color: #aaa;">Paulette McCollum(1st)</option>
							<option value="1954" data-idchurch="1685" style="color: #aaa;">Payne team(1st)</option>
							<option value="2321" data-idchurch="1913" style="color: #000;"><strong>Payton, Preston and Capri(1st) - Active</strong></option>
							<option value="1106" data-idchurch="1275" style="color: #aaa;">Peabody, Seth & Jeannie (1st)</option>
							<option value="1122" data-idchurch="1285" style="color: #000;"><strong>Peabody, Seth & Jeannie(1st) - Active</strong></option>
							<option value="2408" data-idchurch="2578" style="color: #000;"><strong>Pearce, Jake(1st) - Active</strong></option>
							<option value="1944" data-idchurch="1309" style="color: #000;"><strong>Pearce, Kelsi and Alex(1st) - Active</strong></option>
							<option value="1286" data-idchurch="1208" style="color: #000;"><strong>Pearce, Wade & Chris(1st) - Active</strong></option>
							<option value="1028" data-idchurch="1278" style="color: #aaa;">Peden, Jennifer & Robert(1st)</option>
							<option value="2213" data-idchurch="1260" style="color: #000;"><strong>Peebles-Harrelson(1st) - Active</strong></option>
							<option value="1128" data-idchurch="1288" style="color: #aaa;">Peele (1st)</option>
							<option value="1089" data-idchurch="1275" style="color: #000;"><strong>Peer, Rob & Jennifer (1st) - Active</strong></option>
							<option value="1931" data-idchurch="1766" style="color: #aaa;">Peery, Tara(1st)</option>
							<option value="2297" data-idchurch="1588" style="color: #aaa;">Pemberton, Trevor and Emmane(1st)</option>
							<option value="1053" data-idchurch="1220" style="color: #000;"><strong>Pendley, Eric & Michelle (1st) - Active</strong></option>
							<option value="1735" data-idchurch="1325" style="color: #aaa;">Pene, Leigh and Shane(1st)</option>
							<option value="1976" data-idchurch="1940" style="color: #000;"><strong>Penrod, Jimmy and Taylor(1st) - Active</strong></option>
							<option value="2087" data-idchurch="2060" style="color: #000;"><strong>Penton, Laura and Dave(1st) - Active</strong></option>
							<option value="1691" data-idchurch="1353" style="color: #000;"><strong>Perez, Kimberly and Jorge(1st) - Active</strong></option>
							<option value="1808" data-idchurch="1309" style="color: #000;"><strong>Perry, Jeremy and Mignon(1st) - Active</strong></option>
							<option value="1158" data-idchurch="1288" style="color: #aaa;">Perry, Latashia (1st)</option>
							<option value="1591" data-idchurch="1294" style="color: #aaa;">Peter & Joy Pirkel(1st)</option>
							<option value="1699" data-idchurch="1505" style="color: #000;"><strong>Peter and Kendra Amico(1st) - Active</strong></option>
							<option value="1081" data-idchurch="1285" style="color: #aaa;">Peters, Jameel & Makini(1st)</option>
							<option value="1863" data-idchurch="1297" style="color: #aaa;">Peyton, Nick and Rachelle(1st)</option>
							<option value="1045" data-idchurch="1220" style="color: #000;"><strong>Pfleeger, John & Martha (1st) - Active</strong></option>
							<option value="1338" data-idchurch="1327" style="color: #aaa;">Pharr, Jeff & Meredith(1st)</option>
							<option value="1056" data-idchurch="1222" style="color: #000;"><strong>Phelps, Brad & Kelley (1st) - Active</strong></option>
							<option value="2003" data-idchurch="1899" style="color: #000;"><strong>Phelps, Noel and Marc(1st) - Active</strong></option>
							<option value="1887" data-idchurch="1311" style="color: #000;"><strong>Phillips, Edward and Caitlin(1st) - Active</strong></option>
							<option value="1820" data-idchurch="1514" style="color: #aaa;">Phillips, Joe and Laura(1st)</option>
							<option value="1787" data-idchurch="1515" style="color: #000;"><strong>Pi, Michael and Ashley(1st) - Active</strong></option>
							<option value="2238" data-idchurch="1515" style="color: #000;"><strong>Pickering, Scott and Lovey(1st) - Active</strong></option>
							<option value="1042" data-idchurch="1220" style="color: #000;"><strong>Pickett, Jen & Jake (1st) - Active</strong></option>
							<option value="2416" data-idchurch="2568" style="color: #aaa;">Pierce, Matthew and Leah(1st)</option>
							<option value="2140" data-idchurch="1568" style="color: #000;"><strong>Pierre, Renel and Mickaelle(1st) - Active</strong></option>
							<option value="1892" data-idchurch="1352" style="color: #aaa;">Pineda, Josh and Christie(1st)</option>
							<option value="1221" data-idchurch="1352" style="color: #000;"><strong>Pineda, Josue & Christie (1st) - Active</strong></option>
							<option value="2387" data-idchurch="1515" style="color: #000;"><strong>Pinuelas, Gonzalo & Austin(1st) - Active</strong></option>
							<option value="1171" data-idchurch="1294" style="color: #000;"><strong>Pirkel, Peter & Joy (1st) - Active</strong></option>
							<option value="2509" data-idchurch="1796" style="color: #000;"><strong>Pittman, John and Wendy(1st) - Active</strong></option>
							<option value="2284" data-idchurch="1588" style="color: #aaa;">Polanco, Jorge and Clarisa(1st)</option>
							<option value="2201" data-idchurch="2066" style="color: #aaa;">Pollard, Wendy and Doug (1st)</option>
							<option value="1866" data-idchurch="1706" style="color: #aaa;">Polman, Jason and Heather(1st)</option>
							<option value="2350" data-idchurch="1506" style="color: #aaa;">Porrata, Leah(1st)</option>
							<option value="2458" data-idchurch="1923" style="color: #aaa;">Porterfield, Andrew and Heidi(1st)</option>
							<option value="2442" data-idchurch="1851" style="color: #000;"><strong>Pounds, David and Rachael(1st) - Active</strong></option>
							<option value="1840" data-idchurch="1474" style="color: #000;"><strong>Powell, Joy and Mike(1st) - Active</strong></option>
							<option value="1139" data-idchurch="1288" style="color: #aaa;">Presley, Eric & Angie (1st)</option>
							<option value="2261" data-idchurch="1515" style="color: #000;"><strong>Price, Kevin and Jess(1st) - Active</strong></option>
							<option value="2401" data-idchurch="2594" style="color: #000;"><strong>Price, Randall and Nikki(1st) - Active</strong></option>
							<option value="2453" data-idchurch="1588" style="color: #aaa;">Proulx, Robert and Kelley(1st)</option>
							<option value="2141" data-idchurch="1568" style="color: #000;"><strong>Prusinowski, Nicholas and Deanna(1st) - Active</strong></option>
							<option value="1231" data-idchurch="1275" style="color: #000;"><strong>Puckett, Jordan & Erin (1st) - Active</strong></option>
							<option value="2129" data-idchurch="1568" style="color: #000;"><strong>Purtic, Eric and Margie(1st) - Active</strong></option>
							<option value="1241" data-idchurch="1306" style="color: #000;"><strong>Puryear, Kevin & Rachel (1st) - Active</strong></option>
							<option value="2174" data-idchurch="1685" style="color: #aaa;">Puryear, Rachel and Kevin(1st)</option>
							<option value="1979" data-idchurch="1742" style="color: #000;"><strong>Quates Family(1st) - Active</strong></option>
							<option value="1935" data-idchurch="1766" style="color: #aaa;">Quinn, Ryan and Beverly(1st)</option>
							<option value="1510" data-idchurch="1577" style="color: #000;"><strong>Quinones, Jacob & Tiffany(1st) - Active</strong></option>
							<option value="2155" data-idchurch="2064" style="color: #aaa;">Quintero, Shelby and Jesus(1st)</option>
							<option value="1189" data-idchurch="1322" style="color: #000;"><strong>Raber, Devon & Craig(1st) - Active</strong></option>
							<option value="1581" data-idchurch="1352" style="color: #aaa;">Rachel & Leah Brannon(2nd)</option>
							<option value="1995" data-idchurch="1352" style="color: #aaa;">Rachel & Leah Brannon(3rd)</option>
							<option value="1673" data-idchurch="1506" style="color: #000;"><strong>Rachel Curry(1st) - Active</strong></option>
							<option value="1228" data-idchurch="1360" style="color: #000;"><strong>Radcliffe, John & Aarika (1st) - Active</strong></option>
							<option value="2172" data-idchurch="1461" style="color: #000;"><strong>Ramey, Johnny and Linda(1st) - Active</strong></option>
							<option value="1515" data-idchurch="1333" style="color: #aaa;">Randy & Laura Bradum(1st)</option>
							<option value="1693" data-idchurch="1353" style="color: #aaa;">Rash, Chris and Ashley(1st)</option>
							<option value="1205" data-idchurch="1660" style="color: #aaa;">Rathbone, Alan & mary(2nd)</option>
							<option value="1861" data-idchurch="1336" style="color: #aaa;">Rathbone, Alan and Mary(1st)</option>
							<option value="2544" data-idchurch="2064" style="color: #aaa;">Rathburn, Kevin and Samantha(1st)</option>
							<option value="1997" data-idchurch="1309" style="color: #000;"><strong>Rawden, Dave and Vicki(1st) - Active</strong></option>
							<option value="1302" data-idchurch="1233" style="color: #aaa;">Reams, Jeffrey & Vanessa (1st)</option>
							<option value="1447" data-idchurch="0" style="color: #000;"><strong>Rebar, Andy & Amber(1st) - Active</strong></option>
							<option value="2436" data-idchurch="1851" style="color: #000;"><strong>Reed, Christen and Steven(1st) - Active</strong></option>
							<option value="1175" data-idchurch="1296" style="color: #000;"><strong>Reese, David & Renae(1st) - Active</strong></option>
							<option value="1752" data-idchurch="1518" style="color: #000;"><strong>Reeve, Sami and Charlie(1st) - Active</strong></option>
							<option value="2253" data-idchurch="1734" style="color: #aaa;">Regina Jones(1st)</option>
							<option value="1721" data-idchurch="1622" style="color: #aaa;">Reid , Kadeon and Cardelia(1st)</option>
							<option value="1313" data-idchurch="1324" style="color: #000;"><strong>Reid, Sam & Tricia (1st) - Active</strong></option>
							<option value="1030" data-idchurch="1278" style="color: #aaa;">Reimer, Greg & Bonnie(1st)</option>
							<option value="2156" data-idchurch="1956" style="color: #000;"><strong>Rekers, Tim and Jamie(1st) - Active</strong></option>
							<option value="1794" data-idchurch="1515" style="color: #aaa;">Rendon, Krista(1st)</option>
							<option value="1804" data-idchurch="1208" style="color: #aaa;">Renfro, Rachel(1st)</option>
							<option value="2504" data-idchurch="2593" style="color: #aaa;">Renn, Tina(1st)</option>
							<option value="1839" data-idchurch="1474" style="color: #000;"><strong>Rhea, Edie and David(1st) - Active</strong></option>
							<option value="2522" data-idchurch="2550" style="color: #000;"><strong>Rhodes, Champ and Sara(1st) - Active</strong></option>
							<option value="1965" data-idchurch="1505" style="color: #000;"><strong>Rhonda and Mike Davis(1st) - Active</strong></option>
							<option value="2054" data-idchurch="1653" style="color: #000;"><strong>Rice Family(1st) - Active</strong></option>
							<option value="2196" data-idchurch="1653" style="color: #000;"><strong>Rice, Dave and Cathy(2nd) - Active</strong></option>
							<option value="1340" data-idchurch="1336" style="color: #000;"><strong>Rice, Mandy & Allen (1st) - Active</strong></option>
							<option value="2313" data-idchurch="1913" style="color: #000;"><strong>Rice, Seth and Kayla(1st) - Active</strong></option>
							<option value="1742" data-idchurch="1682" style="color: #aaa;">Richardson, Lee and Jessica(1st)</option>
							<option value="1734" data-idchurch="1325" style="color: #aaa;">Richardson, Mary(1st)</option>
							<option value="2370" data-idchurch="1613" style="color: #aaa;">Rickerman, Jill(1st)</option>
							<option value="2299" data-idchurch="1588" style="color: #aaa;">Ricks, Daniel and Marshelene(1st)</option>
							<option value="2415" data-idchurch="2060" style="color: #000;"><strong>Ridley Family(1st) - Active</strong></option>
							<option value="2279" data-idchurch="1588" style="color: #aaa;">Riess, Debbra(1st)</option>
							<option value="1303" data-idchurch="1340" style="color: #000;"><strong>Righter, Rob & Christy (1st) - Active</strong></option>
							<option value="1793" data-idchurch="1515" style="color: #000;"><strong>Riley, Kevin and Missy(1st) - Active</strong></option>
							<option value="1985" data-idchurch="1683" style="color: #000;"><strong>Rivera, Robin(1st) - Active</strong></option>
							<option value="1763" data-idchurch="1518" style="color: #aaa;">Rivero, Vince and Connie(1st)</option>
							<option value="1633" data-idchurch="1336" style="color: #000;"><strong>Rob & Julie Murry(1st) - Active</strong></option>
							<option value="1634" data-idchurch="1336" style="color: #aaa;">Robert & Deana Bringolf(1st)</option>
							<option value="1559" data-idchurch="1346" style="color: #aaa;">Robert & Karen Salamone(1st)</option>
							<option value="1579" data-idchurch="1641" style="color: #aaa;">Robert & Lynn Young(1st)</option>
							<option value="1955" data-idchurch="1852" style="color: #000;"><strong>Roberts, Brandon and Whitney(1st) - Active</strong></option>
							<option value="1402" data-idchurch="1290" style="color: #aaa;">Roberts, Josh & Heather (1st)</option>
							<option value="1913" data-idchurch="1290" style="color: #000;"><strong>Roberts, Josh and Heather (1st) - Active</strong></option>
							<option value="1482" data-idchurch="1242" style="color: #aaa;">Robertson, Brett & Jodi(1st)</option>
							<option value="1272" data-idchurch="1340" style="color: #aaa;">Robinson, Judson & Mary (1st)</option>
							<option value="1756" data-idchurch="1518" style="color: #aaa;">Robinson, Renee(1st)</option>
							<option value="1280" data-idchurch="1201" style="color: #aaa;">Robinson, Terrance & Portia(1st)</option>
							<option value="1829" data-idchurch="1201" style="color: #000;"><strong>Robinson, Terrance & Portia(2nd) - Active</strong></option>
							<option value="2497" data-idchurch="1885" style="color: #aaa;">Rocha(1st)</option>
							<option value="1315" data-idchurch="1233" style="color: #000;"><strong>Rodda Family(1st) - Active</strong></option>
							<option value="1508" data-idchurch="1865" style="color: #000;"><strong>Roddenberry(1st) - Active</strong></option>
							<option value="2557" data-idchurch="2260" style="color: #aaa;">Roderick Family(1st)</option>
							<option value="2030" data-idchurch="1900" style="color: #aaa;">Rodgers, Pete and LeeAnn(1st)</option>
							<option value="2005" data-idchurch="1428" style="color: #aaa;">Rodgers, Pete and LeeAnn(1st)</option>
							<option value="2268" data-idchurch="2346" style="color: #000;"><strong>Rodriguez(1st) - Active</strong></option>
							<option value="1282" data-idchurch="1202" style="color: #aaa;">Rodriguez, Carlos and Selene(1st)</option>
							<option value="2198" data-idchurch="1892" style="color: #aaa;">Rodriguez, Eric and Meghan(1st)</option>
							<option value="1895" data-idchurch="1620" style="color: #000;"><strong>Rodriguez, Hannah and Aaron(1st) - Active</strong></option>
							<option value="2324" data-idchurch="2320" style="color: #000;"><strong>Rodriguez, Sarah and Manny(1st) - Active</strong></option>
							<option value="2341" data-idchurch="1901" style="color: #aaa;">Rogers, Chris & Kylee(1st)</option>
							<option value="1132" data-idchurch="1288" style="color: #aaa;">Rogers, Thomas & Lauren(1st)</option>
							<option value="1406" data-idchurch="1286" style="color: #000;"><strong>Rogers, Thomas & Lauren(2nd) - Active</strong></option>
							<option value="2050" data-idchurch="1288" style="color: #000;"><strong>Rogers, Thomas & Lauren(3rd) - Active</strong></option>
							<option value="2420" data-idchurch="1475" style="color: #000;"><strong>Rohrlack, Sue and Bob(1st) - Active</strong></option>
							<option value="1605" data-idchurch="1300" style="color: #aaa;">Ron & Paula Hein(1st)</option>
							<option value="1624" data-idchurch="1336" style="color: #000;"><strong>Rory & Jess Mathisen(2nd) - Active</strong></option>
							<option value="1860" data-idchurch="1336" style="color: #aaa;">Rory & Jess Mathisen(1st)</option>
							<option value="1951" data-idchurch="1793" style="color: #aaa;">Rose, Alisa(1st)</option>
							<option value="1131" data-idchurch="1288" style="color: #aaa;">Routly, Dave & Maia(1st)</option>
							<option value="2254" data-idchurch="1515" style="color: #000;"><strong>Rowan, Noah and Amanda(1st) - Active</strong></option>
							<option value="1201" data-idchurch="1336" style="color: #000;"><strong>Rowe, David & Heather (1st) - Active</strong></option>
							<option value="1473" data-idchurch="1444" style="color: #aaa;">Ruhl, Stephen & Autumn(1st)</option>
							<option value="2130" data-idchurch="1568" style="color: #aaa;">Ruiz, JoAnn(1st)</option>
							<option value="1889" data-idchurch="1311" style="color: #aaa;">Rumanek, Eric and Casey(1st)</option>
							<option value="1502" data-idchurch="1651" style="color: #aaa;">Sabbe(1st)</option>
							<option value="1501" data-idchurch="0" style="color: #000;"><strong>Sabbe(1st) - Active</strong></option>
							<option value="1291" data-idchurch="" style="color: #000;"><strong>Sable (1st) - Active</strong></option>
							<option value="1041" data-idchurch="1220" style="color: #000;"><strong>Sabo, Jason & Emily (1st) - Active</strong></option>
							<option value="1424" data-idchurch="1475" style="color: #000;"><strong>Sakales(1st) - Active</strong></option>
							<option value="1276" data-idchurch="1346" style="color: #aaa;">Salamone, Robert & Karen (1st)</option>
							<option value="2025" data-idchurch="1883" style="color: #aaa;">Saldanha, Nicole and Arthur(1st)</option>
							<option value="1992" data-idchurch="1622" style="color: #000;"><strong>Salmeron Meneses, Kristi and Gerardo(1st) - Active</strong></option>
							<option value="1885" data-idchurch="1297" style="color: #000;"><strong>Salzman, Mike and Brandi(1st) - Active</strong></option>
							<option value="2203" data-idchurch="1888" style="color: #000;"><strong>Sam Perkins-Prince(1st) - Active</strong></option>
							<option value="1937" data-idchurch="1766" style="color: #aaa;">Samaro, Wendy(1st)</option>
							<option value="2337" data-idchurch="1288" style="color: #aaa;">Sams, Roy and Meg(1st)</option>
							<option value="1421" data-idchurch="1477" style="color: #aaa;">Sanchez(1st)</option>
							<option value="2359" data-idchurch="1594" style="color: #aaa;">Sanchez, Alex and Lauren(1st)</option>
							<option value="2210" data-idchurch="1852" style="color: #000;"><strong>Sandberg, Jake and Sarah(1st) - Active</strong></option>
							<option value="1988" data-idchurch="1793" style="color: #aaa;">Sandobal, Julie(1st)</option>
							<option value="1841" data-idchurch="1625" style="color: #aaa;">Santamarina, Russell and Cathy(1st)</option>
							<option value="1640" data-idchurch="1259" style="color: #000;"><strong>Sarah Branch(1st) - Active</strong></option>
							<option value="2429" data-idchurch="1852" style="color: #000;"><strong>Satre, Jamie and Cathy(1st) - Active</strong></option>
							<option value="1678" data-idchurch="1332" style="color: #000;"><strong>Saunders, Emily and Andrew(1st) - Active</strong></option>
							<option value="1998" data-idchurch="1428" style="color: #000;"><strong>Saunders, Mary and Charlie(1st) - Active</strong></option>
							<option value="2308" data-idchurch="1515" style="color: #000;"><strong>Scala, Caralynn(1st) - Active</strong></option>
							<option value="2441" data-idchurch="1851" style="color: #000;"><strong>Scanlon, Connor and Kendra(1st) - Active</strong></option>
							<option value="2177" data-idchurch="1309" style="color: #000;"><strong>Schade, Patricia(1st) - Active</strong></option>
							<option value="1491" data-idchurch="1484" style="color: #aaa;">Schara, Will & Bobbie(1st)</option>
							<option value="2207" data-idchurch="2615" style="color: #000;"><strong>Schenk, Steven and Alyssa(1st) - Active</strong></option>
							<option value="2159" data-idchurch="1475" style="color: #000;"><strong>Schlappi, Brendon and Allison(1st) - Active</strong></option>
							<option value="2345" data-idchurch="1594" style="color: #000;"><strong>Schuett, Jason and Sarah(1st) - Active</strong></option>
							<option value="2204" data-idchurch="1428" style="color: #000;"><strong>Schultz, Nick and Laurie(1st) - Active</strong></option>
							<option value="2310" data-idchurch="1515" style="color: #000;"><strong>Schultz, Todd and Lindsey(1st) - Active</strong></option>
							<option value="1180" data-idchurch="1297" style="color: #000;"><strong>Scott, Heather & Burke(1st) - Active</strong></option>
							<option value="2445" data-idchurch="1851" style="color: #000;"><strong>Scott, Jenny(1st) - Active</strong></option>
							<option value="1773" data-idchurch="1622" style="color: #aaa;">Scutter, Deloise(1st)</option>
							<option value="1238" data-idchurch="1300" style="color: #000;"><strong>Sears, Brandon & Brooke (1st) - Active</strong></option>
							<option value="2303" data-idchurch="1475" style="color: #000;"><strong>Sebrell, Ercell(1st) - Active</strong></option>
							<option value="1766" data-idchurch="1622" style="color: #aaa;">Sedustine, Tyler and Olivia(1st)</option>
							<option value="2152" data-idchurch="2191" style="color: #000;"><strong>Seelye, Chris and Jessica(1st) - Active</strong></option>
							<option value="1297" data-idchurch="" style="color: #aaa;">SELF (1st)</option>
							<option value="1490" data-idchurch="1484" style="color: #aaa;">Seliger, AJ & Alysia(1st)</option>
							<option value="1101" data-idchurch="1275" style="color: #aaa;">Sena, Jeremy & Lucy (1st)</option>
							<option value="1227" data-idchurch="1356" style="color: #aaa;">Seritt, Chris & Hannah (1st)</option>
							<option value="2222" data-idchurch="1333" style="color: #000;"><strong>Serrano, vanessa and Edward(1st) - Active</strong></option>
							<option value="2093" data-idchurch="2064" style="color: #000;"><strong>Settle, Jeremy and Genevia(1st) - Active</strong></option>
							<option value="2533" data-idchurch="1888" style="color: #aaa;">Shafer, Jason(1st)</option>
							<option value="1068" data-idchurch="1271" style="color: #aaa;">Shah, Jamil & Donna (1st)</option>
							<option value="2070" data-idchurch="1505" style="color: #000;"><strong>Shannon Wagner(1st) - Active</strong></option>
							<option value="1917" data-idchurch="1270" style="color: #000;"><strong>Shearon, Scott and Krystal(1st) - Active</strong></option>
							<option value="1736" data-idchurch="1325" style="color: #000;"><strong>Sheets, Sean Cox and Sonya Sheets(1st) - Active</strong></option>
							<option value="1471" data-idchurch="1504" style="color: #000;"><strong>Sherden Community(1st) - Active</strong></option>
							<option value="2169" data-idchurch="1475" style="color: #000;"><strong>Sheridan, Moriah and David(1st) - Active</strong></option>
							<option value="2448" data-idchurch="1851" style="color: #000;"><strong>Sherman, Josh and Ashley(1st) - Active</strong></option>
							<option value="2311" data-idchurch="1515" style="color: #000;"><strong>Shina, Selene and Scott(1st) - Active</strong></option>
							<option value="1198" data-idchurch="1336" style="color: #000;"><strong>Shinpoch, Joel & Jennifer (1st) - Active</strong></option>
							<option value="1738" data-idchurch="1731" style="color: #000;"><strong>Shore, Craig and Sophy(1st) - Active</strong></option>
							<option value="1739" data-idchurch="1325" style="color: #000;"><strong>Shore, Craig and Sophy(1st) - Active</strong></option>
							<option value="1129" data-idchurch="1288" style="color: #aaa;">Short, Jamey & Amanda (1st)</option>
							<option value="1049" data-idchurch="1220" style="color: #000;"><strong>Shriner, Andy & Katie (1st) - Active</strong></option>
							<option value="2100" data-idchurch="1885" style="color: #000;"><strong>Sibert(1st) - Active</strong></option>
							<option value="2312" data-idchurch="2303" style="color: #000;"><strong>Sievert, Regina and Angela(1st) - Active</strong></option>
							<option value="1990" data-idchurch="1754" style="color: #aaa;">Simpkins(1st)</option>
							<option value="2131" data-idchurch="1568" style="color: #000;"><strong>Simpson, Kerry Ann(1st) - Active</strong></option>
							<option value="1506" data-idchurch="1651" style="color: #000;"><strong>Sims(1st) - Active</strong></option>
							<option value="1169" data-idchurch="1294" style="color: #aaa;">Sims, Charlotte (1st)</option>
							<option value="2315" data-idchurch="1852" style="color: #000;"><strong>Small, Jason and Whitney(1st) - Active</strong></option>
							<option value="1798" data-idchurch="1311" style="color: #aaa;">Smartt, Stuart and Candace(1st)</option>
							<option value="2547" data-idchurch="2229" style="color: #000;"><strong>Smith(1st) - Active</strong></option>
							<option value="2275" data-idchurch="1588" style="color: #aaa;">Smith, Ian and Yvette(1st)</option>
							<option value="1932" data-idchurch="1766" style="color: #aaa;">Smith, Jessica(1st)</option>
							<option value="1460" data-idchurch="1270" style="color: #000;"><strong>Smith, Lauren(1st) - Active</strong></option>
							<option value="2526" data-idchurch="2612" style="color: #000;"><strong>Smith, Lucas and Megan(1st) - Active</strong></option>
							<option value="2342" data-idchurch="2408" style="color: #aaa;">Smith, Mike and Holly(1st)</option>
							<option value="1907" data-idchurch="1793" style="color: #aaa;">Smith, Randy(1st)</option>
							<option value="1474" data-idchurch="1271" style="color: #000;"><strong>Smith, Tony & Jenny(1st) - Active</strong></option>
							<option value="2269" data-idchurch="1568" style="color: #aaa;">Smith, Trevor and Ciarra(1st)</option>
							<option value="2373" data-idchurch="1923" style="color: #aaa;">Snyder, Ryan and Liz(1st)</option>
							<option value="1677" data-idchurch="1505" style="color: #aaa;">Solis Family-Transitional Foster Care(1st)</option>
							<option value="1529" data-idchurch="1333" style="color: #aaa;">Sonia Waller(1st)</option>
							<option value="1595" data-idchurch="1640" style="color: #aaa;">Sonia Waller(2nd)</option>
							<option value="2362" data-idchurch="1515" style="color: #000;"><strong>Souza, John and Carly(1st) - Active</strong></option>
							<option value="2446" data-idchurch="1851" style="color: #000;"><strong>Sparenberg, Chris and Ashley(1st) - Active</strong></option>
							<option value="1778" data-idchurch="1266" style="color: #000;"><strong>Spengler, Jake and Diane(1st) - Active</strong></option>
							<option value="1869" data-idchurch="1296" style="color: #aaa;">St Hilaire, Janet(1st)</option>
							<option value="1484" data-idchurch="1490" style="color: #000;"><strong>St. Jean, Rick & Cherie(1st) - Active</strong></option>
							<option value="2332" data-idchurch="2469" style="color: #000;"><strong>Stacey and Ken Johnson(1st) - Active</strong></option>
							<option value="2037" data-idchurch="2192" style="color: #000;"><strong>Stacy and Jeremy Schmoel(1st) - Active</strong></option>
							<option value="1681" data-idchurch="1510" style="color: #000;"><strong>Stanford, Jeremy and Erica(1st) - Active</strong></option>
							<option value="2490" data-idchurch="2612" style="color: #000;"><strong>Staples, Jack and Marla(1st) - Active</strong></option>
							<option value="1853" data-idchurch="1613" style="color: #000;"><strong>Starbird, Cory and Shawna(1st) - Active</strong></option>
							<option value="2309" data-idchurch="1515" style="color: #000;"><strong>Staton, Steven and Codi(1st) - Active</strong></option>
							<option value="2132" data-idchurch="1568" style="color: #aaa;">Stefani, Jared and Laura(1st)</option>
							<option value="2176" data-idchurch="2303" style="color: #000;"><strong>Stefanie Horne(1st) - Active</strong></option>
							<option value="2051" data-idchurch="1960" style="color: #aaa;">Stein , Shannon(1st)</option>
							<option value="1145" data-idchurch="1288" style="color: #aaa;">Stein, Frank & Johnna(1st)</option>
							<option value="1168" data-idchurch="1293" style="color: #000;"><strong>Stephens, David & Rebecca (1st) - Active</strong></option>
							<option value="1904" data-idchurch="1494" style="color: #000;"><strong>Steuck Care Community(1st) - Active</strong></option>
							<option value="1575" data-idchurch="1262" style="color: #000;"><strong>Steve & Shari Eberhart(1st) - Active</strong></option>
							<option value="1635" data-idchurch="1336" style="color: #aaa;">Steve Archie and Jill Barefoot(1st)</option>
							<option value="1653" data-idchurch="1336" style="color: #000;"><strong>Steve Archie and Jill Barefoot(2nd) - Active</strong></option>
							<option value="1563" data-idchurch="1293" style="color: #aaa;">Steven & Kelly Brooks(2nd)</option>
							<option value="2068" data-idchurch="1885" style="color: #000;"><strong>Stinson(1st) - Active</strong></option>
							<option value="1207" data-idchurch="1336" style="color: #aaa;">Stinson, Aaron & Rebecca (1st)</option>
							<option value="1959" data-idchurch="1272" style="color: #aaa;">Stocks, William and Jami(4th)</option>
							<option value="1801" data-idchurch="1219" style="color: #aaa;">Stone, Jamie & Crystal(1st)</option>
							<option value="1973" data-idchurch="1348" style="color: #aaa;">Stone, Jamie and Crystal(1st)</option>
							<option value="1118" data-idchurch="1283" style="color: #aaa;">Stoudenmire, Jeremy & Ashley (1st)</option>
							<option value="1304" data-idchurch="1315" style="color: #000;"><strong>Strehle, Lynn & Alan (1st) - Active</strong></option>
							<option value="1084" data-idchurch="1286" style="color: #000;"><strong>Strohmeyer, Chrissy(2nd) - Active</strong></option>
							<option value="1157" data-idchurch="1286" style="color: #aaa;">Strohmeyer, Chrissy(1st)</option>
							<option value="1458" data-idchurch="1494" style="color: #000;"><strong>Sullivan Care Community(1st) - Active</strong></option>
							<option value="1127" data-idchurch="1288" style="color: #aaa;">Summers, Mina (1st)</option>
							<option value="1485" data-idchurch="1588" style="color: #aaa;">Sun, Lisa(1st)</option>
							<option value="1834" data-idchurch="1486" style="color: #000;"><strong>Sunberg Family(1st) - Active</strong></option>
							<option value="1225" data-idchurch="1356" style="color: #000;"><strong>Suroviec, Mark & Alice (1st) - Active</strong></option>
							<option value="1687" data-idchurch="1356" style="color: #000;"><strong>Suroviec, Mark and Alice(1st) - Active</strong></option>
							<option value="1726" data-idchurch="1595" style="color: #000;"><strong>Susan and Brad Kauffman(1st) - Active</strong></option>
							<option value="1688" data-idchurch="1594" style="color: #aaa;">Suzy Vanrees(1st)</option>
							<option value="2189" data-idchurch="2066" style="color: #aaa;">Swanson, Carole(2nd)</option>
							<option value="1465" data-idchurch="1483" style="color: #aaa;">Swenson, Holly(1st)</option>
							<option value="2440" data-idchurch="1851" style="color: #000;"><strong>Switzer, Jamie and Amy(1st) - Active</strong></option>
							<option value="1404" data-idchurch="1386" style="color: #aaa;">Swoszowski, Alicai & Jason (1st)</option>
							<option value="1326" data-idchurch="1366" style="color: #aaa;">Tablada, Jason & Jennifer(2nd)</option>
							<option value="2154" data-idchurch="2066" style="color: #000;"><strong>Tabor, Dan and Melody(1st) - Active</strong></option>
							<option value="2304" data-idchurch="1515" style="color: #000;"><strong>Tarrant, Daniel and Cindy(1st) - Active</strong></option>
							<option value="1608" data-idchurch="1351" style="color: #aaa;">Tati Benson(1st)</option>
							<option value="1609" data-idchurch="1351" style="color: #aaa;">Tati Benson(2nd)</option>
							<option value="1142" data-idchurch="1288" style="color: #aaa;">Tatum, Eric & Lauren(1st)</option>
							<option value="1737" data-idchurch="1325" style="color: #aaa;">Taylor, Ben and Hannah(1st)</option>
							<option value="1246" data-idchurch="1309" style="color: #000;"><strong>Taylor, Daniel & Amanda(1st) - Active</strong></option>
							<option value="2435" data-idchurch="1851" style="color: #000;"><strong>Telle, Scott and Bethany(1st) - Active</strong></option>
							<option value="1796" data-idchurch="1515" style="color: #aaa;">Terrell, Travis and Sam(1st)</option>
							<option value="1613" data-idchurch="1382" style="color: #000;"><strong>Terry & Kimberly Locklear(1st) - Active</strong></option>
							<option value="2133" data-idchurch="1568" style="color: #aaa;">Tesch, Melanie(1st)</option>
							<option value="2418" data-idchurch="1276" style="color: #000;"><strong>Tesla Uffman(1st) - Active</strong></option>
							<option value="1345" data-idchurch="1269" style="color: #000;"><strong>Test Family(1st) - Active</strong></option>
							<option value="1381" data-idchurch="" style="color: #aaa;">test (1st)</option>
							<option value="2168" data-idchurch="1220" style="color: #aaa;">Test, Geosearch(1st)</option>
							<option value="1429" data-idchurch="1481" style="color: #000;"><strong>Thayer(1st) - Active</strong></option>
							<option value="2423" data-idchurch="1630" style="color: #000;"><strong>The Naegele Family(1st) - Active</strong></option>
							<option value="2385" data-idchurch="1630" style="color: #000;"><strong>The Pitts Family(1st) - Active</strong></option>
							<option value="2537" data-idchurch="2116" style="color: #000;"><strong>The Poulson Sisters(1st) - Active</strong></option>
							<option value="2247" data-idchurch="1630" style="color: #000;"><strong>The Stephens Family(1st) - Active</strong></option>
							<option value="1769" data-idchurch="1327" style="color: #000;"><strong>Thomas, Mark and Hannah(1st) - Active</strong></option>
							<option value="1807" data-idchurch="1237" style="color: #aaa;">Thomas, Vivian and Brian(1st)</option>
							<option value="1294" data-idchurch="" style="color: #aaa;">Thorton, Cheyenne (1st)</option>
							<option value="1103" data-idchurch="1275" style="color: #000;"><strong>Tidwell, Sam & Claire (1st) - Active</strong></option>
							<option value="1983" data-idchurch="1595" style="color: #aaa;">Tiell, Caroline(1st)</option>
							<option value="1592" data-idchurch="1294" style="color: #aaa;">Tiffany Davis(1st)</option>
							<option value="1564" data-idchurch="1240" style="color: #aaa;">Tim & Karen Burg(2nd)</option>
							<option value="1577" data-idchurch="1226" style="color: #aaa;">Tim & Karen Burg(1st)</option>
							<option value="1652" data-idchurch="1240" style="color: #aaa;">Tim & Karen Burg(3rd)</option>
							<option value="1545" data-idchurch="1350" style="color: #aaa;">Tina & Richard Aquino(1st)</option>
							<option value="2086" data-idchurch="2060" style="color: #aaa;">Tiner, Tina and Aaron(1st)</option>
							<option value="2029" data-idchurch="1208" style="color: #000;"><strong>Tingelhoff, Rudy and Heidi(1st) - Active</strong></option>
							<option value="2049" data-idchurch="2117" style="color: #000;"><strong>Tingeloff, Rudy and Heidi(1st) - Active</strong></option>
							<option value="1197" data-idchurch="1336" style="color: #000;"><strong>Tingle, Matt & Amanda (1st) - Active</strong></option>
							<option value="2134" data-idchurch="1568" style="color: #aaa;">Toban, Pearlne(1st)</option>
							<option value="1671" data-idchurch="1309" style="color: #000;"><strong>Toft, Megan and Ben(1st) - Active</strong></option>
							<option value="1719" data-idchurch="1622" style="color: #aaa;">Toledo, Jona and Jennifer(1st)</option>
							<option value="2501" data-idchurch="1588" style="color: #aaa;">Torres, Christopher "Erick" and Amanda(1st)</option>
							<option value="1425" data-idchurch="1479" style="color: #000;"><strong>Traynor(1st) - Active</strong></option>
							<option value="2300" data-idchurch="1588" style="color: #aaa;">Trench, Ysolene(1st)</option>
							<option value="1741" data-idchurch="1595" style="color: #000;"><strong>Trice Family(1st) - Active</strong></option>
							<option value="2454" data-idchurch="2181" style="color: #000;"><strong>Trick, Jonathan and Sarah(1st) - Active</strong></option>
							<option value="1679" data-idchurch="1505" style="color: #000;"><strong>Trish and Bill Sefton(1st) - Active</strong></option>
							<option value="2232" data-idchurch="2433" style="color: #000;"><strong>Troyer, Brandon and Monica(1st) - Active</strong></option>
							<option value="1503" data-idchurch="1651" style="color: #000;"><strong>Trussell(1st) - Active</strong></option>
							<option value="2173" data-idchurch="1270" style="color: #aaa;">Tucker, Dominic and Shannon(1st)</option>
							<option value="2398" data-idchurch="1515" style="color: #aaa;">Tucker, Felicia(1st)</option>
							<option value="1957" data-idchurch="1272" style="color: #000;"><strong>Tucker, Michael and Megan(2nd) - Active</strong></option>
							<option value="2535" data-idchurch="1568" style="color: #000;"><strong>Tully, Hunter and Caryn(1st) - Active</strong></option>
							<option value="2236" data-idchurch="1515" style="color: #000;"><strong>Tumminello(1st) - Active</strong></option>
							<option value="2391" data-idchurch="1219" style="color: #000;"><strong>Turbeville, Angela & Elliott(1st) - Active</strong></option>
							<option value="1431" data-idchurch="1479" style="color: #000;"><strong>Turner(1st) - Active</strong></option>
							<option value="2486" data-idchurch="1588" style="color: #aaa;">Turner, Wille Stiffin Ii and Marsha Turner(1st)</option>
							<option value="2158" data-idchurch="1475" style="color: #000;"><strong>Twining, Julie and John(1st) - Active</strong></option>
							<option value="1151" data-idchurch="1290" style="color: #aaa;">Vakili, Laurie (1st)</option>
							<option value="2142" data-idchurch="1568" style="color: #000;"><strong>Valdes, Gus and Jackie(2nd) - Active</strong></option>
							<option value="1121" data-idchurch="1283" style="color: #000;"><strong>Valenzuela, Luis & Angela (1st) - Active</strong></option>
							<option value="2135" data-idchurch="1568" style="color: #000;"><strong>Van Zwieten, Jim and Franci(1st) - Active</strong></option>
							<option value="2508" data-idchurch="2260" style="color: #aaa;">Vancott Family(1st)</option>
							<option value="1644" data-idchurch="1522" style="color: #000;"><strong>Vander Els(1st) - Active</strong></option>
							<option value="2463" data-idchurch="1630" style="color: #000;"><strong>VanderWeide(1st) - Active</strong></option>
							<option value="1099" data-idchurch="1275" style="color: #aaa;">Vann, Kelly & Dan (1st)</option>
							<option value="2012" data-idchurch="1888" style="color: #aaa;">Venegas, Johnny and Rachael(1st)</option>
							<option value="1355" data-idchurch="1242" style="color: #aaa;">Verdery, Tom & Jessi(1st)</option>
							<option value="2394" data-idchurch="2593" style="color: #aaa;">Vickers, Jeff and J(1st)</option>
							<option value="2089" data-idchurch="1345" style="color: #aaa;">Villalta, William and Melanie(1st)</option>
							<option value="1162" data-idchurch="1266" style="color: #aaa;">Vinson, Darnell & Miisha (1st)</option>
							<option value="2045" data-idchurch="1518" style="color: #000;"><strong>Virga, Lisa(1st) - Active</strong></option>
							<option value="2513" data-idchurch="1595" style="color: #aaa;">Virginia Ramie(1st)</option>
							<option value="2063" data-idchurch="1885" style="color: #000;"><strong>Viscaina(1st) - Active</strong></option>
							<option value="2494" data-idchurch="1888" style="color: #aaa;">Vivi Fetui(1st)</option>
							<option value="1838" data-idchurch="1474" style="color: #000;"><strong>Vizzari, Laura and Tim(1st) - Active</strong></option>
							<option value="1754" data-idchurch="1518" style="color: #aaa;">Vosburg, Matthew(1st)</option>
							<option value="1318" data-idchurch="1366" style="color: #000;"><strong>Wagner, Steve & Cindy(2nd) - Active</strong></option>
							<option value="2076" data-idchurch="1885" style="color: #aaa;">Wakefield(1st)</option>
							<option value="2397" data-idchurch="2593" style="color: #aaa;">Walden, Chase and Melany(1st)</option>
							<option value="1870" data-idchurch="1486" style="color: #aaa;">Walker, Megan and Darrell(1st)</option>
							<option value="1814" data-idchurch="1622" style="color: #000;"><strong>Walker, Tommy and Robin(1st) - Active</strong></option>
							<option value="2393" data-idchurch="2593" style="color: #000;"><strong>Wallace, Curt and Abby(1st) - Active</strong></option>
							<option value="2425" data-idchurch="1780" style="color: #000;"><strong>Wallace, Kelsey & Jeremy(1st) - Active</strong></option>
							<option value="1852" data-idchurch="1780" style="color: #000;"><strong>Wallace, Tim and Nancy(1st) - Active</strong></option>
							<option value="1270" data-idchurch="1333" style="color: #000;"><strong>Waller, Sonia (1st) - Active</strong></option>
							<option value="2175" data-idchurch="1685" style="color: #aaa;">Walters, Rusch and Jordan(1st)</option>
							<option value="1664" data-idchurch="1311" style="color: #000;"><strong>Walters, Zach and Kelly(1st) - Active</strong></option>
							<option value="1322" data-idchurch="" style="color: #aaa;">Warawa (1st)</option>
							<option value="1009" data-idchurch="1209" style="color: #aaa;">Ware, Ashley & Keith(1st)</option>
							<option value="1868" data-idchurch="1495" style="color: #aaa;">Warner, Stacy(1st)</option>
							<option value="1274" data-idchurch="1340" style="color: #aaa;">Wasmundt, Holly (1st)</option>
							<option value="2276" data-idchurch="1588" style="color: #aaa;">Waters, Ashley and Carlisa(1st)</option>
							<option value="1916" data-idchurch="1202" style="color: #aaa;">Waters, Michael and Melissa(1st)</option>
							<option value="2136" data-idchurch="1568" style="color: #000;"><strong>Watkins, Dave and Ashley(1st) - Active</strong></option>
							<option value="1461" data-idchurch="1483" style="color: #aaa;">Wavrunek Community(1st)</option>
							<option value="1065" data-idchurch="1271" style="color: #aaa;">Weaver, Barry & Wendy (1st)</option>
							<option value="1328" data-idchurch="1224" style="color: #000;"><strong>Weaver, Wayne & Kitty (1st) - Active</strong></option>
							<option value="1926" data-idchurch="1262" style="color: #aaa;">Weaver, Wendy and Barry(1st)</option>
							<option value="2457" data-idchurch="1923" style="color: #000;"><strong>Webb, Nathan and Sarah(1st) - Active</strong></option>
							<option value="1934" data-idchurch="1766" style="color: #000;"><strong>Webber, Matt and Melodie(1st) - Active</strong></option>
							<option value="1942" data-idchurch="1288" style="color: #000;"><strong>Weber, Lori(1st) - Active</strong></option>
							<option value="1336" data-idchurch="1242" style="color: #aaa;">Wehrstein, Dave & Jana(1st)</option>
							<option value="1055" data-idchurch="1220" style="color: #000;"><strong>Weibezahn, Dirk & Laura (1st) - Active</strong></option>
							<option value="2392" data-idchurch="2593" style="color: #000;"><strong>Weiland, Jeff and Ann Marie(1st) - Active</strong></option>
							<option value="1528" data-idchurch="1334" style="color: #aaa;">Wendy Moore(1st)</option>
							<option value="1556" data-idchurch="1333" style="color: #aaa;">Wendy Moore(2nd)</option>
							<option value="1269" data-idchurch="1332" style="color: #aaa;">Westbrook, John & Porsha (1st)</option>
							<option value="1153" data-idchurch="1290" style="color: #aaa;">Westbrook, Kevin & Shannon (1st)</option>
							<option value="1789" data-idchurch="1515" style="color: #000;"><strong>White, Chip and Donna(1st) - Active</strong></option>
							<option value="1837" data-idchurch="1474" style="color: #000;"><strong>White, Debi and Charles(1st) - Active</strong></option>
							<option value="1339" data-idchurch="1327" style="color: #aaa;">White, Nathan & Kristen(1st)</option>
							<option value="2489" data-idchurch="1428" style="color: #000;"><strong>White, Shaunte and Korey(1st) - Active</strong></option>
							<option value="1802" data-idchurch="1202" style="color: #aaa;">Whiteley, Tom and Stefanie(1st)</option>
							<option value="1416" data-idchurch="1211" style="color: #aaa;">Whitworth, Ryan & Joni(1st)</option>
							<option value="1079" data-idchurch="1283" style="color: #aaa;">Wiggins, Keith & Stephanie (1st)</option>
							<option value="2101" data-idchurch="1885" style="color: #000;"><strong>Wigle(1st) - Active</strong></option>
							<option value="2099" data-idchurch="1847" style="color: #000;"><strong>Wilbur, Matt and Julie(1st) - Active</strong></option>
							<option value="1344" data-idchurch="1327" style="color: #aaa;">Wilde, Ron & Mandy(1st)</option>
							<option value="1850" data-idchurch="1486" style="color: #000;"><strong>Wilkie, Teena and Nathan(1st) - Active</strong></option>
							<option value="2266" data-idchurch="1810" style="color: #000;"><strong>Willer, Erica(1st) - Active</strong></option>
							<option value="1547" data-idchurch="1345" style="color: #aaa;">William & Melanie Villalta(2nd)</option>
							<option value="2473" data-idchurch="2259" style="color: #000;"><strong>Williams Care Community(1st) - Active</strong></option>
							<option value="1910" data-idchurch="1780" style="color: #000;"><strong>Williams, Dave and Adrienne(1st) - Active</strong></option>
							<option value="2483" data-idchurch="1515" style="color: #aaa;">Williams, Erica(1st)</option>
							<option value="1984" data-idchurch="1683" style="color: #aaa;">Williams, Kristi(1st)</option>
							<option value="2215" data-idchurch="2248" style="color: #000;"><strong>Williams, Kristi(2nd) - Active</strong></option>
							<option value="2550" data-idchurch="2643" style="color: #aaa;">Williams, Kylie and Julie(1st)</option>
							<option value="1102" data-idchurch="1275" style="color: #aaa;">Williams, Nick & Allison (1st)</option>
							<option value="2389" data-idchurch="1208" style="color: #aaa;">Williams, Thomas and Christy(1st)</option>
							<option value="1044" data-idchurch="1220" style="color: #000;"><strong>Wilson, Amanda (1st) - Active</strong></option>
							<option value="1651" data-idchurch="1569" style="color: #000;"><strong>Wilson, Andy and Genese(1st) - Active</strong></option>
							<option value="1444" data-idchurch="0" style="color: #000;"><strong>Wilson, Nate & Jean(1st) - Active</strong></option>
							<option value="2468" data-idchurch="2064" style="color: #000;"><strong>Wilsons(1st) - Active</strong></option>
							<option value="2431" data-idchurch="1515" style="color: #aaa;">Winders, Steve and Melissa(1st)</option>
							<option value="1919" data-idchurch="1294" style="color: #aaa;">Wingfield, Shutonna(1st)</option>
							<option value="1349" data-idchurch="1201" style="color: #aaa;">Winthrop, Nicki(1st)</option>
							<option value="1216" data-idchurch="1350" style="color: #000;"><strong>Wise, Elisabeth (1st) - Active</strong></option>
							<option value="1051" data-idchurch="1220" style="color: #000;"><strong>Wittrig, Carl & Hannah (1st) - Active</strong></option>
							<option value="2223" data-idchurch="2136" style="color: #000;"><strong>Wixson, Trisha(1st) - Active</strong></option>
							<option value="1254" data-idchurch="1336" style="color: #aaa;">Woelfl, Michael & Crystal (1st)</option>
							<option value="2380" data-idchurch="1273" style="color: #aaa;">Woodard, Erin and Cameron(2nd)</option>
							<option value="1505" data-idchurch="1651" style="color: #000;"><strong>Woods(1st) - Active</strong></option>
							<option value="1867" data-idchurch="1495" style="color: #000;"><strong>Woods, Daryl and Laura(1st) - Active</strong></option>
							<option value="1864" data-idchurch="1706" style="color: #000;"><strong>Woodward, Glenn and Kathleen and(1st) - Active</strong></option>
							<option value="1096" data-idchurch="1279" style="color: #000;"><strong>Wright, Kristin & Paul (1st) - Active</strong></option>
							<option value="1093" data-idchurch="1279" style="color: #aaa;">Wright, Paul & Kristin (1st)</option>
							<option value="1813" data-idchurch="1622" style="color: #000;"><strong>Yanez, Rebecca and Anthony(1st) - Active</strong></option>
							<option value="2085" data-idchurch="2060" style="color: #aaa;">Yassa, Eddie and Cathy(1st)</option>
							<option value="1323" data-idchurch="1309" style="color: #000;"><strong>Yoder, Jason & Lorie(1st) - Active</strong></option>
							<option value="2413" data-idchurch="2222" style="color: #000;"><strong>Yolanda Arias(1st) - Active</strong></option>
							<option value="2361" data-idchurch="1754" style="color: #aaa;">Young, Larry and Christy(1st)</option>
							<option value="2017" data-idchurch="1900" style="color: #aaa;">Zach and Melissa Lowe(1st)</option>
							<option value="1185" data-idchurch="1317" style="color: #aaa;">Zachery, Sherri (1st)</option>
							<option value="1636" data-idchurch="1336" style="color: #aaa;">Zack & Laura Merriem McCalvin(1st)</option>
							<option value="1637" data-idchurch="1336" style="color: #aaa;">Zack & Laura Merriem McCalvin(2nd)</option>
							<option value="1116" data-idchurch="1282" style="color: #aaa;">Zemke, Jason & Kay (1st)</option>
							<option value="1202" data-idchurch="1336" style="color: #000;"><strong>Zezulka, Daniel & Paige (1st) - Active</strong></option>
							<option value="2301" data-idchurch="1588" style="color: #aaa;">Zillman, Marcus and Rebecca(1st)</option>
						</select>
					</div>
				</div>
				<div class="text-center col-xs-12 col-sm-12">
					<span class="error_notify_modal_calendar error_event_id_community text-danger"></span>
				</div>
			</div>
		</div>
		<div class="top20">
			<div class="form-group">
				<div class="text-right col-sm-1 col-xs-1 hidden-xs">
					<i class="fa fa-clock-o fa-2x"></i>
				</div>
				<div class="col-sm-11 col-xs-12" id="modal-calendar-event-edit-wrapper-dates-specific">
					<div class="col-sm-2 col-sm-offset-1 col-xs-6">
						<div class="control-group">
							<div class="controls">
								<div class="">
									<span class="add-on input-group-addon"> Start Date </span>
									<input type="text" data-placement="right" name="event_date_start_human" id="modal-calendar-event-edit-date-start-human" class="form-control date pick-date modal-calendar-event-edit-date-start modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="12/13/2020" data-usermod="false">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2 col-xs-6">
						<div class="control-group">
							<div class="controls">
								<div class="">
									<span class="add-on input-group-addon"> Start Time </span>
									<input type="text" name="event_time_start_human" id="modal-calendar-event-edit-time-start-human" class="form-control pick-time time modal-calendar-event-edit-time-start modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="2:00" data-usermod="false">
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
									<input type="text" data-placement="right" name="event_date_end_human" id="modal-calendar-event-edit-date-end-human" class="form-control date pick-date modal-calendar-event-edit-date-end modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="12/13/2020" data-usermod="false">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2 col-xs-6 xs-top10">
						<div class="control-group">
							<div class="controls">
								<div class="">
									<span class="add-on input-group-addon"> End Time </span>
									<input type="text" name="event_time_end_human" id="modal-calendar-event-edit-time-end-human" class="form-control pick-time time modal-calendar-event-edit-time-end modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="2:00" data-usermod="false">
								</div>
							</div>
						</div>
					</div>
					<div class="text-center col-xs-12 col-sm-12">
						<span class="error_notify_modal_calendar error_event_date_time text-danger"></span>
					</div>
				</div>

				<div class="col-sm-11 col-xs-12 hide" id="modal-calendar-event-edit-wrapper-dates-allday">
					<div class="col-sm-2 col-xs-3">
						<div class="control-group">
							<div class="controls">
								<div class="">
									<span class="add-on input-group-addon"> Date </span>
									<input type="text" data-placement="right" name="event_date_start_human_allday" id="modal-calendar-event-edit-date-start-allday-human" class="form-control date pick-date modal-calendar-event-edit-date-start modal-calendar-event-edit-control modal-calendar-edit-element" required="required" value="12/13/2020" data-usermod="false">
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
				<div id="modal-calendar-edit-event-advanced" class="collapse">
					<div class="form-group" style="display: none;">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
							Event Location
						</label>
						<div class="col-sm-9 col-xs-9">
							<input type="text" name="place_address" id="modal-calendar-event-edit-event-place-address" class="form-control modal-calendar-edit-element" value="" placeholder="Optional - full name & address of location">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_location_name" id="modal-calendar-event-edit-event-location-name">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_address_street" id="modal-calendar-event-edit-address-street">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_address_city" id="modal-calendar-event-edit-address-city" value="">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_address_state" id="modal-calendar-event-edit-address-state" value="">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_address_zip" id="modal-calendar-event-edit-address-zip" value="">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_address_county" id="modal-calendar-event-edit-address-county" value="">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_address_country" id="modal-calendar-event-edit-address-country" value="">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_geo_lat" id="modal-calendar-event-edit-event-geo-lat" value="">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="event_geo_lng" id="modal-calendar-event-edit-geo-lng" value="">
							<input type="hidden" class="modal-calendar-event-edit-geocode" name="place_id_provider" id="modal-calendar-event-edit-place-id-provider" value="">
						</div>
					</div>
					<div class="form-group modal-calendar-event-edit-hide-cat-training modal-calendar-event-edit-hideable">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
							<span id="modal-calendar-event-edit-label-assignee">Assignees</span> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="This field contains the list of people who are assigned to participate in the event. In the case of a meal or need event, these people would be the ones providing the meal or fulfilling the need."></i>
						</label>
						<div class="col-sm-9 col-xs-9">
							<input name="id_event_assignees" type="text" id="modal-calendar-event-edit-id-assignees" class="ps-tagger-people form-control modal-calendar-edit-element" data-role-limit="" data-limit-id="" data-url-params=""> <input type="hidden" name="id_event_assignees_prev" id="modal-calendar-event-edit-id-assignees-prev" value="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
							Event Description
						</label>
						<div class="col-sm-9 col-xs-9">
							<textarea name="event_desc" id="modal-calendar-event-edit-event-desc" class="form-control modal-calendar-edit-element" value="" placeholder="Optional - description / details" rows="5" cols="10"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
							Church
						</label>
						<div class="col-sm-9 col-xs-9">
							<select name="id_church" id="modal-calendar-event-id-church" class="form-control">
								<option value="">Select a church</option>
								<option value="2683" data-churchname="<strong>111project - OK - Active</strong>" data-street="" data-city="" data-state="OK" data-zip="0" style="color: #000;"><strong>111project - OK - Active</strong></option>
								<option value="1210" data-churchname="<strong>12Stone - Bethlehem - Winder, GA - Active</strong>" data-street="940 Haymon Morris Road" data-city="Winder" data-state="GA" data-zip="30680" style="color: #000;"><strong>12Stone - Bethlehem - Winder, GA - Active</strong></option>
								<option value="1209" data-churchname="<strong>12Stone - Braselton - Hoschton, GA - Active</strong>" data-street="4500 Braselton Highway" data-city="Hoschton" data-state="GA" data-zip="30548" style="color: #000;"><strong>12Stone - Braselton - Hoschton, GA - Active</strong></option>
								<option value="1208" data-churchname="<strong>12Stone - Buford - Buford, GA - Active</strong>" data-street="2565 Buford Highway Northeast" data-city="Buford" data-state="GA" data-zip="30518" style="color: #000;"><strong>12Stone - Buford - Buford, GA - Active</strong></option>
								<option value="1212" data-churchname="<strong>12Stone - Flowery Branch - Flowery Branch, GA - Active</strong>" data-street="4256 Martin Road" data-city="Flowery Branch" data-state="GA" data-zip="30542" style="color: #000;"><strong>12Stone - Flowery Branch - Flowery Branch, GA - Active</strong></option>
								<option value="1207" data-churchname="<strong>12Stone - Hamilton Mill - Buford, GA - Active</strong>" data-street="3858 Braselton Highway" data-city="Buford" data-state="GA" data-zip="30519" style="color: #000;"><strong>12Stone - Hamilton Mill - Buford, GA - Active</strong></option>
								<option value="1202" data-churchname="<strong>12Stone - Snellville - Snellville, GA - Active</strong>" data-street="1709 Scenic Highway South" data-city="Snellville" data-state="GA" data-zip="30078" selected="selected" style="color: #000;"><strong>12Stone - Snellville - Snellville, GA - Active</strong></option>
								<option value="1211" data-churchname="<strong>12Stone - Sugarloaf - Duluth, GA - Active</strong>" data-street="" data-city="Duluth" data-state="GA" data-zip="0" style="color: #000;"><strong>12Stone - Sugarloaf - Duluth, GA - Active</strong></option>
								<option value="1201" data-churchname="<strong>12Stone Church - Central - Lawrenceville, GA - Active</strong>" data-street="1322 Buford Drive" data-city="Lawrenceville" data-state="GA" data-zip="30043" style="color: #000;"><strong>12Stone Church - Central - Lawrenceville, GA - Active</strong></option>
								<option value="1609" data-churchname="<strong>1st Baptist - Brunswick , GA - Active</strong>" data-street="708 Mansfield St," data-city="Brunswick " data-state="GA" data-zip="31520" style="color: #000;"><strong>1st Baptist - Brunswick , GA - Active</strong></option>
								<option value="1606" data-churchname="<strong>1st Methodist - Brunswick , GA - Active</strong>" data-street="1400 Norwich St" data-city="Brunswick " data-state="GA" data-zip="31520" style="color: #000;"><strong>1st Methodist - Brunswick , GA - Active</strong></option>
								<option value="2369" data-churchname="3-L " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">3-L </option>
								<option value="2368" data-churchname="3life" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">3life</option>
								<option value="1588" data-churchname="<strong>4KIDS Volunteers - Florida, FL - Active</strong>" data-street="" data-city="Florida" data-state="FL" data-zip="0" style="color: #000;"><strong>4KIDS Volunteers - Florida, FL - Active</strong></option>
								<option value="1567" data-churchname="<strong>Abundant Life - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Abundant Life - FL - Active</strong></option>
								<option value="2091" data-churchname="<strong>Abundant Living Family Church - Rancho Cucamonga, CA - Active</strong>" data-street="10900 Civic Center Dr," data-city="Rancho Cucamonga" data-state="CA" data-zip="91730" style="color: #000;"><strong>Abundant Living Family Church - Rancho Cucamonga, CA - Active</strong></option>
								<option value="1673" data-churchname="<strong>Action Church - Winter Park - Winter Park, FL - Active</strong>" data-street="1485 Grand Road" data-city="Winter Park" data-state="FL" data-zip="32792" style="color: #000;"><strong>Action Church - Winter Park - Winter Park, FL - Active</strong></option>
								<option value="2585" data-churchname="Addereth - Phenix City, AL" data-street="1104-B, US-280" data-city="Phenix City" data-state="AL" data-zip="31909" style="color: #aaa;">Addereth - Phenix City, AL</option>
								<option value="2648" data-churchname="Agape Ranch - Corpus Christi, TX" data-street=" " data-city="Corpus Christi" data-state="TX" data-zip="78413" style="color: #aaa;">Agape Ranch - Corpus Christi, TX</option>
								<option value="1471" data-churchname="Aletheia Tampa - Tampa, FL" data-street="16221 Compton Dr" data-city="Tampa" data-state="FL" data-zip="33647" style="color: #aaa;">Aletheia Tampa - Tampa, FL</option>
								<option value="2634" data-churchname="All Peoples Church - San Diego, CA" data-street="5555 University Avenue" data-city="San Diego" data-state="CA" data-zip="92105" style="color: #aaa;">All Peoples Church - San Diego, CA</option>
								<option value="2437" data-churchname="All Souls Catholic Church - Sanford, FL" data-street="3280 W 1st St" data-city="Sanford" data-state="FL" data-zip="32771" style="color: #aaa;">All Souls Catholic Church - Sanford, FL</option>
								<option value="2499" data-churchname="Allen Memorial United Methodist - Oxford, GA" data-street="803 Whatcoat Street" data-city="Oxford" data-state="GA" data-zip="30054" style="color: #aaa;">Allen Memorial United Methodist - Oxford, GA</option>
								<option value="2192" data-churchname="<strong>Alliance Church of Elizabethtown - Elizabethtown, PA - Active</strong>" data-street="" data-city="Elizabethtown" data-state="PA" data-zip="0" style="color: #000;"><strong>Alliance Church of Elizabethtown - Elizabethtown, PA - Active</strong></option>
								<option value="1613" data-churchname="<strong>Alto Reformed - Waupun, WI - Active</strong>" data-street="N3697 County Road EE" data-city="Waupun" data-state="WI" data-zip="53963" style="color: #000;"><strong>Alto Reformed - Waupun, WI - Active</strong></option>
								<option value="1879" data-churchname="Angelus Temple" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Angelus Temple</option>
								<option value="1916" data-churchname="Annunciation Catholic Church - FL" data-street="1020 Montgomery Rd" data-city="" data-state="FL" data-zip="32714" style="color: #aaa;">Annunciation Catholic Church - FL</option>
								<option value="2219" data-churchname="<strong>Anthem Church - Vista, CA - Active</strong>" data-street="1621 South Melrose Drive" data-city="Vista" data-state="CA" data-zip="92081" style="color: #000;"><strong>Anthem Church - Vista, CA - Active</strong></option>
								<option value="1523" data-churchname="Anthem Community Church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Anthem Community Church - NV</option>
								<option value="2628" data-churchname="<strong>Antigo Community Church - Antigo, WI - Active</strong>" data-street="723 Deleglise Street" data-city="Antigo" data-state="WI" data-zip="54409" style="color: #000;"><strong>Antigo Community Church - Antigo, WI - Active</strong></option>
								<option value="1319" data-churchname="<strong>Antioch Christian Church - Athens, GA - Active</strong>" data-street="1100 Antioch Rd" data-city="Athens" data-state="GA" data-zip="30677" style="color: #000;"><strong>Antioch Christian Church - Athens, GA - Active</strong></option>
								<option value="1806" data-churchname="Antioch Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Antioch Church</option>
								<option value="1800" data-churchname="Apex Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Apex Church</option>
								<option value="2248" data-churchname="<strong>Arbor Pointe Church - Hoschton, GA - Active</strong>" data-street="115 Towne Center Pkwy #109" data-city="Hoschton" data-state="GA" data-zip="30548" style="color: #000;"><strong>Arbor Pointe Church - Hoschton, GA - Active</strong></option>
								<option value="1893" data-churchname="Arbor Road Church " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Arbor Road Church </option>
								<option value="1333" data-churchname="<strong>Athens Church - Athens, GA - Active</strong>" data-street="10 Huntington Drive" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>Athens Church - Athens, GA - Active</strong></option>
								<option value="1261" data-churchname="<strong>Athens Church of Christ - Watkinsville, GA - Active</strong>" data-street="3720 Mars Hill Rd" data-city="Watkinsville" data-state="GA" data-zip="30677" style="color: #000;"><strong>Athens Church of Christ - Watkinsville, GA - Active</strong></option>
								<option value="2690" data-churchname="Avon United Methodist Church - Avon, IN" data-street="6850 East US Highway 36" data-city="Avon" data-state="IN" data-zip="46123" style="color: #aaa;">Avon United Methodist Church - Avon, IN</option>
								<option value="1809" data-churchname="Awaken Church - Cincinnati, OH" data-street="3488 Henrietta Avenue" data-city="Cincinnati" data-state="OH" data-zip="45204" style="color: #aaa;">Awaken Church - Cincinnati, OH</option>
								<option value="2431" data-churchname="BBAME" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">BBAME</option>
								<option value="1710" data-churchname="BPC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">BPC</option>
								<option value="2046" data-churchname="<strong>Basehor First Baptist - Basehor, KS - Active</strong>" data-street="1410 155th Street" data-city="Basehor" data-state="KS" data-zip="66007" style="color: #000;"><strong>Basehor First Baptist - Basehor, KS - Active</strong></option>
								<option value="2298" data-churchname="<strong>Bay Hope Church - Westchase - Tampa, FL - Active</strong>" data-street="10701 Sheldon Rd," data-city="Tampa" data-state="FL" data-zip="33626" style="color: #000;"><strong>Bay Hope Church - Westchase - Tampa, FL - Active</strong></option>
								<option value="1472" data-churchname="<strong>Bay Hope Church - Lutz, FL - Active</strong>" data-street="17030 Lakeshore Rd" data-city="Lutz" data-state="FL" data-zip="33558" style="color: #000;"><strong>Bay Hope Church - Lutz, FL - Active</strong></option>
								<option value="1473" data-churchname="<strong>Bay Life Church - Brandon, FL - Active</strong>" data-street="1017 Kingsway Rd." data-city="Brandon" data-state="FL" data-zip="33510" style="color: #000;"><strong>Bay Life Church - Brandon, FL - Active</strong></option>
								<option value="1804" data-churchname="Bay Presbyterian Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Bay Presbyterian Church</option>
								<option value="2348" data-churchname="Bayview Baptist Church - San Diego, CA" data-street="6126 Winters St." data-city="San Diego" data-state="CA" data-zip="92114" style="color: #aaa;">Bayview Baptist Church - San Diego, CA</option>
								<option value="1826" data-churchname="Beavercreek Baptist Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Beavercreek Baptist Church - OH</option>
								<option value="2000" data-churchname="Beech Acres Parenting Center - Cincinnati, OH" data-street="6881 Beechmont Avenue" data-city="Cincinnati" data-state="OH" data-zip="45230" style="color: #aaa;">Beech Acres Parenting Center - Cincinnati, OH</option>
								<option value="1349" data-churchname="<strong>Beech Haven Baptist Church - Athens, GA - Active</strong>" data-street="2390 W. Broad St" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>Beech Haven Baptist Church - Athens, GA - Active</strong></option>
								<option value="1451" data-churchname="Bethany Baptist Church - Canon, GA" data-street="2085 Bethany Bowersville Road" data-city="Canon" data-state="GA" data-zip="30520" style="color: #aaa;">Bethany Baptist Church - Canon, GA</option>
								<option value="2460" data-churchname="<strong>Bethany Community Church - Seattle, WA - Active</strong>" data-street="8023 Green Lake Dr N " data-city="Seattle" data-state="WA" data-zip="98103" style="color: #000;"><strong>Bethany Community Church - Seattle, WA - Active</strong></option>
								<option value="1756" data-churchname="Bethel Christian Reformed Church, Waupun, WI" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Bethel Christian Reformed Church, Waupun, WI</option>
								<option value="2693" data-churchname="<strong>Bethel Church - Bluffton, IN - Active</strong>" data-street="4500 East 300 South" data-city="Bluffton" data-state="IN" data-zip="46714" style="color: #000;"><strong>Bethel Church - Bluffton, IN - Active</strong></option>
								<option value="2434" data-churchname="Bethel Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Bethel Community Church</option>
								<option value="2506" data-churchname="Bethel Presbyterian Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Bethel Presbyterian Church</option>
								<option value="1671" data-churchname="<strong>Bethesda Baptist Church - Ellerslie, GA - Active</strong>" data-street="3830 GA HWY 85" data-city="Ellerslie" data-state="GA" data-zip="31807" style="color: #000;"><strong>Bethesda Baptist Church - Ellerslie, GA - Active</strong></option>
								<option value="1323" data-churchname="<strong>Bethlehem Church - Bethlehem, GA - Active</strong>" data-street="548 Hwy 11 North" data-city="Bethlehem" data-state="GA" data-zip="30620" style="color: #000;"><strong>Bethlehem Church - Bethlehem, GA - Active</strong></option>
								<option value="2089" data-churchname="Bethlehem Church - 211 Campus - Hoschton, GA" data-street="" data-city="Hoschton" data-state="GA" data-zip="0" style="color: #aaa;">Bethlehem Church - 211 Campus - Hoschton, GA</option>
								<option value="2088" data-churchname="<strong>Bethlehem Church  - Oconee Campus - Bishop, GA - Active</strong>" data-street="1820 Rays Church Rd." data-city="Bishop" data-state="GA" data-zip="30621" style="color: #000;"><strong>Bethlehem Church - Oconee Campus - Bishop, GA - Active</strong></option>
								<option value="2790" data-churchname="Bible Baptist Church - Everett, WA" data-street="805 West Casino Road" data-city="Everett" data-state="WA" data-zip="98204" style="color: #aaa;">Bible Baptist Church - Everett, WA</option>
								<option value="1440" data-churchname="Bible Baptist Church - Statesboro, GA" data-street="889 GA-24" data-city="Statesboro" data-state="GA" data-zip="30461" style="color: #aaa;">Bible Baptist Church - Statesboro, GA</option>
								<option value="2527" data-churchname="<strong>Big Bethel AME Church - Atlanta, GA - Active</strong>" data-street="220 Auburn Avenue Northeast" data-city="Atlanta" data-state="GA" data-zip="30303" style="color: #000;"><strong>Big Bethel AME Church - Atlanta, GA - Active</strong></option>
								<option value="2674" data-churchname="<strong>Blue River Valley Church of the Nazarene  - Springport, IN - Active</strong>" data-street="949 East Luray Road" data-city="Springport" data-state="IN" data-zip="47386" style="color: #000;"><strong>Blue River Valley Church of the Nazarene - Springport, IN - Active</strong></option>
								<option value="1489" data-churchname="<strong>Blue Valley Baptist Church - Ridgeview - Olathe, KS - Active</strong>" data-street="1325 South Ridgeview Road" data-city="Olathe" data-state="KS" data-zip="66062" style="color: #000;"><strong>Blue Valley Baptist Church - Ridgeview - Olathe, KS - Active</strong></option>
								<option value="2694" data-churchname="<strong>Bluffton Church of the Nazarene  - Bluffton, IN - Active</strong>" data-street="1515 Clark Avenue" data-city="Bluffton" data-state="IN" data-zip="46714" style="color: #000;"><strong>Bluffton Church of the Nazarene - Bluffton, IN - Active</strong></option>
								<option value="2153" data-churchname="Boca Raton Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Boca Raton Community Church</option>
								<option value="2553" data-churchname="Bonita Valley Baptist Church  - Bonita , CA" data-street="" data-city="Bonita " data-state="CA" data-zip="0" style="color: #aaa;">Bonita Valley Baptist Church - Bonita , CA</option>
								<option value="2220" data-churchname="Bonita Valley Community Church - Bonita, CA" data-street="4744 Bonita Rd." data-city="Bonita" data-state="CA" data-zip="91902" style="color: #aaa;">Bonita Valley Community Church - Bonita, CA</option>
								<option value="2183" data-churchname="Boynton Beach Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Boynton Beach Community Church</option>
								<option value="1981" data-churchname="Boynton Methodist Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Boynton Methodist Church - FL</option>
								<option value="1795" data-churchname="Branches: Loveland Ohio  - Loveland, OH" data-street="6541 Arborcrest Rd." data-city="Loveland" data-state="OH" data-zip="45140" style="color: #aaa;">Branches: Loveland Ohio - Loveland, OH</option>
								<option value="2593" data-churchname="<strong>Brandywine Community Church - Greenfield, IN - Active</strong>" data-street="1551 East New Road" data-city="Greenfield" data-state="IN" data-zip="46140" style="color: #000;"><strong>Brandywine Community Church - Greenfield, IN - Active</strong></option>
								<option value="1842" data-churchname="Brantwood Baptist Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Brantwood Baptist Church - OH</option>
								<option value="1350" data-churchname="<strong>Briarwood Baptist Church - Watkinsville, GA - Active</strong>" data-street="1900 Robinhood Road" data-city="Watkinsville" data-state="GA" data-zip="30677" style="color: #000;"><strong>Briarwood Baptist Church - Watkinsville, GA - Active</strong></option>
								<option value="2695" data-churchname="Bridgeway Church - Fishers, IN" data-street="12945 Parkside Drive" data-city="Fishers" data-state="IN" data-zip="46038" style="color: #aaa;">Bridgeway Church - Fishers, IN</option>
								<option value="1353" data-churchname="<strong>Brookhaven Presbyterian Church - Atlanta, GA - Active</strong>" data-street="4484 Peachtree Road Northeast" data-city="Atlanta" data-state="GA" data-zip="30319" style="color: #000;"><strong>Brookhaven Presbyterian Church - Atlanta, GA - Active</strong></option>
								<option value="2696" data-churchname="<strong>Brookside Church - Fort Wayne, IN - Active</strong>" data-street="6102 Evard Road" data-city="Fort Wayne" data-state="IN" data-zip="46835" style="color: #000;"><strong>Brookside Church - Fort Wayne, IN - Active</strong></option>
								<option value="2697" data-churchname="Brookville Road Community Church - New Palestine, IN" data-street="7480 U.S. 52" data-city="New Palestine" data-state="IN" data-zip="46163" style="color: #aaa;">Brookville Road Community Church - New Palestine, IN</option>
								<option value="2363" data-churchname="Broward Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Broward Church</option>
								<option value="2255" data-churchname="<strong>Browns Bridge Church - Cumming, GA - Active</strong>" data-street="3860 Browns Bridge Rd " data-city="Cumming" data-state="GA" data-zip="30041" style="color: #000;"><strong>Browns Bridge Church - Cumming, GA - Active</strong></option>
								<option value="2251" data-churchname="<strong>Buckhead Church - Atlanta, GA - Active</strong>" data-street="3336 Peachtree Road Northeast" data-city="Atlanta" data-state="GA" data-zip="30326" style="color: #000;"><strong>Buckhead Church - Atlanta, GA - Active</strong></option>
								<option value="1431" data-churchname="<strong>Byne Memorial Baptist Church - Albany, GA - Active</strong>" data-street="2832 Ledo Rd" data-city="Albany" data-state="GA" data-zip="31707" style="color: #000;"><strong>Byne Memorial Baptist Church - Albany, GA - Active</strong></option>
								<option value="2238" data-churchname="CC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CC</option>
								<option value="2268" data-churchname="CCFL" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CCFL</option>
								<option value="2267" data-churchname="CCFL" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CCFL</option>
								<option value="2266" data-churchname="CCFL" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CCFL</option>
								<option value="2265" data-churchname="CCFL" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CCFL</option>
								<option value="2264" data-churchname="CCFL" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CCFL</option>
								<option value="2263" data-churchname="CCFL" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CCFL</option>
								<option value="1748" data-churchname="CCLV" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CCLV</option>
								<option value="1882" data-churchname="CV Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">CV Church</option>
								<option value="1855" data-churchname="Calm" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calm</option>
								<option value="2564" data-churchname="Calvary Assembly - Winter Park, FL" data-street="1199 Clay Street" data-city="Winter Park" data-state="FL" data-zip="32789" style="color: #aaa;">Calvary Assembly - Winter Park, FL</option>
								<option value="2698" data-churchname="<strong>Calvary Baptist Church - Greenfield, IN - Active</strong>" data-street="1450 West Main Street" data-city="Greenfield" data-state="IN" data-zip="46140" style="color: #000;"><strong>Calvary Baptist Church - Greenfield, IN - Active</strong></option>
								<option value="2420" data-churchname="<strong>Calvary Baptist Church - Boalsburg, PA - Active</strong>" data-street="150 Harvest Fields Dr" data-city="Boalsburg" data-state="PA" data-zip="16827" style="color: #000;"><strong>Calvary Baptist Church - Boalsburg, PA - Active</strong></option>
								<option value="1398" data-churchname="<strong>Calvary Baptist Church - Moultrie, GA - Active</strong>" data-street="6768, 830 26th Ave SE" data-city="Moultrie" data-state="GA" data-zip="31768" style="color: #000;"><strong>Calvary Baptist Church - Moultrie, GA - Active</strong></option>
								<option value="1345" data-churchname="<strong>Calvary Bible Church - Athens, GA - Active</strong>" data-street="2026 S Milledge Ave," data-city="Athens" data-state="GA" data-zip="30605" style="color: #000;"><strong>Calvary Bible Church - Athens, GA - Active</strong></option>
								<option value="2525" data-churchname="Calvary Bible Church - Athens, GA" data-street="" data-city="Athens" data-state="GA" data-zip="0" style="color: #aaa;">Calvary Bible Church - Athens, GA</option>
								<option value="1525" data-churchname="Calvary Chapel - Spring Valley - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Calvary Chapel - Spring Valley - NV</option>
								<option value="2438" data-churchname="<strong>Calvary Chapel - North Lauderdale - North Lauderdale, FL - Active</strong>" data-street="6177 Kimberly Blvd." data-city="North Lauderdale" data-state="FL" data-zip="33068" style="color: #000;"><strong>Calvary Chapel - North Lauderdale - North Lauderdale, FL - Active</strong></option>
								<option value="1979" data-churchname="Calvary Chapel - Hollywood - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Calvary Chapel - Hollywood - FL</option>
								<option value="1572" data-churchname="<strong>Calvary Chapel Boca Raton - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Calvary Chapel Boca Raton - FL - Active</strong></option>
								<option value="1586" data-churchname="<strong>Calvary Chapel Boynton - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Calvary Chapel Boynton - FL - Active</strong></option>
								<option value="1568" data-churchname="<strong>Calvary Chapel Fort Lauderdale - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Calvary Chapel Fort Lauderdale - FL - Active</strong></option>
								<option value="1776" data-churchname="Calvary Chapel Green Valley  - Henderson, NV" data-street="2615 W Horizon Ridge Pkwy" data-city="Henderson" data-state="NV" data-zip="89052" style="color: #aaa;">Calvary Chapel Green Valley - Henderson, NV</option>
								<option value="1518" data-churchname="<strong>Calvary Chapel Las Vegas - Las Vegas, NV - Active</strong>" data-street="7175 W Oquendo Rd" data-city="Las Vegas" data-state="NV" data-zip="89113" style="color: #000;"><strong>Calvary Chapel Las Vegas - Las Vegas, NV - Active</strong></option>
								<option value="1524" data-churchname="<strong>Calvary Chapel Lone Mountain - NV - Active</strong>" data-street="" data-city="" data-state="NV" data-zip="0" style="color: #000;"><strong>Calvary Chapel Lone Mountain - NV - Active</strong></option>
								<option value="2042" data-churchname="Calvary Chapel Paradise" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calvary Chapel Paradise</option>
								<option value="2041" data-churchname="Calvary Chapel Paradise" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calvary Chapel Paradise</option>
								<option value="2040" data-churchname="Calvary Chapel Paradise" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calvary Chapel Paradise</option>
								<option value="2043" data-churchname="Calvary Chapel Paradise" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calvary Chapel Paradise</option>
								<option value="1688" data-churchname="Calvary Chapel Paradise  - NV" data-street="" data-city="" data-state="NV" data-zip="0" style="color: #aaa;">Calvary Chapel Paradise - NV</option>
								<option value="2186" data-churchname="Calvary Chapel Parkland" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calvary Chapel Parkland</option>
								<option value="1573" data-churchname="<strong>Calvary Chapel Plantation - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Calvary Chapel Plantation - FL - Active</strong></option>
								<option value="2456" data-churchname="<strong>Calvary Chapel Santee - Santee, CA - Active</strong>" data-street="10920 Summit Avenue" data-city="Santee" data-state="CA" data-zip="92071" style="color: #000;"><strong>Calvary Chapel Santee - Santee, CA - Active</strong></option>
								<option value="2548" data-churchname="<strong>Calvary Chapel Santee - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>Calvary Chapel Santee - CA - Active</strong></option>
								<option value="2036" data-churchname="<strong>Calvary Chapel Santee  - Santee , CA - Active</strong>" data-street="10920 Summit Ave " data-city="Santee " data-state="CA" data-zip="92071" style="color: #000;"><strong>Calvary Chapel Santee - Santee , CA - Active</strong></option>
								<option value="2570" data-churchname="<strong>Calvary Chapel South - Orlando, FL - Active</strong>" data-street="1340 West Smith Street" data-city="Orlando" data-state="FL" data-zip="32804" style="color: #000;"><strong>Calvary Chapel South - Orlando, FL - Active</strong></option>
								<option value="2509" data-churchname="<strong>Calvary Chapel South - Kent, WA - Active</strong>" data-street="1340 W Smith St" data-city="Kent" data-state="WA" data-zip="98032" style="color: #000;"><strong>Calvary Chapel South - Kent, WA - Active</strong></option>
								<option value="2469" data-churchname="<strong>Calvary Chapel South - Kent, WA - Active</strong>" data-street="1340 West Smith Street" data-city="Kent" data-state="WA" data-zip="98032" style="color: #000;"><strong>Calvary Chapel South - Kent, WA - Active</strong></option>
								<option value="2152" data-churchname="<strong>Calvary Church - Millheim, PA - Active</strong>" data-street="117 Penn Street" data-city="Millheim" data-state="PA" data-zip="16854" style="color: #000;"><strong>Calvary Church - Millheim, PA - Active</strong></option>
								<option value="2240" data-churchname="<strong>Calvary Church - Clearwater - Clearwater, FL - Active</strong>" data-street="110 N. McMullen Booth Rd" data-city="Clearwater" data-state="FL" data-zip="33759" style="color: #000;"><strong>Calvary Church - Clearwater - Clearwater, FL - Active</strong></option>
								<option value="2283" data-churchname="<strong>Calvary Church - East Lake - Tarpon Springs, FL - Active</strong>" data-street="1190 E Lake Rd S" data-city="Tarpon Springs" data-state="FL" data-zip="34688" style="color: #000;"><strong>Calvary Church - East Lake - Tarpon Springs, FL - Active</strong></option>
								<option value="2049" data-churchname="Calvary Church of Santa Ana - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Calvary Church of Santa Ana - CA</option>
								<option value="2048" data-churchname="Calvary Community Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Calvary Community Church - CA</option>
								<option value="2050" data-churchname="Calvary Community Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Calvary Community Church - CA</option>
								<option value="2447" data-churchname="Calvary Penns Valley" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calvary Penns Valley</option>
								<option value="2073" data-churchname="Calvary chapel saving grace" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Calvary chapel saving grace</option>
								<option value="1264" data-churchname="Calvary on Aimwell - Vidalia, GA" data-street="607 Aimwell Road" data-city="Vidalia" data-state="GA" data-zip="30474" style="color: #aaa;">Calvary on Aimwell - Vidalia, GA</option>
								<option value="2561" data-churchname="Canyon Community Church  - Chula Vista, CA" data-street="" data-city="Chula Vista" data-state="CA" data-zip="0" style="color: #aaa;">Canyon Community Church - Chula Vista, CA</option>
								<option value="1517" data-churchname="<strong>Canyon Ridge Church - Las Vegas, NV - Active</strong>" data-street="6200 W Lone Mountain Rd" data-city="Las Vegas" data-state="NV" data-zip="89130" style="color: #000;"><strong>Canyon Ridge Church - Las Vegas, NV - Active</strong></option>
								<option value="2352" data-churchname="Canyon Springs Church - San Diego, CA" data-street="9889 Hibert St. #A" data-city="San Diego" data-state="CA" data-zip="92131" style="color: #aaa;">Canyon Springs Church - San Diego, CA</option>
								<option value="2033" data-churchname="<strong>Care4All Children Services - Lawrenceville, GA - Active</strong>" data-street="1174 McKendree Church Rd" data-city="Lawrenceville" data-state="GA" data-zip="30043" style="color: #000;"><strong>Care4All Children Services - Lawrenceville, GA - Active</strong></option>
								<option value="2138" data-churchname="Carnes Creek Baptist Church - Toccoa, GA" data-street="1655 Carnes Creek Rd." data-city="Toccoa" data-state="GA" data-zip="30577" style="color: #aaa;">Carnes Creek Baptist Church - Toccoa, GA</option>
								<option value="2669" data-churchname="Carolina Baptist Church - Clover, SC" data-street="114 Kings Mountain Street" data-city="Clover" data-state="SC" data-zip="29710" style="color: #aaa;">Carolina Baptist Church - Clover, SC</option>
								<option value="2023" data-churchname="Carrollton First United Methodist Church - Carrollton, GA" data-street="206 Newnan Street" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #aaa;">Carrollton First United Methodist Church - Carrollton, GA</option>
								<option value="2252" data-churchname="Casa De Dios Semilla De Fe" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Casa De Dios Semilla De Fe</option>
								<option value="2175" data-churchname="Casa de Poder" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Casa de Poder</option>
								<option value="2519" data-churchname="Catalyst Church  - San Diego , CA" data-street="6038 Cumberland St. " data-city="San Diego " data-state="CA" data-zip="92139" style="color: #aaa;">Catalyst Church - San Diego , CA</option>
								<option value="2314" data-churchname="Catholic Archdiocese of Atlanta" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Catholic Archdiocese of Atlanta</option>
								<option value="2305" data-churchname="Catholic Church of Saint Ann - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Catholic Church of Saint Ann - GA</option>
								<option value="1286" data-churchname="<strong>Catholic Church of Saint Monica - Duluth, GA - Active</strong>" data-street="1700 Buford Highway" data-city="Duluth" data-state="GA" data-zip="30097" style="color: #000;"><strong>Catholic Church of Saint Monica - Duluth, GA - Active</strong></option>
								<option value="1794" data-churchname="Catholic Student Center at UGA - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Catholic Student Center at UGA - GA</option>
								<option value="1526" data-churchname="Catholic church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Catholic church - NV</option>
								<option value="2415" data-churchname="Cedarlake Christian Center" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Cedarlake Christian Center</option>
								<option value="2422" data-churchname="Celebration" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Celebration</option>
								<option value="1507" data-churchname="Celebration Church - FL" data-street="800 E Robinson St" data-city="" data-state="FL" data-zip="32801" style="color: #aaa;">Celebration Church - FL</option>
								<option value="2184" data-churchname="<strong>Celebration Church - Georgetown - Georgetown, TX - Active</strong>" data-street="601 Westinghouse Rd." data-city="Georgetown" data-state="TX" data-zip="78626" style="color: #000;"><strong>Celebration Church - Georgetown - Georgetown, TX - Active</strong></option>
								<option value="1793" data-churchname="<strong>Celebration Church - Austin - Austin, TX - Active</strong>" data-street="1006 W Koenig Ln" data-city="Austin" data-state="TX" data-zip="78756" style="color: #000;"><strong>Celebration Church - Austin - Austin, TX - Active</strong></option>
								<option value="2235" data-churchname="<strong>Center Church - San Diego, CA - Active</strong>" data-street="2557 3rd Ave" data-city="San Diego" data-state="CA" data-zip="92103" style="color: #000;"><strong>Center Church - San Diego, CA - Active</strong></option>
								<option value="1838" data-churchname="Center Pointe Christian - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Center Pointe Christian - OH</option>
								<option value="2555" data-churchname="Center Pointe Church  - Chula Vista, CA" data-street="" data-city="Chula Vista" data-state="CA" data-zip="0" style="color: #aaa;">Center Pointe Church - Chula Vista, CA</option>
								<option value="1722" data-churchname="Centerpoint-Wetumpka - Wetumpka, AL" data-street="9301 US Highway 231" data-city="Wetumpka" data-state="AL" data-zip="36092" style="color: #aaa;">Centerpoint-Wetumpka - Wetumpka, AL</option>
								<option value="1596" data-churchname="<strong>Centerpointe Church - FL - Active</strong>" data-street="9580 Curry Ford Rd" data-city="" data-state="FL" data-zip="32825" style="color: #000;"><strong>Centerpointe Church - FL - Active</strong></option>
								<option value="1817" data-churchname="Centerville Community Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Centerville Community Church - OH</option>
								<option value="2021" data-churchname="<strong>Central Avenue Baptist Church - Lake Wales, FL - Active</strong>" data-street="113 West Central Avenue" data-city="Lake Wales" data-state="FL" data-zip="33853" style="color: #000;"><strong>Central Avenue Baptist Church - Lake Wales, FL - Active</strong></option>
								<option value="1225" data-churchname="Central Baptist Church - Newnan - Newnan, GA" data-street="14 West Broad Street" data-city="Newnan" data-state="GA" data-zip="30263" style="color: #aaa;">Central Baptist Church - Newnan - Newnan, GA</option>
								<option value="1527" data-churchname="Central Church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Central Church - NV</option>
								<option value="1767" data-churchname="Central Church of God" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Central Church of God</option>
								<option value="2269" data-churchname="Century Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Century Church</option>
								<option value="2400" data-churchname="Champion City Church - Springfield, OH" data-street="" data-city="Springfield" data-state="OH" data-zip="0" style="color: #aaa;">Champion City Church - Springfield, OH</option>
								<option value="2649" data-churchname="Chapel Pointe - Hudsonville, MI" data-street="3350 Baldwin Street" data-city="Hudsonville" data-state="MI" data-zip="49426" style="color: #aaa;">Chapel Pointe - Hudsonville, MI</option>
								<option value="2699" data-churchname="Chapel Rock Christian Church - Indianapolis, IN" data-street="2020 North Girls School Road" data-city="Indianapolis" data-state="IN" data-zip="46214" style="color: #aaa;">Chapel Rock Christian Church - Indianapolis, IN</option>
								<option value="2288" data-churchname="Chapin Presbyterian Church - Chapin, SC" data-street="" data-city="Chapin" data-state="SC" data-zip="0" style="color: #aaa;">Chapin Presbyterian Church - Chapin, SC</option>
								<option value="2275" data-churchname="Cheese" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Cheese</option>
								<option value="1412" data-churchname="Cherry Hills Church - Springfield, IL" data-street="2125 Woodside Road" data-city="Springfield" data-state="IL" data-zip="62711" style="color: #aaa;">Cherry Hills Church - Springfield, IL</option>
								<option value="2122" data-churchname="Chestnut Grove Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Chestnut Grove Baptist Church</option>
								<option value="2180" data-churchname="<strong>Chestnut Grove Church - athens, GA - Active</strong>" data-street=" 610 Epps Bridge Pkwy" data-city="athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>Chestnut Grove Church - athens, GA - Active</strong></option>
								<option value="2117" data-churchname="<strong>Chestnut Mountain Church - Flowery Branch, GA - Active</strong>" data-street="4903 Chestnut Mountain Circle" data-city="Flowery Branch" data-state="GA" data-zip="30542" style="color: #000;"><strong>Chestnut Mountain Church - Flowery Branch, GA - Active</strong></option>
								<option value="2227" data-churchname="Chestnut Mountain Presbyterian Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Chestnut Mountain Presbyterian Church</option>
								<option value="2228" data-churchname="Chestnut Mountain Presbyterian Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Chestnut Mountain Presbyterian Church</option>
								<option value="2171" data-churchname="<strong>Chestnut Mountain Presbyterian Church - Flowery Branch, GA - Active</strong>" data-street="4675 Winder Highway" data-city="Flowery Branch" data-state="GA" data-zip="30542" style="color: #000;"><strong>Chestnut Mountain Presbyterian Church - Flowery Branch, GA - Active</strong></option>
								<option value="2226" data-churchname="Chestnut Mountain Presbyterian Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Chestnut Mountain Presbyterian Church</option>
								<option value="2025" data-churchname="<strong>Childkind - Tucker, GA - Active</strong>" data-street="1990 Lakeside Pkwy" data-city="Tucker" data-state="GA" data-zip="30084" style="color: #000;"><strong>Childkind - Tucker, GA - Active</strong></option>
								<option value="1222" data-churchname="<strong>Children\'s Hope - Montgomery, AL - Active</strong>" data-street="ATTN:  Jared McCrory
305 South Perry St." data-city="Montgomery" data-state="AL" data-zip="36104" style="color: #000;"><strong>Children's Hope - Montgomery, AL - Active</strong></option>
								<option value="1881" data-churchname="Chino Valley Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Chino Valley Community Church</option>
								<option value="1243" data-churchname="<strong>Christ Chapel - Dublin - Dublin, GA - Active</strong>" data-street="604 Academy Ave" data-city="Dublin" data-state="GA" data-zip="31021" style="color: #000;"><strong>Christ Chapel - Dublin - Dublin, GA - Active</strong></option>
								<option value="1363" data-churchname="Christ Church Presbyterian Church - Evans, GA" data-street="4201 Southern Pines Drive" data-city="Evans" data-state="GA" data-zip="30809" style="color: #aaa;">Christ Church Presbyterian Church - Evans, GA</option>
								<option value="1273" data-churchname="<strong>Christ Community Church - Watkinsville, GA - Active</strong>" data-street="1020 12 Oaks Dr" data-city="Watkinsville" data-state="GA" data-zip="30677" style="color: #000;"><strong>Christ Community Church - Watkinsville, GA - Active</strong></option>
								<option value="1348" data-churchname="<strong>Christ Community Church - Columbus - Columbus, GA - Active</strong>" data-street="4078 Milgen Rd" data-city="Columbus" data-state="GA" data-zip="31907" style="color: #000;"><strong>Christ Community Church - Columbus - Columbus, GA - Active</strong></option>
								<option value="1824" data-churchname="Christ Community Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Christ Community Church - OH</option>
								<option value="1315" data-churchname="<strong>Christ Family Church - Dahlonega, GA - Active</strong>" data-street="7788 South Chestatee" data-city="Dahlonega" data-state="GA" data-zip="30533" style="color: #000;"><strong>Christ Family Church - Dahlonega, GA - Active</strong></option>
								<option value="1402" data-churchname="Christ Fellowship - Tampa, FL" data-street="300 E Sligh Ave" data-city="Tampa" data-state="FL" data-zip="33604" style="color: #aaa;">Christ Fellowship - Tampa, FL</option>
								<option value="1601" data-churchname="<strong>Christ Fellowship Church - Alpharetta, GA - Active</strong>" data-street="2662 Holcomb Bridge Road" data-city="Alpharetta" data-state="GA" data-zip="30022" style="color: #000;"><strong>Christ Fellowship Church - Alpharetta, GA - Active</strong></option>
								<option value="1921" data-churchname="<strong>Christ Fellowship Church - Tampa, FL - Active</strong>" data-street="" data-city="Tampa" data-state="FL" data-zip="0" style="color: #000;"><strong>Christ Fellowship Church - Tampa, FL - Active</strong></option>
								<option value="1511" data-churchname="<strong>Christ Presbyterian - Clarkesville, GA - Active</strong>" data-street="" data-city="Clarkesville" data-state="GA" data-zip="0" style="color: #000;"><strong>Christ Presbyterian - Clarkesville, GA - Active</strong></option>
								<option value="1990" data-churchname="Christ The Redeemer - Pendleton, SC" data-street="839 Greenville Street" data-city="Pendleton" data-state="SC" data-zip="29670" style="color: #aaa;">Christ The Redeemer - Pendleton, SC</option>
								<option value="2341" data-churchname="<strong>Christ the King - Selma, AL - Active</strong>" data-street="1204 Highland Avenue" data-city="Selma" data-state="AL" data-zip="36701" style="color: #000;"><strong>Christ the King - Selma, AL - Active</strong></option>
								<option value="2085" data-churchname="Christ the King " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Christ the King </option>
								<option value="2651" data-churchname="<strong>Christ the King Church - Cincinnati - CtK Uptown - Cincinnati, OH - Active</strong>" data-street="333 Warner Street" data-city="Cincinnati" data-state="OH" data-zip="45219" style="color: #000;"><strong>Christ the King Church - Cincinnati - CtK Uptown - Cincinnati, OH - Active</strong></option>
								<option value="1267" data-churchname="<strong>Christ the King Lutheran Church - Norcross, GA - Active</strong>" data-street="5575 Peachtree Parkway" data-city="Norcross" data-state="GA" data-zip="30092" style="color: #000;"><strong>Christ the King Lutheran Church - Norcross, GA - Active</strong></option>
								<option value="2700" data-churchname="Christ\'s Community Church - Fishers, IN" data-street="13097 Allisonville Road" data-city="Fishers" data-state="IN" data-zip="46038" style="color: #aaa;">Christ's Community Church - Fishers, IN</option>
								<option value="2020" data-churchname="<strong>Christian Alliance for Orphans (CAFO) - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Christian Alliance for Orphans (CAFO) - GA - Active</strong></option>
								<option value="1889" data-churchname="Christian Assembly " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Christian Assembly </option>
								<option value="1528" data-churchname="Christian Embassy Worship - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Christian Embassy Worship - NV</option>
								<option value="2612" data-churchname="<strong>Christian Fellowship Church - Evansville, IN - Active</strong>" data-street="4100 Millersburg Road" data-city="Evansville" data-state="IN" data-zip="47725" style="color: #000;"><strong>Christian Fellowship Church - Evansville, IN - Active</strong></option>
								<option value="1574" data-churchname="<strong>Christian Life Center - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Christian Life Center - FL - Active</strong></option>
								<option value="1485" data-churchname="<strong>Christian Life Church - Plymouth, WI - Active</strong>" data-street="300 Rustic St." data-city="Plymouth" data-state="WI" data-zip="53073" style="color: #000;"><strong>Christian Life Church - Plymouth, WI - Active</strong></option>
								<option value="1612" data-churchname="<strong>Christian Life Fellowship - San Francisco, CA - Active</strong>" data-street="600 7th Street" data-city="San Francisco" data-state="CA" data-zip="94103" style="color: #000;"><strong>Christian Life Fellowship - San Francisco, CA - Active</strong></option>
								<option value="1287" data-churchname="Christos Community Church - Norcross, GA" data-street="5172 Brook Hollow Pkwy" data-city="Norcross" data-state="GA" data-zip="0" style="color: #aaa;">Christos Community Church - Norcross, GA</option>
								<option value="2559" data-churchname="Church 180  - San Diego , CA" data-street="" data-city="San Diego " data-state="CA" data-zip="0" style="color: #aaa;">Church 180 - San Diego , CA</option>
								<option value="2701" data-churchname="Church 52 - Indianapolis, IN" data-street="8220 Brookville Road" data-city="Indianapolis" data-state="IN" data-zip="46239" style="color: #aaa;">Church 52 - Indianapolis, IN</option>
								<option value="2234" data-churchname="Church By The Glades" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Church By The Glades</option>
								<option value="2239" data-churchname="Church Project OC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Church Project OC</option>
								<option value="1803" data-churchname="Church Venture" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Church Venture</option>
								<option value="1689" data-churchname="<strong>Church at Lake Mead (The CALM) - Henderson, NV - Active</strong>" data-street="655 E Lake Mead Pkwy" data-city="Henderson" data-state="NV" data-zip="89015" style="color: #000;"><strong>Church at Lake Mead (The CALM) - Henderson, NV - Active</strong></option>
								<option value="2411" data-churchname="<strong>Church at Northside (Northside Church) - Rome, GA - Active</strong>" data-street="" data-city="Rome" data-state="GA" data-zip="0" style="color: #000;"><strong>Church at Northside (Northside Church) - Rome, GA - Active</strong></option>
								<option value="2602" data-churchname="<strong>Church at the Cross - Kelly Reyes - Orlando, FL - Active</strong>" data-street="700 Good Homes Road" data-city="Orlando" data-state="FL" data-zip="32818" style="color: #000;"><strong>Church at the Cross - Kelly Reyes - Orlando, FL - Active</strong></option>
								<option value="1645" data-churchname="<strong>Church at the Grove - Loganville, GA - Active</strong>" data-street="PO Box 1389" data-city="Loganville" data-state="GA" data-zip="30052" style="color: #000;"><strong>Church at the Grove - Loganville, GA - Active</strong></option>
								<option value="1423" data-churchname="<strong>Church at the Groves - Leesburg, GA - Active</strong>" data-street="130 McIntosh Farms Rd" data-city="Leesburg" data-state="GA" data-zip="31763" style="color: #000;"><strong>Church at the Groves - Leesburg, GA - Active</strong></option>
								<option value="1575" data-churchname="Church in the Palms - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Church in the Palms - FL</option>
								<option value="2304" data-churchname="<strong>Church of the Good Shepherd  - Durham, NC - Active</strong>" data-street="3741 Garrett Road" data-city="Durham" data-state="NC" data-zip="27707" style="color: #000;"><strong>Church of the Good Shepherd - Durham, NC - Active</strong></option>
								<option value="2565" data-churchname="Church of the Highlands - Huntsville - Huntsville, AL" data-street="" data-city="Huntsville" data-state="AL" data-zip="0" style="color: #aaa;">Church of the Highlands - Huntsville - Huntsville, AL</option>
								<option value="1726" data-churchname="Church of the Highlands " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Church of the Highlands </option>
								<option value="2702" data-churchname="Church of the Living God - Indianapolis, IN" data-street="901 North Belleview Place" data-city="Indianapolis" data-state="IN" data-zip="46222" style="color: #aaa;">Church of the Living God - Indianapolis, IN</option>
								<option value="1529" data-churchname="Church of the Nazarene - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Church of the Nazarene - NV</option>
								<option value="1488" data-churchname="<strong>Church of the Resurrection - West - Olathe, KS - Active</strong>" data-street="24000 West Valley Parkway" data-city="Olathe" data-state="KS" data-zip="66061" style="color: #000;"><strong>Church of the Resurrection - West - Olathe, KS - Active</strong></option>
								<option value="1487" data-churchname="<strong>Church of the Resurrection - Leawood - Overland Park, KS - Active</strong>" data-street="13902 Hayes Street" data-city="Overland Park" data-state="KS" data-zip="66221" style="color: #000;"><strong>Church of the Resurrection - Leawood - Overland Park, KS - Active</strong></option>
								<option value="1823" data-churchname="Church on Fire - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Church on Fire - OH</option>
								<option value="1963" data-churchname="Church on the Rock" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Church on the Rock</option>
								<option value="2541" data-churchname="Citipoint Church - Mount Vernon, WA" data-street="" data-city="Mount Vernon" data-state="WA" data-zip="0" style="color: #aaa;">Citipoint Church - Mount Vernon, WA</option>
								<option value="2617" data-churchname="<strong>Citipoint Church - Mount Vernon, WA - Active</strong>" data-street="3302 Cedardale Road" data-city="Mount Vernon" data-state="WA" data-zip="98274" style="color: #000;"><strong>Citipoint Church - Mount Vernon, WA - Active</strong></option>
								<option value="2655" data-churchname="<strong>City Alliance Church - Williamsport, PA - Active</strong>" data-street="380 West 4th Street" data-city="Williamsport" data-state="PA" data-zip="17701" style="color: #000;"><strong>City Alliance Church - Williamsport, PA - Active</strong></option>
								<option value="2703" data-churchname="City Church - Fort Wayne, IN" data-street="1025 West Rudisill Boulevard" data-city="Fort Wayne" data-state="IN" data-zip="46807" style="color: #aaa;">City Church - Fort Wayne, IN</option>
								<option value="2119" data-churchname="City Church Williamsport Pa" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">City Church Williamsport Pa</option>
								<option value="2426" data-churchname="<strong>City Church, Williamsport PA - Williamsport, PA - Active</strong>" data-street="36 East 4th Street" data-city="Williamsport" data-state="PA" data-zip="17701" style="color: #000;"><strong>City Church, Williamsport PA - Williamsport, PA - Active</strong></option>
								<option value="2404" data-churchname="<strong>City Hill Church - Hamilton, OH - Active</strong>" data-street="7474 Morris Road" data-city="Hamilton" data-state="OH" data-zip="45011" style="color: #000;"><strong>City Hill Church - Hamilton, OH - Active</strong></option>
								<option value="2105" data-churchname="<strong>City Reformed Church - Milwaukee, WI - Active</strong>" data-street="1661 N Farwell Ave" data-city="Milwaukee" data-state="WI" data-zip="53202" style="color: #000;"><strong>City Reformed Church - Milwaukee, WI - Active</strong></option>
								<option value="1587" data-churchname="<strong>City Rev - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>City Rev - FL - Active</strong></option>
								<option value="2480" data-churchname="City of life" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">City of life</option>
								<option value="1320" data-churchname="<strong>Classic City Church - Athens, GA - Active</strong>" data-street="386 N Milledge Ave" data-city="Athens" data-state="GA" data-zip="30601" style="color: #000;"><strong>Classic City Church - Athens, GA - Active</strong></option>
								<option value="1765" data-churchname="Clayton Baptist" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Clayton Baptist</option>
								<option value="2068" data-churchname="Coast Hills Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Coast Hills Church</option>
								<option value="1974" data-churchname="Coastal Community Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Coastal Community Church - FL</option>
								<option value="2221" data-churchname="<strong>Coastline Church - Carlsbad, CA - Active</strong>" data-street="2215 Calle Barcelona" data-city="Carlsbad" data-state="CA" data-zip="92009" style="color: #000;"><strong>Coastline Church - Carlsbad, CA - Active</strong></option>
								<option value="1847" data-churchname="<strong>College Hill Presbyterian - OH - Active</strong>" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #000;"><strong>College Hill Presbyterian - OH - Active</strong></option>
								<option value="1598" data-churchname="College Park United Methodist Church - Orlando, FL" data-street="644 W Princeton St" data-city="Orlando" data-state="FL" data-zip="32804" style="color: #aaa;">College Park United Methodist Church - Orlando, FL</option>
								<option value="2671" data-churchname="Colonial Presbyterian Church - Overland Park, KS" data-street="12501 137th Street" data-city="Overland Park" data-state="KS" data-zip="66221" style="color: #aaa;">Colonial Presbyterian Church - Overland Park, KS</option>
								<option value="1734" data-churchname="<strong>Commission 127 - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="32714" style="color: #000;"><strong>Commission 127 - FL - Active</strong></option>
								<option value="1530" data-churchname="Common Ground - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Common Ground - NV</option>
								<option value="1777" data-churchname="Common Ground  - Las Vegas, NV" data-street="7351 N Campbell Rd" data-city="Las Vegas" data-state="NV" data-zip="89149" style="color: #aaa;">Common Ground - Las Vegas, NV</option>
								<option value="2704" data-churchname="Common Ground Midtown - Indianapolis, IN" data-street="4550 North Illinois Street" data-city="Indianapolis" data-state="IN" data-zip="46208" style="color: #aaa;">Common Ground Midtown - Indianapolis, IN</option>
								<option value="2611" data-churchname="<strong>Common Ground Northeast - Indianapolis, IN - Active</strong>" data-street="7440 Hague Road" data-city="Indianapolis" data-state="IN" data-zip="46256" style="color: #000;"><strong>Common Ground Northeast - Indianapolis, IN - Active</strong></option>
								<option value="2705" data-churchname="<strong>Common Ground West - Indianapolis, IN - Active</strong>" data-street="" data-city="Indianapolis" data-state="IN" data-zip="0" style="color: #000;"><strong>Common Ground West - Indianapolis, IN - Active</strong></option>
								<option value="2537" data-churchname="<strong>Commonway Church - Muncie, IN - Active</strong>" data-street="201 East Charles Street" data-city="Muncie" data-state="IN" data-zip="47305" style="color: #000;"><strong>Commonway Church - Muncie, IN - Active</strong></option>
								<option value="1427" data-churchname="<strong>Community Bible Church - Beaufort - Beaufort, SC - Active</strong>" data-street="638 Parris Island Gateway" data-city="Beaufort" data-state="SC" data-zip="29906" style="color: #000;"><strong>Community Bible Church - Beaufort - Beaufort, SC - Active</strong></option>
								<option value="2788" data-churchname="Community Bible Church - San Antonio, TX" data-street="2477 North Loop 1604 East" data-city="San Antonio" data-state="TX" data-zip="78259" style="color: #aaa;">Community Bible Church - San Antonio, TX</option>
								<option value="1435" data-churchname="Community Bible Church of Fair Lakes - Fair Lakes, VA" data-street="4400 Fair Lakes Ct #60," data-city="Fair Lakes" data-state="VA" data-zip="22033" style="color: #aaa;">Community Bible Church of Fair Lakes - Fair Lakes, VA</option>
								<option value="1971" data-churchname="Community Christian - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Community Christian - FL</option>
								<option value="2706" data-churchname="Community Church - Indianapolis, IN" data-street="" data-city="Indianapolis" data-state="IN" data-zip="0" style="color: #aaa;">Community Church - Indianapolis, IN</option>
								<option value="2106" data-churchname="<strong>Community Church  - Community Church Ryf Road - Oshkosh, WI - Active</strong>" data-street="2351 Ryf Rd" data-city="Oshkosh" data-state="WI" data-zip="54904" style="color: #000;"><strong>Community Church - Community Church Ryf Road - Oshkosh, WI - Active</strong></option>
								<option value="2535" data-churchname="Community Church at Lake Wylie - Lake Wylie, SC" data-street="" data-city="Lake Wylie" data-state="SC" data-zip="29710" style="color: #aaa;">Community Church at Lake Wylie - Lake Wylie, SC</option>
								<option value="2318" data-churchname="<strong>Community Church of Columbus - Columbus, IN - Active</strong>" data-street="3850 North Marr Road" data-city="Columbus" data-state="IN" data-zip="47203" style="color: #000;"><strong>Community Church of Columbus - Columbus, IN - Active</strong></option>
								<option value="2472" data-churchname="<strong>Community Church of Greenwood - Greenwood, IN - Active</strong>" data-street="1477 West Main Street" data-city="Greenwood" data-state="IN" data-zip="46142" style="color: #000;"><strong>Community Church of Greenwood - Greenwood, IN - Active</strong></option>
								<option value="2029" data-churchname="<strong>Community Foundation West Georgia - Carrolton , GA - Active</strong>" data-street="807 S Park St" data-city="Carrolton " data-state="GA" data-zip="30117" style="color: #000;"><strong>Community Foundation West Georgia - Carrolton , GA - Active</strong></option>
								<option value="1576" data-churchname="<strong>Community of Hope - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Community of Hope - FL - Active</strong></option>
								<option value="2520" data-churchname="Compass Church  - San Diego , CA" data-street="5420 Montezuma Rd." data-city="San Diego " data-state="CA" data-zip="92125" style="color: #aaa;">Compass Church - San Diego , CA</option>
								<option value="1899" data-churchname="<strong>Compassion Christian Church - Midway - Midway, GA - Active</strong>" data-street="12199 E. Oglethorpe Hwy" data-city="Midway" data-state="GA" data-zip="31320" style="color: #000;"><strong>Compassion Christian Church - Midway - Midway, GA - Active</strong></option>
								<option value="1428" data-churchname="<strong>Compassion Christian Church - Henderson - Savannah, GA - Active</strong>" data-street="55 Al Henderson Boulevard" data-city="Savannah" data-state="GA" data-zip="31419" style="color: #000;"><strong>Compassion Christian Church - Henderson - Savannah, GA - Active</strong></option>
								<option value="1898" data-churchname="<strong>Compassion Christian Church - Statesboro - Statesboro, GA - Active</strong>" data-street="831 Cawana Road" data-city="Statesboro" data-state="GA" data-zip="30461" style="color: #000;"><strong>Compassion Christian Church - Statesboro - Statesboro, GA - Active</strong></option>
								<option value="1901" data-churchname="<strong>Compassion Christian Church - East Campus - Savannah, GA - Active</strong>" data-street="9150 Old Montgomery Road" data-city="Savannah" data-state="GA" data-zip="31406" style="color: #000;"><strong>Compassion Christian Church - East Campus - Savannah, GA - Active</strong></option>
								<option value="1900" data-churchname="<strong>Compassion Christian Church - Effingham - Rincon, GA - Active</strong>" data-street="810 Fort Howard Road" data-city="Rincon" data-state="GA" data-zip="31326" style="color: #000;"><strong>Compassion Christian Church - Effingham - Rincon, GA - Active</strong></option>
								<option value="1902" data-churchname="<strong>Compassion Christian Church - Downtown - Savannah, GA - Active</strong>" data-street="222 Bull Street" data-city="Savannah" data-state="GA" data-zip="31401" style="color: #000;"><strong>Compassion Christian Church - Downtown - Savannah, GA - Active</strong></option>
								<option value="2013" data-churchname="Connect City Church - Summerville, GA" data-street="83 Georgia 48" data-city="Summerville" data-state="GA" data-zip="30747" style="color: #aaa;">Connect City Church - Summerville, GA</option>
								<option value="1251" data-churchname="<strong>Connection Church - Millen  - Millen, GA - Active</strong>" data-street="1178 E. Winthrope Avenue" data-city="Millen" data-state="GA" data-zip="30442" style="color: #000;"><strong>Connection Church - Millen - Millen, GA - Active</strong></option>
								<option value="1248" data-churchname="<strong>Connection Church Dublin - Dublin, GA - Active</strong>" data-street="114 South Monroe St." data-city="Dublin" data-state="GA" data-zip="31021" style="color: #000;"><strong>Connection Church Dublin - Dublin, GA - Active</strong></option>
								<option value="1390" data-churchname="Connection Church Statesboro - Statesboro, GA" data-street="1342 Cawana Road" data-city="Statesboro" data-state="GA" data-zip="30461" style="color: #aaa;">Connection Church Statesboro - Statesboro, GA</option>
								<option value="1253" data-churchname="<strong>Connection Church Vidalia - Statesboro, GA - Active</strong>" data-street="1342 Cawana. Rd." data-city="Statesboro" data-state="GA" data-zip="30458" style="color: #000;"><strong>Connection Church Vidalia - Statesboro, GA - Active</strong></option>
								<option value="2707" data-churchname="Connection Pointe Church - Brownsburg, IN" data-street="1800 North Green Street" data-city="Brownsburg" data-state="IN" data-zip="46112" style="color: #aaa;">Connection Pointe Church - Brownsburg, IN</option>
								<option value="2019" data-churchname="<strong>Connections Homes - Lawrenceville, GA - Active</strong>" data-street="337 W Pike St" data-city="Lawrenceville" data-state="GA" data-zip="30046" style="color: #000;"><strong>Connections Homes - Lawrenceville, GA - Active</strong></option>
								<option value="2557" data-churchname="Convergence Community Church  - San Diego , CA" data-street="" data-city="San Diego " data-state="CA" data-zip="0" style="color: #aaa;">Convergence Community Church - San Diego , CA</option>
								<option value="2145" data-churchname="Corinth Baptist Church - LaFayette, GA" data-street="2524 Corinth Road" data-city="LaFayette" data-state="GA" data-zip="30728" style="color: #aaa;">Corinth Baptist Church - LaFayette, GA</option>
								<option value="1644" data-churchname="Corinth Christian Church - Loganville, GA" data-street="1635 Highway 81" data-city="Loganville" data-state="GA" data-zip="30052" style="color: #aaa;">Corinth Christian Church - Loganville, GA</option>
								<option value="1246" data-churchname="Cornerstone Baptist Church - Ellerslie, GA" data-street="16117 GA Hwy 315PO Box 215" data-city="Ellerslie" data-state="GA" data-zip="31807" style="color: #aaa;">Cornerstone Baptist Church - Ellerslie, GA</option>
								<option value="2074" data-churchname="Cornerstone Bible Church (Fullerton, CA)" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Cornerstone Bible Church (Fullerton, CA)</option>
								<option value="1260" data-churchname="<strong>Cornerstone Church - Athens, GA - Active</strong>" data-street="4680 Lexington Rd" data-city="Athens" data-state="GA" data-zip="30605" style="color: #000;"><strong>Cornerstone Church - Athens, GA - Active</strong></option>
								<option value="2051" data-churchname="Cornerstone Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Cornerstone Church - CA</option>
								<option value="1752" data-churchname="Cornerstone Church - Rome, GA" data-street="324 Mathis Drive NW" data-city="Rome" data-state="GA" data-zip="30165" style="color: #aaa;">Cornerstone Church - Rome, GA</option>
								<option value="1420" data-churchname="Cornerstone Church Atlanta - Atlanta, GA" data-street="1450 Ralph David Abernathy Boulevard Southwest" data-city="Atlanta" data-state="GA" data-zip="30310" style="color: #aaa;">Cornerstone Church Atlanta - Atlanta, GA</option>
								<option value="1255" data-churchname="Cornerstone Church of Knoxville - Knoxville, TN" data-street="1250 Heritage Lake Blvd" data-city="Knoxville" data-state="TN" data-zip="37922" style="color: #aaa;">Cornerstone Church of Knoxville - Knoxville, TN</option>
								<option value="2342" data-churchname="<strong>Cornerstone Presbyterian - Selma, AL - Active</strong>" data-street="301 Broad Street" data-city="Selma" data-state="AL" data-zip="36701" style="color: #000;"><strong>Cornerstone Presbyterian - Selma, AL - Active</strong></option>
								<option value="2361" data-churchname="Corporate" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Corporate</option>
								<option value="1368" data-churchname="Covenant Life Church - Bremen, GA" data-street="P.O. Box 1130 Atlantic Ave" data-city="Bremen" data-state="GA" data-zip="30110" style="color: #aaa;">Covenant Life Church - Bremen, GA</option>
								<option value="2332" data-churchname="Credit Card Account" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Credit Card Account</option>
								<option value="2222" data-churchname="<strong>Cross Connection Church of Escondido - Escondido, CA - Active</strong>" data-street="1675 Seven Oakes Rd, Escondido, CA 92026" data-city="Escondido" data-state="CA" data-zip="92026" style="color: #000;"><strong>Cross Connection Church of Escondido - Escondido, CA - Active</strong></option>
								<option value="1289" data-churchname="Cross Pointe Church - Duluth, GA" data-street="1800 Satellite Boulevard Northwest" data-city="Duluth" data-state="GA" data-zip="30097" style="color: #aaa;">Cross Pointe Church - Duluth, GA</option>
								<option value="2067" data-churchname="Crossline Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Crossline Church - CA</option>
								<option value="2134" data-churchname="Crosspoint City Church - Cartersville, GA" data-street="245 South Tennessee Street" data-city="Cartersville" data-state="GA" data-zip="30120" style="color: #aaa;">Crosspoint City Church - Cartersville, GA</option>
								<option value="1232" data-churchname="<strong>Crosspointe Church - Columbus - Columbus, GA - Active</strong>" data-street="2301 Airport Thruway B" data-city="Columbus" data-state="GA" data-zip="31904" style="color: #000;"><strong>Crosspointe Church - Columbus - Columbus, GA - Active</strong></option>
								<option value="1405" data-churchname="<strong>Crossroads - Ft. Benning - Fort Benning, GA - Active</strong>" data-street="" data-city="Fort Benning" data-state="GA" data-zip="31909" style="color: #000;"><strong>Crossroads - Ft. Benning - Fort Benning, GA - Active</strong></option>
								<option value="1787" data-churchname="<strong>Crossroads - Mason  - Mason , OH - Active</strong>" data-street="990 Reading Road " data-city="Mason " data-state="OH" data-zip="45040" style="color: #000;"><strong>Crossroads - Mason - Mason , OH - Active</strong></option>
								<option value="1786" data-churchname="Crossroads - West Side  - Cleves, OH" data-street="8575 Bridgetown Road" data-city="Cleves" data-state="OH" data-zip="45002" style="color: #aaa;">Crossroads - West Side - Cleves, OH</option>
								<option value="1799" data-churchname="Crossroads - Oakley" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Crossroads - Oakley</option>
								<option value="2488" data-churchname="<strong>Crossroads Baptist Church - Social Circle, GA - Active</strong>" data-street="227 County Road 229" data-city="Social Circle" data-state="GA" data-zip="30025" style="color: #000;"><strong>Crossroads Baptist Church - Social Circle, GA - Active</strong></option>
								<option value="1615" data-churchname="<strong>Crossroads Church - Sturgeon Bay, WI - Active</strong>" data-street="3887 Old Hwy Rd" data-city="Sturgeon Bay" data-state="WI" data-zip="54235" style="color: #000;"><strong>Crossroads Church - Sturgeon Bay, WI - Active</strong></option>
								<option value="2708" data-churchname="Crossroads Church - Fishers, IN" data-street="14885 Southeastern Parkway" data-city="Fishers" data-state="IN" data-zip="46037" style="color: #aaa;">Crossroads Church - Fishers, IN</option>
								<option value="1309" data-churchname="<strong>Crossroads Church - Sharpsburg - Newnan, GA - Active</strong>" data-street="2564 Sharpsburg McCollum Road" data-city="Newnan" data-state="GA" data-zip="30265" style="color: #000;"><strong>Crossroads Church - Sharpsburg - Newnan, GA - Active</strong></option>
								<option value="2709" data-churchname="Crossroads Community Church - Goshen, IN" data-street="57415 Alpha Drive" data-city="Goshen" data-state="IN" data-zip="46528" style="color: #aaa;">Crossroads Community Church - Goshen, IN</option>
								<option value="2677" data-churchname="<strong>Crossroads Presbyterian Church - Dale City, VA - Active</strong>" data-street="15557 Cardinal Drive" data-city="Dale City" data-state="VA" data-zip="22193" style="color: #000;"><strong>Crossroads Presbyterian Church - Dale City, VA - Active</strong></option>
								<option value="1316" data-churchname="Crossview Community Church - Rockmart, GA" data-street="510 North Piedmont Avenue" data-city="Rockmart" data-state="GA" data-zip="30153" style="color: #aaa;">Crossview Community Church - Rockmart, GA</option>
								<option value="1577" data-churchname="<strong>Crossway - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Crossway - FL - Active</strong></option>
								<option value="2052" data-churchname="Crossway Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Crossway Church - CA</option>
								<option value="1334" data-churchname="Crossway Fellowship - Watkinsville, GA" data-street="2191 Mars Hill Rd" data-city="Watkinsville" data-state="GA" data-zip="30677" style="color: #aaa;">Crossway Fellowship - Watkinsville, GA</option>
								<option value="2364" data-churchname="Cruciform Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Cruciform Church</option>
								<option value="1828" data-churchname="Cypress Wesleyan Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Cypress Wesleyan Church - OH</option>
								<option value="1735" data-churchname="Dahlonega Baptist - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Dahlonega Baptist - GA</option>
								<option value="1338" data-churchname="Dahlonega United Methodist Church - Dahlonega, GA" data-street="107 Park St" data-city="Dahlonega" data-state="GA" data-zip="30533" style="color: #aaa;">Dahlonega United Methodist Church - Dahlonega, GA</option>
								<option value="2484" data-churchname="<strong>Dayspring Assembly of God - Bowling Green, OH - Active</strong>" data-street="17360 North Dixie Highway" data-city="Bowling Green" data-state="OH" data-zip="43402" style="color: #000;"><strong>Dayspring Assembly of God - Bowling Green, OH - Active</strong></option>
								<option value="1531" data-churchname="Deep Roots Church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Deep Roots Church - NV</option>
								<option value="2554" data-churchname="Del Cerro Baptist Church  - La Mesa, CA" data-street="" data-city="La Mesa" data-state="CA" data-zip="0" style="color: #aaa;">Del Cerro Baptist Church - La Mesa, CA</option>
								<option value="2646" data-churchname="<strong>Del Ray Baptist Church - Alexandria, VA - Active</strong>" data-street="2405 Russell Road" data-city="Alexandria" data-state="VA" data-zip="22301" style="color: #000;"><strong>Del Ray Baptist Church - Alexandria, VA - Active</strong></option>
								<option value="2321" data-churchname="<strong>Delphi Wesleyan Church - Delphi, IN - Active</strong>" data-street="508 N Union St" data-city="Delphi" data-state="IN" data-zip="46923" style="color: #000;"><strong>Delphi Wesleyan Church - Delphi, IN - Active</strong></option>
								<option value="1778" data-churchname="Designer\'s Church  - Henderson, NV" data-street="1305 W Horizon Ridge Pkwy" data-city="Henderson" data-state="NV" data-zip="89012" style="color: #aaa;">Designer's Church - Henderson, NV</option>
								<option value="1532" data-churchname="Destiny - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Destiny - NV</option>
								<option value="2685" data-churchname="<strong>Destiny Christian Center - Oklahoma City, OK - Active</strong>" data-street="3801 Southeast 29th Street" data-city="Oklahoma City" data-state="OK" data-zip="73115" style="color: #000;"><strong>Destiny Christian Center - Oklahoma City, OK - Active</strong></option>
								<option value="2044" data-churchname="Destiny Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Destiny Church</option>
								<option value="2675" data-churchname="Destiny Church - Dayton - Dayton, OH" data-street="4691 Bufort Boulevard" data-city="Dayton" data-state="OH" data-zip="45424" style="color: #aaa;">Destiny Church - Dayton - Dayton, OH</option>
								<option value="2710" data-churchname="Discover Church - Indianapolis, IN" data-street="11605 Pendleton Pike" data-city="Indianapolis" data-state="IN" data-zip="46236" style="color: #aaa;">Discover Church - Indianapolis, IN</option>
								<option value="1592" data-churchname="<strong>Discovery Church - Orlando - Orlando, FL - Active</strong>" data-street=" 4400 S Orange Ave" data-city="Orlando" data-state="FL" data-zip="32806" style="color: #000;"><strong>Discovery Church - Orlando - Orlando, FL - Active</strong></option>
								<option value="1741" data-churchname="<strong>Discovery Church - Southwest - Winter Garden, FL - Active</strong>" data-street="4064 Winter Garden Vineland Rd." data-city="Winter Garden" data-state="FL" data-zip="34787" style="color: #000;"><strong>Discovery Church - Southwest - Winter Garden, FL - Active</strong></option>
								<option value="2003" data-churchname="<strong>Discovery Church - East - Orlando, FL - Active</strong>" data-street="2504 Alafaya Trail" data-city="Orlando" data-state="FL" data-zip="32828" style="color: #000;"><strong>Discovery Church - East - Orlando, FL - Active</strong></option>
								<option value="2250" data-churchname="Diverse" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Diverse</option>
								<option value="1337" data-churchname="Dogwood Church - Tyrone, GA" data-street="975 Georgia 74" data-city="Tyrone" data-state="GA" data-zip="30290" style="color: #aaa;">Dogwood Church - Tyrone, GA</option>
								<option value="1533" data-churchname="Dominion of Fire - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Dominion of Fire - NV</option>
								<option value="2684" data-churchname="<strong>Doxa Church - Bellevue, WA - Active</strong>" data-street="620 106th Avenue Northeast" data-city="Bellevue" data-state="WA" data-zip="98004" style="color: #000;"><strong>Doxa Church - Bellevue, WA - Active</strong></option>
								<option value="2030" data-churchname="<strong>Dry Valley Baptist - Summerville, GA - Active</strong>" data-street="451 Dry Valley Church Road" data-city="Summerville" data-state="GA" data-zip="30747" style="color: #000;"><strong>Dry Valley Baptist - Summerville, GA - Active</strong></option>
								<option value="1534" data-churchname="Dunamis - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Dunamis - NV</option>
								<option value="1233" data-churchname="<strong>Dunwoody Baptist Church - Dunwoody, GA - Active</strong>" data-street="1445 Mount Vernon Road" data-city="Dunwoody" data-state="GA" data-zip="30338" style="color: #000;"><strong>Dunwoody Baptist Church - Dunwoody, GA - Active</strong></option>
								<option value="1833" data-churchname="Dwelling Place - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Dwelling Place - OH</option>
								<option value="1622" data-churchname="<strong>E 58 - Glendale, CA - Active</strong>" data-street="225 South Chevy Chase Drive" data-city="Glendale" data-state="CA" data-zip="91205" style="color: #000;"><strong>E 58 - Glendale, CA - Active</strong></option>
								<option value="2124" data-churchname="EV Free Fullerton" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">EV Free Fullerton</option>
								<option value="1860" data-churchname="Eagles Nest Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Eagles Nest Church</option>
								<option value="2712" data-churchname="East 91st Street Christian Church - Indianapolis, IN" data-street="6049 East 91st Street" data-city="Indianapolis" data-state="IN" data-zip="46250" style="color: #aaa;">East 91st Street Christian Church - Indianapolis, IN</option>
								<option value="1931" data-churchname="<strong>East Athens Baptist Church - Athens, GA - Active</strong>" data-street="4325 Lexington Rd" data-city="Athens" data-state="GA" data-zip="30605" style="color: #000;"><strong>East Athens Baptist Church - Athens, GA - Active</strong></option>
								<option value="1703" data-churchname="<strong>East Valley Christian Fellowship  - El Cajon , CA - Active</strong>" data-street="14069 Ridge Hill Rd " data-city="El Cajon " data-state="CA" data-zip="92021" style="color: #000;"><strong>East Valley Christian Fellowship - El Cajon , CA - Active</strong></option>
								<option value="2540" data-churchname="EastLake Church - Imperial Beach - Imperial Beach, CA" data-street="" data-city="Imperial Beach" data-state="CA" data-zip="0" style="color: #aaa;">EastLake Church - Imperial Beach - Imperial Beach, CA</option>
								<option value="1739" data-churchname="<strong>Eastern Hills Baptist Church - Montgomery, AL - Active</strong>" data-street="3604 Pleasant Ridge Road" data-city="Montgomery" data-state="AL" data-zip="36109" style="color: #000;"><strong>Eastern Hills Baptist Church - Montgomery, AL - Active</strong></option>
								<option value="2711" data-churchname="Eastern Star Church - Indianapolis, IN" data-street="5750 East 30th Street" data-city="Indianapolis" data-state="IN" data-zip="46218" style="color: #aaa;">Eastern Star Church - Indianapolis, IN</option>
								<option value="2223" data-churchname="Eastlake Church - Chula Vista, CA" data-street="990 Lane Ave." data-city="Chula Vista" data-state="CA" data-zip="91914" style="color: #aaa;">Eastlake Church - Chula Vista, CA</option>
								<option value="2549" data-churchname="Eastside Christian Church - Tulsa, OK" data-street="9102 South Mingo Road" data-city="Tulsa" data-state="OK" data-zip="74133" style="color: #aaa;">Eastside Christian Church - Tulsa, OK</option>
								<option value="1399" data-churchname="Eastwood Church of God - Swainsboro, GA" data-street="512 Thigpen Dr" data-city="Swainsboro" data-state="GA" data-zip="30401" style="color: #aaa;">Eastwood Church of God - Swainsboro, GA</option>
								<option value="1339" data-churchname="Ebenezer Baptist - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Ebenezer Baptist - GA</option>
								<option value="2515" data-churchname="Eden Church - Columbus, GA" data-street="3021-2 Sandy Parkway" data-city="Columbus" data-state="GA" data-zip="31909" style="color: #aaa;">Eden Church - Columbus, GA</option>
								<option value="2532" data-churchname="Edgewood Baptist Church - Columbus, GA" data-street="" data-city="Columbus" data-state="GA" data-zip="31907" style="color: #aaa;">Edgewood Baptist Church - Columbus, GA</option>
								<option value="2396" data-churchname="Egypt" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Egypt</option>
								<option value="2053" data-churchname="Ekko Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Ekko Church - CA</option>
								<option value="1418" data-churchname="Elam Baptist Church - Millen, GA" data-street="5199 Elam Road" data-city="Millen" data-state="GA" data-zip="30442" style="color: #aaa;">Elam Baptist Church - Millen, GA</option>
								<option value="1774" data-churchname="Elevation" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Elevation</option>
								<option value="1858" data-churchname="<strong>Elevation Riverwalk - Rock Hill - Rock Hill, SC - Active</strong>" data-street="604 Celriver Road" data-city="Rock Hill" data-state="SC" data-zip="29730" style="color: #000;"><strong>Elevation Riverwalk - Rock Hill - Rock Hill, SC - Active</strong></option>
								<option value="2385" data-churchname="Elkdale Baptist Church - AL" data-street="" data-city="" data-state="AL" data-zip="0" style="color: #aaa;">Elkdale Baptist Church - AL</option>
								<option value="1950" data-churchname="<strong>Ella Grove Baptist Church - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Ella Grove Baptist Church - GA - Active</strong></option>
								<option value="2604" data-churchname="<strong>Ellis Baptist Church - Ellis, KS - Active</strong>" data-street="107 West 9th Street" data-city="Ellis" data-state="KS" data-zip="67637" style="color: #000;"><strong>Ellis Baptist Church - Ellis, KS - Active</strong></option>
								<option value="2011" data-churchname="Embry Hills UMC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Embry Hills UMC</option>
								<option value="1852" data-churchname="<strong>Emmanuel Church - Greenwood - Greenwood, IN - Active</strong>" data-street="1640 West Stones Crossing Road" data-city="Greenwood" data-state="IN" data-zip="46143" style="color: #000;"><strong>Emmanuel Church - Greenwood - Greenwood, IN - Active</strong></option>
								<option value="2496" data-churchname="<strong>Emmanuel Church - Garfield Park - Indianapolis, IN - Active</strong>" data-street="743 East Pleasant Run Parkway South Drive" data-city="Indianapolis" data-state="IN" data-zip="46203" style="color: #000;"><strong>Emmanuel Church - Garfield Park - Indianapolis, IN - Active</strong></option>
								<option value="1914" data-churchname="<strong>Emmanuel Church - Banta - Indianapolis, IN - Active</strong>" data-street="6602 South Harding Street" data-city="Indianapolis" data-state="IN" data-zip="46217" style="color: #000;"><strong>Emmanuel Church - Banta - Indianapolis, IN - Active</strong></option>
								<option value="1913" data-churchname="<strong>Emmanuel Church - Franklin - Franklin, IN - Active</strong>" data-street="550 Homestead Blvd" data-city="Franklin" data-state="IN" data-zip="46131" style="color: #000;"><strong>Emmanuel Church - Franklin - Franklin, IN - Active</strong></option>
								<option value="1346" data-churchname="<strong>Emmanuel Episcopal Church - Athens, GA - Active</strong>" data-street="498 Prince Avenue" data-city="Athens" data-state="GA" data-zip="30601" style="color: #000;"><strong>Emmanuel Episcopal Church - Athens, GA - Active</strong></option>
								<option value="2349" data-churchname="Emmanuel Faith - Escondido, CA" data-street="639 E. 17th Ave." data-city="Escondido" data-state="CA" data-zip="92025" style="color: #aaa;">Emmanuel Faith - Escondido, CA</option>
								<option value="2307" data-churchname="<strong>Emmanuel Presbyterian  - Arlington, VA - Active</strong>" data-street="" data-city="Arlington" data-state="VA" data-zip="0" style="color: #000;"><strong>Emmanuel Presbyterian - Arlington, VA - Active</strong></option>
								<option value="1678" data-churchname="<strong>Emmaus Church - Buford, GA - Active</strong>" data-street="75 Maddox Road" data-city="Buford" data-state="GA" data-zip="30518" style="color: #000;"><strong>Emmaus Church - Buford, GA - Active</strong></option>
								<option value="1616" data-churchname="Essential Rock - Fond du Lac, WI" data-street="40 E Division St" data-city="Fond du Lac" data-state="WI" data-zip="54935" style="color: #aaa;">Essential Rock - Fond du Lac, WI</option>
								<option value="1491" data-churchname="<strong>Eudora - KS - Active</strong>" data-street="" data-city="" data-state="KS" data-zip="0" style="color: #000;"><strong>Eudora - KS - Active</strong></option>
								<option value="1397" data-churchname="<strong>Evangel Temple - Columbus, GA - Active</strong>" data-street="5350 Veterans Pkwy" data-city="Columbus" data-state="GA" data-zip="31904" style="color: #000;"><strong>Evangel Temple - Columbus, GA - Active</strong></option>
								<option value="1772" data-churchname="Exodus-Belmont" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Exodus-Belmont</option>
								<option value="1622" data-churchname="<strong>Expression 58 - Glendale, CA - Active</strong>" data-street="225 South Chevy Chase Drive" data-city="Glendale" data-state="CA" data-zip="91205" style="color: #000;"><strong>Expression 58 - Glendale, CA - Active</strong></option>
								<option value="1622" data-churchname="<strong>Expressions 58 - Glendale, CA - Active</strong>" data-street="225 South Chevy Chase Drive" data-city="Glendale" data-state="CA" data-zip="91205" style="color: #000;"><strong>Expressions 58 - Glendale, CA - Active</strong></option>
								<option value="1474" data-churchname="<strong>FB Lutz - Lutz, FL - Active</strong>" data-street="18116 US-41" data-city="Lutz" data-state="FL" data-zip="33549" style="color: #000;"><strong>FB Lutz - Lutz, FL - Active</strong></option>
								<option value="1861" data-churchname="FBC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">FBC</option>
								<option value="1769" data-churchname="FBC Rock Hill" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">FBC Rock Hill</option>
								<option value="1626" data-churchname="<strong>FIrst Missionary Baptist Church - Benton, KY - Active</strong>" data-street="1280 Riley Rd" data-city="Benton" data-state="KY" data-zip="42025" style="color: #000;"><strong>FIrst Missionary Baptist Church - Benton, KY - Active</strong></option>
								<option value="1629" data-churchname="FMBC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">FMBC</option>
								<option value="2165" data-churchname="Fairfield Wesleyan Church - Fairfield, OH" data-street="4685 Anthony Wayne Ave." data-city="Fairfield" data-state="OH" data-zip="45014" style="color: #aaa;">Fairfield Wesleyan Church - Fairfield, OH</option>
								<option value="2402" data-churchname="Fairhaven Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Fairhaven Church</option>
								<option value="2403" data-churchname="Fairhaven Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Fairhaven Church - OH</option>
								<option value="2410" data-churchname="Fairhaven Church (OH)" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Fairhaven Church (OH)</option>
								<option value="2785" data-churchname="Fairview Presbyterian Church - North Augusta, SC" data-street="1101 Carolina Avenue" data-city="North Augusta" data-state="SC" data-zip="29841" style="color: #aaa;">Fairview Presbyterian Church - North Augusta, SC</option>
								<option value="1597" data-churchname="Faith Baptist Church - Orlando, FL" data-street="500 N Bumby Ave, Orlando" data-city="Orlando" data-state="FL" data-zip="32803" style="color: #aaa;">Faith Baptist Church - Orlando, FL</option>
								<option value="1978" data-churchname="Faith Center - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Faith Center - FL</option>
								<option value="1964" data-churchname="<strong>Faith Church - Peshtigo, WI - Active</strong>" data-street="" data-city="Peshtigo" data-state="WI" data-zip="0" style="color: #000;"><strong>Faith Church - Peshtigo, WI - Active</strong></option>
								<option value="1618" data-churchname="<strong>Faith Church - Peshtigo, WI - Active</strong>" data-street="350 N Stephenson Ave" data-city="Peshtigo" data-state="WI" data-zip="54157" style="color: #000;"><strong>Faith Church - Peshtigo, WI - Active</strong></option>
								<option value="2005" data-churchname="Faith Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Faith Church</option>
								<option value="2189" data-churchname="<strong>Faith Church Indy - Indianapolis, IN - Active</strong>" data-street="9125 North College Avenue" data-city="Indianapolis" data-state="IN" data-zip="46240" style="color: #000;"><strong>Faith Church Indy - Indianapolis, IN - Active</strong></option>
								<option value="1535" data-churchname="Faith Community Lutheran Church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Faith Community Lutheran Church - NV</option>
								<option value="1808" data-churchname="Faith Family Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Faith Family Church - OH</option>
								<option value="1504" data-churchname="<strong>Faith Fellowship - Marshfield, WI - Active</strong>" data-street="217 West McMillan Street" data-city="Marshfield" data-state="WI" data-zip="54449" style="color: #000;"><strong>Faith Fellowship - Marshfield, WI - Active</strong></option>
								<option value="1925" data-churchname="<strong>Faith Free Will Baptist Church - Goldsboro, NC - Active</strong>" data-street="1200 West Grantham Street" data-city="Goldsboro" data-state="NC" data-zip="27530" style="color: #000;"><strong>Faith Free Will Baptist Church - Goldsboro, NC - Active</strong></option>
								<option value="1293" data-churchname="<strong>Faith Presbyterian Church - Watkinsville, GA - Active</strong>" data-street="2191 Mars Hill Rd" data-city="Watkinsville" data-state="GA" data-zip="30677" style="color: #000;"><strong>Faith Presbyterian Church - Watkinsville, GA - Active</strong></option>
								<option value="2714" data-churchname="<strong>Fall Creek Church - Indianapolis, IN - Active</strong>" data-street="8901 Fall Creek Road" data-city="Indianapolis" data-state="IN" data-zip="46256" style="color: #000;"><strong>Fall Creek Church - Indianapolis, IN - Active</strong></option>
								<option value="2566" data-churchname="Family Of Love Outreach Center - MO" data-street="" data-city="" data-state="MO" data-zip="0" style="color: #aaa;">Family Of Love Outreach Center - MO</option>
								<option value="2130" data-churchname="Family Worship Center" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Family Worship Center</option>
								<option value="1837" data-churchname="Far Hills Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Far Hills Church - OH</option>
								<option value="1878" data-churchname="Fellowship" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Fellowship</option>
								<option value="2100" data-churchname="<strong>Fellowship - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>Fellowship - CA - Active</strong></option>
								<option value="2131" data-churchname="<strong>Fellowship - NC - Active</strong>" data-street="" data-city="" data-state="NC" data-zip="0" style="color: #000;"><strong>Fellowship - NC - Active</strong></option>
								<option value="2444" data-churchname="Fellowship Baptist Church - ROME, GA" data-street="" data-city="ROME" data-state="GA" data-zip="0" style="color: #aaa;">Fellowship Baptist Church - ROME, GA</option>
								<option value="1297" data-churchname="<strong>Fellowship Bible Church - Roswell, GA - Active</strong>" data-street="480 West Crossville Road" data-city="Roswell" data-state="GA" data-zip="30075" style="color: #000;"><strong>Fellowship Bible Church - Roswell, GA - Active</strong></option>
								<option value="1501" data-churchname="<strong>Fellowship Bible Church - Gardner, KS - Active</strong>" data-street="16900 S Waverly Rd" data-city="Gardner" data-state="KS" data-zip="66030" style="color: #000;"><strong>Fellowship Bible Church - Gardner, KS - Active</strong></option>
								<option value="2218" data-churchname="Fellowship Bible Church, Roswell" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Fellowship Bible Church, Roswell</option>
								<option value="1888" data-churchname="<strong>Fellowship Church - Monrovia, CA - Active</strong>" data-street="401 East Huntington Drive" data-city="Monrovia" data-state="CA" data-zip="91016" style="color: #000;"><strong>Fellowship Church - Monrovia, CA - Active</strong></option>
								<option value="1490" data-churchname="<strong>Fellowship West - Bonner Springs, KS - Active</strong>" data-street="307 Bluegrass Dr" data-city="Bonner Springs" data-state="KS" data-zip="66012" style="color: #000;"><strong>Fellowship West - Bonner Springs, KS - Active</strong></option>
								<option value="1797" data-churchname="Fellowship of Praise" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Fellowship of Praise</option>
								<option value="1304" data-churchname="Ferguson Avenue Baptist Church - Savannah, GA" data-street="10050 Ferguson Avenue" data-city="Savannah" data-state="GA" data-zip="31406" style="color: #aaa;">Ferguson Avenue Baptist Church - Savannah, GA</option>
								<option value="2664" data-churchname="First Associated Reformed Presbyterian Church - Rock Hill, SC" data-street="201 East White Street" data-city="Rock Hill" data-state="SC" data-zip="29730" style="color: #aaa;">First Associated Reformed Presbyterian Church - Rock Hill, SC</option>
								<option value="2580" data-churchname="First Baptist Church - Columbus - Columbus, GA" data-street="212 12th street" data-city="Columbus" data-state="GA" data-zip="31901" style="color: #aaa;">First Baptist Church - Columbus - Columbus, GA</option>
								<option value="2386" data-churchname="First Baptist Church - Selma, AL" data-street="325 Lauderdale Street" data-city="Selma" data-state="AL" data-zip="36701" style="color: #aaa;">First Baptist Church - Selma, AL</option>
								<option value="1725" data-churchname="First Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">First Baptist Church</option>
								<option value="2148" data-churchname="First Baptist Church Bowdon - Bowdon, GA" data-street="" data-city="Bowdon" data-state="GA" data-zip="0" style="color: #aaa;">First Baptist Church Bowdon - Bowdon, GA</option>
								<option value="1235" data-churchname="First Baptist Church Carrollton - Carrollton, GA" data-street="102 Dixie Street" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #aaa;">First Baptist Church Carrollton - Carrollton, GA</option>
								<option value="1249" data-churchname="<strong>First Baptist Church Dublin - Dublin, GA - Active</strong>" data-street="405 Bellevue Ave" data-city="Dublin" data-state="GA" data-zip="31021" style="color: #000;"><strong>First Baptist Church Dublin - Dublin, GA - Active</strong></option>
								<option value="1384" data-churchname="First Baptist Church Gainesville - Gainesville, GA" data-street="751 Green Street NW" data-city="Gainesville" data-state="GA" data-zip="30501" style="color: #aaa;">First Baptist Church Gainesville - Gainesville, GA</option>
								<option value="1954" data-churchname="<strong>First Baptist Church Glennville - Glennville, GA - Active</strong>" data-street="" data-city="Glennville" data-state="GA" data-zip="0" style="color: #000;"><strong>First Baptist Church Glennville - Glennville, GA - Active</strong></option>
								<option value="1310" data-churchname="<strong>First Baptist Church LaGrange - Lagrange, GA - Active</strong>" data-street="207 W. Harrison St." data-city="Lagrange" data-state="GA" data-zip="30241" style="color: #000;"><strong>First Baptist Church LaGrange - Lagrange, GA - Active</strong></option>
								<option value="1279" data-churchname="<strong>First Baptist Church Lawrenceville - Lawrenceville, GA - Active</strong>" data-street="165 South Clayton Street" data-city="Lawrenceville" data-state="GA" data-zip="30046" style="color: #000;"><strong>First Baptist Church Lawrenceville - Lawrenceville, GA - Active</strong></option>
								<option value="1280" data-churchname="First Baptist Church Loganville - Loganville, GA" data-street="680 Tom Brewer Rd" data-city="Loganville" data-state="GA" data-zip="30052" style="color: #aaa;">First Baptist Church Loganville - Loganville, GA</option>
								<option value="1263" data-churchname="<strong>First Baptist Church Lyons - Lyons, GA - Active</strong>" data-street="144 S Washington St." data-city="Lyons" data-state="GA" data-zip="30436" style="color: #000;"><strong>First Baptist Church Lyons - Lyons, GA - Active</strong></option>
								<option value="2436" data-churchname="First Baptist Church Meredith - Meredith, NH" data-street="89 Main St & High Street" data-city="Meredith" data-state="NH" data-zip="3253" style="color: #aaa;">First Baptist Church Meredith - Meredith, NH</option>
								<option value="1234" data-churchname="<strong>First Baptist Church Moultrie - Moultrie, GA - Active</strong>" data-street="400 S Main St" data-city="Moultrie" data-state="GA" data-zip="31768" style="color: #000;"><strong>First Baptist Church Moultrie - Moultrie, GA - Active</strong></option>
								<option value="1321" data-churchname="First Baptist Church Rincon - Rincon, GA" data-street="201 E. 6th St." data-city="Rincon" data-state="GA" data-zip="31326" style="color: #aaa;">First Baptist Church Rincon - Rincon, GA</option>
								<option value="1383" data-churchname="<strong>First Baptist Church Rome - Rome, GA - Active</strong>" data-street="100 4th Ave" data-city="Rome" data-state="GA" data-zip="30161" style="color: #000;"><strong>First Baptist Church Rome - Rome, GA - Active</strong></option>
								<option value="1389" data-churchname="First Baptist Church Statesboro - Statesboro, GA" data-street="108 North Main Street" data-city="Statesboro" data-state="GA" data-zip="30458" style="color: #aaa;">First Baptist Church Statesboro - Statesboro, GA</option>
								<option value="1834" data-churchname="First Baptist Church Vandalia - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">First Baptist Church Vandalia - OH</option>
								<option value="1388" data-churchname="<strong>First Baptist Church Vidalia - Vidalia, GA - Active</strong>" data-street="107 E 2nd St" data-city="Vidalia" data-state="GA" data-zip="30474" style="color: #000;"><strong>First Baptist Church Vidalia - Vidalia, GA - Active</strong></option>
								<option value="1474" data-churchname="<strong>First Baptist Church of Lutz - Lutz, FL - Active</strong>" data-street="18116 US-41" data-city="Lutz" data-state="FL" data-zip="33549" style="color: #000;"><strong>First Baptist Church of Lutz - Lutz, FL - Active</strong></option>
								<option value="2547" data-churchname="First Baptist Church of Orlando - Orlando, FL" data-street="3000 South John Young Parkway" data-city="Orlando" data-state="FL" data-zip="32805" style="color: #aaa;">First Baptist Church of Orlando - Orlando, FL</option>
								<option value="2435" data-churchname="First Baptist Church of Palatka - Palatka, FL" data-street="501 Oak St" data-city="Palatka" data-state="FL" data-zip="32177" style="color: #aaa;">First Baptist Church of Palatka - Palatka, FL</option>
								<option value="2688" data-churchname="First Baptist Church of San Antonio - San Antonio, TX" data-street="515 McCullough Avenue" data-city="San Antonio" data-state="TX" data-zip="78215" style="color: #aaa;">First Baptist Church of San Antonio - San Antonio, TX</option>
								<option value="1956" data-churchname="<strong>First Baptist Columbia - Columbia, SC - Active</strong>" data-street="1306 Hampton Street" data-city="Columbia" data-state="SC" data-zip="29201" style="color: #000;"><strong>First Baptist Columbia - Columbia, SC - Active</strong></option>
								<option value="1578" data-churchname="<strong>First Baptist Fort Lauderdale - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>First Baptist Fort Lauderdale - FL - Active</strong></option>
								<option value="1643" data-churchname="First Baptist Monroe - Monroe, GA" data-street="PO Box 352" data-city="Monroe" data-state="GA" data-zip="30655" style="color: #aaa;">First Baptist Monroe - Monroe, GA</option>
								<option value="2594" data-churchname="<strong>First Baptist North - Terre Haute, IN - Active</strong>" data-street="2944 East Hall Avenue" data-city="Terre Haute" data-state="IN" data-zip="47805" style="color: #000;"><strong>First Baptist North - Terre Haute, IN - Active</strong></option>
								<option value="2132" data-churchname="First Baptist church Springfield " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">First Baptist church Springfield </option>
								<option value="1439" data-churchname="First Christian Church Ministries" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">First Christian Church Ministries</option>
								<option value="2418" data-churchname="First Church Williamsport" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">First Church Williamsport</option>
								<option value="2424" data-churchname="<strong>First Church Williamsport - Williamsport, PA - Active</strong>" data-street="601 Market Street" data-city="Williamsport" data-state="PA" data-zip="17701" style="color: #000;"><strong>First Church Williamsport - Williamsport, PA - Active</strong></option>
								<option value="2715" data-churchname="<strong>First Church of Christ - Bluffton, IN - Active</strong>" data-street="909 West Spring Street" data-city="Bluffton" data-state="IN" data-zip="46714" style="color: #000;"><strong>First Church of Christ - Bluffton, IN - Active</strong></option>
								<option value="1961" data-churchname="First Presbyterian Church - Orlando, FL" data-street="106 East Church Street" data-city="Orlando" data-state="FL" data-zip="32801" style="color: #aaa;">First Presbyterian Church - Orlando, FL</option>
								<option value="1240" data-churchname="<strong>First Presbyterian Church Athens - Athens, GA - Active</strong>" data-street="185 E Hancock Ave" data-city="Athens" data-state="GA" data-zip="30601" style="color: #000;"><strong>First Presbyterian Church Athens - Athens, GA - Active</strong></option>
								<option value="1401" data-churchname="<strong>First Presbyterian Church Moultrie - Moultrie, GA - Active</strong>" data-street="501 1st St SE, Moultrie" data-city="Moultrie" data-state="GA" data-zip="31768" style="color: #000;"><strong>First Presbyterian Church Moultrie - Moultrie, GA - Active</strong></option>
								<option value="1307" data-churchname="First Presbyterian Church Rome - Rome, GA" data-street="101 E. Third Ave." data-city="Rome" data-state="GA" data-zip="30161" style="color: #aaa;">First Presbyterian Church Rome - Rome, GA</option>
								<option value="1959" data-churchname="First Presbyterian Rock Hill - Rock Hill, SC" data-street=" 234 E Main St" data-city="Rock Hill" data-state="SC" data-zip="29730" style="color: #aaa;">First Presbyterian Rock Hill - Rock Hill, SC</option>
								<option value="1328" data-churchname="<strong>First Redeemer Church - Cumming, GA - Active</strong>" data-street="2100 Peachtree Parkway" data-city="Cumming" data-state="GA" data-zip="30041" style="color: #000;"><strong>First Redeemer Church - Cumming, GA - Active</strong></option>
								<option value="1915" data-churchname="First Reformed Church Waupun" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">First Reformed Church Waupun</option>
								<option value="2656" data-churchname="<strong>First Southern Baptist Church - Williamsport, PA - Active</strong>" data-street="89 Kimble Hill Road" data-city="Williamsport" data-state="PA" data-zip="17701" style="color: #000;"><strong>First Southern Baptist Church - Williamsport, PA - Active</strong></option>
								<option value="2179" data-churchname="First United Methodist Church - Boca Raton" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">First United Methodist Church - Boca Raton</option>
								<option value="1750" data-churchname="First United Methodist Church - Calhoun - Calhoun, GA" data-street="205 E Line Street" data-city="Calhoun" data-state="GA" data-zip="30701" style="color: #aaa;">First United Methodist Church - Calhoun - Calhoun, GA</option>
								<option value="1424" data-churchname="<strong>First United Methodist Church Albany - Albany, GA - Active</strong>" data-street="307 Flint Ave" data-city="Albany" data-state="GA" data-zip="31701" style="color: #000;"><strong>First United Methodist Church Albany - Albany, GA - Active</strong></option>
								<option value="1236" data-churchname="<strong>First United Methodist Church Dublin - Dublin, GA - Active</strong>" data-street="305 W Gaines St" data-city="Dublin" data-state="GA" data-zip="31021" style="color: #000;"><strong>First United Methodist Church Dublin - Dublin, GA - Active</strong></option>
								<option value="1386" data-churchname="<strong>First United Methodist Church Gainesville - Gainesville, GA - Active</strong>" data-street="2780 Thompson Bridge Road" data-city="Gainesville" data-state="GA" data-zip="30506" style="color: #000;"><strong>First United Methodist Church Gainesville - Gainesville, GA - Active</strong></option>
								<option value="1394" data-churchname="<strong>First United Methodist Church Moultrie - moultrie, GA - Active</strong>" data-street="409 First Street SE" data-city="moultrie" data-state="GA" data-zip="31768" style="color: #000;"><strong>First United Methodist Church Moultrie - moultrie, GA - Active</strong></option>
								<option value="1306" data-churchname="<strong>First United Methodist Church Rome - Rome, GA - Active</strong>" data-street="202 E 3rd Ave." data-city="Rome" data-state="GA" data-zip="30161" style="color: #000;"><strong>First United Methodist Church Rome - Rome, GA - Active</strong></option>
								<option value="2408" data-churchname="First United Methodist Church, Troy, Ohio - Troy, OH" data-street="110 W Franklin Street" data-city="Troy" data-state="OH" data-zip="45373" style="color: #aaa;">First United Methodist Church, Troy, Ohio - Troy, OH</option>
								<option value="2794" data-churchname="<strong>First Baptist Church of Bellefonte - Bellefonte, PA - Active</strong>" data-street="539 Jacksonville Road" data-city="Bellefonte" data-state="PA" data-zip="16823" style="color: #000;"><strong>First Baptist Church of Bellefonte - Bellefonte, PA - Active</strong></option>
								<option value="1600" data-churchname="<strong>Flat Rock Community Church - Stonecrest, GA - Active</strong>" data-street="4542 Evans Mill Road" data-city="Stonecrest" data-state="GA" data-zip="30038" style="color: #000;"><strong>Flat Rock Community Church - Stonecrest, GA - Active</strong></option>
								<option value="1422" data-churchname="Fletcher Memorial Baptist Church - Statesboro, GA" data-street="720 North Main Street" data-city="Statesboro" data-state="GA" data-zip="30458" style="color: #aaa;">Fletcher Memorial Baptist Church - Statesboro, GA</option>
								<option value="1508" data-churchname="Florida Hospital Church - FL" data-street="2800 N Orange Ave" data-city="" data-state="FL" data-zip="32804" style="color: #aaa;">Florida Hospital Church - FL</option>
								<option value="2573" data-churchname="Floris United Methodist Church - Herndon, VA" data-street="" data-city="Herndon" data-state="VA" data-zip="0" style="color: #aaa;">Floris United Methodist Church - Herndon, VA</option>
								<option value="1749" data-churchname="Floyd Springs Baptist Church - Armuchee, GA" data-street="1869 Floyd Springs Road NE" data-city="Armuchee" data-state="GA" data-zip="30105" style="color: #aaa;">Floyd Springs Baptist Church - Armuchee, GA</option>
								<option value="1536" data-churchname="Flynn Family Fellowship - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Flynn Family Fellowship - NV</option>
								<option value="1998" data-churchname="Focus on Youth - West Chester, OH" data-street="8904 Brookside Court" data-city="West Chester" data-state="OH" data-zip="45069" style="color: #aaa;">Focus on Youth - West Chester, OH</option>
								<option value="1656" data-churchname="Followers of the way church - FL" data-street="125 N Interlachen Ave" data-city="" data-state="FL" data-zip="32789" style="color: #aaa;">Followers of the way church - FL</option>
								<option value="1707" data-churchname="<strong>Foothills Christian Church - El Cajon , CA - Active</strong>" data-street="365 W Bradley Ave " data-city="El Cajon " data-state="CA" data-zip="92020" style="color: #000;"><strong>Foothills Christian Church - El Cajon , CA - Active</strong></option>
								<option value="1958" data-churchname="Forest Hill Fort Mill - Fort mill - Fort Mill, SC" data-street="2099 Carolina Pl Dr " data-city="Fort Mill" data-state="SC" data-zip="29708" style="color: #aaa;">Forest Hill Fort Mill - Fort mill - Fort Mill, SC</option>
								<option value="1625" data-churchname="<strong>Forest Hills United Methodist Church - Macon, GA - Active</strong>" data-street="1217 Forest Hill Rd" data-city="Macon" data-state="GA" data-zip="31210" style="color: #000;"><strong>Forest Hills United Methodist Church - Macon, GA - Active</strong></option>
								<option value="1425" data-churchname="<strong>Foster Hope - Brunswick, GA - Active</strong>" data-street="c/o Meghan Davis131 Brighton Drive" data-city="Brunswick" data-state="GA" data-zip="31525" style="color: #000;"><strong>Foster Hope - Brunswick, GA - Active</strong></option>
								<option value="2237" data-churchname="<strong>Fostering Together - Alpharetta, GA - Active</strong>" data-street="4400 North Point Parkway, Suite 100" data-city="Alpharetta" data-state="GA" data-zip="30022" style="color: #000;"><strong>Fostering Together - Alpharetta, GA - Active</strong></option>
								<option value="1522" data-churchname="<strong>Founded In Truth - Fort Mill, SC - Active</strong>" data-street="130 Tom Hall St" data-city="Fort Mill" data-state="SC" data-zip="29715" style="color: #000;"><strong>Founded In Truth - Fort Mill, SC - Active</strong></option>
								<option value="1894" data-churchname="Fountain of Life Covenant " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Fountain of Life Covenant </option>
								<option value="2272" data-churchname="Frazer - AL" data-street="" data-city="" data-state="AL" data-zip="0" style="color: #aaa;">Frazer - AL</option>
								<option value="2270" data-churchname="<strong>Frazer United Methodist Church - Montgomery, AL - Active</strong>" data-street="6000 Atlanta Highway " data-city="Montgomery" data-state="AL" data-zip="36117" style="color: #000;"><strong>Frazer United Methodist Church - Montgomery, AL - Active</strong></option>
								<option value="1513" data-churchname="Free Chapel" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Free Chapel</option>
								<option value="2716" data-churchname="Freedom Church - Noblesville, IN" data-street="1361 Christian Avenue" data-city="Noblesville" data-state="IN" data-zip="46060" style="color: #aaa;">Freedom Church - Noblesville, IN</option>
								<option value="2111" data-churchname="Freedom Fellowship Church - Kaukauna, WI" data-street="112 Main Ave" data-city="Kaukauna" data-state="WI" data-zip="54130" style="color: #aaa;">Freedom Fellowship Church - Kaukauna, WI</option>
								<option value="1727" data-churchname="Fresh Anointing" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Fresh Anointing</option>
								<option value="2054" data-churchname="Friends Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Friends Church - CA</option>
								<option value="1274" data-churchname="<strong>Friendship Baptist Church - Duluth, GA - Active</strong>" data-street="3375 Church Street" data-city="Duluth" data-state="GA" data-zip="30096" style="color: #000;"><strong>Friendship Baptist Church - Duluth, GA - Active</strong></option>
								<option value="1870" data-churchname="Frontier Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Frontier Church</option>
								<option value="1676" data-churchname="Gainesville First United Methodist" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Gainesville First United Methodist</option>
								<option value="1635" data-churchname="<strong>Gateway Church - Pooler - Bloomingdale, GA - Active</strong>" data-street="1702 Pine Barren Road" data-city="Bloomingdale" data-state="GA" data-zip="31302" style="color: #000;"><strong>Gateway Church - Pooler - Bloomingdale, GA - Active</strong></option>
								<option value="2467" data-churchname="<strong>Gateway Fellowship of Poulsbo - Poulsbo, WA - Active</strong>" data-street="18901 8th Ave NE" data-city="Poulsbo" data-state="WA" data-zip="98370" style="color: #000;"><strong>Gateway Fellowship of Poulsbo - Poulsbo, WA - Active</strong></option>
								<option value="2126" data-churchname="Gateway baptist church " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Gateway baptist church </option>
								<option value="2563" data-churchname="<strong>Generations - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Generations - GA - Active</strong></option>
								<option value="2789" data-churchname="<strong>Generations Christian Church - Trinity, FL - Active</strong>" data-street="1540 Little Road" data-city="Trinity" data-state="FL" data-zip="34655" style="color: #000;"><strong>Generations Christian Church - Trinity, FL - Active</strong></option>
								<option value="2362" data-churchname="Generic Granite Ball" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Generic Granite Ball</option>
								<option value="2320" data-churchname="<strong>Genesis Church - Noblesville - Noblesville, IN - Active</strong>" data-street="1702 Pleasant Street" data-city="Noblesville" data-state="IN" data-zip="46060" style="color: #000;"><strong>Genesis Church - Noblesville - Noblesville, IN - Active</strong></option>
								<option value="2346" data-churchname="<strong>Genesis Church Orlando - Orlando, FL - Active</strong>" data-street="15060 Old Cheney Highway" data-city="Orlando" data-state="FL" data-zip="32828" style="color: #000;"><strong>Genesis Church Orlando - Orlando, FL - Active</strong></option>
								<option value="2536" data-churchname="Ginghamsburg UMC - Fort McKinley - Dayton, OH" data-street="" data-city="Dayton" data-state="OH" data-zip="45406" style="color: #aaa;">Ginghamsburg UMC - Fort McKinley - Dayton, OH</option>
								<option value="2531" data-churchname="Ginghamsburg UMC - Tipp City - Tipp City, OH" data-street="" data-city="Tipp City" data-state="OH" data-zip="0" style="color: #aaa;">Ginghamsburg UMC - Tipp City - Tipp City, OH</option>
								<option value="1821" data-churchname="Gladstone - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Gladstone - OH</option>
								<option value="1434" data-churchname="Golden Acres Baptist Church - Phenix City, AL" data-street="3405 S Railroad St" data-city="Phenix City" data-state="AL" data-zip="36867" style="color: #aaa;">Golden Acres Baptist Church - Phenix City, AL</option>
								<option value="1680" data-churchname="Good Hope Christian Church - Good Hope, GA" data-street="176 HWY 186" data-city="Good Hope" data-state="GA" data-zip="0" style="color: #aaa;">Good Hope Christian Church - Good Hope, GA</option>
								<option value="2421" data-churchname="Good News Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Good News Church</option>
								<option value="1392" data-churchname="Good News Church - Omaha, NE" data-street="7415 Hickory St" data-city="Omaha" data-state="NE" data-zip="68124" style="color: #aaa;">Good News Church - Omaha, NE</option>
								<option value="2667" data-churchname="Good Samaritan Church - Clover, SC" data-street="5220 Crowders Cove Road" data-city="Clover" data-state="SC" data-zip="29710" style="color: #aaa;">Good Samaritan Church - Clover, SC</option>
								<option value="1849" data-churchname="Good Shepherd Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Good Shepherd Church - OH</option>
								<option value="2609" data-churchname="Good Shepherd Church - SC" data-street="" data-city="" data-state="SC" data-zip="0" style="color: #aaa;">Good Shepherd Church - SC</option>
								<option value="1949" data-churchname="<strong>Good Shepherd Presbyterian - Lilburn, GA - Active</strong>" data-street="1400 Killian Hill Road Southwest" data-city="Lilburn" data-state="GA" data-zip="30047" style="color: #000;"><strong>Good Shepherd Presbyterian - Lilburn, GA - Active</strong></option>
								<option value="1343" data-churchname="Good Shepherd Presbyterian Church - Athens, GA" data-street="1200 Forest Heights Drive" data-city="Athens" data-state="GA" data-zip="30606" style="color: #aaa;">Good Shepherd Presbyterian Church - Athens, GA</option>
								<option value="2389" data-churchname="Gorgeous" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Gorgeous</option>
								<option value="1591" data-churchname="Gospel Centered Church - Apopka, FL" data-street="2400 Rock Springs Road" data-city="Apopka" data-state="FL" data-zip="32712" style="color: #aaa;">Gospel Centered Church - Apopka, FL</option>
								<option value="2652" data-churchname="Gospel Community Church - Troy, OH" data-street="1102 South Market Street" data-city="Troy" data-state="OH" data-zip="45373" style="color: #aaa;">Gospel Community Church - Troy, OH</option>
								<option value="2281" data-churchname="Gospel Fellowship - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Gospel Fellowship - FL</option>
								<option value="2717" data-churchname="<strong>Grabill Missionary Church - Grabill, IN - Active</strong>" data-street="13637 State Street" data-city="Grabill" data-state="IN" data-zip="46741" style="color: #000;"><strong>Grabill Missionary Church - Grabill, IN - Active</strong></option>
								<option value="1701" data-churchname="<strong>Grace - Winter Garden - Winter Garden, FL - Active</strong>" data-street="15300 Stoneybrook W Pkwy" data-city="Winter Garden" data-state="FL" data-zip="34787" style="color: #000;"><strong>Grace - Winter Garden - Winter Garden, FL - Active</strong></option>
								<option value="1590" data-churchname="<strong>Grace - Oviedo - Oviedo, FL - Active</strong>" data-street="415 Tuskawilla Road" data-city="Oviedo" data-state="FL" data-zip="32708" style="color: #000;"><strong>Grace - Oviedo - Oviedo, FL - Active</strong></option>
								<option value="2504" data-churchname="Grace" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace</option>
								<option value="1791" data-churchname="Grace" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace</option>
								<option value="1792" data-churchname="<strong>Grace  - KS - Active</strong>" data-street="" data-city="" data-state="KS" data-zip="0" style="color: #000;"><strong>Grace - KS - Active</strong></option>
								<option value="1506" data-churchname="<strong>Grace  - Orlando - Orlando, FL - Active</strong>" data-street="2300 Pembrook Dr" data-city="Orlando" data-state="FL" data-zip="32810" style="color: #000;"><strong>Grace - Orlando - Orlando, FL - Active</strong></option>
								<option value="1332" data-churchname="<strong>Grace Athens - Athens, GA - Active</strong>" data-street="215 Lumpkin St." data-city="Athens" data-state="GA" data-zip="30602" style="color: #000;"><strong>Grace Athens - Athens, GA - Active</strong></option>
								<option value="1883" data-churchname="<strong>Grace Baptist Church - Santa Clarita, CA - Active</strong>" data-street="22833 Copper Hill Dr" data-city="Santa Clarita" data-state="CA" data-zip="91350" style="color: #000;"><strong>Grace Baptist Church - Santa Clarita, CA - Active</strong></option>
								<option value="1461" data-churchname="<strong>Grace Bible Church - Mountain City, GA - Active</strong>" data-street="235 Dotson Street" data-city="Mountain City" data-state="GA" data-zip="30562" style="color: #000;"><strong>Grace Bible Church - Mountain City, GA - Active</strong></option>
								<option value="1984" data-churchname="Grace Christian Center" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace Christian Center</option>
								<option value="1923" data-churchname="<strong>Grace Church - Fishers - Fishers, IN - Active</strong>" data-street="12450 Olio Road" data-city="Fishers" data-state="IN" data-zip="46037" style="color: #000;"><strong>Grace Church - Fishers - Fishers, IN - Active</strong></option>
								<option value="1486" data-churchname="<strong>Grace Church - Overland Park, KS - Active</strong>" data-street="500 W. 159th St" data-city="Overland Park" data-state="KS" data-zip="66223" style="color: #000;"><strong>Grace Church - Overland Park, KS - Active</strong></option>
								<option value="2176" data-churchname="Grace Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace Church</option>
								<option value="1789" data-churchname="Grace Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace Church</option>
								<option value="1406" data-churchname="Grace Church - Bainbridge, GA" data-street="1300 Lake Douglas Rd" data-city="Bainbridge" data-state="GA" data-zip="39819" style="color: #aaa;">Grace Church - Bainbridge, GA</option>
								<option value="2589" data-churchname="<strong>Grace Church - North Indy - Indianapolis, IN - Active</strong>" data-street="8400 Westfield Boulevard" data-city="Indianapolis" data-state="IN" data-zip="46240" style="color: #000;"><strong>Grace Church - North Indy - Indianapolis, IN - Active</strong></option>
								<option value="2588" data-churchname="<strong>Grace Church - 146th Street - Noblesville, IN - Active</strong>" data-street="5504 East 146th Street" data-city="Noblesville" data-state="IN" data-zip="46062" style="color: #000;"><strong>Grace Church - 146th Street - Noblesville, IN - Active</strong></option>
								<option value="2174" data-churchname="Grace Church NOP" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace Church NOP</option>
								<option value="2135" data-churchname="Grace Church--Town Center - Kennesaw, GA" data-street="3005 Ring Road Northwest" data-city="Kennesaw" data-state="GA" data-zip="30144" style="color: #aaa;">Grace Church--Town Center - Kennesaw, GA</option>
								<option value="1537" data-churchname="Grace City - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Grace City - NV</option>
								<option value="1579" data-churchname="<strong>Grace Community - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Grace Community - FL - Active</strong></option>
								<option value="2718" data-churchname="<strong>Grace Community Church - Goshen, IN - Active</strong>" data-street="20076 County Road 36" data-city="Goshen" data-state="IN" data-zip="46526" style="color: #000;"><strong>Grace Community Church - Goshen, IN - Active</strong></option>
								<option value="2528" data-churchname="<strong>Grace Community Church - Arlington, VA - Active</strong>" data-street="" data-city="Arlington" data-state="VA" data-zip="0" style="color: #000;"><strong>Grace Community Church - Arlington, VA - Active</strong></option>
								<option value="1992" data-churchname="<strong>Grace Covenant Church - Cincinnati, OH - Active</strong>" data-street="6420 Bridgetown Rd." data-city="Cincinnati" data-state="OH" data-zip="45248" style="color: #000;"><strong>Grace Covenant Church - Cincinnati, OH - Active</strong></option>
								<option value="2075" data-churchname="Grace EVFree" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace EVFree</option>
								<option value="2284" data-churchname="<strong>Grace Family Church - Van Dyke - Lutz, FL - Active</strong>" data-street="5101 Van Dyke Rd" data-city="Lutz" data-state="FL" data-zip="33558" style="color: #000;"><strong>Grace Family Church - Van Dyke - Lutz, FL - Active</strong></option>
								<option value="2327" data-churchname="<strong>Grace Family Church - Ybor - Tampa, FL - Active</strong>" data-street="2806 North 15th Street" data-city="Tampa" data-state="FL" data-zip="33605" style="color: #000;"><strong>Grace Family Church - Ybor - Tampa, FL - Active</strong></option>
								<option value="2326" data-churchname="<strong>Grace Family Church - Land O Lakes - Land O Lakes, FL - Active</strong>" data-street="22920 SR 54" data-city="Land O Lakes" data-state="FL" data-zip="33549" style="color: #000;"><strong>Grace Family Church - Land O Lakes - Land O Lakes, FL - Active</strong></option>
								<option value="2328" data-churchname="<strong>Grace Family Church - South Tampa - Tampa, FL - Active</strong>" data-street="4479 W. Gandy Blvd." data-city="Tampa" data-state="FL" data-zip="33611" style="color: #000;"><strong>Grace Family Church - South Tampa - Tampa, FL - Active</strong></option>
								<option value="1919" data-churchname="<strong>Grace Family Church - Temple Terrace - Temple Terrace, FL - Active</strong>" data-street="8610 Temple Terrace Hwy." data-city="Temple Terrace" data-state="FL" data-zip="33637" style="color: #000;"><strong>Grace Family Church - Temple Terrace - Temple Terrace, FL - Active</strong></option>
								<option value="2329" data-churchname="<strong>Grace Family Church - Waters - Tampa, FL - Active</strong>" data-street="5100 W. Waters Avenue" data-city="Tampa" data-state="FL" data-zip="33634" style="color: #000;"><strong>Grace Family Church - Waters - Tampa, FL - Active</strong></option>
								<option value="1811" data-churchname="Grace Fellowship - KY" data-street="" data-city="" data-state="KY" data-zip="0" style="color: #aaa;">Grace Fellowship - KY</option>
								<option value="1444" data-churchname="<strong>Grace Fellowship Toccoa - Toccoa, GA - Active</strong>" data-street="201 Alewine Drive" data-city="Toccoa" data-state="GA" data-zip="30577" style="color: #000;"><strong>Grace Fellowship Toccoa - Toccoa, GA - Active</strong></option>
								<option value="1737" data-churchname="<strong>Grace Hills Church - Bentonville, AR - Active</strong>" data-street="805 SE 22nd Street" data-city="Bentonville" data-state="AR" data-zip="72712" style="color: #000;"><strong>Grace Hills Church - Bentonville, AR - Active</strong></option>
								<option value="1359" data-churchname="<strong>Grace Marietta - Marietta, GA - Active</strong>" data-street="675 Holt Road Northeast" data-city="Marietta" data-state="GA" data-zip="30062" style="color: #000;"><strong>Grace Marietta - Marietta, GA - Active</strong></option>
								<option value="1360" data-churchname="<strong>Grace Midtown - Atlanta, GA - Active</strong>" data-street="642 Northside Drive Northwest" data-city="Atlanta" data-state="GA" data-zip="30318" style="color: #000;"><strong>Grace Midtown - Atlanta, GA - Active</strong></option>
								<option value="1642" data-churchname="<strong>Grace Monroe - Monroe, GA - Active</strong>" data-street="" data-city="Monroe" data-state="GA" data-zip="0" style="color: #000;"><strong>Grace Monroe - Monroe, GA - Active</strong></option>
								<option value="1296" data-churchname="<strong>Grace New Hope - New Hope - Lawrenceville, GA - Active</strong>" data-street="1766 New Hope Road" data-city="Lawrenceville" data-state="GA" data-zip="30045" style="color: #000;"><strong>Grace New Hope - New Hope - Lawrenceville, GA - Active</strong></option>
								<option value="1538" data-churchname="Grace Point - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Grace Point - NV</option>
								<option value="2601" data-churchname="<strong>Grace Point Church - Medical Center - San Antonio, TX - Active</strong>" data-street="9650 Huebner Road" data-city="San Antonio" data-state="TX" data-zip="78240" style="color: #000;"><strong>Grace Point Church - Medical Center - San Antonio, TX - Active</strong></option>
								<option value="2600" data-churchname="<strong>Grace Point Church - West - San Antonio, TX - Active</strong>" data-street="8531 West Loop 1604 North" data-city="San Antonio" data-state="TX" data-zip="78254" style="color: #000;"><strong>Grace Point Church - West - San Antonio, TX - Active</strong></option>
								<option value="1277" data-churchname="<strong>Grace Point Community Church - Suwanee, GA - Active</strong>" data-street="1401 Old Peachtree Road Northwest" data-city="Suwanee" data-state="GA" data-zip="30024" style="color: #000;"><strong>Grace Point Community Church - Suwanee, GA - Active</strong></option>
								<option value="2719" data-churchname="Grace Pointe Church of the Nazarene - Indianapolis, IN" data-street="10951 East County Road 100 South" data-city="Indianapolis" data-state="IN" data-zip="46231" style="color: #aaa;">Grace Pointe Church of the Nazarene - Indianapolis, IN</option>
								<option value="1313" data-churchname="Grace Redeemer Church - Teaneck, NJ" data-street="Grace Redeemer Church
125 Galway Place" data-city="Teaneck" data-state="NJ" data-zip="7666" style="color: #aaa;">Grace Redeemer Church - Teaneck, NJ</option>
								<option value="1275" data-churchname="<strong>Grace Snellville - Snellville, GA - Active</strong>" data-street="1400 Dogwood Road Southwest" data-city="Snellville" data-state="GA" data-zip="30078" style="color: #000;"><strong>Grace Snellville - Snellville, GA - Active</strong></option>
								<option value="1862" data-churchname="Grace South OP" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace South OP</option>
								<option value="1619" data-churchname="<strong>Grace and Truth - Eldorado, WI - Active</strong>" data-street="W9557 Olden Road" data-city="Eldorado" data-state="WI" data-zip="54932" style="color: #000;"><strong>Grace and Truth - Eldorado, WI - Active</strong></option>
								<option value="1856" data-churchname="Grace church NOP " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace church NOP </option>
								<option value="1853" data-churchname="Grace south Overland Park " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Grace south Overland Park </option>
								<option value="2279" data-churchname="<strong>GraceLife Church - Columbia, SC - Active</strong>" data-street="501 Clemson Road" data-city="Columbia" data-state="SC" data-zip="29045" style="color: #000;"><strong>GraceLife Church - Columbia, SC - Active</strong></option>
								<option value="1271" data-churchname="<strong>Graystone Church - Loganville, GA - Active</strong>" data-street="1551 Ozora Road" data-city="Loganville" data-state="GA" data-zip="30052" style="color: #000;"><strong>Graystone Church - Loganville, GA - Active</strong></option>
								<option value="2024" data-churchname="<strong>Great Heights Foster Care - Atlanta, GA - Active</strong>" data-street="3340 Peachtree Rd" data-city="Atlanta" data-state="GA" data-zip="0" style="color: #000;"><strong>Great Heights Foster Care - Atlanta, GA - Active</strong></option>
								<option value="2582" data-churchname="Greater Bealwood - Columbus, GA" data-street="" data-city="Columbus" data-state="GA" data-zip="0" style="color: #aaa;">Greater Bealwood - Columbus, GA</option>
								<option value="1446" data-churchname="<strong>Greater Heights Baptist Church - Cumming, GA - Active</strong>" data-street="3790 Post Road" data-city="Cumming" data-state="GA" data-zip="30040" style="color: #000;"><strong>Greater Heights Baptist Church - Cumming, GA - Active</strong></option>
								<option value="1539" data-churchname="Greater Las Vegas Church of Christ - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Greater Las Vegas Church of Christ - NV</option>
								<option value="2516" data-churchname="Greater Peace - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Greater Peace - GA</option>
								<option value="1344" data-churchname="Green Acres - Athens, GA" data-street="2085 Barnett Shoals Rd" data-city="Athens" data-state="GA" data-zip="30605" style="color: #aaa;">Green Acres - Athens, GA</option>
								<option value="1344" data-churchname="Green Acres Baptist Church - Athens, GA" data-street="2085 Barnett Shoals Rd" data-city="Athens" data-state="GA" data-zip="30605" style="color: #aaa;">Green Acres Baptist Church - Athens, GA</option>
								<option value="1540" data-churchname="Green Valley Baptist - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Green Valley Baptist - NV</option>
								<option value="1541" data-churchname="Green Valley Christian - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Green Valley Christian - NV</option>
								<option value="1417" data-churchname="<strong>Greenbriar Church - Albany, GA - Active</strong>" data-street="3404 Gillionville Rd" data-city="Albany" data-state="GA" data-zip="31721" style="color: #000;"><strong>Greenbriar Church - Albany, GA - Active</strong></option>
								<option value="1580" data-churchname="<strong>Greenhouse - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Greenhouse - FL - Active</strong></option>
								<option value="1682" data-churchname="<strong>Grove Level Baptist Church - Maysville, GA - Active</strong>" data-street="1702 Grove Level Rd" data-city="Maysville" data-state="GA" data-zip="30558" style="color: #000;"><strong>Grove Level Baptist Church - Maysville, GA - Active</strong></option>
								<option value="2257" data-churchname="<strong>Gwinnett Church - Hamilton Mill - Buford, GA - Active</strong>" data-street="2000 Gravel Springs Rd " data-city="Buford" data-state="GA" data-zip="30519" style="color: #000;"><strong>Gwinnett Church - Hamilton Mill - Buford, GA - Active</strong></option>
								<option value="1387" data-churchname="<strong>Gwinnett Church - Sugar Hill - Sugar Hill, GA - Active</strong>" data-street="300 Peachtree Industrial Boulevard" data-city="Sugar Hill" data-state="GA" data-zip="30518" style="color: #000;"><strong>Gwinnett Church - Sugar Hill - Sugar Hill, GA - Active</strong></option>
								<option value="1832" data-churchname="H20 - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">H20 - OH</option>
								<option value="2163" data-churchname="Hamilton Christian Center - Hamilton, OH" data-street="1940 Millville Ave" data-city="Hamilton" data-state="OH" data-zip="45013" style="color: #aaa;">Hamilton Christian Center - Hamilton, OH</option>
								<option value="2720" data-churchname="<strong>Hamilton Hills - Fishers, IN - Active</strong>" data-street="10293 East 126th Street" data-city="Fishers" data-state="IN" data-zip="46038" style="color: #000;"><strong>Hamilton Hills - Fishers, IN - Active</strong></option>
								<option value="1317" data-churchname="Hamilton Mill Presbyterian Church - Hoschton, GA" data-street="5152 Braselton Highway" data-city="Hoschton" data-state="GA" data-zip="30548" style="color: #aaa;">Hamilton Mill Presbyterian Church - Hoschton, GA</option>
								<option value="1409" data-churchname="Happy Home Missionary Baptist Church - Savannah, GA" data-street="1015 E Gwinnett St" data-city="Savannah" data-state="GA" data-zip="31401" style="color: #aaa;">Happy Home Missionary Baptist Church - Savannah, GA</option>
								<option value="2353" data-churchname="Harbor Presbyterian - San Diego, CA" data-street="705 16th St." data-city="San Diego" data-state="CA" data-zip="92101" style="color: #aaa;">Harbor Presbyterian - San Diego, CA</option>
								<option value="2151" data-churchname="Harbour Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Harbour Church</option>
								<option value="2784" data-churchname="Harmony Baptist Church - Edgemoor, SC" data-street="5403 State Road 51" data-city="Edgemoor" data-state="SC" data-zip="29712" style="color: #aaa;">Harmony Baptist Church - Edgemoor, SC</option>
								<option value="1771" data-churchname="Harvest Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Harvest Baptist Church</option>
								<option value="2358" data-churchname="Harvest Church - Coconut Creek, FL" data-street="4801 Johnson Road" data-city="Coconut Creek" data-state="FL" data-zip="33073" style="color: #aaa;">Harvest Church - Coconut Creek, FL</option>
								<option value="2723" data-churchname="Harvest Church - Greenfield, IN" data-street="6107 West Airport Boulevard" data-city="Greenfield" data-state="IN" data-zip="46140" style="color: #aaa;">Harvest Church - Greenfield, IN</option>
								<option value="2147" data-churchname="Harvest Worship Center - Trion, GA" data-street="456 4th Street" data-city="Trion" data-state="GA" data-zip="30753" style="color: #aaa;">Harvest Worship Center - Trion, GA</option>
								<option value="2045" data-churchname="<strong>Haven Baptist Church - Kansas City, KS - Active</strong>" data-street="3430 Hutton Road" data-city="Kansas City" data-state="KS" data-zip="66109" style="color: #000;"><strong>Haven Baptist Church - Kansas City, KS - Active</strong></option>
								<option value="1938" data-churchname="Haven Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Haven Baptist Church</option>
								<option value="1437" data-churchname="<strong>Hawhammock Baptist Church - Swainsboro, GA - Active</strong>" data-street="27 Hawhammock Church Road" data-city="Swainsboro" data-state="GA" data-zip="30401" style="color: #000;"><strong>Hawhammock Baptist Church - Swainsboro, GA - Active</strong></option>
								<option value="1953" data-churchname="Hcc" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Hcc</option>
								<option value="1764" data-churchname="Head of Tennessee Baptist" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Head of Tennessee Baptist</option>
								<option value="1500" data-churchname="<strong>Heartland Community Church - Olathe, KS - Active</strong>" data-street="12175 S. Strang Line Road," data-city="Olathe" data-state="KS" data-zip="66062" style="color: #000;"><strong>Heartland Community Church - Olathe, KS - Active</strong></option>
								<option value="1278" data-churchname="<strong>Hebron Baptist Church - Dacula, GA - Active</strong>" data-street="202 Hebron Church Road" data-city="Dacula" data-state="GA" data-zip="30019" style="color: #000;"><strong>Hebron Baptist Church - Dacula, GA - Active</strong></option>
								<option value="2343" data-churchname="Henderson" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Henderson</option>
								<option value="2107" data-churchname="<strong>Hephatha Lutheran Church - Milwaukee, WI - Active</strong>" data-street="1720 W Locust St" data-city="Milwaukee" data-state="WI" data-zip="53206" style="color: #000;"><strong>Hephatha Lutheran Church - Milwaukee, WI - Active</strong></option>
								<option value="1410" data-churchname="<strong>Heritage Church - Moultrie, GA - Active</strong>" data-street="844 Georgia 33 S, Moultrie, GA 31768" data-city="Moultrie" data-state="GA" data-zip="31768" style="color: #000;"><strong>Heritage Church - Moultrie, GA - Active</strong></option>
								<option value="1844" data-churchname="Heritage Fellowship Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Heritage Fellowship Church - OH</option>
								<option value="1542" data-churchname="High Praise Family Ministries - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">High Praise Family Ministries - NV</option>
								<option value="1543" data-churchname="Highland Hills Baptist - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Highland Hills Baptist - NV</option>
								<option value="1845" data-churchname="Highland United Methodist - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Highland United Methodist - OH</option>
								<option value="2032" data-churchname="Hill Country Bible Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Hill Country Bible Church</option>
								<option value="1407" data-churchname="Hillcrest Baptist Church - Swainsboro, GA" data-street="990 US Highway 1 N" data-city="Swainsboro" data-state="GA" data-zip="30401" style="color: #aaa;">Hillcrest Baptist Church - Swainsboro, GA</option>
								<option value="1509" data-churchname="<strong>Hillside Community Church - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>Hillside Community Church - CA - Active</strong></option>
								<option value="2556" data-churchname="Hilltop Baptist Church  - Chula Vista , CA" data-street="" data-city="Chula Vista " data-state="CA" data-zip="0" style="color: #aaa;">Hilltop Baptist Church - Chula Vista , CA</option>
								<option value="1696" data-churchname="Holy Family Catholic Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Holy Family Catholic Church</option>
								<option value="1298" data-churchname="Holy Innocents\' Episcopal Church - Sandy Springs, GA" data-street="805 Mt.Vernon Highway Northwest" data-city="Sandy Springs" data-state="GA" data-zip="30327" style="color: #aaa;">Holy Innocents' Episcopal Church - Sandy Springs, GA</option>
								<option value="2721" data-churchname="Holy Spirit at Geist - Fishers, IN" data-street="10350 Glaser Way" data-city="Fishers" data-state="IN" data-zip="46037" style="color: #aaa;">Holy Spirit at Geist - Fishers, IN</option>
								<option value="2782" data-churchname="<strong>Holy Trinity Catholic Church - Lenexa, KS - Active</strong>" data-street="13615 West 92nd Street" data-city="Lenexa" data-state="KS" data-zip="66215" style="color: #000;"><strong>Holy Trinity Catholic Church - Lenexa, KS - Active</strong></option>
								<option value="1413" data-churchname="Home Church - Flowery Branch - Flowery Branch, GA" data-street="7380 Spout Springs Rd #140" data-city="Flowery Branch" data-state="GA" data-zip="30542" style="color: #aaa;">Home Church - Flowery Branch - Flowery Branch, GA</option>
								<option value="1426" data-churchname="Home Grounds Church - Buford - Buford, GA" data-street="2345 Thompson Mill Road" data-city="Buford" data-state="GA" data-zip="30518" style="color: #aaa;">Home Grounds Church - Buford - Buford, GA</option>
								<option value="2439" data-churchname="<strong>Hoosier Harvest Church - Martinsville, IN - Active</strong>" data-street="4085 Leonard Road" data-city="Martinsville" data-state="IN" data-zip="46151" style="color: #000;"><strong>Hoosier Harvest Church - Martinsville, IN - Active</strong></option>
								<option value="2451" data-churchname="Hope" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Hope</option>
								<option value="1651" data-churchname="<strong>Hope 1312 - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Hope 1312 - GA - Active</strong></option>
								<option value="2012" data-churchname="Hope Chapel (Greer, SC)" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Hope Chapel (Greer, SC)</option>
								<option value="1515" data-churchname="<strong>Hope Church - Las Vegas , NV - Active</strong>" data-street="850 E Cactus Ave " data-city="Las Vegas " data-state="NV" data-zip="89183" style="color: #000;"><strong>Hope Church - Las Vegas , NV - Active</strong></option>
								<option value="2432" data-churchname="Hope Church Winter Garden, FL" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Hope Church Winter Garden, FL</option>
								<option value="1433" data-churchname="Hope City United - Grayson - Grayson, GA" data-street="" data-city="Grayson" data-state="GA" data-zip="0" style="color: #aaa;">Hope City United - Grayson - Grayson, GA</option>
								<option value="1395" data-churchname="Hope City United - Leesburg, GA" data-street="131 BirchLeaf Lane" data-city="Leesburg" data-state="GA" data-zip="31763" style="color: #aaa;">Hope City United - Leesburg, GA</option>
								<option value="1445" data-churchname="Hope Community Church - Gilbertsville, PA" data-street="2732 N Charlotte St" data-city="Gilbertsville" data-state="PA" data-zip="19525" style="color: #aaa;">Hope Community Church - Gilbertsville, PA</option>
								<option value="1709" data-churchname="<strong>Hope Community Church - Mount Joy, PA - Active</strong>" data-street="1806 Harrisburg Avenue" data-city="Mount Joy" data-state="PA" data-zip="17552" style="color: #000;"><strong>Hope Community Church - Mount Joy, PA - Active</strong></option>
								<option value="1623" data-churchname="<strong>Hope Community Church - West Salem, WI - Active</strong>" data-street="1580 Heritage Blvd # 200" data-city="West Salem" data-state="WI" data-zip="54669" style="color: #000;"><strong>Hope Community Church - West Salem, WI - Active</strong></option>
								<option value="2245" data-churchname="<strong>Hope Missionary Church - Bluffton, IN - Active</strong>" data-street="429 East Dustman Road" data-city="Bluffton" data-state="IN" data-zip="46714" style="color: #000;"><strong>Hope Missionary Church - Bluffton, IN - Active</strong></option>
								<option value="1831" data-churchname="Hope Presbyterian Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Hope Presbyterian Church - OH</option>
								<option value="2581" data-churchname="Hope Springs - Columbus, GA" data-street="" data-city="Columbus" data-state="GA" data-zip="0" style="color: #aaa;">Hope Springs - Columbus, GA</option>
								<option value="1846" data-churchname="Horizon Community Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Horizon Community Church - OH</option>
								<option value="2725" data-churchname="House of God Ministries Church of God in Christ - Indianapolis, IN" data-street="4301 Spann Avenue" data-city="Indianapolis" data-state="IN" data-zip="46203" style="color: #aaa;">House of God Ministries Church of God in Christ - Indianapolis, IN</option>
								<option value="2427" data-churchname="Hudson" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Hudson</option>
								<option value="2505" data-churchname="Huntersville Presbyterian Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Huntersville Presbyterian Church</option>
								<option value="1969" data-churchname="ICLC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">ICLC</option>
								<option value="1544" data-churchname="ICLV - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">ICLV - NV</option>
								<option value="2217" data-churchname="<strong>ITOWN Church - Fishers - Fishers, IN - Active</strong>" data-street="9959 East 126th Street" data-city="Fishers" data-state="IN" data-zip="46038" style="color: #000;"><strong>ITOWN Church - Fishers - Fishers, IN - Active</strong></option>
								<option value="1960" data-churchname="<strong>ITOWN Church - Olson Farms - Fishers, IN - Active</strong>" data-street="12491 E. 136th St." data-city="Fishers" data-state="IN" data-zip="46038" style="color: #000;"><strong>ITOWN Church - Olson Farms - Fishers, IN - Active</strong></option>
								<option value="2215" data-churchname="<strong>ITOWN Church - Bluffton - Bluffton, IN - Active</strong>" data-street="" data-city="Bluffton" data-state="IN" data-zip="0" style="color: #000;"><strong>ITOWN Church - Bluffton - Bluffton, IN - Active</strong></option>
								<option value="2216" data-churchname="<strong>ITOWN Church - Bluffton - Bluffton, IN - Active</strong>" data-street="1 Tiger Trail" data-city="Bluffton" data-state="IN" data-zip="46714" style="color: #000;"><strong>ITOWN Church - Bluffton - Bluffton, IN - Active</strong></option>
								<option value="1475" data-churchname="<strong>Idlewild - Lutz, FL - Active</strong>" data-street="18333 Exciting Idlewild Boulevard" data-city="Lutz" data-state="FL" data-zip="33548" style="color: #000;"><strong>Idlewild - Lutz, FL - Active</strong></option>
								<option value="1785" data-churchname="Ikon Community Church - Decatur, GA" data-street="647 E College Ave" data-city="Decatur" data-state="GA" data-zip="30030" style="color: #aaa;">Ikon Community Church - Decatur, GA</option>
								<option value="1496" data-churchname="<strong>Immanuel Baptist Church - Wausau, WI - Active</strong>" data-street="5100 Hummingbird Rd" data-city="Wausau" data-state="WI" data-zip="54401" style="color: #000;"><strong>Immanuel Baptist Church - Wausau, WI - Active</strong></option>
								<option value="2110" data-churchname="<strong>Immanuel Lutheran Church - Waupaca, WI - Active</strong>" data-street="1120 Evans St" data-city="Waupaca" data-state="WI" data-zip="54981" style="color: #000;"><strong>Immanuel Lutheran Church - Waupaca, WI - Active</strong></option>
								<option value="1450" data-churchname="Influencers Church - Gwinnett - Duluth, GA" data-street="6400 Sugarloaf Parkway" data-city="Duluth" data-state="GA" data-zip="30097" style="color: #aaa;">Influencers Church - Gwinnett - Duluth, GA</option>
								<option value="2599" data-churchname="<strong>Inner City Church Of Christ - Montgomery, AL - Active</strong>" data-street="450 Sayre Street" data-city="Montgomery" data-state="AL" data-zip="36104" style="color: #000;"><strong>Inner City Church Of Christ - Montgomery, AL - Active</strong></option>
								<option value="1742" data-churchname="<strong>Innovation Church - Orlando, FL - Active</strong>" data-street="541 N Alafaya Trail" data-city="Orlando" data-state="FL" data-zip="32828" style="color: #000;"><strong>Innovation Church - Orlando, FL - Active</strong></option>
								<option value="1970" data-churchname="International Church of Las Vegas " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">International Church of Las Vegas </option>
								<option value="2375" data-churchname="Intown Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Intown Community Church</option>
								<option value="2405" data-churchname="Isaiah\'s Place - Troy, OH" data-street="" data-city="Troy" data-state="OH" data-zip="0" style="color: #aaa;">Isaiah's Place - Troy, OH</option>
								<option value="1857" data-churchname="JFBC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">JFBC</option>
								<option value="1868" data-churchname="JFCB" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">JFCB</option>
								<option value="2087" data-churchname="Jefferson First UMC - Jefferson, GA" data-street="" data-city="Jefferson" data-state="GA" data-zip="0" style="color: #aaa;">Jefferson First UMC - Jefferson, GA</option>
								<option value="2136" data-churchname="<strong>Johns Creek Presbyterian Church - Johns Creek, GA - Active</strong>" data-street="10950 Bell Road" data-city="Johns Creek" data-state="GA" data-zip="30097" style="color: #000;"><strong>Johns Creek Presbyterian Church - Johns Creek, GA - Active</strong></option>
								<option value="1272" data-churchname="<strong>Johnson Ferry Baptist Church - Marietta, GA - Active</strong>" data-street="955 Johnson Ferry Road" data-city="Marietta" data-state="GA" data-zip="30068" style="color: #000;"><strong>Johnson Ferry Baptist Church - Marietta, GA - Active</strong></option>
								<option value="2261" data-churchname="Journey Christian Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Journey Christian Church - FL</option>
								<option value="2121" data-churchname="Journey Christian Church " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Journey Christian Church </option>
								<option value="1976" data-churchname="Journey Church - Boynton - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Journey Church - Boynton - FL</option>
								<option value="1977" data-churchname="Journey Church - Lake Worth - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Journey Church - Lake Worth - FL</option>
								<option value="1262" data-churchname="<strong>Journey Church - Monroe - Monroe, GA - Active</strong>" data-street="1000 Royal Park Drive" data-city="Monroe" data-state="GA" data-zip="30656" style="color: #000;"><strong>Journey Church - Monroe - Monroe, GA - Active</strong></option>
								<option value="1975" data-churchname="Journey Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Journey Church - FL</option>
								<option value="2726" data-churchname="Journey Church - Anderson, IN" data-street="505 West 37th Street" data-city="Anderson" data-state="IN" data-zip="46013" style="color: #aaa;">Journey Church - Anderson, IN</option>
								<option value="1493" data-churchname="<strong>Joy Meadows / Fostering Joy - KS - Active</strong>" data-street="" data-city="" data-state="KS" data-zip="0" style="color: #000;"><strong>Joy Meadows / Fostering Joy - KS - Active</strong></option>
								<option value="1502" data-churchname="<strong>KC Gracepoint - Shawnee Mission, KS - Active</strong>" data-street="5425 Martindale Rd" data-city="Shawnee Mission" data-state="KS" data-zip="66052" style="color: #000;"><strong>KC Gracepoint - Shawnee Mission, KS - Active</strong></option>
								<option value="2338" data-churchname="Kailua Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Kailua Community Church</option>
								<option value="2356" data-churchname="Kehilat Ariel - San Diego, CA" data-street="5185 Acuna St." data-city="San Diego" data-state="CA" data-zip="92117" style="color: #aaa;">Kehilat Ariel - San Diego, CA</option>
								<option value="2285" data-churchname="<strong>Keystone Bible Church - Odessa, FL - Active</strong>" data-street="10925 Tarpon Springs Rd." data-city="Odessa" data-state="FL" data-zip="33556" style="color: #000;"><strong>Keystone Bible Church - Odessa, FL - Active</strong></option>
								<option value="1620" data-churchname="<strong>King\'s Chapel Presbyterian Church - Carrollton, GA - Active</strong>" data-street="1916 U.S. 27" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #000;"><strong>King's Chapel Presbyterian Church - Carrollton, GA - Active</strong></option>
								<option value="1930" data-churchname="Kingdom church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Kingdom church</option>
								<option value="2727" data-churchname="<strong>Kingsway Christian Church - Avon, IN - Active</strong>" data-street="7981 East County Road 100 North" data-city="Avon" data-state="IN" data-zip="46123" style="color: #000;"><strong>Kingsway Christian Church - Avon, IN - Active</strong></option>
								<option value="2470" data-churchname="<strong>Kinship Connection - Redmond, WA - Active</strong>" data-street="" data-city="Redmond" data-state="WA" data-zip="98074" style="color: #000;"><strong>Kinship Connection - Redmond, WA - Active</strong></option>
								<option value="2575" data-churchname="Koinos Christian Fellowship - Troy, OH" data-street="" data-city="Troy" data-state="OH" data-zip="0" style="color: #aaa;">Koinos Christian Fellowship - Troy, OH</option>
								<option value="1611" data-churchname="LHC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">LHC</option>
								<option value="2446" data-churchname="Lake Baldwin Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Lake Baldwin Church - FL</option>
								<option value="2572" data-churchname="Lake Drive Baptist - Sale Creek, TN" data-street="" data-city="Sale Creek" data-state="TN" data-zip="0" style="color: #aaa;">Lake Drive Baptist - Sale Creek, TN</option>
								<option value="1599" data-churchname="<strong>Lake Mary Church - Lake Mary, FL - Active</strong>" data-street="600 Rinehart Rd #1142" data-city="Lake Mary" data-state="FL" data-zip="32746" style="color: #000;"><strong>Lake Mary Church - Lake Mary, FL - Active</strong></option>
								<option value="2277" data-churchname="<strong>Lake Wylie Christian Assembly - Lake Wylie, SC - Active</strong>" data-street="5766 Charlotte Hwy." data-city="Lake Wylie" data-state="SC" data-zip="29710" style="color: #000;"><strong>Lake Wylie Christian Assembly - Lake Wylie, SC - Active</strong></option>
								<option value="1784" data-churchname="Lakeshore Christian Fellowship" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Lakeshore Christian Fellowship</option>
								<option value="2258" data-churchname="Lakeside Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Lakeside Church - FL</option>
								<option value="2728" data-churchname="Lakeview Church - Indianapolis, IN" data-street="47 Beachway Drive" data-city="Indianapolis" data-state="IN" data-zip="46224" style="color: #aaa;">Lakeview Church - Indianapolis, IN</option>
								<option value="1327" data-churchname="<strong>Lakewood Baptist Church - Gainesville, GA - Active</strong>" data-street="2235 Thompson Bridge Road" data-city="Gainesville" data-state="GA" data-zip="30501" style="color: #000;"><strong>Lakewood Baptist Church - Gainesville, GA - Active</strong></option>
								<option value="2292" data-churchname="<strong>Landmark Church of Christ - Montgomery - AL - Active</strong>" data-street="" data-city="" data-state="AL" data-zip="0" style="color: #000;"><strong>Landmark Church of Christ - Montgomery - AL - Active</strong></option>
								<option value="1510" data-churchname="<strong>Lanier Hills Church - Gainesville, GA - Active</strong>" data-street="3129 Duckett Mill Road" data-city="Gainesville" data-state="GA" data-zip="30506" style="color: #000;"><strong>Lanier Hills Church - Gainesville, GA - Active</strong></option>
								<option value="1939" data-churchname="Lawrence First Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Lawrence First Church</option>
								<option value="2605" data-churchname="<strong>Leesburg Community Church - Leesburg, VA - Active</strong>" data-street="835 Lee Avenue Southwest" data-city="Leesburg" data-state="VA" data-zip="20175" style="color: #000;"><strong>Leesburg Community Church - Leesburg, VA - Active</strong></option>
								<option value="1301" data-churchname="<strong>Legacy Church - Marietta - Marietta, GA - Active</strong>" data-street="1040 Blackwell Road" data-city="Marietta" data-state="GA" data-zip="30066" style="color: #000;"><strong>Legacy Church - Marietta - Marietta, GA - Active</strong></option>
								<option value="1928" data-churchname="Legacy Church " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Legacy Church </option>
								<option value="1908" data-churchname="Lenoir First Wesleyan" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Lenoir First Wesleyan</option>
								<option value="1909" data-churchname="Lenoir First Wesleyan" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Lenoir First Wesleyan</option>
								<option value="1780" data-churchname="<strong>Lenoir Presbyterian Church - Lenoir, NC - Active</strong>" data-street="1002 Kirkwood Street Northwest" data-city="Lenoir" data-state="NC" data-zip="28645" style="color: #000;"><strong>Lenoir Presbyterian Church - Lenoir, NC - Active</strong></option>
								<option value="2729" data-churchname="Lewis Creek Baptist Church - Waldron, IN" data-street="1400 East 600 South" data-city="Waldron" data-state="IN" data-zip="46182" style="color: #aaa;">Lewis Creek Baptist Church - Waldron, IN</option>
								<option value="2379" data-churchname="Liberty Baptist Church in Clermont" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Liberty Baptist Church in Clermont</option>
								<option value="1917" data-churchname="Liberty Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Liberty Church - FL</option>
								<option value="1839" data-churchname="Liberty Heights Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Liberty Heights Church - OH</option>
								<option value="1581" data-churchname="<strong>Liberty Life Center - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Liberty Life Center - FL - Active</strong></option>
								<option value="1545" data-churchname="Life Baptist - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Life Baptist - NV</option>
								<option value="2465" data-churchname="<strong>Life Center Church - Tacoma, WA - Active</strong>" data-street="1717 S Union Ave" data-city="Tacoma" data-state="WA" data-zip="98332" style="color: #000;"><strong>Life Center Church - Tacoma, WA - Active</strong></option>
								<option value="1751" data-churchname="Life Church - Rome, GA" data-street="16 John Davenport Drive" data-city="Rome" data-state="GA" data-zip="30165" style="color: #aaa;">Life Church - Rome, GA</option>
								<option value="2512" data-churchname="Life Church - Huntington, IN" data-street="900 East State Street" data-city="Huntington" data-state="IN" data-zip="46750" style="color: #aaa;">Life Church - Huntington, IN</option>
								<option value="2732" data-churchname="Life Church 180 - Indianapolis, IN" data-street="3744 South Lynhurst Drive" data-city="Indianapolis" data-state="IN" data-zip="46241" style="color: #aaa;">Life Church 180 - Indianapolis, IN</option>
								<option value="2730" data-churchname="<strong>Life Church Fishers - Fishers, IN - Active</strong>" data-street="9820 East 141st Street" data-city="Fishers" data-state="IN" data-zip="46038" style="color: #000;"><strong>Life Church Fishers - Fishers, IN - Active</strong></option>
								<option value="1226" data-churchname="<strong>Life Church of Athens - Athens, GA - Active</strong>" data-street="120 Ware St." data-city="Athens" data-state="GA" data-zip="30601" style="color: #000;"><strong>Life Church of Athens - Athens, GA - Active</strong></option>
								<option value="2731" data-churchname="Life Community Church - Bluffton, IN" data-street="428 South Oak Street" data-city="Bluffton" data-state="IN" data-zip="46714" style="color: #aaa;">Life Community Church - Bluffton, IN</option>
								<option value="2733" data-churchname="Life Connections Church - Fishers, IN" data-street="11616 East 126th Street" data-city="Fishers" data-state="IN" data-zip="46037" style="color: #aaa;">Life Connections Church - Fishers, IN</option>
								<option value="1329" data-churchname="<strong>LifeGate Church - Villa Rica, GA - Active</strong>" data-street="501 Permian Way" data-city="Villa Rica" data-state="GA" data-zip="30180" style="color: #000;"><strong>LifeGate Church - Villa Rica, GA - Active</strong></option>
								<option value="1768" data-churchname="LifePointe - Fort Mill, SC" data-street="390 York Southern Rd" data-city="Fort Mill" data-state="SC" data-zip="29715" style="color: #aaa;">LifePointe - Fort Mill, SC</option>
								<option value="2529" data-churchname="LifeWay Church - New Philadelphia, OH" data-street="" data-city="New Philadelphia" data-state="OH" data-zip="0" style="color: #aaa;">LifeWay Church - New Philadelphia, OH</option>
								<option value="2084" data-churchname="Lifebridge Church  - FL" data-street="12120 Chase Road" data-city="" data-state="FL" data-zip="34786" style="color: #aaa;">Lifebridge Church - FL</option>
								<option value="2440" data-churchname="Lifegate" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Lifegate</option>
								<option value="1993" data-churchname="<strong>Lifehouse Church - Lebanon, OH - Active</strong>" data-street="2234 Utica Rd." data-city="Lebanon" data-state="OH" data-zip="45036" style="color: #000;"><strong>Lifehouse Church - Lebanon, OH - Active</strong></option>
								<option value="2735" data-churchname="Lifepoint Church - Indianapolis, IN" data-street="8540 Combs Road" data-city="Indianapolis" data-state="IN" data-zip="46237" style="color: #aaa;">Lifepoint Church - Indianapolis, IN</option>
								<option value="1265" data-churchname="Lifespring Church - Albany, GA" data-street="1211 Stuart Ave." data-city="Albany" data-state="GA" data-zip="31707" style="color: #aaa;">Lifespring Church - Albany, GA</option>
								<option value="1865" data-churchname="<strong>Lighthouse Brunswick - Brunswick , GA - Active</strong>" data-street="126 Goodtown Dr" data-city="Brunswick " data-state="GA" data-zip="31525" style="color: #000;"><strong>Lighthouse Brunswick - Brunswick , GA - Active</strong></option>
								<option value="1848" data-churchname="Linworth Road Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Linworth Road Church - OH</option>
								<option value="1546" data-churchname="Living Grace 4 Square Church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Living Grace 4 Square Church - NV</option>
								<option value="2360" data-churchname="Living Hope" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Living Hope</option>
								<option value="2367" data-churchname="<strong>Living Hope COTN - Olathe, KS - Active</strong>" data-street="18550 W 175th St | Olathe, KS | 66062" data-city="Olathe" data-state="KS" data-zip="66062" style="color: #000;"><strong>Living Hope COTN - Olathe, KS - Active</strong></option>
								<option value="1326" data-churchname="Living Hope Church - Athens, GA" data-street="2150 Lexington Road" data-city="Athens" data-state="GA" data-zip="30605" style="color: #aaa;">Living Hope Church - Athens, GA</option>
								<option value="1987" data-churchname="<strong>Living Way Church - Columbus, GA - Active</strong>" data-street="7320 Whitesville Road" data-city="Columbus" data-state="GA" data-zip="31909" style="color: #000;"><strong>Living Way Church - Columbus, GA - Active</strong></option>
								<option value="1367" data-churchname="Living Word Baptist Church - Bogart, GA" data-street="2761 Monroe Highway" data-city="Bogart" data-state="GA" data-zip="30622" style="color: #aaa;">Living Word Baptist Church - Bogart, GA</option>
								<option value="2028" data-churchname="<strong>Living1:27 - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Living1:27 - GA - Active</strong></option>
								<option value="2734" data-churchname="Lone Oak Wesleyan Church - Anderson, IN" data-street="486 North 500 West" data-city="Anderson" data-state="IN" data-zip="46017" style="color: #aaa;">Lone Oak Wesleyan Church - Anderson, IN</option>
								<option value="2055" data-churchname="Long Beach Christian Fellowship - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Long Beach Christian Fellowship - CA</option>
								<option value="2037" data-churchname="<strong>Lovejoy Missionary Baptist Church - Rome, GA - Active</strong>" data-street="436 Branham Ave. SW" data-city="Rome" data-state="GA" data-zip="30161" style="color: #000;"><strong>Lovejoy Missionary Baptist Church - Rome, GA - Active</strong></option>
								<option value="2736" data-churchname="<strong>Lutheran Church of Our Redeemer - Kokomo, IN - Active</strong>" data-street="705 East Southway Boulevard" data-city="Kokomo" data-state="IN" data-zip="46902" style="color: #000;"><strong>Lutheran Church of Our Redeemer - Kokomo, IN - Active</strong></option>
								<option value="2657" data-churchname="Lycoming Christian Church - Linden, PA" data-street="20 Chapel Hill Road" data-city="Linden" data-state="PA" data-zip="17744" style="color: #aaa;">Lycoming Christian Church - Linden, PA</option>
								<option value="2181" data-churchname="<strong>Madison Park Church of God - Anderson, IN - Active</strong>" data-street="6607 Providence Drive" data-city="Anderson" data-state="IN" data-zip="46013" style="color: #000;"><strong>Madison Park Church of God - Anderson, IN - Active</strong></option>
								<option value="2632" data-churchname="<strong>Makers Church - San Diego, CA - Active</strong>" data-street="3810 Bancroft Street" data-city="San Diego" data-state="CA" data-zip="92104" style="color: #000;"><strong>Makers Church - San Diego, CA - Active</strong></option>
								<option value="2458" data-churchname="<strong>Maple Valley Church - Maple Valley, WA - Active</strong>" data-street="22659 Sweeney Rd SE" data-city="Maple Valley" data-state="WA" data-zip="98038" style="color: #000;"><strong>Maple Valley Church - Maple Valley, WA - Active</strong></option>
								<option value="1621" data-churchname="Maranatha Baptist  - Shiocton, WI" data-street="W6607 WI-156" data-city="Shiocton" data-state="WI" data-zip="54170" style="color: #aaa;">Maranatha Baptist - Shiocton, WI</option>
								<option value="1706" data-churchname="<strong>Maranatha Chapel - San Diego , CA - Active</strong>" data-street="10752 Coastwood Road " data-city="San Diego " data-state="CA" data-zip="92127" style="color: #000;"><strong>Maranatha Chapel - San Diego , CA - Active</strong></option>
								<option value="1436" data-churchname="Marietta Community Church - Marietta, GA" data-street="1349 OLD 41 HWY NW #125" data-city="Marietta" data-state="GA" data-zip="30060" style="color: #aaa;">Marietta Community Church - Marietta, GA</option>
								<option value="1871" data-churchname="Mariners" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mariners</option>
								<option value="2056" data-churchname="Mariners Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Mariners Church - CA</option>
								<option value="1322" data-churchname="<strong>Mars Hill Community Church - Powder Springs, GA - Active</strong>" data-street="109 Mars Hill Road" data-city="Powder Springs" data-state="GA" data-zip="30127" style="color: #000;"><strong>Mars Hill Community Church - Powder Springs, GA - Active</strong></option>
								<option value="1851" data-churchname="<strong>Maryland Community Church - Terre Haute, IN - Active</strong>" data-street="" data-city="Terre Haute" data-state="IN" data-zip="0" style="color: #000;"><strong>Maryland Community Church - Terre Haute, IN - Active</strong></option>
								<option value="2569" data-churchname="<strong>McLean Bible Church - Vienna, VA - Active</strong>" data-street="8925 Leesburg Pike" data-city="Vienna" data-state="VA" data-zip="22182" style="color: #000;"><strong>McLean Bible Church - Vienna, VA - Active</strong></option>
								<option value="2302" data-churchname="<strong>McLean Presbyterian Church - McLean - McLean, VA - Active</strong>" data-street="1020 Balls Hill Road" data-city="McLean" data-state="VA" data-zip="22101" style="color: #000;"><strong>McLean Presbyterian Church - McLean - McLean, VA - Active</strong></option>
								<option value="1547" data-churchname="Meadows Fellowship - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Meadows Fellowship - NV</option>
								<option value="2507" data-churchname="Mecklenburg Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mecklenburg Community Church</option>
								<option value="2567" data-churchname="Memorial United Methodist Church - NC" data-street="" data-city="" data-state="NC" data-zip="0" style="color: #aaa;">Memorial United Methodist Church - NC</option>
								<option value="2737" data-churchname="<strong>Mercy Road Church - Carmel, IN - Active</strong>" data-street="" data-city="Carmel" data-state="IN" data-zip="0" style="color: #000;"><strong>Mercy Road Church - Carmel, IN - Active</strong></option>
								<option value="2355" data-churchname="Meridian Baptist Church - El Cajon, CA" data-street="660 S. 3rd St." data-city="El Cajon" data-state="CA" data-zip="92019" style="color: #aaa;">Meridian Baptist Church - El Cajon, CA</option>
								<option value="2542" data-churchname="Metro Life Church - Kansas City, MO" data-street="4300 Northeast Parvin Road" data-city="Kansas City" data-state="MO" data-zip="64117" style="color: #aaa;">Metro Life Church - Kansas City, MO</option>
								<option value="2543" data-churchname="Metro Life Church - Kansas City, MO" data-street="4300 Northeast Parvin Road" data-city="Kansas City" data-state="MO" data-zip="64117" style="color: #aaa;">Metro Life Church - Kansas City, MO</option>
								<option value="1754" data-churchname="<strong>Mid Tree Church - 127 - Pine Mountain, GA - Active</strong>" data-street="100 Impact Circle" data-city="Pine Mountain" data-state="GA" data-zip="31822" style="color: #000;"><strong>Mid Tree Church - 127 - Pine Mountain, GA - Active</strong></option>
								<option value="1324" data-churchname="<strong>Midland Valley Community Church of the Nazarene - Graniteville, SC - Active</strong>" data-street="3526 Jefferson Davis Highway" data-city="Graniteville" data-state="SC" data-zip="29829" style="color: #000;"><strong>Midland Valley Community Church of the Nazarene - Graniteville, SC - Active</strong></option>
								<option value="1302" data-churchname="Midtown Bridge Church - Atlanta, GA" data-street="PO Box 19796" data-city="Atlanta" data-state="GA" data-zip="30325" style="color: #aaa;">Midtown Bridge Church - Atlanta, GA</option>
								<option value="1955" data-churchname="<strong>Midtree church - Columbus, GA - Active</strong>" data-street="" data-city="Columbus" data-state="GA" data-zip="0" style="color: #000;"><strong>Midtree church - Columbus, GA - Active</strong></option>
								<option value="1238" data-churchname="<strong>Mikado Baptist Church - Macon, GA - Active</strong>" data-street="6751 Houston Rd" data-city="Macon" data-state="GA" data-zip="31216" style="color: #000;"><strong>Mikado Baptist Church - Macon, GA - Active</strong></option>
								<option value="2047" data-churchname="Ministerios Betesda - Orange, CA" data-street="1001 Lincoln Ave" data-city="Orange" data-state="CA" data-zip="92865" style="color: #aaa;">Ministerios Betesda - Orange, CA</option>
								<option value="2462" data-churchname="<strong>Mission Church - Renton, WA - Active</strong>" data-street="1101 Hoquiam Ave Ne" data-city="Renton" data-state="WA" data-zip="98059" style="color: #000;"><strong>Mission Church - Renton, WA - Active</strong></option>
								<option value="2069" data-churchname="Mission Hills" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mission Hills</option>
								<option value="2615" data-churchname="<strong>Mission Trails Church  - San Diego, CA - Active</strong>" data-street="4880 Zion Avenue" data-city="San Diego" data-state="CA" data-zip="92120" style="color: #000;"><strong>Mission Trails Church - San Diego, CA - Active</strong></option>
								<option value="1962" data-churchname="<strong>Mission Valley Christian Fellowship - San Diego, CA - Active</strong>" data-street="6536 Estrella Ave." data-city="San Diego" data-state="CA" data-zip="92120" style="color: #000;"><strong>Mission Valley Christian Fellowship - San Diego, CA - Active</strong></option>
								<option value="2552" data-churchname="Mission Village Church  - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Mission Village Church - CA</option>
								<option value="2393" data-churchname="Moline" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Moline</option>
								<option value="1952" data-churchname="Momentum Christian Church - Main Campus - McDonough, GA" data-street="305 Westridge Parkway" data-city="McDonough" data-state="GA" data-zip="30253" style="color: #aaa;">Momentum Christian Church - Main Campus - McDonough, GA</option>
								<option value="2242" data-churchname="Monrovia" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Monrovia</option>
								<option value="1994" data-churchname="Montgomery Assembly of God - Montgomery , OH" data-street="7950 Pfeiffer Rd." data-city="Montgomery " data-state="OH" data-zip="45242" style="color: #aaa;">Montgomery Assembly of God - Montgomery , OH</option>
								<option value="1802" data-churchname="Montgomery Community Church - Montgomery, OH" data-street="11251 Montgomery Rd." data-city="Montgomery" data-state="OH" data-zip="45249" style="color: #aaa;">Montgomery Community Church - Montgomery, OH</option>
								<option value="1687" data-churchname="Montgomery First Assembly of God" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Montgomery First Assembly of God</option>
								<option value="1684" data-churchname="<strong>Moon\'s Grove Baptist Church - Colbert, GA - Active</strong>" data-street="1985 Moons Grove Church Rd" data-city="Colbert" data-state="GA" data-zip="30628" style="color: #000;"><strong>Moon's Grove Baptist Church - Colbert, GA - Active</strong></option>
								<option value="1957" data-churchname="Morningstar Ministries - Fort Mill, SC" data-street="375 Star Light Drive" data-city="Fort Mill" data-state="SC" data-zip="29715" style="color: #aaa;">Morningstar Ministries - Fort Mill, SC</option>
								<option value="1239" data-churchname="Morningview Baptist Church - Montgomery, AL" data-street="125 Calhoun Rd." data-city="Montgomery" data-state="AL" data-zip="36109" style="color: #aaa;">Morningview Baptist Church - Montgomery, AL</option>
								<option value="2453" data-churchname="Mosaic" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mosaic</option>
								<option value="2454" data-churchname="<strong>Mosaic Church - WDW - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Mosaic Church - WDW - FL - Active</strong></option>
								<option value="1630" data-churchname="<strong>Mosaic Church - Winter Garden - Winter Garden, FL - Active</strong>" data-street="14175 W Colonial Dr," data-city="Winter Garden" data-state="FL" data-zip="34787" style="color: #000;"><strong>Mosaic Church - Winter Garden - Winter Garden, FL - Active</strong></option>
								<option value="2201" data-churchname="Most Precious Blood" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Most Precious Blood</option>
								<option value="1430" data-churchname="<strong>Mount Olive Baptist Church - Moultrie, GA - Active</strong>" data-street="126 Mt Olive Church Rd" data-city="Moultrie" data-state="GA" data-zip="31788" style="color: #000;"><strong>Mount Olive Baptist Church - Moultrie, GA - Active</strong></option>
								<option value="1859" data-churchname="Mount Pisgah" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mount Pisgah</option>
								<option value="1985" data-churchname="<strong>Mount Pisgah UMC - North Campus - Johns Creek, GA - Active</strong>" data-street="2850 Old Alabama Road" data-city="Johns Creek" data-state="GA" data-zip="30022" style="color: #000;"><strong>Mount Pisgah UMC - North Campus - Johns Creek, GA - Active</strong></option>
								<option value="2738" data-churchname="<strong>Mount Pleasant Christian Church - Greenwood, IN - Active</strong>" data-street="381 North Bluff Road" data-city="Greenwood" data-state="IN" data-zip="46142" style="color: #000;"><strong>Mount Pleasant Christian Church - Greenwood, IN - Active</strong></option>
								<option value="2371" data-churchname="Mount pisgah umc" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mount pisgah umc</option>
								<option value="2372" data-churchname="Mount pisgah umc" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mount pisgah umc</option>
								<option value="1241" data-churchname="<strong>Mountain West Church - Stone Mountain, GA - Active</strong>" data-street="4818 Hugh Howell Road" data-city="Stone Mountain" data-state="GA" data-zip="30087" style="color: #000;"><strong>Mountain West Church - Stone Mountain, GA - Active</strong></option>
								<option value="2448" data-churchname="Mountaintop Christian Missionary Alliance" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mountaintop Christian Missionary Alliance</option>
								<option value="2079" data-churchname="Mt Pisgah" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mt Pisgah</option>
								<option value="2080" data-churchname="Mt Pisgah" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mt Pisgah</option>
								<option value="2081" data-churchname="Mt Pisgah " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mt Pisgah </option>
								<option value="2082" data-churchname="Mt Pisgah " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Mt Pisgah </option>
								<option value="1282" data-churchname="<strong>Mt. Pisgah United Methodist Church - Johns Creek, GA - Active</strong>" data-street="2850 Old Alabama Road" data-city="Johns Creek" data-state="GA" data-zip="30022" style="color: #000;"><strong>Mt. Pisgah United Methodist Church - Johns Creek, GA - Active</strong></option>
								<option value="1281" data-churchname="<strong>Mt. Zion Baptist Church - Snellville, GA - Active</strong>" data-street="1525 Scenic Highway South" data-city="Snellville" data-state="GA" data-zip="30078" style="color: #000;"><strong>Mt. Zion Baptist Church - Snellville, GA - Active</strong></option>
								<option value="2378" data-churchname="N/A" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">N/A</option>
								<option value="2017" data-churchname="Naomi Baptist - LaFayette, GA" data-street="4171 Georgia 136" data-city="LaFayette" data-state="GA" data-zip="30728" style="color: #aaa;">Naomi Baptist - LaFayette, GA</option>
								<option value="2473" data-churchname="<strong>Nappanee Missionary Church - Nappanee, IN - Active</strong>" data-street="70417 State Route 19" data-city="Nappanee" data-state="IN" data-zip="46550" style="color: #000;"><strong>Nappanee Missionary Church - Nappanee, IN - Active</strong></option>
								<option value="1660" data-churchname="Nations Church - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Nations Church - GA</option>
								<option value="1476" data-churchname="<strong>Nativity Catholic Church - Brandon, FL - Active</strong>" data-street="705 E Brandon Blvd" data-city="Brandon" data-state="FL" data-zip="33511" style="color: #000;"><strong>Nativity Catholic Church - Brandon, FL - Active</strong></option>
								<option value="1770" data-churchname="Neelys Creek ARP" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Neelys Creek ARP</option>
								<option value="2740" data-churchname="Nehemiah Church - Avon, IN" data-street="611 North County Road 800 East" data-city="Avon" data-state="IN" data-zip="46123" style="color: #aaa;">Nehemiah Church - Avon, IN</option>
								<option value="1548" data-churchname="Neighborhood Foursquare - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Neighborhood Foursquare - NV</option>
								<option value="1516" data-churchname="<strong>New Antioch Christian Fellowship  - Las Vegas, NV - Active</strong>" data-street="610 Belrose St" data-city="Las Vegas" data-state="NV" data-zip="89107" style="color: #000;"><strong>New Antioch Christian Fellowship - Las Vegas, NV - Active</strong></option>
								<option value="1663" data-churchname="New Beginnings - FL" data-street="8287 Curry Ford Rd" data-city="" data-state="FL" data-zip="32822" style="color: #aaa;">New Beginnings - FL</option>
								<option value="1995" data-churchname="New Beginnings Church Of The Living God Avondale - Cincinnati, OH" data-street="434 Forest Avenue" data-city="Cincinnati" data-state="OH" data-zip="45229" style="color: #aaa;">New Beginnings Church Of The Living God Avondale - Cincinnati, OH</option>
								<option value="1869" data-churchname="New Bethel Church of God" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">New Bethel Church of God</option>
								<option value="1670" data-churchname="<strong>New Birth Outreach Church - Midland, GA - Active</strong>" data-street="10107 Veterans Parkway" data-city="Midland" data-state="GA" data-zip="31820" style="color: #000;"><strong>New Birth Outreach Church - Midland, GA - Active</strong></option>
								<option value="1408" data-churchname="New Branch Community Church - Albany - Albany, GA" data-street="901 S Westover Blvd." data-city="Albany" data-state="GA" data-zip="31721" style="color: #aaa;">New Branch Community Church - Albany - Albany, GA</option>
								<option value="1283" data-churchname="New Branch Community Church - Buford, GA" data-street="3805 Braselton Highway" data-city="Buford" data-state="GA" data-zip="30519" style="color: #aaa;">New Branch Community Church - Buford, GA</option>
								<option value="2224" data-churchname="New Break Church - San Diego, CA" data-street="10791 Tierrasanta Blvd." data-city="San Diego" data-state="CA" data-zip="92124" style="color: #aaa;">New Break Church - San Diego, CA</option>
								<option value="1331" data-churchname="<strong>New Bridge Community Church - Lawrenceville, GA - Active</strong>" data-street="1446 Calvin Davis Circle" data-city="Lawrenceville" data-state="GA" data-zip="30043" style="color: #000;"><strong>New Bridge Community Church - Lawrenceville, GA - Active</strong></option>
								<option value="2149" data-churchname="New Church West Georgia - Carrollton, GA" data-street="1106 Maple Street" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #aaa;">New Church West Georgia - Carrollton, GA</option>
								<option value="1268" data-churchname="<strong>New City Church - Lawrenceville, GA - Active</strong>" data-street="PO Box 162" data-city="Lawrenceville" data-state="GA" data-zip="30046" style="color: #000;"><strong>New City Church - Lawrenceville, GA - Active</strong></option>
								<option value="1815" data-churchname="New City Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">New City Church - OH</option>
								<option value="2741" data-churchname="New City Church - Indianapolis, IN" data-street="345 North Kitley Avenue" data-city="Indianapolis" data-state="IN" data-zip="46219" style="color: #aaa;">New City Church - Indianapolis, IN</option>
								<option value="2365" data-churchname="New Covenant Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">New Covenant Church</option>
								<option value="2739" data-churchname="New Era Church - Indianapolis, IN" data-street="517 West 30th Street" data-city="Indianapolis" data-state="IN" data-zip="46208" style="color: #aaa;">New Era Church - Indianapolis, IN</option>
								<option value="2031" data-churchname="<strong>New Generation - Savannah, GA - Active</strong>" data-street="2020 Tennessee Avenue" data-city="Savannah" data-state="GA" data-zip="31404" style="color: #000;"><strong>New Generation - Savannah, GA - Active</strong></option>
								<option value="1624" data-churchname="New Harmony Baptist Church - Cedartown, GA" data-street="951 Prior Station Road" data-city="Cedartown" data-state="GA" data-zip="30125" style="color: #aaa;">New Harmony Baptist Church - Cedartown, GA</option>
								<option value="2137" data-churchname="New Harmony Baptist Church - Cedartown , GA" data-street="951 Prior Station Rd." data-city="Cedartown " data-state="GA" data-zip="30125" style="color: #aaa;">New Harmony Baptist Church - Cedartown , GA</option>
								<option value="2743" data-churchname="New Heights Church - Indianapolis, IN" data-street="465 East 86th Street" data-city="Indianapolis" data-state="IN" data-zip="46240" style="color: #aaa;">New Heights Church - Indianapolis, IN</option>
								<option value="1733" data-churchname="New Hope" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">New Hope</option>
								<option value="1884" data-churchname="New Hope" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">New Hope</option>
								<option value="1303" data-churchname="<strong>New Hope Baptist Church - Fayetteville, GA - Active</strong>" data-street="551 New Hope Rd" data-city="Fayetteville" data-state="GA" data-zip="30214" style="color: #000;"><strong>New Hope Baptist Church - Fayetteville, GA - Active</strong></option>
								<option value="2742" data-churchname="<strong>New Hope Church - Greenwood, IN - Active</strong>" data-street="5307 Fairview Road" data-city="Greenwood" data-state="IN" data-zip="46142" style="color: #000;"><strong>New Hope Church - Greenwood, IN - Active</strong></option>
								<option value="2522" data-churchname="New Hope Community Church  - Chula Vista , CA" data-street="2720 Olympic Pkwy" data-city="Chula Vista " data-state="CA" data-zip="91915" style="color: #aaa;">New Hope Community Church - Chula Vista , CA</option>
								<option value="1357" data-churchname="New Hope Worship Center - Grovetown, GA" data-street="715 S. Old Belair Rd" data-city="Grovetown" data-state="GA" data-zip="30813" style="color: #aaa;">New Hope Worship Center - Grovetown, GA</option>
								<option value="1549" data-churchname="New Horizons Christian Church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">New Horizons Christian Church - NV</option>
								<option value="1381" data-churchname="<strong>New Life Church - Richmond Hill, GA - Active</strong>" data-street="16252 Georgia 144" data-city="Richmond Hill" data-state="GA" data-zip="31324" style="color: #000;"><strong>New Life Church - Richmond Hill, GA - Active</strong></option>
								<option value="2058" data-churchname="New Life Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">New Life Church - CA</option>
								<option value="2296" data-churchname="<strong>New Life Covenant - Wichita, KS - Active</strong>" data-street="1819 W Douglas Ave" data-city="Wichita" data-state="KS" data-zip="67213" style="color: #000;"><strong>New Life Covenant - Wichita, KS - Active</strong></option>
								<option value="1813" data-churchname="New Life Gahanna - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">New Life Gahanna - OH</option>
								<option value="2668" data-churchname="New Mt Olivet AME Zion Church - Rock Hill, SC" data-street="527 Dave Lyle Boulevard" data-city="Rock Hill" data-state="SC" data-zip="29730" style="color: #aaa;">New Mt Olivet AME Zion Church - Rock Hill, SC</option>
								<option value="2747" data-churchname="New Palestine Bible Church - New Palestine, IN" data-street="27 West Main Street" data-city="New Palestine" data-state="IN" data-zip="46163" style="color: #aaa;">New Palestine Bible Church - New Palestine, IN</option>
								<option value="2278" data-churchname="New River Church - Clover, SC" data-street="136 Carroll Cove" data-city="Clover" data-state="SC" data-zip="29710" style="color: #aaa;">New River Church - Clover, SC</option>
								<option value="2059" data-churchname="New Song - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">New Song - CA</option>
								<option value="2417" data-churchname="New Spring Rock Hill SC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">New Spring Rock Hill SC</option>
								<option value="2351" data-churchname="New Vision Church - San Diego, CA" data-street="5310 Orange Ave." data-city="San Diego" data-state="CA" data-zip="92115" style="color: #aaa;">New Vision Church - San Diego, CA</option>
								<option value="2359" data-churchname="New song" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">New song</option>
								<option value="1947" data-churchname="NewCity - Orlando, FL" data-street="2800 North Orange Avenue" data-city="Orlando" data-state="FL" data-zip="32804" style="color: #aaa;">NewCity - Orlando, FL</option>
								<option value="2487" data-churchname="<strong>NewCity Church - Vienna, VA - Active</strong>" data-street="8227 Old Courthouse Road" data-city="Vienna" data-state="VA" data-zip="22182" style="color: #000;"><strong>NewCity Church - Vienna, VA - Active</strong></option>
								<option value="2095" data-churchname="NewSpring - Powdersville - Powdersville, SC" data-street="120 Woodson St" data-city="Powdersville" data-state="SC" data-zip="29611" style="color: #aaa;">NewSpring - Powdersville - Powdersville, SC</option>
								<option value="1514" data-churchname="NewSpring - Rock Hill - Rock Hill, SC" data-street="Rawlinson Rd Middle School" data-city="Rock Hill" data-state="SC" data-zip="29732" style="color: #aaa;">NewSpring - Rock Hill - Rock Hill, SC</option>
								<option value="1943" data-churchname="<strong>NewSpring Church - KS - Active</strong>" data-street="" data-city="" data-state="KS" data-zip="0" style="color: #000;"><strong>NewSpring Church - KS - Active</strong></option>
								<option value="1766" data-churchname="NewSpring Greenville - Eastlan - Greenville, SC" data-street="625 Pleasantburg Drive " data-city="Greenville" data-state="SC" data-zip="29607" style="color: #aaa;">NewSpring Greenville - Eastlan - Greenville, SC</option>
								<option value="2670" data-churchname="NewSpring Northeast Columbia - Elgin, SC" data-street="1010 Old Two Notch Road" data-city="Elgin" data-state="SC" data-zip="29045" style="color: #aaa;">NewSpring Northeast Columbia - Elgin, SC</option>
								<option value="2233" data-churchname="NewSpring Spartanburg " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">NewSpring Spartanburg </option>
								<option value="2468" data-churchname="<strong>Newhope Church - Puyallup, WA - Active</strong>" data-street="414 Spring St " data-city="Puyallup" data-state="WA" data-zip="98372" style="color: #000;"><strong>Newhope Church - Puyallup, WA - Active</strong></option>
								<option value="1934" data-churchname="Newnan Presbyterian" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Newnan Presbyterian</option>
								<option value="1886" data-churchname="Newsong" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Newsong</option>
								<option value="1967" data-churchname="Newspring Anderson - SC" data-street="" data-city="" data-state="SC" data-zip="0" style="color: #aaa;">Newspring Anderson - SC</option>
								<option value="1926" data-churchname="Non FBC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Non FBC</option>
								<option value="1927" data-churchname="Non FBC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Non FBC</option>
								<option value="2345" data-churchname="Nona Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Nona Church</option>
								<option value="1704" data-churchname="None" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">None</option>
								<option value="2388" data-churchname="Norcross" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Norcross</option>
								<option value="1641" data-churchname="<strong>North Ave - Athens, GA - Active</strong>" data-street="720 Danielsville Rd" data-city="Athens" data-state="GA" data-zip="30601" style="color: #000;"><strong>North Ave - Athens, GA - Active</strong></option>
								<option value="1641" data-churchname="<strong>North Avenue Church - Athens, GA - Active</strong>" data-street="720 Danielsville Rd" data-city="Athens" data-state="GA" data-zip="30601" style="color: #000;"><strong>North Avenue Church - Athens, GA - Active</strong></option>
								<option value="2311" data-churchname="North Clayton Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">North Clayton Baptist Church</option>
								<option value="2793" data-churchname="<strong>North Coast - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>North Coast - CA - Active</strong></option>
								<option value="2340" data-churchname="North Coast Calvary Chapel - Carlsbad, CA" data-street="1330 Poinsettia Ln." data-city="Carlsbad" data-state="CA" data-zip="92011" style="color: #aaa;">North Coast Calvary Chapel - Carlsbad, CA</option>
								<option value="1775" data-churchname="North Coast Church - Vista - Vista, CA" data-street="2405 North Santa Fe Avenue" data-city="Vista" data-state="CA" data-zip="92084" style="color: #aaa;">North Coast Church - Vista - Vista, CA</option>
								<option value="2587" data-churchname="North Highlands - Columbus, GA" data-street="" data-city="Columbus" data-state="GA" data-zip="0" style="color: #aaa;">North Highlands - Columbus, GA</option>
								<option value="2786" data-churchname="North Madison Christian Church - Madison, IN" data-street="1400 East State Road 62" data-city="Madison" data-state="IN" data-zip="47250" style="color: #aaa;">North Madison Christian Church - Madison, IN</option>
								<option value="1269" data-churchname="<strong>North Point Community Church - Alpharetta, GA - Active</strong>" data-street="4350 North Point Pkwy" data-city="Alpharetta" data-state="GA" data-zip="30022" style="color: #000;"><strong>North Point Community Church - Alpharetta, GA - Active</strong></option>
								<option value="1477" data-churchname="<strong>North Pointe Church - Lutz, FL - Active</strong>" data-street="19862 Amanda Park Drive" data-city="Lutz" data-state="FL" data-zip="33559" style="color: #000;"><strong>North Pointe Church - Lutz, FL - Active</strong></option>
								<option value="2616" data-churchname="<strong>North Ridge Church - Marshfield, WI - Active</strong>" data-street="1021 West McMillan Street" data-city="Marshfield" data-state="WI" data-zip="54449" style="color: #000;"><strong>North Ridge Church - Marshfield, WI - Active</strong></option>
								<option value="2665" data-churchname="North Rock Hill Church - Rock Hill, SC" data-street="2562 Mount Gallant Road" data-city="Rock Hill" data-state="SC" data-zip="29732" style="color: #aaa;">North Rock Hill Church - Rock Hill, SC</option>
								<option value="1550" data-churchname="North Valley Fellowship - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">North Valley Fellowship - NV</option>
								<option value="2791" data-churchname="Northeast Bible Church - Garden Ridge, TX" data-street="19185 Farm to Market Road 2252" data-city="Garden Ridge" data-state="TX" data-zip="78266" style="color: #aaa;">Northeast Bible Church - Garden Ridge, TX</option>
								<option value="2294" data-churchname="Northland" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Northland</option>
								<option value="1276" data-churchname="<strong>Northlands Church - Norcross, GA - Active</strong>" data-street="6630 Bay Circle" data-city="Norcross" data-state="GA" data-zip="30071" style="color: #000;"><strong>Northlands Church - Norcross, GA - Active</strong></option>
								<option value="2463" data-churchname="<strong>Northshore Community Church - Woodinville, WA - Active</strong>" data-street="19391 Northeast 145th Street" data-city="Woodinville" data-state="WA" data-zip="98072" style="color: #000;"><strong>Northshore Community Church - Woodinville, WA - Active</strong></option>
								<option value="1816" data-churchname="Northstar Community Church - Loveland, OH" data-street="11020 S. Lebanon Rd." data-city="Loveland" data-state="OH" data-zip="45140" style="color: #aaa;">Northstar Community Church - Loveland, OH</option>
								<option value="2744" data-churchname="Northview - Anderson - Anderson, IN" data-street="1720 East 22nd Street" data-city="Anderson" data-state="IN" data-zip="46016" style="color: #aaa;">Northview - Anderson - Anderson, IN</option>
								<option value="2660" data-churchname="<strong>Northview - Binford - Indianapolis, IN - Active</strong>" data-street="6620 Northview Way" data-city="Indianapolis" data-state="IN" data-zip="46220" style="color: #000;"><strong>Northview - Binford - Indianapolis, IN - Active</strong></option>
								<option value="2746" data-churchname="<strong>Northview - Fishers - Fishers, IN - Active</strong>" data-street="14842 East 136th Street" data-city="Fishers" data-state="IN" data-zip="46037" style="color: #000;"><strong>Northview - Fishers - Fishers, IN - Active</strong></option>
								<option value="2745" data-churchname="Northview - Carmel - Carmel, IN" data-street="12900 Hazel Dell Parkway" data-city="Carmel" data-state="IN" data-zip="46033" style="color: #aaa;">Northview - Carmel - Carmel, IN</option>
								<option value="2461" data-churchname="<strong>Northwest Church - NWC Federal Way - Federal Way, WA - Active</strong>" data-street="34800 21st Avenue Southwest" data-city="Federal Way" data-state="WA" data-zip="98023" style="color: #000;"><strong>Northwest Church - NWC Federal Way - Federal Way, WA - Active</strong></option>
								<option value="2425" data-churchname="Not Known - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Not Known - FL</option>
								<option value="2060" data-churchname="<strong>OC United - Fullerton, CA - Active</strong>" data-street="418 West Commonwealth Avenue" data-city="Fullerton" data-state="CA" data-zip="92832" style="color: #000;"><strong>OC United - Fullerton, CA - Active</strong></option>
								<option value="1252" data-churchname="Oak Hill Baptist Church - Millen, GA" data-street="3233 Oak Hill Church Rd" data-city="Millen" data-state="GA" data-zip="30442" style="color: #aaa;">Oak Hill Baptist Church - Millen, GA</option>
								<option value="2287" data-churchname="<strong>Oakwood Community Church - Tampa, FL - Active</strong>" data-street="11209 Casey Road " data-city="Tampa" data-state="FL" data-zip="33618" style="color: #000;"><strong>Oakwood Community Church - Tampa, FL - Active</strong></option>
								<option value="2673" data-churchname="<strong>Oakwood Presbyterian Church - State College, PA - Active</strong>" data-street="1865 Waddle Road" data-city="State College" data-state="PA" data-zip="16803" style="color: #000;"><strong>Oakwood Presbyterian Church - State College, PA - Active</strong></option>
								<option value="1989" data-churchname="<strong>Oasis Church - Plevnea, KS - Active</strong>" data-street="" data-city="Plevnea" data-state="KS" data-zip="0" style="color: #000;"><strong>Oasis Church - Plevnea, KS - Active</strong></option>
								<option value="1814" data-churchname="Oasis City Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Oasis City Church - OH</option>
								<option value="2538" data-churchname="Ocean Beach Nazarene - San Diego, CA" data-street="" data-city="San Diego" data-state="CA" data-zip="0" style="color: #aaa;">Ocean Beach Nazarene - San Diego, CA</option>
								<option value="2483" data-churchname="<strong>Ocean View Church  - San Diego, CA - Active</strong>" data-street="2460 Palm Avenue" data-city="San Diego" data-state="CA" data-zip="92154" style="color: #000;"><strong>Ocean View Church - San Diego, CA - Active</strong></option>
								<option value="1661" data-churchname="Oconee Heights Baptist Church - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Oconee Heights Baptist Church - GA</option>
								<option value="1679" data-churchname="Oconee Street UMC - Athens, GA" data-street="595 Oconee Street" data-city="Athens" data-state="GA" data-zip="30605" style="color: #aaa;">Oconee Street UMC - Athens, GA</option>
								<option value="2190" data-churchname="<strong>Ogilville Christian Church - Columbus, IN - Active</strong>" data-street="7891 West 450 South" data-city="Columbus" data-state="IN" data-zip="47201" style="color: #000;"><strong>Ogilville Christian Church - Columbus, IN - Active</strong></option>
								<option value="2478" data-churchname="<strong>Ohio Ministry Network - OH - Active</strong>" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #000;"><strong>Ohio Ministry Network - OH - Active</strong></option>
								<option value="2500" data-churchname="Old Church - Independence, KS" data-street=" " data-city="Independence" data-state="KS" data-zip="67301" style="color: #aaa;">Old Church - Independence, KS</option>
								<option value="1820" data-churchname="Old German Baptist Brethren - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Old German Baptist Brethren - OH</option>
								<option value="2350" data-churchname="Olive Branch Christian Fellowship - San Diego, CA" data-street="12540 Oaks North Dr." data-city="San Diego" data-state="CA" data-zip="92128" style="color: #aaa;">Olive Branch Christian Fellowship - San Diego, CA</option>
								<option value="1887" data-churchname="<strong>Olive Crest - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>Olive Crest - CA - Active</strong></option>
								<option value="1716" data-churchname="One Church - Longwood, FL" data-street="1675 Dixon Rd" data-city="Longwood" data-state="FL" data-zip="32779" style="color: #aaa;">One Church - Longwood, FL</option>
								<option value="2658" data-churchname="One Church: Park District - Orlando, FL" data-street="2416 North Mills Avenue" data-city="Orlando" data-state="FL" data-zip="32803" style="color: #aaa;">One Church: Park District - Orlando, FL</option>
								<option value="1285" data-churchname="<strong>One Heart Church - Norcross, GA - Active</strong>" data-street="706 North Peachtree Street" data-city="Norcross" data-state="GA" data-zip="30071" style="color: #000;"><strong>One Heart Church - Norcross, GA - Active</strong></option>
								<option value="2476" data-churchname="<strong>One Life Church - Evansville, IN - Active</strong>" data-street="" data-city="Evansville" data-state="IN" data-zip="0" style="color: #000;"><strong>One Life Church - Evansville, IN - Active</strong></option>
								<option value="1717" data-churchname="Orlando Baptist Church - Orlando, FL" data-street="500 S Semoran Blvd" data-city="Orlando" data-state="FL" data-zip="32807" style="color: #aaa;">Orlando Baptist Church - Orlando, FL</option>
								<option value="2679" data-churchname="Orlando Church of Christ - Orlando, FL" data-street="2400 South Goldenrod Road" data-city="Orlando" data-state="FL" data-zip="32822" style="color: #aaa;">Orlando Church of Christ - Orlando, FL</option>
								<option value="1948" data-churchname="Orlando World Outreach Center - Orlando, FL" data-street="4365 Kennedy Ave" data-city="Orlando" data-state="FL" data-zip="32812" style="color: #aaa;">Orlando World Outreach Center - Orlando, FL</option>
								<option value="2686" data-churchname="Our Lady of the Rosary - San Diego, CA" data-street="1668 State Street" data-city="San Diego" data-state="CA" data-zip="92101" style="color: #aaa;">Our Lady of the Rosary - San Diego, CA</option>
								<option value="2112" data-churchname="<strong>Our Redeemer Lutheran Church  - Wauwatosa, WI - Active</strong>" data-street="10025 West North Avenue" data-city="Wauwatosa" data-state="WI" data-zip="53226" style="color: #000;"><strong>Our Redeemer Lutheran Church - Wauwatosa, WI - Active</strong></option>
								<option value="2282" data-churchname="Our Savior Lutheran Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Our Savior Lutheran Church - FL</option>
								<option value="2530" data-churchname="<strong>Overflow Church - Valrico, FL - Active</strong>" data-street="4929 Bell Shoals Road" data-city="Valrico" data-state="FL" data-zip="33596" style="color: #000;"><strong>Overflow Church - Valrico, FL - Active</strong></option>
								<option value="2749" data-churchname="Overflow Church - Indianapolis, IN" data-street="" data-city="Indianapolis" data-state="IN" data-zip="0" style="color: #aaa;">Overflow Church - Indianapolis, IN</option>
								<option value="1940" data-churchname="<strong>Overland Park Church of Christ - Overland Park, KS - Active</strong>" data-street="13400 W. 119th St" data-city="Overland Park" data-state="KS" data-zip="660213" style="color: #000;"><strong>Overland Park Church of Christ - Overland Park, KS - Active</strong></option>
								<option value="2497" data-churchname="Oxford Baptist Church - Oxford, MS" data-street="304 County Road 101" data-city="Oxford" data-state="MS" data-zip="38655" style="color: #aaa;">Oxford Baptist Church - Oxford, MS</option>
								<option value="2159" data-churchname="PBC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">PBC</option>
								<option value="2061" data-churchname="Pacific Crossroads Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Pacific Crossroads Church - CA</option>
								<option value="2185" data-churchname="Palm Beach Atlantic University" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Palm Beach Atlantic University</option>
								<option value="1669" data-churchname="Park" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Park</option>
								<option value="2748" data-churchname="Park Place Church of God - Anderson, IN" data-street="501 College Drive" data-city="Anderson" data-state="IN" data-zip="46012" style="color: #aaa;">Park Place Church of God - Anderson, IN</option>
								<option value="1569" data-churchname="<strong>Parkridge - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Parkridge - FL - Active</strong></option>
								<option value="2751" data-churchname="Parkside Church - Fishers, IN" data-street="" data-city="Fishers" data-state="IN" data-zip="0" style="color: #aaa;">Parkside Church - Fishers, IN</option>
								<option value="2558" data-churchname="Paseo Del Rey Church  - Chula Vista , CA" data-street="" data-city="Chula Vista " data-state="CA" data-zip="0" style="color: #aaa;">Paseo Del Rey Church - Chula Vista , CA</option>
								<option value="2113" data-churchname="Passion City Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Passion City Church</option>
								<option value="1863" data-churchname="Passion City Church " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Passion City Church </option>
								<option value="2750" data-churchname="<strong>Pathway Community Church - Fort Wayne, IN - Active</strong>" data-street="1010 Carroll Road" data-city="Fort Wayne" data-state="IN" data-zip="46845" style="color: #000;"><strong>Pathway Community Church - Fort Wayne, IN - Active</strong></option>
								<option value="1295" data-churchname="Peachtree Corners Baptist Church - Norcross, GA" data-street="4480 Peachtree Corners Circle" data-city="Norcross" data-state="GA" data-zip="30092" style="color: #aaa;">Peachtree Corners Baptist Church - Norcross, GA</option>
								<option value="1312" data-churchname="<strong>Peachtree Presbyterian Church - Atlanta, GA - Active</strong>" data-street="3434 Roswell Road Northwest" data-city="Atlanta" data-state="GA" data-zip="30305" style="color: #000;"><strong>Peachtree Presbyterian Church - Atlanta, GA - Active</strong></option>
								<option value="2097" data-churchname="Pembroke FBC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Pembroke FBC</option>
								<option value="2752" data-churchname="<strong>Pennington Park Church - Fishers, IN - Active</strong>" data-street="13222 East 126th Street" data-city="Fishers" data-state="IN" data-zip="46037" style="color: #000;"><strong>Pennington Park Church - Fishers, IN - Active</strong></option>
								<option value="1810" data-churchname="<strong>Peoples Church Network - Cincinnati , OH - Active</strong>" data-street="" data-city="Cincinnati " data-state="OH" data-zip="45219" style="color: #000;"><strong>Peoples Church Network - Cincinnati , OH - Active</strong></option>
								<option value="1288" data-churchname="<strong>Perimeter Church - Johns Creek, GA - Active</strong>" data-street="9500 Medlock Bridge Road" data-city="Johns Creek" data-state="GA" data-zip="30097" style="color: #000;"><strong>Perimeter Church - Johns Creek, GA - Active</strong></option>
								<option value="2169" data-churchname="Peter Road Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Peter Road Baptist Church</option>
								<option value="2170" data-churchname="Peters Road Baptist Chuch" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Peters Road Baptist Chuch</option>
								<option value="2168" data-churchname="Peters Road Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Peters Road Baptist Church</option>
								<option value="1391" data-churchname="<strong>Philema Road Baptist Church - Leesburg, GA - Active</strong>" data-street="114 Stocks Dairy Rd" data-city="Leesburg" data-state="GA" data-zip="31763" style="color: #000;"><strong>Philema Road Baptist Church - Leesburg, GA - Active</strong></option>
								<option value="1996" data-churchname="<strong>Pickerington Church of the Nazarene - Pickerington, OH - Active</strong>" data-street="11775 Pickerington Rd. NW" data-city="Pickerington" data-state="OH" data-zip="43147" style="color: #000;"><strong>Pickerington Church of the Nazarene - Pickerington, OH - Active</strong></option>
								<option value="1244" data-churchname="<strong>Pine Forest United Methodist Church - Dublin, GA - Active</strong>" data-street="400 Woods Ave." data-city="Dublin" data-state="GA" data-zip="31021" style="color: #000;"><strong>Pine Forest United Methodist Church - Dublin, GA - Active</strong></option>
								<option value="2753" data-churchname="<strong>Pinehills Church - Fort Wayne, IN - Active</strong>" data-street="4704 Carroll Road" data-city="Fort Wayne" data-state="IN" data-zip="46818" style="color: #000;"><strong>Pinehills Church - Fort Wayne, IN - Active</strong></option>
								<option value="2146" data-churchname="<strong>Piney Grove Missionary Baptist Church - Carrollton, GA - Active</strong>" data-street="79 Piney Grove Road" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #000;"><strong>Piney Grove Missionary Baptist Church - Carrollton, GA - Active</strong></option>
								<option value="2166" data-churchname="Placerita Bible Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Placerita Bible Church</option>
								<option value="2754" data-churchname="<strong>Pleasant Dale Church of the Brethren - Decatur, IN - Active</strong>" data-street="4504 West 300 North" data-city="Decatur" data-state="IN" data-zip="46733" style="color: #000;"><strong>Pleasant Dale Church of the Brethren - Decatur, IN - Active</strong></option>
								<option value="1447" data-churchname="Pleasant Hill Baptist Church - Martin, GA" data-street="1333 Pleasant Hill Rd" data-city="Martin" data-state="GA" data-zip="30557" style="color: #aaa;">Pleasant Hill Baptist Church - Martin, GA</option>
								<option value="1443" data-churchname="Pleasant Hill Missionary Baptist Church - Albany, GA" data-street="115 Moultrie Rd" data-city="Albany" data-state="GA" data-zip="31705" style="color: #aaa;">Pleasant Hill Missionary Baptist Church - Albany, GA</option>
								<option value="1685" data-churchname="<strong>Pleasant Valley North Baptist Church - Rome, GA - Active</strong>" data-street="735 Old Summerville Road NW" data-city="Rome" data-state="GA" data-zip="30165" style="color: #000;"><strong>Pleasant Valley North Baptist Church - Rome, GA - Active</strong></option>
								<option value="1850" data-churchname="<strong>Pleasant Valley North Baptist Church - Rome, GA - Active</strong>" data-street="735 Old Summerville Road" data-city="Rome" data-state="GA" data-zip="30165" style="color: #000;"><strong>Pleasant Valley North Baptist Church - Rome, GA - Active</strong></option>
								<option value="1699" data-churchname="Pleasant Valley South Baptist Church - Silver Creek, GA" data-street="702 Pleasant Valley Road SE" data-city="Silver Creek" data-state="GA" data-zip="30173" style="color: #aaa;">Pleasant Valley South Baptist Church - Silver Creek, GA</option>
								<option value="2755" data-churchname="Pleasant View Bible Church - Warsaw, IN" data-street="2782 West 200 North" data-city="Warsaw" data-state="IN" data-zip="46580" style="color: #aaa;">Pleasant View Bible Church - Warsaw, IN</option>
								<option value="2756" data-churchname="Plymouth Community Church - Plymouth, IN" data-street="11802 Lincoln Highway" data-city="Plymouth" data-state="IN" data-zip="46563" style="color: #aaa;">Plymouth Community Church - Plymouth, IN</option>
								<option value="1448" data-churchname="<strong>Poplar Springs Baptist Church - Lavonia, GA - Active</strong>" data-street="67 Poplar Springs Church Road" data-city="Lavonia" data-state="GA" data-zip="30553" style="color: #000;"><strong>Poplar Springs Baptist Church - Lavonia, GA - Active</strong></option>
								<option value="2498" data-churchname="Porterdale Baptist Church - Porterdale, GA" data-street="2 Ash Street" data-city="Porterdale" data-state="GA" data-zip="30014" style="color: #aaa;">Porterdale Baptist Church - Porterdale, GA</option>
								<option value="1551" data-churchname="Potter\'s House - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Potter's House - NV</option>
								<option value="1552" data-churchname="Potter\'s Place - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Potter's Place - NV</option>
								<option value="1421" data-churchname="Praise Community Church - Lawrenceville, GA" data-street="329 Grayson Highway" data-city="Lawrenceville" data-state="GA" data-zip="30046" style="color: #aaa;">Praise Community Church - Lawrenceville, GA</option>
								<option value="1982" data-churchname="Presbyterian Community Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Presbyterian Community Church - FL</option>
								<option value="1352" data-churchname="<strong>Prince Avenue Baptist Church - Watkinsville, GA - Active</strong>" data-street="3691 Monrue Hwy" data-city="Watkinsville" data-state="GA" data-zip="30601" style="color: #000;"><strong>Prince Avenue Baptist Church - Watkinsville, GA - Active</strong></option>
								<option value="1617" data-churchname="Prince of Peace - Appleton, WI" data-street="2330 E Calumet St" data-city="Appleton" data-state="WI" data-zip="54915" style="color: #aaa;">Prince of Peace - Appleton, WI</option>
								<option value="1877" data-churchname="Prism" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Prism</option>
								<option value="1760" data-churchname="Promised Land Messianic Fellowship" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Promised Land Messianic Fellowship</option>
								<option value="2689" data-churchname="<strong>Public Church - Cleveland, TN - Active</strong>" data-street="850 17th Street Northwest" data-city="Cleveland" data-state="TN" data-zip="37311" style="color: #000;"><strong>Public Church - Cleveland, TN - Active</strong></option>
								<option value="2568" data-churchname="<strong>Purcellville Baptist Church - Purcellville, VA - Active</strong>" data-street="601 Yaxley Drive" data-city="Purcellville" data-state="VA" data-zip="20132" style="color: #000;"><strong>Purcellville Baptist Church - Purcellville, VA - Active</strong></option>
								<option value="2620" data-churchname="<strong>Quest Church - El Cajon, CA - Active</strong>" data-street="9590 Chocolate Summit Drive" data-city="El Cajon" data-state="CA" data-zip="92021" style="color: #000;"><strong>Quest Church - El Cajon, CA - Active</strong></option>
								<option value="2724" data-churchname="<strong>RISE Church - Indianapolis, IN - Active</strong>" data-street="6001 West 52nd Street" data-city="Indianapolis" data-state="IN" data-zip="46254" style="color: #000;"><strong>RISE Church - Indianapolis, IN - Active</strong></option>
								<option value="1763" data-churchname="<strong>Radiant Church - South Tampa - Tampa, FL - Active</strong>" data-street="3938 S Dale Mabry Hwy" data-city="Tampa" data-state="FL" data-zip="33611" style="color: #000;"><strong>Radiant Church - South Tampa - Tampa, FL - Active</strong></option>
								<option value="1836" data-churchname="Radiant Life Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Radiant Life Church - OH</option>
								<option value="2466" data-churchname="<strong>Reach Church - Redmond, WA - Active</strong>" data-street="" data-city="Redmond" data-state="WA" data-zip="98052" style="color: #000;"><strong>Reach Church - Redmond, WA - Active</strong></option>
								<option value="1553" data-churchname="Real Life Church - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Real Life Church - NV</option>
								<option value="2253" data-churchname="Real Life Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Real Life Church</option>
								<option value="2757" data-churchname="Real Life Church - Greenfield, IN" data-street="971 West US Highway 40" data-city="Greenfield" data-state="IN" data-zip="46140" style="color: #aaa;">Real Life Church - Greenfield, IN</option>
								<option value="2383" data-churchname="Reality LA" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Reality LA</option>
								<option value="1247" data-churchname="<strong>Redeemer Baptist Church - Dublin, GA - Active</strong>" data-street="1882 Trinity Hills Drive" data-city="Dublin" data-state="GA" data-zip="31021" style="color: #000;"><strong>Redeemer Baptist Church - Dublin, GA - Active</strong></option>
								<option value="2533" data-churchname="<strong>Redeemer Bible Church  - Greenwood, IN - Active</strong>" data-street="1354 East Worthsville Road" data-city="Greenwood" data-state="IN" data-zip="46143" style="color: #000;"><strong>Redeemer Bible Church - Greenwood, IN - Active</strong></option>
								<option value="1318" data-churchname="Redeemer Community Church - Fuquay Varina, NC" data-street="P.O. Box 808" data-city="Fuquay Varina" data-state="NC" data-zip="27526" style="color: #aaa;">Redeemer Community Church - Fuquay Varina, NC</option>
								<option value="2579" data-churchname="Redeemer Community Church - Birmingham, AL" data-street="4022 4th Ave S" data-city="Birmingham" data-state="AL" data-zip="35222" style="color: #aaa;">Redeemer Community Church - Birmingham, AL</option>
								<option value="2678" data-churchname="Redeemer Fellowship - Johnson County - Overland Park, KS" data-street="8714 Antioch Road" data-city="Overland Park" data-state="KS" data-zip="66212" style="color: #aaa;">Redeemer Fellowship - Johnson County - Overland Park, KS</option>
								<option value="1294" data-churchname="<strong>Redeemer Presbyterian Church - Athens, GA - Active</strong>" data-street="165 Pulaski St" data-city="Athens" data-state="GA" data-zip="30601" style="color: #000;"><strong>Redeemer Presbyterian Church - Athens, GA - Active</strong></option>
								<option value="2297" data-churchname="<strong>Redeemer Presbyterian Church - Encinitas, CA - Active</strong>" data-street="1831 South El Camino Real" data-city="Encinitas" data-state="CA" data-zip="92024" style="color: #000;"><strong>Redeemer Presbyterian Church - Encinitas, CA - Active</strong></option>
								<option value="2758" data-churchname="<strong>Redeemer Presbyterian Church - Indianapolis, IN - Active</strong>" data-street="1505 North Delaware Street" data-city="Indianapolis" data-state="IN" data-zip="46202" style="color: #000;"><strong>Redeemer Presbyterian Church - Indianapolis, IN - Active</strong></option>
								<option value="1841" data-churchname="Redemption Bible Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Redemption Bible Church - OH</option>
								<option value="2249" data-churchname="Redland Hills Church - Wetumpka, AL" data-street="3105 Rifle Range Rd " data-city="Wetumpka" data-state="AL" data-zip="36093" style="color: #aaa;">Redland Hills Church - Wetumpka, AL</option>
								<option value="2653" data-churchname="Rejoice In the Lord Ministries - Apopka, FL" data-street="8053 Gilliam Road" data-city="Apopka" data-state="FL" data-zip="32703" style="color: #aaa;">Rejoice In the Lord Ministries - Apopka, FL</option>
								<option value="1640" data-churchname="Relentless Grace - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Relentless Grace - GA</option>
								<option value="1478" data-churchname="<strong>Relevant Church - Tampa, FL - Active</strong>" data-street="1704 N 16th St" data-city="Tampa" data-state="FL" data-zip="33605" style="color: #000;"><strong>Relevant Church - Tampa, FL - Active</strong></option>
								<option value="1554" data-churchname="Remnant - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Remnant - NV</option>
								<option value="1340" data-churchname="<strong>Renovation Church - Atlanta, GA - Active</strong>" data-street="1775 Water Place Southeast" data-city="Atlanta" data-state="GA" data-zip="30339" style="color: #000;"><strong>Renovation Church - Atlanta, GA - Active</strong></option>
								<option value="2613" data-churchname="Resonate Church - Decatur, GA" data-street="185 Sams Street" data-city="Decatur" data-state="GA" data-zip="30030" style="color: #aaa;">Resonate Church - Decatur, GA</option>
								<option value="1740" data-churchname="<strong>Restoration Church  - Gardner , KS - Active</strong>" data-street="16200 S Kill Creek Rd" data-city="Gardner " data-state="KS" data-zip="66030" style="color: #000;"><strong>Restoration Church - Gardner , KS - Active</strong></option>
								<option value="1891" data-churchname="Restoration Los Angeles - Los Angeles, CA" data-street="383 S. Margaret Ave" data-city="Los Angeles" data-state="CA" data-zip="90022" style="color: #aaa;">Restoration Los Angeles - Los Angeles, CA</option>
								<option value="1266" data-churchname="<strong>Restoration Presbyterian Church - Buford, GA - Active</strong>" data-street="4907 Golden Parkway" data-city="Buford" data-state="GA" data-zip="30518" style="color: #000;"><strong>Restoration Presbyterian Church - Buford, GA - Active</strong></option>
								<option value="2382" data-churchname="<strong>Restoration Rome - Rome, GA - Active</strong>" data-street="1400 Crane Street" data-city="Rome" data-state="GA" data-zip="30165" style="color: #000;"><strong>Restoration Rome - Rome, GA - Active</strong></option>
								<option value="1738" data-churchname="<strong>Restore Community Church - Kansas City, MO - Active</strong>" data-street="7701 NW Barry Rd" data-city="Kansas City" data-state="MO" data-zip="64153" style="color: #000;"><strong>Restore Community Church - Kansas City, MO - Active</strong></option>
								<option value="2482" data-churchname="Restored South Bay" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Restored South Bay</option>
								<option value="1880" data-churchname="Resurrection Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Resurrection Church</option>
								<option value="1335" data-churchname="<strong>Resurrection Presbyterian - Athens, GA - Active</strong>" data-street="P.O. Box 1883" data-city="Athens" data-state="GA" data-zip="30603" style="color: #000;"><strong>Resurrection Presbyterian - Athens, GA - Active</strong></option>
								<option value="1872" data-churchname="Reunion Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Reunion Church</option>
								<option value="1582" data-churchname="<strong>Reveal Fellowship - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Reveal Fellowship - FL - Active</strong></option>
								<option value="1972" data-churchname="Revival Life - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Revival Life - FL</option>
								<option value="1607" data-churchname="<strong>Rhema Community Church - Brunswick , GA - Active</strong>" data-street="154 Cornerstone Drive" data-city="Brunswick " data-state="GA" data-zip="31523" style="color: #000;"><strong>Rhema Community Church - Brunswick , GA - Active</strong></option>
								<option value="2062" data-churchname="Richfield Community Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">Richfield Community Church - CA</option>
								<option value="1570" data-churchname="<strong>Rio Vista Community Church - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Rio Vista Community Church - FL - Active</strong></option>
								<option value="2038" data-churchname="<strong>Rise City Church - Lakeside, CA - Active</strong>" data-street="12150 Woodside Avenue" data-city="Lakeside" data-state="CA" data-zip="92040" style="color: #000;"><strong>Rise City Church - Lakeside, CA - Active</strong></option>
								<option value="1290" data-churchname="<strong>Rising Church - Buford, GA - Active</strong>" data-street="710 Power Avenue" data-city="Buford" data-state="GA" data-zip="30518" style="color: #000;"><strong>Rising Church - Buford, GA - Active</strong></option>
								<option value="1242" data-churchname="<strong>River Point Community Church - Demorest, GA - Active</strong>" data-street="350 Ansley Road" data-city="Demorest" data-state="GA" data-zip="30535" style="color: #000;"><strong>River Point Community Church - Demorest, GA - Active</strong></option>
								<option value="2312" data-churchname="River Point Community Church (Rabun) " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">River Point Community Church (Rabun) </option>
								<option value="1807" data-churchname="River of Life - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">River of Life - OH</option>
								<option value="2394" data-churchname="<strong>River of Life - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>River of Life - GA - Active</strong></option>
								<option value="2280" data-churchname="Riverland Hills Baptist Church - Irmo, SC" data-street="201 Lake Murray Boulevard" data-city="Irmo" data-state="SC" data-zip="29063" style="color: #aaa;">Riverland Hills Baptist Church - Irmo, SC</option>
								<option value="2295" data-churchname="<strong>Riverlawn Christian Church - Wichita, KS - Active</strong>" data-street="4243 N Meridian Ave" data-city="Wichita" data-state="KS" data-zip="67204" style="color: #000;"><strong>Riverlawn Christian Church - Wichita, KS - Active</strong></option>
								<option value="2120" data-churchname="Rivermont EPC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Rivermont EPC</option>
								<option value="1798" data-churchname="Rivers Crossing" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Rivers Crossing</option>
								<option value="1583" data-churchname="<strong>Riverside Church - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Riverside Church - FL - Active</strong></option>
								<option value="2118" data-churchname="Riverstone Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Riverstone Church</option>
								<option value="1224" data-churchname="Rock Bridge Community Church - Calhoun, GA" data-street="100 Peters Street" data-city="Calhoun" data-state="GA" data-zip="30701" style="color: #aaa;">Rock Bridge Community Church - Calhoun, GA</option>
								<option value="1720" data-churchname="Rock Church Point Loma - San Diego, CA" data-street="2277 Rosecrans St." data-city="San Diego" data-state="CA" data-zip="92106" style="color: #aaa;">Rock Church Point Loma - San Diego, CA</option>
								<option value="2759" data-churchname="<strong>Rock Point Church - Crawfordsville, IN - Active</strong>" data-street="429 West 150 South" data-city="Crawfordsville" data-state="IN" data-zip="47933" style="color: #000;"><strong>Rock Point Church - Crawfordsville, IN - Active</strong></option>
								<option value="2492" data-churchname="<strong>Rock of Grace - Kinsman  - Kinsman, OH - Active</strong>" data-street="6745 State Route 5" data-city="Kinsman" data-state="OH" data-zip="44428" style="color: #000;"><strong>Rock of Grace - Kinsman - Kinsman, OH - Active</strong></option>
								<option value="2490" data-churchname="Rock of Grace - Cortland - Cortland, OH" data-street="125 North Bank Street" data-city="Cortland" data-state="OH" data-zip="44410" style="color: #aaa;">Rock of Grace - Cortland - Cortland, OH</option>
								<option value="2471" data-churchname="<strong>Rockharbor - Mission Viejo - Mission Viejo, CA - Active</strong>" data-street="" data-city="Mission Viejo" data-state="CA" data-zip="92694" style="color: #000;"><strong>Rockharbor - Mission Viejo - Mission Viejo, CA - Active</strong></option>
								<option value="1876" data-churchname="<strong>Rockharbor Church - Active</strong>" data-street="" data-city="" data-state="" data-zip="" style="color: #000;"><strong>Rockharbor Church - Active</strong></option>
								<option value="2063" data-churchname="<strong>Rockharbor Church - Costa Mesa - Costa Mesa, CA - Active</strong>" data-street="3095 Redhill Ave" data-city="Costa Mesa" data-state="CA" data-zip="0" style="color: #000;"><strong>Rockharbor Church - Costa Mesa - Costa Mesa, CA - Active</strong></option>
								<option value="2319" data-churchname="<strong>Rocklane Christian Church - Greenwood, IN - Active</strong>" data-street="4430 Rocklane Road" data-city="Greenwood" data-state="IN" data-zip="46143" style="color: #000;"><strong>Rocklane Christian Church - Greenwood, IN - Active</strong></option>
								<option value="2316" data-churchname="Rocky Grove Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Rocky Grove Baptist Church</option>
								<option value="2014" data-churchname="Roopville Road Baptist Church - Roopville, GA" data-street="835 U.S. 27" data-city="Roopville" data-state="GA" data-zip="30170" style="color: #aaa;">Roopville Road Baptist Church - Roopville, GA</option>
								<option value="1712" data-churchname="<strong>Rosemont Baptist Church - LaGrange, GA - Active</strong>" data-street="3794 Hamilton Road" data-city="LaGrange" data-state="GA" data-zip="30241" style="color: #000;"><strong>Rosemont Baptist Church - LaGrange, GA - Active</strong></option>
								<option value="2603" data-churchname="Rust Chapel United Methodist Church - Oxford, GA" data-street="1214 North Emory Street" data-city="Oxford" data-state="GA" data-zip="30054" style="color: #aaa;">Rust Chapel United Methodist Church - Oxford, GA</option>
								<option value="2035" data-churchname="S" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">S</option>
								<option value="1666" data-churchname="<strong>SBCC - Sturgeon Bay, WI - Active</strong>" data-street="" data-city="Sturgeon Bay" data-state="WI" data-zip="0" style="color: #000;"><strong>SBCC - Sturgeon Bay, WI - Active</strong></option>
								<option value="1885" data-churchname="<strong>Saddleback - Lake Forest - Lake Forest, CA - Active</strong>" data-street="1 Saddleback Parkway" data-city="Lake Forest" data-state="CA" data-zip="92630" style="color: #000;"><strong>Saddleback - Lake Forest - Lake Forest, CA - Active</strong></option>
								<option value="2225" data-churchname="Saddleback Church - San Diego - San Diego, CA" data-street="Canyon Crest Academy 5951 Village Center Loop Rd." data-city="San Diego" data-state="CA" data-zip="92130" style="color: #aaa;">Saddleback Church - San Diego - San Diego, CA</option>
								<option value="2072" data-churchname="<strong>Saddleback-Anaheim - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>Saddleback-Anaheim - CA - Active</strong></option>
								<option value="2229" data-churchname="<strong>Saddleback-Yorba Linda - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>Saddleback-Yorba Linda - CA - Active</strong></option>
								<option value="1788" data-churchname="Safe Families for Children  - Greater Cincinnati  - Cincinnati, OH" data-street="11199 Montgomery Road " data-city="Cincinnati" data-state="OH" data-zip="45040" style="color: #aaa;">Safe Families for Children - Greater Cincinnati - Cincinnati, OH</option>
								<option value="1291" data-churchname="<strong>Saint John Neuman - Lilburn, GA - Active</strong>" data-street="801 Tom Smith Road Southwest" data-city="Lilburn" data-state="GA" data-zip="30047" style="color: #000;"><strong>Saint John Neuman - Lilburn, GA - Active</strong></option>
								<option value="1291" data-churchname="<strong>Saint John\'s - Lilburn, GA - Active</strong>" data-street="801 Tom Smith Road Southwest" data-city="Lilburn" data-state="GA" data-zip="30047" style="color: #000;"><strong>Saint John's - Lilburn, GA - Active</strong></option>
								<option value="1300" data-churchname="<strong>Saint Joseph\'s - Athens, GA - Active</strong>" data-street="958 Epps Bridge Parkway" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>Saint Joseph's - Athens, GA - Active</strong></option>
								<option value="1217" data-churchname="<strong>Saint Luke UMC - Columbus, GA - Active</strong>" data-street="P. O. Box 867" data-city="Columbus" data-state="GA" data-zip="31902" style="color: #000;"><strong>Saint Luke UMC - Columbus, GA - Active</strong></option>
								<option value="1217" data-churchname="<strong>Saint Luke\'s UMC - Columbus, GA - Active</strong>" data-street="P. O. Box 867" data-city="Columbus" data-state="GA" data-zip="31902" style="color: #000;"><strong>Saint Luke's UMC - Columbus, GA - Active</strong></option>
								<option value="1221" data-churchname="Saint Marguerite\'s - Lawrenceville, GA" data-street="85 Gloster Rd. NW" data-city="Lawrenceville" data-state="GA" data-zip="30044" style="color: #aaa;">Saint Marguerite's - Lawrenceville, GA</option>
								<option value="1286" data-churchname="<strong>Saint Monica\'s Catholic Church - Duluth, GA - Active</strong>" data-street="1700 Buford Highway" data-city="Duluth" data-state="GA" data-zip="30097" style="color: #000;"><strong>Saint Monica's Catholic Church - Duluth, GA - Active</strong></option>
								<option value="1723" data-churchname="<strong>Saint Nicholas - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Saint Nicholas - GA - Active</strong></option>
								<option value="1723" data-churchname="<strong>Saint Nicholases - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Saint Nicholases - GA - Active</strong></option>
								<option value="1723" data-churchname="<strong>Saint Nick\'s - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>Saint Nick's - GA - Active</strong></option>
								<option value="1223" data-churchname="<strong>Salem Baptist Church - Lexington, GA - Active</strong>" data-street="694 Salem Church Road" data-city="Lexington" data-state="GA" data-zip="30648" style="color: #000;"><strong>Salem Baptist Church - Lexington, GA - Active</strong></option>
								<option value="1736" data-churchname="<strong>Salem Grace - Salem, IL - Active</strong>" data-street="1900 N. Broadway " data-city="Salem" data-state="IL" data-zip="62881" style="color: #000;"><strong>Salem Grace - Salem, IL - Active</strong></option>
								<option value="1753" data-churchname="Salem Grace Church of the Nazarene " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Salem Grace Church of the Nazarene </option>
								<option value="2795" data-churchname="Salem United Church of Christ - Fort Wayne, IN" data-street="2401 Lake Avenue" data-city="Fort Wayne" data-state="IN" data-zip="46805" style="color: #aaa;">Salem United Church of Christ - Fort Wayne, IN</option>
								<option value="1665" data-churchname="Sargent Baptist" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Sargent Baptist</option>
								<option value="2154" data-churchname="<strong>Saxeville Community Church - Saxeville, WI - Active</strong>" data-street="W4616 County Rd A" data-city="Saxeville" data-state="WI" data-zip="54984" style="color: #000;"><strong>Saxeville Community Church - Saxeville, WI - Active</strong></option>
								<option value="1822" data-churchname="Scarlet City Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Scarlet City Church - OH</option>
								<option value="2354" data-churchname="Seacoast Community Church - Encinitas, CA" data-street="1050 Regal Rd." data-city="Encinitas" data-state="CA" data-zip="92024" style="color: #aaa;">Seacoast Community Church - Encinitas, CA</option>
								<option value="2018" data-churchname="<strong>Second Baptist Church  - Lafayette, IN - Active</strong>" data-street="2925 South 18th Street" data-city="Lafayette" data-state="IN" data-zip="47909" style="color: #000;"><strong>Second Baptist Church - Lafayette, IN - Active</strong></option>
								<option value="2143" data-churchname="Second Baptist Church Lafayette - LaFayette, GA" data-street="500 West Main Street" data-city="LaFayette" data-state="GA" data-zip="30728" style="color: #aaa;">Second Baptist Church Lafayette - LaFayette, GA</option>
								<option value="1299" data-churchname="<strong>Seven Hills Fellowship - Rome, GA - Active</strong>" data-street="538 Broad Street" data-city="Rome" data-state="GA" data-zip="30161" style="color: #000;"><strong>Seven Hills Fellowship - Rome, GA - Active</strong></option>
								<option value="1555" data-churchname="Seventh Day Adventist - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Seventh Day Adventist - NV</option>
								<option value="2323" data-churchname="<strong>Seymour Christian Church - Seymour, IN - Active</strong>" data-street="915 Kasting Road" data-city="Seymour" data-state="IN" data-zip="47274" style="color: #000;"><strong>Seymour Christian Church - Seymour, IN - Active</strong></option>
								<option value="2178" data-churchname="Shadow Hills" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Shadow Hills</option>
								<option value="1708" data-churchname="Shadow Mountain Community Church  - El Cajon, CA" data-street="2100 Greenfield Dr, " data-city="El Cajon" data-state="CA" data-zip="92019" style="color: #aaa;">Shadow Mountain Community Church - El Cajon, CA</option>
								<option value="2792" data-churchname="Shearer Hills Baptist Church - San Antonio, TX" data-street="12615 San Pedro Avenue" data-city="San Antonio" data-state="TX" data-zip="78216" style="color: #aaa;">Shearer Hills Baptist Church - San Antonio, TX</option>
								<option value="2191" data-churchname="<strong>Shelbyville Community Church - Shelbyville, IN - Active</strong>" data-street="720 North 325 East" data-city="Shelbyville" data-state="IN" data-zip="46176" style="color: #000;"><strong>Shelbyville Community Church - Shelbyville, IN - Active</strong></option>
								<option value="1873" data-churchname="Shepherd Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Shepherd Church</option>
								<option value="2760" data-churchname="Shepherd Community Church of the Nazarene - Indianapolis, IN" data-street="4107 East Washington Street" data-city="Indianapolis" data-state="IN" data-zip="46201" style="color: #aaa;">Shepherd Community Church of the Nazarene - Indianapolis, IN</option>
								<option value="2650" data-churchname="<strong>Shepherd of the Hills Lutheran Church - Rancho Cucamonga, CA - Active</strong>" data-street="6080 Haven Avenue" data-city="Rancho Cucamonga" data-state="CA" data-zip="91737" style="color: #000;"><strong>Shepherd of the Hills Lutheran Church - Rancho Cucamonga, CA - Active</strong></option>
								<option value="1875" data-churchname="Shepherd of the hills " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Shepherd of the hills </option>
								<option value="1385" data-churchname="<strong>Sherwood Baptist Church - Albany, GA - Active</strong>" data-street="2201 Whispering Pines Road" data-city="Albany" data-state="GA" data-zip="31707" style="color: #000;"><strong>Sherwood Baptist Church - Albany, GA - Active</strong></option>
								<option value="2761" data-churchname="<strong>Sherwood Oaks Christian Church - Bloomington, IN - Active</strong>" data-street="2700 East Rogers Road" data-city="Bloomington" data-state="IN" data-zip="47401" style="color: #000;"><strong>Sherwood Oaks Christian Church - Bloomington, IN - Active</strong></option>
								<option value="1744" data-churchname="Shift Church - Gainesville, FL" data-street="3215 NW 15 Ave" data-city="Gainesville" data-state="FL" data-zip="32605" style="color: #aaa;">Shift Church - Gainesville, FL</option>
								<option value="2464" data-churchname="<strong>Sideris Church - Seattle, WA - Active</strong>" data-street="1610 North 41st Street" data-city="Seattle" data-state="WA" data-zip="98103" style="color: #000;"><strong>Sideris Church - Seattle, WA - Active</strong></option>
								<option value="2489" data-churchname="Simple Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Simple Church</option>
								<option value="1779" data-churchname="Sin City Church  - Henderson, NV" data-street="50 N Stephanie St" data-city="Henderson" data-state="NV" data-zip="89074" style="color: #aaa;">Sin City Church - Henderson, NV</option>
								<option value="2586" data-churchname="Solid Rock - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Solid Rock - GA</option>
								<option value="2004" data-churchname="Solid Rock" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Solid Rock</option>
								<option value="1951" data-churchname="Solid Rock" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Solid Rock</option>
								<option value="2162" data-churchname="<strong>Solid Rock - Lebanon, OH - Active</strong>" data-street="903 Union Rd" data-city="Lebanon" data-state="OH" data-zip="45036" style="color: #000;"><strong>Solid Rock - Lebanon, OH - Active</strong></option>
								<option value="1773" data-churchname="Solid Rock Fellowship" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Solid Rock Fellowship</option>
								<option value="2762" data-churchname="Soma Northwest - Indianapolis, IN" data-street="2815 East 62nd Street" data-city="Indianapolis" data-state="IN" data-zip="46220" style="color: #aaa;">Soma Northwest - Indianapolis, IN</option>
								<option value="2142" data-churchname="<strong>Sonrise Community Church - Summerville, GA - Active</strong>" data-street="141 West Washington Street" data-city="Summerville" data-state="GA" data-zip="30747" style="color: #000;"><strong>Sonrise Community Church - Summerville, GA - Active</strong></option>
								<option value="1843" data-churchname="Sonrise Community Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Sonrise Community Church - OH</option>
								<option value="2474" data-churchname="<strong>Sonrise Methodist Church - Fort Wayne, IN - Active</strong>" data-street="10125 Illinois Road" data-city="Fort Wayne" data-state="IN" data-zip="46804" style="color: #000;"><strong>Sonrise Methodist Church - Fort Wayne, IN - Active</strong></option>
								<option value="2064" data-churchname="<strong>South Bay Community Church - Torrance, CA - Active</strong>" data-street="2549 W 190th St." data-city="Torrance" data-state="CA" data-zip="90504" style="color: #000;"><strong>South Bay Community Church - Torrance, CA - Active</strong></option>
								<option value="1556" data-churchname="South Hills - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">South Hills - NV</option>
								<option value="2763" data-churchname="South Meridian Church of God - Anderson, IN" data-street="2402 Meridian Street" data-city="Anderson" data-state="IN" data-zip="46016" style="color: #aaa;">South Meridian Church of God - Anderson, IN</option>
								<option value="1330" data-churchname="<strong>South Metro Ministries - Sharpsburg, GA - Active</strong>" data-street="3935 GA-34" data-city="Sharpsburg" data-state="GA" data-zip="30277" style="color: #000;"><strong>South Metro Ministries - Sharpsburg, GA - Active</strong></option>
								<option value="1718" data-churchname="South Orlando Baptist Church - Orlando, FL" data-street="11513 S Orange Blossom Trail" data-city="Orlando" data-state="FL" data-zip="32837" style="color: #aaa;">South Orlando Baptist Church - Orlando, FL</option>
								<option value="1479" data-churchname="<strong>South Tampa Fellowship - Tampa, FL - Active</strong>" data-street="5101 Bayshore Blvd" data-city="Tampa" data-state="FL" data-zip="33611" style="color: #000;"><strong>South Tampa Fellowship - Tampa, FL - Active</strong></option>
								<option value="1557" data-churchname="Southern Hills Baptist - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Southern Hills Baptist - NV</option>
								<option value="1347" data-churchname="Southern Hills Christian Church - Carrollton, GA" data-street="1103 Georgia 113" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #aaa;">Southern Hills Christian Church - Carrollton, GA</option>
								<option value="2094" data-churchname="Southlands brea" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Southlands brea</option>
								<option value="1314" data-churchname="<strong>Southside Church - Peachtree City, GA - Active</strong>" data-street="777 Robinson Road" data-city="Peachtree City" data-state="GA" data-zip="30269" style="color: #000;"><strong>Southside Church - Peachtree City, GA - Active</strong></option>
								<option value="1683" data-churchname="<strong>Southside Church - Main Campus - Athens, GA - Active</strong>" data-street="8144 Jefferson Rd." data-city="Athens" data-state="GA" data-zip="30607" style="color: #000;"><strong>Southside Church - Main Campus - Athens, GA - Active</strong></option>
								<option value="2070" data-churchname="Sovereign Grace - Santa Ana" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Sovereign Grace - Santa Ana</option>
								<option value="1589" data-churchname="<strong>Spanish River Church - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>Spanish River Church - FL - Active</strong></option>
								<option value="1404" data-churchname="Spirit of Peace Lutheran Church - Richmond Hill, GA" data-street="15985 Highway 144" data-city="Richmond Hill" data-state="GA" data-zip="31324" style="color: #aaa;">Spirit of Peace Lutheran Church - Richmond Hill, GA</option>
								<option value="2783" data-churchname="Spring Creek Church - Pewaukee, WI" data-street="n35w22000 West Capitol Drive" data-city="Pewaukee" data-state="WI" data-zip="53072" style="color: #aaa;">Spring Creek Church - Pewaukee, WI</option>
								<option value="2577" data-churchname="Spring Valley Community Church - Spring Valley, CA" data-street="3310 Bancroft Drive" data-city="Spring Valley" data-state="CA" data-zip="91977" style="color: #aaa;">Spring Valley Community Church - Spring Valley, CA</option>
								<option value="1730" data-churchname="St James Methodist" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St James Methodist</option>
								<option value="1907" data-churchname="St John Episcopal" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St John Episcopal</option>
								<option value="2764" data-churchname="St John Indy - Indianapolis, IN" data-street="126 West Georgia Street" data-city="Indianapolis" data-state="IN" data-zip="46225" style="color: #aaa;">St John Indy - Indianapolis, IN</option>
								<option value="1929" data-churchname="St John Vianney" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St John Vianney</option>
								<option value="1946" data-churchname="St Joseph Catholic Church, Athens" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St Joseph Catholic Church, Athens</option>
								<option value="1653" data-churchname="<strong>St Luke\'s United Methodist Church - Orlando, FL - Active</strong>" data-street="4851 South Apopka Vineland Road" data-city="Orlando" data-state="FL" data-zip="32819" style="color: #000;"><strong>St Luke's United Methodist Church - Orlando, FL - Active</strong></option>
								<option value="2108" data-churchname="St Monicas " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St Monicas </option>
								<option value="1604" data-churchname="<strong>St Simons Community Church - St Simons Island, GA - Active</strong>" data-street="2700 Frederica Rd" data-city="St Simons Island" data-state="GA" data-zip="31522" style="color: #000;"><strong>St Simons Community Church - St Simons Island, GA - Active</strong></option>
								<option value="1605" data-churchname="<strong>St Simons UMC - St Simons Island, GA - Active</strong>" data-street="624 Ocean Blvd" data-city="St Simons Island" data-state="GA" data-zip="31522" style="color: #000;"><strong>St Simons UMC - St Simons Island, GA - Active</strong></option>
								<option value="2765" data-churchname="St Thomas Mar Thoma Church - Indianapolis, IN" data-street="6205 Rucker Road" data-city="Indianapolis" data-state="IN" data-zip="46220" style="color: #aaa;">St Thomas Mar Thoma Church - Indianapolis, IN</option>
								<option value="1966" data-churchname="St Vincent Vianney" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St Vincent Vianney</option>
								<option value="1230" data-churchname="<strong>St. Andrews Presbyterian Church - Columbus, GA - Active</strong>" data-street="4980 Hancock Rd" data-city="Columbus" data-state="GA" data-zip="31820" style="color: #000;"><strong>St. Andrews Presbyterian Church - Columbus, GA - Active</strong></option>
								<option value="1393" data-churchname="<strong>St. Anna\'s Catholic Church - Monroe, GA - Active</strong>" data-street="1401 Alcovy Street" data-city="Monroe" data-state="GA" data-zip="30655" style="color: #000;"><strong>St. Anna's Catholic Church - Monroe, GA - Active</strong></option>
								<option value="1918" data-churchname="<strong>St. Anne of Grace Episcopal Church - Seminole, FL - Active</strong>" data-street="6650 113th Street North" data-city="Seminole" data-state="FL" data-zip="33772" style="color: #000;"><strong>St. Anne of Grace Episcopal Church - Seminole, FL - Active</strong></option>
								<option value="1342" data-churchname="<strong>St. Benedict Catholic Church - Duluth, GA - Active</strong>" data-street="11045 Parsons Road" data-city="Duluth" data-state="GA" data-zip="30097" style="color: #000;"><strong>St. Benedict Catholic Church - Duluth, GA - Active</strong></option>
								<option value="1366" data-churchname="<strong>St. Brigid Catholic Church - Johns Creek, GA - Active</strong>" data-street="3400 Old Alabama Rd." data-city="Johns Creek" data-state="GA" data-zip="3022" style="color: #000;"><strong>St. Brigid Catholic Church - Johns Creek, GA - Active</strong></option>
								<option value="1237" data-churchname="St. George Catholic Church - Newnan, GA" data-street="771 Roscoe Road" data-city="Newnan" data-state="GA" data-zip="30263" style="color: #aaa;">St. George Catholic Church - Newnan, GA</option>
								<option value="1830" data-churchname="St. Gertrude - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">St. Gertrude - OH</option>
								<option value="1291" data-churchname="<strong>St. John Neumann Catholic Church - Lilburn, GA - Active</strong>" data-street="801 Tom Smith Road Southwest" data-city="Lilburn" data-state="GA" data-zip="30047" style="color: #000;"><strong>St. John Neumann Catholic Church - Lilburn, GA - Active</strong></option>
								<option value="2065" data-churchname="<strong>St. John\'s Lutheran Church - Orange, CA - Active</strong>" data-street="154 S Shaffer St." data-city="Orange" data-state="CA" data-zip="92866" style="color: #000;"><strong>St. John's Lutheran Church - Orange, CA - Active</strong></option>
								<option value="2534" data-churchname="St. John\'s Lutheran Church - Orange, CA" data-street="" data-city="Orange" data-state="CA" data-zip="0" style="color: #aaa;">St. John's Lutheran Church - Orange, CA</option>
								<option value="1300" data-churchname="<strong>St. Joseph Catholic Church - Athens, GA - Active</strong>" data-street="958 Epps Bridge Parkway" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>St. Joseph Catholic Church - Athens, GA - Active</strong></option>
								<option value="1945" data-churchname="St. Joseph\'s Catholic Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St. Joseph's Catholic Church</option>
								<option value="1300" data-churchname="<strong>St. Joseph\'s Catholic Parish - Athens, GA - Active</strong>" data-street="958 Epps Bridge Parkway" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>St. Joseph's Catholic Parish - Athens, GA - Active</strong></option>
								<option value="1300" data-churchname="<strong>St. Josephs - Athens, GA - Active</strong>" data-street="958 Epps Bridge Parkway" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>St. Josephs - Athens, GA - Active</strong></option>
								<option value="2766" data-churchname="St. Luke Catholic Church - Indianapolis, IN" data-street="7575 Holliday Drive East" data-city="Indianapolis" data-state="IN" data-zip="46260" style="color: #aaa;">St. Luke Catholic Church - Indianapolis, IN</option>
								<option value="1217" data-churchname="<strong>St. Luke United Methodist Church - Columbus, GA - Active</strong>" data-street="P. O. Box 867" data-city="Columbus" data-state="GA" data-zip="31902" style="color: #000;"><strong>St. Luke United Methodist Church - Columbus, GA - Active</strong></option>
								<option value="2767" data-churchname="St. Luke\'s United Methodist Church - Indianapolis, IN" data-street="100 West 86th Street" data-city="Indianapolis" data-state="IN" data-zip="46260" style="color: #aaa;">St. Luke's United Methodist Church - Indianapolis, IN</option>
								<option value="2141" data-churchname="St. Margaret\'s Episcopal Church - Carrollton, GA" data-street="606 Newnan Street" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #aaa;">St. Margaret's Episcopal Church - Carrollton, GA</option>
								<option value="2022" data-churchname="St. Margaret\'s Episcopal Church - Waxhaw, NC" data-street="8515 Rea Rd" data-city="Waxhaw" data-state="NC" data-zip="28173" style="color: #aaa;">St. Margaret's Episcopal Church - Waxhaw, NC</option>
								<option value="1221" data-churchname="St. Marguerite - Lawrenceville, GA" data-street="85 Gloster Rd. NW" data-city="Lawrenceville" data-state="GA" data-zip="30044" style="color: #aaa;">St. Marguerite - Lawrenceville, GA</option>
								<option value="1221" data-churchname="St. Marguerite d\'Youville Catholic Church - Lawrenceville, GA" data-street="85 Gloster Rd. NW" data-city="Lawrenceville" data-state="GA" data-zip="30044" style="color: #aaa;">St. Marguerite d'Youville Catholic Church - Lawrenceville, GA</option>
								<option value="2768" data-churchname="St. Maria Goretti (St Vincent de Paul Conference) - Westfield, IN" data-street="17102 Spring Mill Road" data-city="Westfield" data-state="IN" data-zip="46074" style="color: #aaa;">St. Maria Goretti (St Vincent de Paul Conference) - Westfield, IN</option>
								<option value="1257" data-churchname="St. Mark United Methodist Church - Columbus, GA" data-street="6795 Whitesville Road" data-city="Columbus" data-state="GA" data-zip="31904" style="color: #aaa;">St. Mark United Methodist Church - Columbus, GA</option>
								<option value="1419" data-churchname="<strong>St. Mark\'s Anglican Church - Moultrie, GA - Active</strong>" data-street="609 S Main St, Moultrie" data-city="Moultrie" data-state="GA" data-zip="31768" style="color: #000;"><strong>St. Mark's Anglican Church - Moultrie, GA - Active</strong></option>
								<option value="2503" data-churchname="St. Mary Magdalen Catholic Church - Altamonte Springs, FL" data-street="861 Maitland Avenue" data-city="Altamonte Springs" data-state="FL" data-zip="32701" style="color: #aaa;">St. Mary Magdalen Catholic Church - Altamonte Springs, FL</option>
								<option value="1218" data-churchname="St. Mary\'s Catholic Church - Rome, GA" data-street="911 N Broad St." data-city="Rome" data-state="GA" data-zip="30161" style="color: #aaa;">St. Mary's Catholic Church - Rome, GA</option>
								<option value="2243" data-churchname="St. Michael - Sharonville" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St. Michael - Sharonville</option>
								<option value="1286" data-churchname="<strong>St. Monica\'s Catholic Church - Duluth, GA - Active</strong>" data-street="1700 Buford Highway" data-city="Duluth" data-state="GA" data-zip="30097" style="color: #000;"><strong>St. Monica's Catholic Church - Duluth, GA - Active</strong></option>
								<option value="2109" data-churchname="St. Monicas Catholic Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St. Monicas Catholic Church</option>
								<option value="1723" data-churchname="<strong>St. Nicholas Church - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>St. Nicholas Church - GA - Active</strong></option>
								<option value="1723" data-churchname="<strong>St. Nicholases - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>St. Nicholases - GA - Active</strong></option>
								<option value="1723" data-churchname="<strong>St. Nick\'s - GA - Active</strong>" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #000;"><strong>St. Nick's - GA - Active</strong></option>
								<option value="1944" data-churchname="St. Oliver Catholic Church " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St. Oliver Catholic Church </option>
								<option value="2115" data-churchname="St. Peter the Fisherman - Two Rivers, WI" data-street="3201 Mishicot Rd" data-city="Two Rivers" data-state="WI" data-zip="54241" style="color: #aaa;">St. Peter the Fisherman - Two Rivers, WI</option>
								<option value="1690" data-churchname="St. Peter\'s Episcopal Church - Rome, GA" data-street="101 E Fourth Avenue" data-city="Rome" data-state="GA" data-zip="30161" style="color: #aaa;">St. Peter's Episcopal Church - Rome, GA</option>
								<option value="1936" data-churchname="St. Philothea Greek Orthodox Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St. Philothea Greek Orthodox Church</option>
								<option value="2077" data-churchname="St. Rebekah Coptic Orthodox - FL" data-street="12700 Balcombe Rd" data-city="" data-state="FL" data-zip="32837" style="color: #aaa;">St. Rebekah Coptic Orthodox - FL</option>
								<option value="1801" data-churchname="St. Susanna" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">St. Susanna</option>
								<option value="1827" data-churchname="St. Susanna - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">St. Susanna - OH</option>
								<option value="1922" data-churchname="<strong>St. Timothy Catholic Church - Lutz, FL - Active</strong>" data-street="17512 Lakeshore Road" data-city="Lutz" data-state="FL" data-zip="33558" style="color: #000;"><strong>St. Timothy Catholic Church - Lutz, FL - Active</strong></option>
								<option value="1825" data-churchname="St. Timothy Episcopal - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">St. Timothy Episcopal - OH</option>
								<option value="2526" data-churchname="State College Assembly of God - Port Matilda, PA" data-street="" data-city="Port Matilda" data-state="PA" data-zip="0" style="color: #aaa;">State College Assembly of God - Port Matilda, PA</option>
								<option value="1903" data-churchname="Still looking, just moved to the area" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Still looking, just moved to the area</option>
								<option value="1724" data-churchname="Strong Tower" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Strong Tower</option>
								<option value="1614" data-churchname="<strong>Sturgeon Bay Community Church - Sturgeon Bay, WI - Active</strong>" data-street="515 N 12th Ave" data-city="Sturgeon Bay" data-state="WI" data-zip="54235" style="color: #000;"><strong>Sturgeon Bay Community Church - Sturgeon Bay, WI - Active</strong></option>
								<option value="2026" data-churchname="<strong>Subligna Baptist Church - Summerville, GA - Active</strong>" data-street="35 Subligna Baptist Church Road" data-city="Summerville" data-state="GA" data-zip="30747" style="color: #000;"><strong>Subligna Baptist Church - Summerville, GA - Active</strong></option>
								<option value="1292" data-churchname="Sugar Hill Church - Sugar Hill, GA" data-street="5091 Nelson Brogdon Boulevard" data-city="Sugar Hill" data-state="GA" data-zip="30518" style="color: #aaa;">Sugar Hill Church - Sugar Hill, GA</option>
								<option value="2643" data-churchname="<strong>Sullivan First Christian Church - Sullivan, IN - Active</strong>" data-street="105 North Broad Street" data-city="Sullivan" data-state="IN" data-zip="47882" style="color: #000;"><strong>Sullivan First Christian Church - Sullivan, IN - Active</strong></option>
								<option value="1505" data-churchname="<strong>Summit Church - Herndon - Orlando, FL - Active</strong>" data-street="735 Herndon Avenue" data-city="Orlando" data-state="FL" data-zip="32803" style="color: #000;"><strong>Summit Church - Herndon - Orlando, FL - Active</strong></option>
								<option value="1520" data-churchname="Summit Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Summit Church</option>
								<option value="1595" data-churchname="<strong>Summit Church - Waterford - Orlando, FL - Active</strong>" data-street="11602 Lake Underhill Road" data-city="Orlando" data-state="FL" data-zip="32825" style="color: #000;"><strong>Summit Church - Waterford - Orlando, FL - Active</strong></option>
								<option value="1594" data-churchname="<strong>Summit Church - Lake Mary  - Lake Mary, FL - Active</strong>" data-street="100 Technology Park" data-city="Lake Mary" data-state="FL" data-zip="32746" style="color: #000;"><strong>Summit Church - Lake Mary - Lake Mary, FL - Active</strong></option>
								<option value="1559" data-churchname="Summit Ridge - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Summit Ridge - NV</option>
								<option value="1983" data-churchname="Sunrise Christian Life - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Sunrise Christian Life - FL</option>
								<option value="2271" data-churchname="TBD" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">TBD</option>
								<option value="2645" data-churchname="TEST Church - Sample for FL127 - Tampa, FL" data-street="123 Shady Tree Lan" data-city="Tampa" data-state="FL" data-zip="33618" style="color: #aaa;">TEST Church - Sample for FL127 - Tampa, FL</option>
								<option value="1400" data-churchname="Tabernacle Baptist Church - Augusta - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Tabernacle Baptist Church - Augusta - GA</option>
								<option value="2016" data-churchname="Tabernacle Baptist Church Carrollton - Carrolton - Carrollton, GA" data-street="150 Tabernacle Drive" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #aaa;">Tabernacle Baptist Church Carrollton - Carrolton - Carrollton, GA</option>
								<option value="2313" data-churchname="Tabernacle Baptist Church, Lakemont, GA" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Tabernacle Baptist Church, Lakemont, GA</option>
								<option value="1480" data-churchname="Tampa Bay Christian Academy - Tampa, FL" data-street="6815 N Rome Ave" data-city="Tampa" data-state="FL" data-zip="33604" style="color: #aaa;">Tampa Bay Christian Academy - Tampa, FL</option>
								<option value="1650" data-churchname="<strong>Tampa Covenant Church - Tampa, FL - Active</strong>" data-street="13320 Lake Magdalene Blvd" data-city="Tampa" data-state="FL" data-zip="33618" style="color: #000;"><strong>Tampa Covenant Church - Tampa, FL - Active</strong></option>
								<option value="1721" data-churchname="<strong>Taylor Road Baptist Church - Montgomery, AL - Active</strong>" data-street="1685 Taylor Road" data-city="Montgomery" data-state="AL" data-zip="36117" style="color: #000;"><strong>Taylor Road Baptist Church - Montgomery, AL - Active</strong></option>
								<option value="2330" data-churchname="Technician" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Technician</option>
								<option value="2289" data-churchname="<strong>The Advocate Mission - NC - Active</strong>" data-street="" data-city="" data-state="NC" data-zip="0" style="color: #000;"><strong>The Advocate Mission - NC - Active</strong></option>
								<option value="1560" data-churchname="The Avenue - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">The Avenue - NV</option>
								<option value="1584" data-churchname="<strong>The Avenue Church - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>The Avenue Church - FL - Active</strong></option>
								<option value="1351" data-churchname="<strong>The Awakening - Athens, GA - Active</strong>" data-street="New Earth Music Hall227 West Dougherty Street" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>The Awakening - Athens, GA - Active</strong></option>
								<option value="2769" data-churchname="The Blended Church - Indianapolis, IN" data-street="2215 Country Club Road" data-city="Indianapolis" data-state="IN" data-zip="46234" style="color: #aaa;">The Blended Church - Indianapolis, IN</option>
								<option value="1829" data-churchname="The Bridge Church - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">The Bridge Church - OH</option>
								<option value="1935" data-churchname="The Bridge Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">The Bridge Church</option>
								<option value="1561" data-churchname="The Calm - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">The Calm - NV</option>
								<option value="1286" data-churchname="<strong>The Cathoic Church of Saint Monica - Duluth, GA - Active</strong>" data-street="1700 Buford Highway" data-city="Duluth" data-state="GA" data-zip="30097" style="color: #000;"><strong>The Cathoic Church of Saint Monica - Duluth, GA - Active</strong></option>
								<option value="1300" data-churchname="<strong>The Catholic Church of Saint Joseph - Athens, GA - Active</strong>" data-street="958 Epps Bridge Parkway" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>The Catholic Church of Saint Joseph - Athens, GA - Active</strong></option>
								<option value="1300" data-churchname="<strong>The Catholic Church of St. Joseph - Athens, GA - Active</strong>" data-street="958 Epps Bridge Parkway" data-city="Athens" data-state="GA" data-zip="30606" style="color: #000;"><strong>The Catholic Church of St. Joseph - Athens, GA - Active</strong></option>
								<option value="1603" data-churchname="<strong>The Chapel - Brunswick , GA - Active</strong>" data-street="114 Harris Farm Road" data-city="Brunswick " data-state="GA" data-zip="31520" style="color: #000;"><strong>The Chapel - Brunswick , GA - Active</strong></option>
								<option value="2796" data-churchname="The Chapel - Fort Wayne, IN" data-street="2505 West Hamilton Road South" data-city="Fort Wayne" data-state="IN" data-zip="46814" style="color: #aaa;">The Chapel - Fort Wayne, IN</option>
								<option value="2676" data-churchname="<strong>The Chapel Cleveland - Cleveland, TN - Active</strong>" data-street="2412 Wolfe Drive Northwest" data-city="Cleveland" data-state="TN" data-zip="37311" style="color: #000;"><strong>The Chapel Cleveland - Cleveland, TN - Active</strong></option>
								<option value="2286" data-churchname="<strong>The Chapel Community Church - Tarpon Springs, FL - Active</strong>" data-street="2795 Keystone Rd" data-city="Tarpon Springs" data-state="FL" data-zip="34688" style="color: #000;"><strong>The Chapel Community Church - Tarpon Springs, FL - Active</strong></option>
								<option value="1305" data-churchname="The Church at Dahlonega - Dahlonega, GA" data-street="1312  S Chestatee" data-city="Dahlonega" data-state="GA" data-zip="30533" style="color: #aaa;">The Church at Dahlonega - Dahlonega, GA</option>
								<option value="1245" data-churchname="The Church at Eastern Oaks - Montgomery, AL" data-street="7505 Wares Ferry Rd" data-city="Montgomery" data-state="AL" data-zip="36117" style="color: #aaa;">The Church at Eastern Oaks - Montgomery, AL</option>
								<option value="1481" data-churchname="<strong>The Church at Odessa - Odessa, FL - Active</strong>" data-street="1234 Gunn Hwy" data-city="Odessa" data-state="FL" data-zip="33556" style="color: #000;"><strong>The Church at Odessa - Odessa, FL - Active</strong></option>
								<option value="2306" data-churchname="The Church at Ponce and Highland - Atlanta, GA" data-street="1085 PONCE DE LEON AVE NE" data-city="Atlanta" data-state="GA" data-zip="30306" style="color: #aaa;">The Church at Ponce and Highland - Atlanta, GA</option>
								<option value="2770" data-churchname="The Creek  - Indianapolis, IN" data-street="6430 South Franklin Road" data-city="Indianapolis" data-state="IN" data-zip="46259" style="color: #aaa;">The Creek - Indianapolis, IN</option>
								<option value="1562" data-churchname="The Crossing - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">The Crossing - NV</option>
								<option value="1997" data-churchname="<strong>The Father\'s House - OH - Active</strong>" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #000;"><strong>The Father's House - OH - Active</strong></option>
								<option value="2614" data-churchname="<strong>The Flipside Church - Rancho Cucamonga, CA - Active</strong>" data-street="10912 Jersey Boulevard" data-city="Rancho Cucamonga" data-state="CA" data-zip="91730" style="color: #000;"><strong>The Flipside Church - Rancho Cucamonga, CA - Active</strong></option>
								<option value="2027" data-churchname="<strong>The Foster Care Alliance - Atlanta, GA - Active</strong>" data-street="7000 Peachtree Dunwoody Rd" data-city="Atlanta" data-state="GA" data-zip="30328" style="color: #000;"><strong>The Foster Care Alliance - Atlanta, GA - Active</strong></option>
								<option value="2595" data-churchname="The Foundry - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">The Foundry - FL</option>
								<option value="1658" data-churchname="The Grove Bible Chapel - FL" data-street="5523 Winter Garden Vineland Rd." data-city="" data-state="FL" data-zip="34786" style="color: #aaa;">The Grove Bible Chapel - FL</option>
								<option value="2260" data-churchname="<strong>The Grove Church (Titusville,FL) - Titusville, FL - Active</strong>" data-street="1450 Harrison Street" data-city="Titusville" data-state="FL" data-zip="32780" style="color: #000;"><strong>The Grove Church (Titusville,FL) - Titusville, FL - Active</strong></option>
								<option value="1482" data-churchname="The Heights Church - Tampa, FL" data-street="2717 W Hillsborough Ave" data-city="Tampa" data-state="FL" data-zip="33614" style="color: #aaa;">The Heights Church - Tampa, FL</option>
								<option value="2771" data-churchname="The Journey Church - Avon, IN" data-street="5250 East US Highway 36" data-city="Avon" data-state="IN" data-zip="46123" style="color: #aaa;">The Journey Church - Avon, IN</option>
								<option value="1571" data-churchname="<strong>The Local Church - FL - Active</strong>" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #000;"><strong>The Local Church - FL - Active</strong></option>
								<option value="1484" data-churchname="<strong>The Mill - Edgar - Edgar, WI - Active</strong>" data-street="203 East Birch Street" data-city="Edgar" data-state="WI" data-zip="54426" style="color: #000;"><strong>The Mill - Edgar - Edgar, WI - Active</strong></option>
								<option value="1483" data-churchname="<strong>The Mill - Stratford - Stratford, WI - Active</strong>" data-street="213004 Legion Street" data-city="Stratford" data-state="WI" data-zip="54484" style="color: #000;"><strong>The Mill - Stratford - Stratford, WI - Active</strong></option>
								<option value="2578" data-churchname="<strong>The Mission Church - Renton, WA - Active</strong>" data-street="" data-city="Renton" data-state="WA" data-zip="0" style="color: #000;"><strong>The Mission Church - Renton, WA - Active</strong></option>
								<option value="2633" data-churchname="The Mission Church Carlsbad - Carlsbad, CA" data-street="825 Carlsbad Village Drive" data-city="Carlsbad" data-state="CA" data-zip="92008" style="color: #aaa;">The Mission Church Carlsbad - Carlsbad, CA</option>
								<option value="2576" data-churchname="The Nett Church - Bethesda - Lawrenceville, GA" data-street="444 Bethesda Church Road" data-city="Lawrenceville" data-state="GA" data-zip="30044" style="color: #aaa;">The Nett Church - Bethesda - Lawrenceville, GA</option>
								<option value="2511" data-churchname="The Nett Church (Berkmar Campus) - Lilburn, GA" data-street="675 Pleasant Hill Road" data-city="Lilburn" data-state="GA" data-zip="30047" style="color: #aaa;">The Nett Church (Berkmar Campus) - Lilburn, GA</option>
								<option value="2308" data-churchname="The Outlet Community Church - Atlanta, GA" data-street="545 Hill Street Southeast" data-city="Atlanta" data-state="GA" data-zip="30312" style="color: #aaa;">The Outlet Community Church - Atlanta, GA</option>
								<option value="2583" data-churchname="The Ridge - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">The Ridge - GA</option>
								<option value="1714" data-churchname="The Rock - City Heights - San Diego, CA" data-street="4001 El Cajon Blvd." data-city="San Diego" data-state="CA" data-zip="92105" style="color: #aaa;">The Rock - City Heights - San Diego, CA</option>
								<option value="2619" data-churchname="<strong>The Shoreline - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>The Shoreline - CA - Active</strong></option>
								<option value="2618" data-churchname="The Shoreline Church - San Clemente, CA" data-street="211 Avenida Fabricante" data-city="San Clemente" data-state="CA" data-zip="92672" style="color: #aaa;">The Shoreline Church - San Clemente, CA</option>
								<option value="2374" data-churchname="<strong>The Shoreline Church - San Clemente, CA - Active</strong>" data-street="211 Avenida Fabricante" data-city="San Clemente" data-state="CA" data-zip="92672" style="color: #000;"><strong>The Shoreline Church - San Clemente, CA - Active</strong></option>
								<option value="2639" data-churchname="The Shoreline Church - CA" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #aaa;">The Shoreline Church - CA</option>
								<option value="2607" data-churchname="<strong>The Square Church - Smyrna, GA - Active</strong>" data-street="981 Powder Springs Street" data-city="Smyrna" data-state="GA" data-zip="30080" style="color: #000;"><strong>The Square Church - Smyrna, GA - Active</strong></option>
								<option value="2560" data-churchname="The Station Church  - Oceanside , CA" data-street="" data-city="Oceanside " data-state="CA" data-zip="0" style="color: #aaa;">The Station Church - Oceanside , CA</option>
								<option value="1743" data-churchname="The Upward Call Church - St. Cloud, FL" data-street="3272 Canoe Creek Rd" data-city="St. Cloud" data-state="FL" data-zip="34772" style="color: #aaa;">The Upward Call Church - St. Cloud, FL</option>
								<option value="2433" data-churchname="<strong>The Vine - Goshen, IN - Active</strong>" data-street="501 N Indiana Ave" data-city="Goshen" data-state="IN" data-zip="46528" style="color: #000;"><strong>The Vine - Goshen, IN - Active</strong></option>
								<option value="2034" data-churchname="<strong>The Vine Community Church - Cumming, GA - Active</strong>" data-street="4655 Bethelview Road" data-city="Cumming" data-state="GA" data-zip="30040" style="color: #000;"><strong>The Vine Community Church - Cumming, GA - Active</strong></option>
								<option value="1895" data-churchname="The grove community church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">The grove community church</option>
								<option value="1563" data-churchname="Three Court - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Three Court - NV</option>
								<option value="1356" data-churchname="<strong>Three Rivers Church - Rome, GA - Active</strong>" data-street="2960 New Calhoun Hwy NE" data-city="Rome" data-state="GA" data-zip="30161" style="color: #000;"><strong>Three Rivers Church - Rome, GA - Active</strong></option>
								<option value="2303" data-churchname="<strong>ThreeLife Church - LaGrange, GA - Active</strong>" data-street=" 3472 Hwy 29" data-city="LaGrange" data-state="GA" data-zip="30241" style="color: #000;"><strong>ThreeLife Church - LaGrange, GA - Active</strong></option>
								<option value="2373" data-churchname="<strong>ThreeLife Church - LaGrange, GA - Active</strong>" data-street="" data-city="LaGrange" data-state="GA" data-zip="0" style="color: #000;"><strong>ThreeLife Church - LaGrange, GA - Active</strong></option>
								<option value="2501" data-churchname="<strong>Traders Point - Downtown - Indianapolis, IN - Active</strong>" data-street="1201 North Delaware Street" data-city="Indianapolis" data-state="IN" data-zip="46202" style="color: #000;"><strong>Traders Point - Downtown - Indianapolis, IN - Active</strong></option>
								<option value="2773" data-churchname="<strong>Traders Point - Midtown - Indianapolis, IN - Active</strong>" data-street="2900 East 62nd Street" data-city="Indianapolis" data-state="IN" data-zip="46220" style="color: #000;"><strong>Traders Point - Midtown - Indianapolis, IN - Active</strong></option>
								<option value="2774" data-churchname="<strong>Traders Point - North - Carmel, IN - Active</strong>" data-street="1242 West 136th Street" data-city="Carmel" data-state="IN" data-zip="46032" style="color: #000;"><strong>Traders Point - North - Carmel, IN - Active</strong></option>
								<option value="2592" data-churchname="<strong>Traders Point - Northeast - Fishers, IN - Active</strong>" data-street="12011 Olio Road" data-city="Fishers" data-state="IN" data-zip="46037" style="color: #000;"><strong>Traders Point - Northeast - Fishers, IN - Active</strong></option>
								<option value="1220" data-churchname="<strong>Traders Point Christian Church - Whitestown, IN - Active</strong>" data-street="6590 South Indianapolis Road" data-city="Whitestown" data-state="IN" data-zip="46075" style="color: #000;"><strong>Traders Point Christian Church - Whitestown, IN - Active</strong></option>
								<option value="1866" data-churchname="Transfiguration Catholic Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Transfiguration Catholic Church</option>
								<option value="2666" data-churchname="Transformation Church - Indian Land, SC" data-street="1212 Transformation Lane" data-city="Indian Land" data-state="SC" data-zip="29707" style="color: #aaa;">Transformation Church - Indian Land, SC</option>
								<option value="1341" data-churchname="<strong>Trinity Anglican Mission Eastside - Decatur, GA - Active</strong>" data-street="630 East Lake Drive" data-city="Decatur" data-state="GA" data-zip="30030" style="color: #000;"><strong>Trinity Anglican Mission Eastside - Decatur, GA - Active</strong></option>
								<option value="1311" data-churchname="<strong>Trinity Anglican Mission Westside - Atlanta, GA - Active</strong>" data-street="2270 Defoor Hills Road Northwest" data-city="Atlanta" data-state="GA" data-zip="30318" style="color: #000;"><strong>Trinity Anglican Mission Westside - Atlanta, GA - Active</strong></option>
								<option value="1411" data-churchname="<strong>Trinity Baptist Church - Moultrie, GA - Active</strong>" data-street="201 12th Ave SE" data-city="Moultrie" data-state="GA" data-zip="31768" style="color: #000;"><strong>Trinity Baptist Church - Moultrie, GA - Active</strong></option>
								<option value="2539" data-churchname="Trinity Baptist Church - San Diego, CA" data-street="" data-city="San Diego" data-state="CA" data-zip="0" style="color: #aaa;">Trinity Baptist Church - San Diego, CA</option>
								<option value="2459" data-churchname="<strong>Trinity Church Seattle - Seattle, WA - Active</strong>" data-street="6512 23rd Avenue Northwest" data-city="Seattle" data-state="WA" data-zip="98117" style="color: #000;"><strong>Trinity Church Seattle - Seattle, WA - Active</strong></option>
								<option value="2450" data-churchname="<strong>Trinity Downtown - Orlando, FL - Active</strong>" data-street="123 East Livingston Street" data-city="Orlando" data-state="FL" data-zip="32801" style="color: #000;"><strong>Trinity Downtown - Orlando, FL - Active</strong></option>
								<option value="2772" data-churchname="Trinity English Lutheran Church - Fort Wayne, IN" data-street="450 West Washington Boulevard" data-city="Fort Wayne" data-state="IN" data-zip="46802" style="color: #aaa;">Trinity English Lutheran Church - Fort Wayne, IN</option>
								<option value="2680" data-churchname="<strong>Trinity New Life Church - Odessa, FL - Active</strong>" data-street="11134 Challenger Avenue" data-city="Odessa" data-state="FL" data-zip="33556" style="color: #000;"><strong>Trinity New Life Church - Odessa, FL - Active</strong></option>
								<option value="2775" data-churchname="Trinity Park United Methodist Church - Greenfield, IN" data-street="207 West Park Avenue" data-city="Greenfield" data-state="IN" data-zip="46140" style="color: #aaa;">Trinity Park United Methodist Church - Greenfield, IN</option>
								<option value="2550" data-churchname="<strong>Trinity Presbyterian Church  - San Diego , CA - Active</strong>" data-street="" data-city="San Diego " data-state="CA" data-zip="0" style="color: #000;"><strong>Trinity Presbyterian Church - San Diego , CA - Active</strong></option>
								<option value="2544" data-churchname="Trinity Presbyterian Church, San Diego - San Diego, CA" data-street="17050 Del Sur Ridge Road" data-city="San Diego" data-state="CA" data-zip="92127" style="color: #aaa;">Trinity Presbyterian Church, San Diego - San Diego, CA</option>
								<option value="1564" data-churchname="Trinity Reformed - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Trinity Reformed - NV</option>
								<option value="2409" data-churchname="<strong>Troy Church of the Nazarene - Troy, OH - Active</strong>" data-street="1200 Barnhart Rd" data-city="Troy" data-state="OH" data-zip="45373" style="color: #000;"><strong>Troy Church of the Nazarene - Troy, OH - Active</strong></option>
								<option value="2407" data-churchname="<strong>Troy First United Methodist - OH - Active</strong>" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #000;"><strong>Troy First United Methodist - OH - Active</strong></option>
								<option value="2681" data-churchname="True Vine Church - Piqua, OH" data-street="531 West Ash Street" data-city="Piqua" data-state="OH" data-zip="45356" style="color: #aaa;">True Vine Church - Piqua, OH</option>
								<option value="1973" data-churchname="Truth Point Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">Truth Point Church - FL</option>
								<option value="1874" data-churchname="Tulare Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Tulare Community Church</option>
								<option value="2776" data-churchname="United Wesleyan Church - Anderson, IN" data-street="2233 South Central Way" data-city="Anderson" data-state="IN" data-zip="46011" style="color: #aaa;">United Wesleyan Church - Anderson, IN</option>
								<option value="2259" data-churchname="<strong>University Carillon UMC - Oviedo, FL - Active</strong>" data-street="1395 Campus View Court" data-city="Oviedo" data-state="FL" data-zip="32765" style="color: #000;"><strong>University Carillon UMC - Oviedo, FL - Active</strong></option>
								<option value="1308" data-churchname="University Church - Athens, GA" data-street="397 S. Church St." data-city="Athens" data-state="GA" data-zip="30605" style="color: #aaa;">University Church - Athens, GA</option>
								<option value="2777" data-churchname="<strong>Upland Community Church - Upland, IN - Active</strong>" data-street="439 East 600 South" data-city="Upland" data-state="IN" data-zip="46989" style="color: #000;"><strong>Upland Community Church - Upland, IN - Active</strong></option>
								<option value="1986" data-churchname="Upstate Church Five Forks" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Upstate Church Five Forks</option>
								<option value="1325" data-churchname="<strong>Vaughn Forest Baptist Church - Montgomery, AL - Active</strong>" data-street="8660 Vaughn Road" data-city="Montgomery" data-state="AL" data-zip="36117" style="color: #000;"><strong>Vaughn Forest Baptist Church - Montgomery, AL - Active</strong></option>
								<option value="2273" data-churchname="Vaughn Park Church of Christ - AL" data-street="" data-city="" data-state="AL" data-zip="0" style="color: #aaa;">Vaughn Park Church of Christ - AL</option>
								<option value="2090" data-churchname="<strong>Ventura Missionary - CA - Active</strong>" data-street="" data-city="" data-state="CA" data-zip="0" style="color: #000;"><strong>Ventura Missionary - CA - Active</strong></option>
								<option value="2357" data-churchname="Venture Church - Encinitas, CA" data-street="777 Santa Fe Dr." data-city="Encinitas" data-state="CA" data-zip="92024" style="color: #aaa;">Venture Church - Encinitas, CA</option>
								<option value="1812" data-churchname="Veritas - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Veritas - OH</option>
								<option value="1216" data-churchname="<strong>Vertical Life Church - Dallas, GA - Active</strong>" data-street="263 E. Paulding Dr." data-city="Dallas" data-state="GA" data-zip="30157" style="color: #000;"><strong>Vertical Life Church - Dallas, GA - Active</strong></option>
								<option value="2086" data-churchname="Victory" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Victory</option>
								<option value="1382" data-churchname="<strong>Victory Baptist Church - Loganville, GA - Active</strong>" data-street="88 Brand Road NE" data-city="Loganville" data-state="GA" data-zip="30052" style="color: #000;"><strong>Victory Baptist Church - Loganville, GA - Active</strong></option>
								<option value="1498" data-churchname="<strong>Victory Church - Waupaca, WI - Active</strong>" data-street="E3443 S Apple Tree Ln" data-city="Waupaca" data-state="WI" data-zip="54981" style="color: #000;"><strong>Victory Church - Waupaca, WI - Active</strong></option>
								<option value="1585" data-churchname="<strong>Victory Church - Boca Raton, FL - Active</strong>" data-street="NW 2nd ave" data-city="Boca Raton" data-state="FL" data-zip="0" style="color: #000;"><strong>Victory Church - Boca Raton, FL - Active</strong></option>
								<option value="1364" data-churchname="<strong>Victory World Church - Hamilton Mill - Buford, GA - Active</strong>" data-street="3015 Pucketts Mill Road" data-city="Buford" data-state="GA" data-zip="30519" style="color: #000;"><strong>Victory World Church - Hamilton Mill - Buford, GA - Active</strong></option>
								<option value="1270" data-churchname="<strong>Victory World Church - Norcross, GA - Active</strong>" data-street="5905 Brook Hollow Parkway" data-city="Norcross" data-state="GA" data-zip="30071" style="color: #000;"><strong>Victory World Church - Norcross, GA - Active</strong></option>
								<option value="1414" data-churchname="Vidalia Presbyterian Church - GA" data-street="" data-city="" data-state="GA" data-zip="0" style="color: #aaa;">Vidalia Presbyterian Church - GA</option>
								<option value="1805" data-churchname="Village Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Village Community Church</option>
								<option value="2164" data-churchname="Villiage Church - Hamilton, OH" data-street="210 S 2nd St" data-city="Hamilton" data-state="OH" data-zip="45011" style="color: #aaa;">Villiage Church - Hamilton, OH</option>
								<option value="2486" data-churchname="Vine Life Assembly of God - Groveport , OH" data-street="434 Main St" data-city="Groveport " data-state="OH" data-zip="43125" style="color: #aaa;">Vine Life Assembly of God - Groveport , OH</option>
								<option value="2102" data-churchname="Vineyard Anaheim" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Vineyard Anaheim</option>
								<option value="1796" data-churchname="<strong>Vineyard Cincinnati Church - Tri County - Springdale, OH - Active</strong>" data-street="11340 Century Circle East" data-city="Springdale" data-state="OH" data-zip="45246" style="color: #000;"><strong>Vineyard Cincinnati Church - Tri County - Springdale, OH - Active</strong></option>
								<option value="1819" data-churchname="Vineyard Columbus - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Vineyard Columbus - OH</option>
								<option value="2629" data-churchname="<strong>Vineyard Fellowship - Bradford, OH - Active</strong>" data-street="701 North Miami Avenue" data-city="Bradford" data-state="OH" data-zip="45308" style="color: #000;"><strong>Vineyard Fellowship - Bradford, OH - Active</strong></option>
								<option value="2006" data-churchname="Vineyard Northwest " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Vineyard Northwest </option>
								<option value="1695" data-churchname="Vintage " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Vintage </option>
								<option value="1362" data-churchname="Voice of Truth - Irwinton, GA" data-street="148 High Hill St." data-city="Irwinton" data-state="GA" data-zip="31042" style="color: #aaa;">Voice of Truth - Irwinton, GA</option>
								<option value="2347" data-churchname="WACC" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">WACC</option>
								<option value="1639" data-churchname="Walker Baptist Church - Monroe, GA" data-street="1150 Good Hope Road" data-city="Monroe" data-state="GA" data-zip="30655" style="color: #aaa;">Walker Baptist Church - Monroe, GA</option>
								<option value="2778" data-churchname="Wallace Street Church - Indianapolis, IN" data-street="4805 East 10th Street" data-city="Indianapolis" data-state="IN" data-zip="46201" style="color: #aaa;">Wallace Street Church - Indianapolis, IN</option>
								<option value="2584" data-churchname="Warm Springs Road - Columbus, GA" data-street="" data-city="Columbus" data-state="GA" data-zip="0" style="color: #aaa;">Warm Springs Road - Columbus, GA</option>
								<option value="1358" data-churchname="Warren Baptist Church - Augusta, GA" data-street="3202 Washington Rd" data-city="Augusta" data-state="GA" data-zip="30907" style="color: #aaa;">Warren Baptist Church - Augusta, GA</option>
								<option value="2779" data-churchname="Warsaw Community Church - Warsaw, IN" data-street="1855 South County Farm Road" data-city="Warsaw" data-state="IN" data-zip="46580" style="color: #aaa;">Warsaw Community Church - Warsaw, IN</option>
								<option value="2262" data-churchname="WaterStone Church - FL" data-street="" data-city="" data-state="FL" data-zip="0" style="color: #aaa;">WaterStone Church - FL</option>
								<option value="1912" data-churchname="Waterlife" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Waterlife</option>
								<option value="1911" data-churchname="Waterlife" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Waterlife</option>
								<option value="1910" data-churchname="Waterlife" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Waterlife</option>
								<option value="1336" data-churchname="<strong>Watkinsville First Baptist Church - Watkinsville, GA - Active</strong>" data-street="1610 Simonton Bridge Rd" data-city="Watkinsville" data-state="GA" data-zip="30677" style="color: #000;"><strong>Watkinsville First Baptist Church - Watkinsville, GA - Active</strong></option>
								<option value="1497" data-churchname="<strong>Wausau Alliance Church - Wausau, WI - Active</strong>" data-street="2125 Franklin St" data-city="Wausau" data-state="WI" data-zip="54401" style="color: #000;"><strong>Wausau Alliance Church - Wausau, WI - Active</strong></option>
								<option value="1494" data-churchname="<strong>Waushara Community Church - Wautoma, WI - Active</strong>" data-street="N2126 22nd Ave" data-city="Wautoma" data-state="WI" data-zip="54982" style="color: #000;"><strong>Waushara Community Church - Wautoma, WI - Active</strong></option>
								<option value="2672" data-churchname="Waymaker.Church - Forest, VA" data-street="1650 Hooper Road" data-city="Forest" data-state="VA" data-zip="24551" style="color: #aaa;">Waymaker.Church - Forest, VA</option>
								<option value="2401" data-churchname="Webinar - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Webinar - OH</option>
								<option value="2116" data-churchname="<strong>Welcomed - WI - Active</strong>" data-street="" data-city="" data-state="WI" data-zip="0" style="color: #000;"><strong>Welcomed - WI - Active</strong></option>
								<option value="1627" data-churchname="<strong>Wellroot Family Services - Tucker, GA - Active</strong>" data-street="1967 Lakeside Pkwy Ste 400" data-city="Tucker" data-state="GA" data-zip="30084" style="color: #000;"><strong>Wellroot Family Services - Tucker, GA - Active</strong></option>
								<option value="1608" data-churchname="<strong>Welsey UMC - St Simons Island, GA - Active</strong>" data-street=" 6520 Frederica Rd" data-city="St Simons Island" data-state="GA" data-zip="31522" style="color: #000;"><strong>Welsey UMC - St Simons Island, GA - Active</strong></option>
								<option value="2780" data-churchname="Wesley Free Methodist Church - Anderson, IN" data-street="3017 West 8th Street" data-city="Anderson" data-state="IN" data-zip="46011" style="color: #aaa;">Wesley Free Methodist Church - Anderson, IN</option>
								<option value="1250" data-churchname="West Millen Baptist Church - Millen, GA" data-street="549 US-25" data-city="Millen" data-state="GA" data-zip="30442" style="color: #aaa;">West Millen Baptist Church - Millen, GA</option>
								<option value="2623" data-churchname="West Rome Baptist Church - Rome, GA" data-street="914 Shorter Avenue" data-city="Rome" data-state="GA" data-zip="30165" style="color: #aaa;">West Rome Baptist Church - Rome, GA</option>
								<option value="1231" data-churchname="<strong>Westminster Presbyterian Church - Columbus - Columbus, GA - Active</strong>" data-street="2303 Double Churches Rd" data-city="Columbus" data-state="GA" data-zip="31909" style="color: #000;"><strong>Westminster Presbyterian Church - Columbus - Columbus, GA - Active</strong></option>
								<option value="1361" data-churchname="Westminster Presbyterian Church - Gainesville - Gainsville, GA" data-street="1397 Thompson Bridge Rd" data-city="Gainsville" data-state="GA" data-zip="30501" style="color: #aaa;">Westminster Presbyterian Church - Gainesville - Gainsville, GA</option>
								<option value="1672" data-churchname="<strong>Westminster Presbyterian Church - Rome, GA - Active</strong>" data-street="1941 Shorter Avenue SW" data-city="Rome" data-state="GA" data-zip="30165" style="color: #000;"><strong>Westminster Presbyterian Church - Rome, GA - Active</strong></option>
								<option value="1492" data-churchname="<strong>Westside Family Church - KS - Active</strong>" data-street="" data-city="" data-state="KS" data-zip="0" style="color: #000;"><strong>Westside Family Church - KS - Active</strong></option>
								<option value="2659" data-churchname="<strong>White River Christian - Noblesville, IN - Active</strong>" data-street="1685 North 10th Street" data-city="Noblesville" data-state="IN" data-zip="46060" style="color: #000;"><strong>White River Christian - Noblesville, IN - Active</strong></option>
								<option value="2610" data-churchname="<strong>White Rock Fellowship - Noblesville, IN - Active</strong>" data-street="21070 Schulley Road" data-city="Noblesville" data-state="IN" data-zip="46062" style="color: #000;"><strong>White Rock Fellowship - Noblesville, IN - Active</strong></option>
								<option value="1906" data-churchname="Whitnel Pentecostal" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Whitnel Pentecostal</option>
								<option value="2066" data-churchname="Whittier Area Community Church - Whittier, CA" data-street="8100 Colima Rd" data-city="Whittier" data-state="CA" data-zip="90605" style="color: #aaa;">Whittier Area Community Church - Whittier, CA</option>
								<option value="2015" data-churchname="Whosoever Will Christ Centered Baptist Church - Carrollton, GA" data-street="106 Park Place Way" data-city="Carrollton" data-state="GA" data-zip="30117" style="color: #aaa;">Whosoever Will Christ Centered Baptist Church - Carrollton, GA</option>
								<option value="2376" data-churchname="Wieuca Road Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Wieuca Road Baptist Church</option>
								<option value="2008" data-churchname="Wieuca Road Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Wieuca Road Baptist Church</option>
								<option value="2009" data-churchname="Wieuca Road Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Wieuca Road Baptist Church</option>
								<option value="2010" data-churchname="Wieuca Road Baptist Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Wieuca Road Baptist Church</option>
								<option value="2781" data-churchname="Williamsport Christian Church - Williamsport, IN" data-street="20 East 3rd Street" data-city="Williamsport" data-state="IN" data-zip="47993" style="color: #aaa;">Williamsport Christian Church - Williamsport, IN</option>
								<option value="1745" data-churchname="<strong>Willow Creek Church - Winter Springs, FL - Active</strong>" data-street="4725 E Lake Dr" data-city="Winter Springs" data-state="FL" data-zip="32708" style="color: #000;"><strong>Willow Creek Church - Winter Springs, FL - Active</strong></option>
								<option value="1840" data-churchname="Wilmington Church of Christ - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Wilmington Church of Christ - OH</option>
								<option value="2133" data-churchname="Wilshire Avenue Community Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Wilshire Avenue Community Church</option>
								<option value="1259" data-churchname="<strong>Windborne Church - Active</strong>" data-street="" data-city="" data-state="" data-zip="" style="color: #000;"><strong>Windborne Church - Active</strong></option>
								<option value="1638" data-churchname="<strong>Winterville First Baptist Church - Winterville, GA - Active</strong>" data-street="305 N Church Street" data-city="Winterville" data-state="GA" data-zip="30683" style="color: #000;"><strong>Winterville First Baptist Church - Winterville, GA - Active</strong></option>
								<option value="1495" data-churchname="<strong>Woodlands Church - Plover, WI - Active</strong>" data-street="190 Hoover Avenue" data-city="Plover" data-state="WI" data-zip="54467" style="color: #000;"><strong>Woodlands Church - Plover, WI - Active</strong></option>
								<option value="2591" data-churchname="<strong>Woodlawn Baptist - Ranger, GA - Active</strong>" data-street="1649 Highway 411" data-city="Ranger" data-state="GA" data-zip="30734" style="color: #000;"><strong>Woodlawn Baptist - Ranger, GA - Active</strong></option>
								<option value="2377" data-churchname="Woodstock Church Shallowford " data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Woodstock Church Shallowford </option>
								<option value="2256" data-churchname="<strong>Woodstock City Church - Woodstock, GA - Active</strong>" data-street="150 Ridgewalk Pkwy  " data-city="Woodstock" data-state="GA" data-zip="30188" style="color: #000;"><strong>Woodstock City Church - Woodstock, GA - Active</strong></option>
								<option value="1566" data-churchname="Word of Life - NV" data-street="" data-city="" data-state="NV" data-zip="" style="color: #aaa;">Word of Life - NV</option>
								<option value="1757" data-churchname="Word of Life Apopka - Apopka, FL" data-street="1853 Vick Rd" data-city="Apopka" data-state="FL" data-zip="32712" style="color: #aaa;">Word of Life Apopka - Apopka, FL</option>
								<option value="2254" data-churchname="Word of Life Kingdom Church" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Word of Life Kingdom Church</option>
								<option value="1219" data-churchname="<strong>Wynnbrook Baptist Church - Columbus, GA - Active</strong>" data-street="500 River Knoll Way" data-city="Columbus" data-state="GA" data-zip="31904" style="color: #000;"><strong>Wynnbrook Baptist Church - Columbus, GA - Active</strong></option>
								<option value="1731" data-churchname="Young Meadows" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">Young Meadows</option>
								<option value="1403" data-churchname="Zion Baptist Church - Brunswick - Brunswick, GA" data-street="1611 G Street" data-city="Brunswick" data-state="GA" data-zip="31520" style="color: #aaa;">Zion Baptist Church - Brunswick - Brunswick, GA</option>
								<option value="1818" data-churchname="Zion Christian Fellowship - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Zion Christian Fellowship - OH</option>
								<option value="1835" data-churchname="Zion PIckerington - OH" data-street="" data-city="" data-state="OH" data-zip="0" style="color: #aaa;">Zion PIckerington - OH</option>
								<option value="2551" data-churchname="infusion Church  - Escondido , CA" data-street="" data-city="Escondido " data-state="CA" data-zip="0" style="color: #aaa;">infusion Church - Escondido , CA</option>
								<option value="2387" data-churchname="vertical" data-street="" data-city="" data-state="" data-zip="" style="color: #aaa;">vertical</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
							<span id="modal-calendar-event-edit-label-contact">Event Contact</span> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="This field is to set the organizers of the event. The people listed in this box will be shown as the point person for all questions related to the event. In the case of a meal or need this will mostly often be the team leader."></i>
						</label>
						<div class="col-sm-9 col-xs-9">
							<input name="id_event_contacts" type="text" id="modal-calendar-event-edit-id-event-contacts" class="ps-tagger-people form-control modal-calendar-edit-element input-lg" data-url-params=""> <input type="hidden" name="id_event_contacts_prev" id="modal-calendar-event-edit-id-contacts-prev" value="">
						</div>
						<span class="error_id_event_contact text-danger"></span>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
							Time Zone
						</label>
						<div class="col-sm-9 col-xs-9">
							<select name="event_time_zone" id="event_time_zone" class="input-lg">
								<option value="America/New_York" selected="selected">Eastern</option>
								<option value="America/Chicago">Central</option>
								<option value="America/Denver">Mountain</option>
								<option value="America/Los_Angeles">Pacific</option>
								<option value="America/America/Nome">Alaskan</option>
								<option value="Pacific/Honolulu">Hawaii-Aleutian</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
							Send Event Reminder
						</label>
						<div class="col-sm-9 col-xs-9">
							<input type="checkbox" id="modal-calendar-event-edit-send-reminder" name="send_event_reminder" class="btn-switch" value="1" data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
							<input type="hidden" id="modal-calendar-event-edit-send-reminder-prev" name="send_event_reminder_prev" value="">
							<span class="text-danger"></span>
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
