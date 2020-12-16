<main class="flex-1 p-8">
	<form class="form-horizontal form-validate form-protect-submit" id="add-need-modal-form" action="http://promiserves.test/messages/save" method="post">
		<div class="form-group">
			<div class="text-right col-sm-1 col-xs-1">
				<i class="fas fa-hand-holding-heart fa-2x" aria-hidden="true"></i> <small class="pull-right"> *</small>
			</div>
			<div class="text-left col-xs-10" id="ajax-target-modal-need-title">
				<input type="text" class="form-control modal-add-need-edit-element" name="need_name" id="modal-add-need-title" placeholder="Need Subject - Short description of need" required>
			</div>
		</div>
		<div class="form-group">
			<div class="text-right col-sm-1 col-xs-1">
				<i class="fas fa-hands-helping fa-2x"></i> <small class="pull-right"> *</small>
			</div>
			<div class="text-left col-xs-10" id="ajax-target-modal-need-type">
				<select name="id_need_type" id="modal-add-need-need-type" class="form-control modal-add-need-edit-element" required="required">
					<option value="">Select a need type</option>
					<optgroup label="Childcare / Mentoring">
						<option value="120">Childcare / Babysitting</option>
						<option value="140">Mentoring</option>
						<option value="130">Transportation</option>
					</optgroup>
					<optgroup label="Emergency">
						<option value="912">Court Sitter</option>
						<option value="911">Hospital Sitter</option>
					</optgroup>
					<optgroup label="Household">
						<option value="153">Cleaning</option>
						<option value="152">Laundry</option>
						<option value="150">Other Service Need</option>
						<option value="151">Yard Work</option>
					</optgroup>
					<optgroup label="Meals">
						<option value="112">Extra Meal</option>
						<option value="110">Weekly Meal</option>
					</optgroup>
					<optgroup label="Prayer">
						<option value="910">Praise</option>
						<option value="900">Prayer Request</option>
					</optgroup>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="text-right col-sm-1 col-xs-1">
				<i class="fas fa-users fa-2x"></i> <small class="pull-right"> *</small>
			</div>
			<div class="text-left col-xs-10" id="ajax-target-modal-need-type">
				<select name="id_community" id="modal-add-need-id-community" class="form-control is-required modal-add-need-edit-element" required="required">
					<option value="">Select a community</option>
					<option value="1">All volunteers at church</option>
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
		<div class="form-group">
			<div class="text-right col-sm-1 col-xs-1">
				<i class="fas fa-sticky-note fa-2x"></i> <small class="pull-right"> *</small>
			</div>
			<div class="col-xs-10" id="ajax-target-modal-need-desc">
				<textarea name="need_desc" class="form-control modal-add-need-edit-element" id="modal-add-need-desc" cols="10" rows="6" placeholder="Detailed description of the need and the information necessary for the volunteer to complete the task." required></textarea>

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
										<input type="text" style="width: 100px" data-placement="right" name="need_date_start_human" id="modal-add-need-datepicker-start" class="form-control date pick-date ignorevalidate" value="12/13/2020">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="control-group">
								<div class="controls">
									<div class="input-prepend input-group">
										<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-clock-o"></i></span>
										<input type="text" style="width: 100px" name="need_time_start_human" id="modal-add-need-timepicker-start" class="form-control pick-time ignorevalidate" value="03:00 AM">
									</div>
								</div>
							</div>
						</div>
						<span class="text-danger"> </span>
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
				<input name="id_need_organizers" type="text" id="modal-add-need-id-need-organizers" class="ps-tagger-people form-control modal-add-need-edit-element" data-role-limit="" data-limit-id="" data-url-params=""> <input type="hidden" class="modal-add-need-edit-element" name="id_need_organizers_prev" id="modal-add-need-id-need-organizers-prev" value="">

			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-3 col-sm-3">
				Invite Volunteers
				<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="If you leave this field blank then a message will be sent to the entire team (or entire church if selected) to see who will claim the need. If you want to send the need notification to only a select group of people then please enter their names below."></i>
			</div>
			<div class="col-xs-9 col-sm-9">
				<input name="id_need_assignees" type="text" id="modal-add-need-id-need-assignees" class="ps-tagger-people form-control modal-add-need-edit-element" placeholder="Leave this field blank to invite the entire team to participate" data-role-limit="" data-limit-id="" data-url-params=""> <input type="hidden" class="modal-add-need-edit-element" name="id_need_assignees_prev" id="modal-add-need-id-need-assignees-prev" value="">

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
	</form>
</main>
