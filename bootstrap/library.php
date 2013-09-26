<?php
	// connects to the database
	//$db_name = "fssto651_weddingPlanner";
	//$db_username = "fssto651";
	//$db_pwd = "Fsstoronto123";
	//$db_con = mysql_connect("localhost", $db_username, $db_pwd) or die("There was an error connecting");

	//mysql_select_db($db_name) or die("There was an error in selecting the database.");

	session_start();

	/* Foursons Winemaker Definitions Start */

	define('TITLE', 'Foursons Winemaker');
	define('PATH_IMAGE', 'img/');
	define('SLIDER_IMAGE1', 'slide-01.jpg');
	define('SLIDER_IMAGE2', 'slide-02.jpg');
	define('SLIDER_IMAGE3', 'slide-03.jpg');
	define('HOME', 'Home');
	define('CRAFT', 'Why Craft?');
	define('CONTACT', 'Contact Us');
	define('PRODUCT', 'Our Wines');
	define('RESERVE', 'Make A Reservation');
	define('QUOTE', 'Still Buying Wine? Make Wine Today!');
	define('ORDER_SUBJECT', 'You have received a new order.');
	define('ORDER_CONFIRMATION', 'Appointment Confirmed with Foursons Winemakers');
	define('CUSTOMER_SUB1', '[GENERAL]');
	define('CUSTOMER_SUB2', '[SUGGESTION]');
	define('CUSTOMER_SUB3', '[PRODUCT SUPPORT]');
	define('FOURSONS_EMAIL', 'info@sweetlemonie.com');
	define('FOURSONS_ADDRESS1', '5 Glen Cameron Rd. Unit 21');
	define('FOURSONS_ADDRESS2', 'Thornhill, ON, L3T 5W2');

	/* Foursons Winemaker Definitions End */

	/* Foursons Winemaker Hours Start */

	define('MONDAY_HOURS', '9:00AM - 7:00PM');
	define('TUESDAY_HOURS', '9:00AM - 7:00PM');
	define('WEDNESDAY_HOURS', '9:00AM - 7:00PM');
	define('THURSDAY_HOURS', '9:00AM - 7:00PM');
	define('FRIDAY_HOURS', '9:00AM - 7:00PM');
	define('SATURDAY_HOURS', '9:00AM - 7:00PM');
	define('SUNDAY_HOURS', 'CLOSED');

	/* Foursons Winemaker Hours End */

	/* Foursons Winemaker Wine Titles Start */
	
	define('NZ', 'New Zealand');
	define('CHI', 'Chilean');
	define('CAL', 'California');
	define('GER', 'German');
	define('AUS', 'Australian');
	define('ITA', 'Italian');
	define('FRA', 'French');
	define('DELLA', 'della Valpolicella');
	define('T_PNO', 'Pinot Noir');
	define('T_MAL', 'Malbec');
	define('T_MER', 'Merlot');
	define('T_CSA', 'Cabernet Sauvignon');
	define('T_SYR', 'Syrah');
	define('T_SBL', 'Sauvignon Blanc');
	define('T_PGR', 'Pinot Grigio');
	define('T_RIE', 'Riesling');
	define('T_GEW', 'Gewurztraminer');
	define('T_CHA', 'Chardonnay');
	define('T_AMA', 'Amarone');
	define('T_BAR', 'Barolo');
	define('T_SHI', 'Shiraz');
	define('T_CHI', 'Chianti');
	define('T_VID', 'Vidal');
	define('T_CFR', 'Cabernet Franc');
	define('T_KIW', 'Kiwi Melon');
	define('T_GRE', 'Green Apple');
	define('T_STR', 'Strawberry White');
	define('T_ZIN', 'Zinfandel');
	define('T_BLU', 'Blush');
	
	/* Foursons Winemaker Wine Titles End */

	/* Foursons Winemaker Wine Descriptions Start */

	define('D_NZPN', 'Elevated aromas of plump red cherries, bitter chocolate and spice define the intense varietal character of this full-bodied wine. Fermented on Hungarian oak cubes and winery grade yeast, the palate is rich and oaky supported by blackberries and herb flavours layered over silky, integrated tannins.');
	define('D_CMAL', 'With spicy &amp; herbaceous aromas and a hint of tobacco, this medium to full bodied Malbec is rounded by an elegant palate of dried red fruits with lingering earthiness. Fermentation on GenuWine Winery Dried Grape Skins and American &amp; French oak chips round the finish.');
	define('D_CMER', 'This full-bodied wine is fermented on Genuwine Winery Dried Grape Skins and heavy toasted French oak shavings. It offers elevated succulent juicy berry flavours accentuated by delicate aroma notes of coffee and vanilla.');
	define('D_AMAD', 'Fermented on Genuwine Winery Dried Grape Skins and toasted French oak chips, this is an assertively full-bodied wine with a delectable nose of black cherries, dark chocolate and well balanced oak. It offers ripe dark fruit flavours cradled by firm tannins culminating in an almost endless finish.');
	define('D_CCSA', 'This richly built wine is fermented on Genuwine Winery Dried Grape Skins and heavy toasted American oak chips lending intricate layers of luscious black currants and cherries followed by black pepper laced with toasted oak.');
	define('D_CSYR', 'Bold and assertive, the bouquet is vibrant with notes of blackcurrants, rich leather, and pepper spice laced with strong toasted oak. Fermentation on GenuWine Winery Grape Skins reveals bold overtones of dark chocolate, spice and an abundance of bold, chewy tannins.');
	define('D_ASBL', 'Tropical and citrus fruits are in the bouquet of this unique, medium to full-bodied Sauvignon Blanc with a hint of herbacity on the nose. This exciting and complex wine bursts with flavours of pineapple, passionfruit and stonefruit with a hint of herbaceousness. The finish offers a refreshing zing of acidity.');
	define('D_IPGR', 'Deeply aromatic with ripe pear, lychee and honey on the nose, this wine lures you to take a sip. Beautifully balanced flavours of ripe juicy pear and stone fruit tantalize the palate and lead to an enduring finish.');
	define('D_GRGE', 'This Riesling Gewürztraminer blend offers apples, spice and a hint of minerals enticing the nose. Slightly off dry with perfectly balanced acidity, flavours of citrus, floral and honey linger gracefully on the palate.');
	define('D_ACHA', 'Our Australian Chardonnay is fermented on a combination of heavy toasted Hungarian oak shavings and lightly toasted American oak chips. This supple, elegant wine boasts rich aromas of honey and tropical fruits while apples, melon, and toasted oak notes tantalize the palate.');
	define('D_CPNO', 'Medium to full-bodied, this wine presents a bouquet of rich tobacco, ripe blackberries and spices. The palate is treated to a heady experience of dark cherries, a hint of oak and velvety tannins.');
	define('D_CMAL2', 'Aromas of crushed blackberries and vanilla follow through to a densely packed palate richly blessed with streaks of chocolate interwoven with abundant oak tones. Fermented on heavy toasted Hungarian oak shavings, the finish is dramatic and long.');
	define('D_FMER', 'This Merlot is a full-bodied red wine with impressive aromas of farm fresh strawberries, violets and vanilla framed with soft silky tannins. On the palate, it presents powerful notes of ripe raspberries, cherries and dark fruit.');
	define('D_AMAR', 'Our Amarone style is packed with rich raspberry, blackberry and cassis flavours. Deep, dark and inviting, the finish is long, lingering and full of ripe tannins.');
	define('D_ACSA', 'Australian Cabernets are typically softer and fruitier. This wine shows complex varietal fruit flavours including cherry and blackberry.');
	define('D_ASHI', 'This full-bodied red wine is deep and dark in colour with a rich bouquet of fruit and a hint of cassis. It ages gracefully into a velvety wine of pure elegance.');
	define('D_IBAR', 'This full-bodied dry wine has intense flavours of violet, cherries and cocoa. Undertones of toasted oak dominate the long finish along with dark fruit and firm acidity.');
	define('D_IPGR2', 'An exquisite balance of citrus fruit and acidity is the foundation for this popular Italian white wine. The bouquet reveals bright citrus and green apple aromas with honeydew tones.');
	define('D_NZSB', 'Crisp and light, with intense flavours of grapefruit peel and freshly cut grass and an accent of light oak on the finish. The wine presents soft hues, with a slight tinge of green.');
	define('D_GGEW', 'This wine delivers delicious aromas of roses, lychees and tropical fruits, as well as the infamous spicy notes characteristic of Gewürztraminer. Our proprietary Süss Reserve Pack™, along with added elderflowers, brings out intense fruity characteristics and inviting spicy tones which complete the experience');
	define('D_ACHA2', 'Clean, crisp and rich in varietal character, fruit flavours abound. It’s golden-hued and slightly tart while flavours of vanilla, cloves and butterscotch tantalize the palate.');
	define('D_CHIA', 'Aggressive in nature, it is crisp, clean and spicy with a subtle black pepper flavour. A perfect match with Italian food.');
	define('D_PNOI', 'A rich red wine, hearty in nature and smooth in flavour. The soft texture and dark colour complement the flavours of berry fruit, with a subtle raspberry undertone.');
	define('D_MALB', 'This rustic red wine has a soft, rich texture, silky tannins, and fills your palate with ripe plums, currants, cherries and red berries.');
	define('D_MERL', 'This supple wine has a soft, full flavour, delicately laced with oak to enhance its characteristic fruitiness.');
	define('D_CSAU', 'A dry, medium-bodied, rich and intense wine, nicely rounded with oak and cherry-currant flavours.');
	define('D_BARO', 'Deep in colour, high in tannin, full-bodied and robust this wine is intense on the palate.');
	define('D_SHIR', 'This rich, extremely dark wine has notes of plum that will entice you. Its high tannins will allow this wine to age gracefully.');
	define('D_PGRI', 'This wine is dry with overtones of green melon leading to a crisp, clean finish. A bouquet of honey and herbs completes the experience.');
	define('D_SBLA', 'A clean, refreshing wine offering a light, fruity aroma with green, herbal flavours and a touch of mint.');
	define('D_GEWU', 'Extremely spicy in flavour and aroma, this wine will tantalize any palate. Well aged, it becomes truly distinctive.');
	define('D_RIES', 'Clean, crisp and slightly fruity, this German-style wine is full of flavour with an intense aroma.');
	define('D_CHAR', 'A full-bodied wine with crisp, green apple bouquet and hearty flavour.');
	define('D_CFRA', '');
	define('D_RIES2', '');
	define('D_VIDA', '');
	define('D_ZBLU', 'This blush wine offers the succulent, mouth-watering flavours of sweet, ripe raspberries blended gracefully with a delectable refreshing rosé.');
	define('D_GAGE', 'This popular, pale straw-coloured wine is intensely flavourful, reminiscent of a freshly cut green apple. The pleasant soft acidity and luscious, fruity aroma of this crisp wine make it a great refresher for a hot summer day.');
	define('D_SWZI', 'This refreshing blush wine presents stimulating strawberry aromas framed against an uplifting off dry palate of ripe red fruit and crisp acidity.');
	define('D_KMPG', 'Light bodied and easy drinking, this wine captures the mouth-watering flavours of freshly cut honeydew melon and juicy watermelon. Perfectly balanced with a hint of tartness from kiwi fruit, this wine possesses a long fruity finish.');

	/* Foursons Winemaker Wine Descriptions End */

	/* Functions for Log In Start */

	// checks if there exists a session id uname and returns result
	function check_login() {
		return isset($_SESSION["uname"]);
	}

	// log in procedure

	function login_to_db($uname, $pword) {
		$success = false;
		$role = 0;

		// extracts a row from users table that matches user name from the input.
		// the input has been securely enhanced by using mysql_real_escape_string()

		$qry = sprintf("SELECT password, role FROM guestList WHERE refId='%s'", mysql_real_escape_string($uname));
		$qry_res = mysql_query($qry) or die ("There was an error selecting a row from user table.<br />".mysql_error());

		// if there is a row extracted, there is a user id that matches the input by the user
		if (mysql_num_rows($qry_res) == 1) {
			$row = mysql_fetch_array($qry_res);
			// holds values from the extracted row
			$encrypted_pw = $row["password"];
			$role = $row["role"];
			// compare the encrypted password
			if ($encrypted_pw == md5($pword)) {
				$success = true;
				// sets the attempt to true, and stores session values accordingly
				setcookie ("PHPSESSID", session_id(), time() + 600);
				$_SESSION["uname"] = $uname;
				$_SESSION["role"] = $role;
			}
		}
		// otherwise, login attempt failed
		return $success;
	}

	/* Functions for Log In End */

	/* Printing footer */
	function print_footer() {
		$content = "<div id=\"footer\">";
		$content .= "\n\t\t\tCopyright &copy; 2013 SLCY";
		$content .= "\n\t\t</div>\n";
		echo $content;
	}

	/* rendering menu at admin page */
	function render_menu($id) {
		$menu_html =  "<div class='navbar-inner'><div class='container'><a class='brand' href='admin.php'>Simon and Jenny's Wedding</a><ul class='nav'>";

  		$menu_html = $menu_html. 

  		                      "<li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='icon-list'></i>&nbsp;View Lists <b class='caret'></b></a>
                        <ul class='dropdown-menu'>
                          <li><a href='guest_list.php?id=bride'>Bride's List</a></li>
                          <li><a href='guest_list.php?id=groom'>Groom's list</a></li>
                          <li class='divider'></li>
                          <li><a href='guest_list.php?id=noShow'>No show list</a></li>
                          <li><a href='guest_list.php?id=noAnswer'>No answer list</a></li>

                        </ul>
                      </li></ul>";
  		$menu_html = $menu_html."<ul class='nav pull-right'><li><a href='logout.php'><i class='icon-off'></i>&nbsp;Logout</a></li></ul></div></div>";
  		return $menu_html;
	}
	
	function fillinTable($id) {
		if ($id == 'bride' || $id == 'groom') {
			$sql = "select a.refId, a.firstName, a.lastName, b.phone, b.email, b.attending, b.bringGuest, b.guestName, b.vegetarian, b.guestVeg from guestList a inner join guestResponse b on a.refId = b.refId where a.role = '0' and a.guestOf ='$id' and b.attending = '1'";
	  	} else {
	  		if ($id == 'noShow') {
	  			$sql = "select a.refId, a.firstName, a.lastName, b.phone, b.email, b.attending, b.bringGuest, b.guestName, b.vegetarian, b.guestVeg from guestList a inner join guestResponse b on a.refId = b.refId where a.role = '0' and b.attending = '0'";
	  		} 
	  		if ($id == 'noAnswer') {
	  			$sql = "SELECT refId, firstName, lastName, guestOf FROM guestList WHERE role=0 AND refId NOT IN (SELECT refId FROM guestResponse)";
	  		}
	  	}
	  	$result = mysql_query($sql);
	  	$html_table_contents = '';
	  	if ($result) {
	  		while ($row = mysql_fetch_array($result)) {
	  			$refId = $row['refId'];
	  			$name = $row['lastName'].", ".$row['firstName'];
	  			$guest_name = $row['guestName'];
	  			$guest = '';
	  			$guestOf = $row['guestOf'];
	  			$isVegetarian = '';
	  			$guestVegetarian = '';

	  			if ($row['bringGuest'] == '1') {
	  				$guest = YES;
	  			} else {
	  				$guest = NO;
	  			}

	  			if ($row['vegetarian'] == '1') {
	  				$isVegetarian = YES;
	  			} else {
	  				$isVegetarian = NO;
	  			}

				if ($row['guestVeg'] == '1') {
	  				$guestVegetarian = YES;
	  			} else {
	  				$guestVegetarian = NO;
	  			}
	  			if ($id == 'bride' || $id == 'groom') {
	  				$html_table_contents = $html_table_contents."<tr><td>".$refId."</td><td>".$name."</td><td>".$row['email']."</td><td>".$isVegetarian."</td><td>".$guest."</td><td>".$guest_name."</td><td>".$guestVegetarian."</td></tr>";
	  			} else {
	  				if ($id == 'noShow') {
	  					$html_table_contents = $html_table_contents."<tr><td>".$refId."</td><td>".$name."</td><td>".$row['email']."</td></tr>";
	  				}
	  				if ($id == 'noAnswer') {
	  					$html_table_contents = $html_table_contents."<tr><td>".$refId."</td><td>".$name."</td><td>".$guestOf."</td></tr>";
	  				}

	  			}	
	  		}
	  	}
	  	return $html_table_contents;
	}

	function validate() {
		$content = "";
		$flag = FALSE;
		if (trim($_POST["emailadd"]) == "") {
			$content .= "Please enter email address.";
			$flag = TRUE;
		}
		if (trim($_POST["phone"]) == "") {
			$content .= "Please enter phone number.";
			$flag = TRUE;
		}
		if ($_POST["attending"] == 1 && $_POST["guest"] == 1 && trim($_POST["guestName"]) == "") {
			$content .= "Please fill in the name of the companion.";
			$flag = TRUE;
		}
		if ($_POST["guest"] == 0 &&  trim($_POST["guestName"]) != "") {
			$content .= "You specified a guest name when you have selected you will not be bringing any.";
			$flag = TRUE;
		}
		if (!filter_var($_POST["emailadd"], FILTER_VALIDATE_EMAIL)) {
			$content .= "Please enter a valid email address.";
			$flag = TRUE;
		}
		if ($flag)
			return $content;
		else
			return NULL;
	}

	/*
	 * Retrieves whether the user is given permission to bring guest or not.
	 */
	function retrieve_bringGuest($userId) {

		$qry = sprintf("SELECT bringGuest FROM guestList WHERE refId='%s'", mysql_real_escape_string($userId));
	  	$qry_res = mysql_query($qry) or die ("There was an error selecting a row from user table.<br />".mysql_error());
	  	$res = NULL;

	  	// retrieve the user's bringGuest result and return
	  	if (mysql_num_rows($qry_res) == 1) {
	  		$row = mysql_fetch_array($qry_res);
	  		$res = $row["bringGuest"];
	  	}
	  	return $res;
	}

	function retrieve_guest($userId) {
		$qry = sprintf("SELECT refId, firstName, lastName, phone, email, attending, r.bringGuest, guestName, vegetarian, guestVeg FROM guestList LEFT JOIN guestResponse r USING (refId) WHERE refId='%s'", mysql_real_escape_string($userId));
		$qry_res = mysql_query($qry) or die ("There was an error selecting a row from user table.<br />".mysql_error());

	  	// retrieve the user's bringGuest result and return
	  	if (mysql_num_rows($qry_res) == 1) {
	  		$row = mysql_fetch_array($qry_res);
	  		return $row;
	  	} else {
	  		return NULL;
	  	}
	}
?>