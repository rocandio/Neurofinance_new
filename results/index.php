<html>
	<head>
		<link rel="shortcut icon" href="images/neuro_ico.ico" type="image/x-icon" />
		<link rel="icon" href="images/neuro_ico.ico" type="image/ico" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<!-- JS --><script type="text/javascript" src="js/commoncode.js"></script>		
		<script type="text/javascript" src="js/jquery-1.js"></script>
		<!-- JS --><script type="text/javascript" src="js/jquery_004.js"></script> 
		<script type="text/javascript" src="js/jquery.js"></script>

		<!-- TEST DELETE IF NECESARY-->

		<script type="text/javascript" src="js/base.js"></script>

		<script src="AC_RunActiveContent.js" language="javascript"></script>
		<!-- CSS -->
		<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
		<link href="css/nav-book-gui.css" rel="stylesheet" type="text/css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
		<!-- TESTING PDFVIEWER-->
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="tinybox.js"></script>
		<!-- Scripts -->
		<script type="text/javascript">
			
			/*To put ON state on the selected tab when the tab or the subtabs are active*/
			function painttab(tab){
				switch(tab){
					//Tab 1 NEUROMAMA INFORMATION
					case 1: $("a.btn-neuinf").css("background-image","url('images4/on/1.png')"); break;
					//Tab 2 NEUROMAMA VIDEOS AND PDFS
					case 2: $("a.btn-neuvid").css("background-image","url('images4/on/2.png')"); break;
					//Tab 3 NEUROMAMA TABLET 10"
					case 3: $("a.btn-neutab1").css("background-image","url('images4/on/3.png')"); break;
					//Tab 4 NEUROMAMA TABLET 8"
					case 4: $("a.btn-neutab2").css("background-image","url('images4/on/4.png')"); break;
					//Tab 5 NEUROMAMA TABLET 7"
					case 5: $("a.btn-neutab3").css("background-image","url('images4/on/5.png')"); break;
					//Tab 6 NEUROMAMA SMARTPHONE 5.3"
					case 6: $("a.btn-neusmart1").css("background-image","url('images4/on/6.png')"); break;
					//Tab 7 NEUROMAMA SMARTPHONE 5"
					case 7: $("a.btn-neusmart2").css("background-image","url('images4/on/7.png')"); break;
					//Tab 8 NEUROMAMA LAS VEGAS VACATION
					case 8: $("a.btn-neuvac1").css("background-image","url('images4/on/8.png')"); break;
					//Tab 9 NEUROMAMA LAS VEGAS VACATION 2
					case 9: $("a.btn-neuvac2").css("background-image","url('images4/on/9.png')"); break;
				}
			}
			/*To put OFF state on the selected tab when the tab or the subtabs are active*/
			function unpainttab(tab){
				switch(tab){
					//Tab 1 NEUROMAMA INFORMATION
					case 1: $("a.btn-neuinf").css("background-image","url('images4/off/1.png')"); break;
					//Tab 2 NEUROMAMA VIDEOS AND PDFS
					case 2: $("a.btn-neuvid").css("background-image","url('images4/off/2.png')"); break;
					//Tab 3 NEUROMAMA TABLET 10"
					case 3: $("a.btn-neutab1").css("background-image","url('images4/off/3.png')"); break;
					//Tab 4 NEUROMAMA TABLET 8"
					case 4: $("a.btn-neutab2").css("background-image","url('images4/off/4.png')"); break;
					//Tab 4 NEUROMAMA TABLET 7"
					case 5: $("a.btn-neutab3").css("background-image","url('images4/off/5.png')"); break;
					//Tab 6 NEUROMAMA SMARTPHONE 5.3"
					case 6: $("a.btn-neusmart1").css("background-image","url('images4/off/6.png')"); break;
					//Tab 7 NEUROMAMA SMARTPHONE 5"
					case 7: $("a.btn-neusmart2").css("background-image","url('images4/off/7.png')"); break;
					//Tab 8 NEUROMAMA LAS VEGAS VACATION
					case 8: $("a.btn-neuvac1").css("background-image","url('images4/off/8.png')"); break;
					//Tab 9 NEUROMAMA LAS VEGAS VACATION 2
					case 9: $("a.btn-neuvac2").css("background-image","url('images4/off/9.png')"); break;
				}
			}
		</script>
		<script type="text/javascript">
			function getXMLTagName(a_doc, a_attribute) {
				var sep = '</' + a_attribute + '>';
				var arraytags = a_doc.toString().split('</' + a_attribute + '>');
				arraytags.length = arraytags.length - 1;
				for (var i = 0; i < arraytags.length; i++) {
					arraytags[i] = arraytags[i] + sep;
					//alert(arraytags[i]);
				}
				return arraytags;
			}

			function getXMLFirstNode(a_doc, a_attribute) {
				return getXMLNodeValue(a_doc, a_attribute);
			}
			function getXMLNodeValue2(a_node, a_attribute,a_attribute2) {
				var theXML = a_node.toString();
				var aStr = a_attribute.toString();
				var aStr2 = a_attribute2.toString();
				var sStart = '<' + aStr + '>';
				var sEnd = '</' + aStr2 + '>';
				var index1 = -1;
				var index2 = 0;
				index1 = theXML.indexOf(sStart);
				index2 = theXML.indexOf(sEnd, index1);
				if (index1 != -1 && index2 > index1) {
					output = theXML.substring(index1 + sStart.length, index2);
					return output; //OUTPUT IT PROPERLY.
				}
				else {
					return undefined;
				}
			}
			function isValid(a_obj) {
				return (a_obj != undefined && a_obj != null);
			}
			function getXMLNodeValue(a_node, a_attribute) {
				var theXML = a_node.toString();
				var aStr = a_attribute.toString();
				var sStart = '<' + aStr + '>';
				var sEnd = '</' + aStr + '>';
				var index1 = -1;
				var index2 = 0;
				index1 = theXML.indexOf(sStart);
				index2 = theXML.indexOf(sEnd);
				if (index1 != -1 && index2 > index1) {
					output = theXML.substring(index1 + sStart.length, index2);
					return output; //OUTPUT IT PROPERLY.
				}
				else {
					return undefined;
				}
			}
			var f_curFinishFunction = function(response) {
				//jQuery('#flashvideo').fadeIn('slow');
				jQuery('#HomeGallery').hide();
				var Details22 = document.getElementById('HomeGallery');
				Details22.innerHTML = "<div id=\"Detail\">        <div id=\"DetailHeader\"> </div>        <div id=\"DetailCopy\"></div></div>    ";
				document.title = getXMLNodeValue(response, ('title'));
				var Details1 = document.getElementById('DetailCopy');
				Details1.innerHTML = getXMLNodeValue2(response, ('div id="DetailCopy"'), ('div'));
				//DetailHeader
				var Details3 = document.getElementById('DetailHeader');
				Details3.innerHTML = getXMLNodeValue2(response, ('div id="DetailHeader"'), ('div'));
				jQuery('#HomeGallery').fadeIn('slow');
				jQuery('#Detail1').hide();
				jQuery('#Detail3').hide();
			}
			var f_curFinishFunction2 = function(response) {
				//jQuery('#flashvideo').fadeIn('slow');
				jQuery('#HomeGallery').hide();
				var Details22 = document.getElementById('HomeGallery');
				Details22.innerHTML = getXMLNodeValue2(response, ('div id="DetailCopy"'), ('div'));     		
				document.title = getXMLNodeValue(response, ('title'));
				jQuery('#HomeGallery').fadeIn('slow');
			}
		function getNewPage(page_url) {
			if(page_url.toString().indexOf("index.php") != -1){
				//jQuery('#HomeGallery').hide();
				ajax(page_url, '', f_curFinishFunction2);
				//jQuery('#HomeGallery').fadeIn('slow');
			}
			else{
				//jQuery('#HomeGallery').hide();
				ajax(page_url, '', f_curFinishFunction);
				//jQuery('#HomeGallery').fadeIn('slow');
			}
		}
		</script>
		<script language="javascript">
			function getFlashMovie(movieName) {
				var isIE = navigator.appName.indexOf("Microsoft") != -1;
				return (isIE) ? window[movieName] : document[movieName];
  			}
  			
  			function pauseVideo(){
  				//var movie = getFlashMovie('player');
  				var movie = document.getElementById("player");
				movie.Pause();
				return false;

  			}
		</script>
		<!--End of block of pdftesting-->
			<!-- Corporate Script -->
		<script type="text/javascript">
			// When the DOM is ready, initialize the scripts.
			jQuery(function($) {
				// Get a reference to the container.
				var CorporateInner = $("#CorporateInner");
				// Bind the link to toggle the slide.
				$("#CorporateButton").click(
					function(event) {
						// Prevent the default event.
						event.preventDefault();
						// Toggle the slide based on its current
						// visibility.
						if (CorporateInner.is(":visible")) {
							// Hide - slide up.
							CorporateInner.slideUp(500);
						} else {
							// Show - slide down.
							CorporateInner.slideDown(500);
						}
					}
				);
			});
		</script>
		<!-- VIDEO LINKS SCRIP-->
		<script type="text/javascript">
			// When the DOM is ready, initialize the scripts.
			jQuery(function($) {
				// Get a reference to the container.
				var CorporateInner = $("#CorporateInner1");
				// Bind the link to toggle the slide.
				$("#CorporateButton1").click(
					function(event) {
						// Prevent the default event.
						event.preventDefault();
						// Toggle the slide based on its current
						// visibility.
						if (CorporateInner.is(":visible")) {
							// Hide - slide up.
							CorporateInner.slideUp(500);
						} else {
							// Show - slide down.
							CorporateInner.slideDown(500);
						}
					}
				);
			});
		</script>

		<!-- Language Script -->
		<script type="text/javascript">
			// When the DOM is ready, initialize the scripts.
			jQuery(function($) {
				// Get a reference to the container.
				var LanguageInner = $("#LanguageInner");
				// Bind the link to toggle the slide.
				$("#LanguageButton").click(
					function(event) {
						// Prevent the default event.
						event.preventDefault();
						// Toggle the slide based on its current
						// visibility.
						if (LanguageInner.is(":visible")) {
							// Hide - slide up.
							LanguageInner.slideUp(500);
						} else {
							// Show - slide down.
							LanguageInner.slideDown(500);
						}
					}
				);
			});
		</script>
	</head>

	<body>
		<div id="HeaderContainer">
			<div id="HeaderContent">
				<div id="Branding">
					<div style="float: left; height: 29px;">
						<a href="#" onclick=getNewPage('index.php');>
						<div style="position: relative; left: 17px; float: left; height: 29px;">
							<img src="images/NeuroMama_small.png" alt="NEUROMAMA" height="31" width="108">
						</div>
						</a>
						<span style="position: relative; left: 25px; font-family: 'Didact Gothic', sans-serif; font-size: 18px; color: #ffffff">The 21st Century Search Engine, Based on Neuro Technology.</span>
					</div>
				</div>
				<!-- Logged in Navigation Items -->
				<!-- Language Links 
				<div id="LanguageLinks">
					<div>
						<a href="#" class="LanguageSubNavigation">
							<img src="images/us.png" border="0">&nbsp;&nbsp;English
						</a>
						<a href="#" class="LanguageSubNavigation">
							<img src="images/mx.png" border="0">&nbsp;&nbsp;Espa&Ntilde;ol
						</a>	
					</div>
				</div>
				-->
				
				
				<!-- Navigation Items -->
				<div id="HeaderNavigation">
					<!-- Tabs Panel -->
					<ul id="nav">
						<li onmouseover=painttab(1); onmouseout=unpainttab(1);><a href="#" onclick="return false;" class="btn-neuinf">NEUROMAMA INFORMATION</a>
							<ul onmouseover=painttab(1); onmouseout=unpainttab(1);>
                                <li style="padding-top: 8px;"><a target="_blank" href="http://www.neuromama.net/PDF/NeuroMama,_Ltd._Complete_8-K_Filing_6-24-2013.pdf"  onclick=getNewPage('');>FOR INVESTORS</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-info/Info-2.php');>GRAND OPENING</a></li>
								<li style="padding-top: 8px;"><a target="_blank" href="http://www.neuromama.net/Info-3.html"  onclick=getNewPage('');>FUNDRAISER</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-info/Info-4.php');>NEUROMAMA PRESS-RELEASES</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-neuro-o/AI_5.php');>NEUROMAMA PROMOTIONAL VIDEOS</a></li>
								<li style="padding-top: 8px; padding-bottom: 5px;"><a target="_blank" href="http://www.neuromama.net/PDF/EURASIA-Resort_Hotel_Casino.pdf"  onclick=getNewPage('');>STRATEGIC PARTNERS </a></li>
							</ul> 
						</li> 
						<li onmouseover=painttab(2); onmouseout=unpainttab(2);><a href="#" onclick="return false;" class="btn-neuvid">NEURO TABLETS</a>
							<ul onmouseover=painttab(2); onmouseout=unpainttab(2);>
								<li style="padding-top: 8px;"><a target="_blank" href="http://www.neuromama.net/NeuroPads/NeuroPad_En.pdf" >ENGLISH</a></li>
								<li style="padding-top: 8px;"><a target="_blank" href="http://www.neuromama.net/NeuroPads/NeuroPad_Es.pdf" >ESPAÑOL</a></li>
								<li style="padding-top: 8px; padding-bottom: 5px;"><a target="_blank" href="http://www.neuromama.net/NeuroPads/NeuroPad_Ru.pdf" >RUSSIAN</a></li>
							</ul> 
						</li> 
						
						<li onmouseover=painttab(3); onmouseout=unpainttab(3);><a href="#" onclick="return false;" class="btn-neutab1">NEURO PHONES</a>
							<ul onmouseover=painttab(3); onmouseout=unpainttab(3);>
								<li style="padding-top: 8px;"><a target="_blank" href="http://www.neuromama.net/NeuroPhones/NeuroPhone_En.pdf" >ENGLISH</a></li>
								<li style="padding-top: 8px;"><a target="_blank" href="http://www.neuromama.net/NeuroPhones/NeuroPhone_Es.pdf" >ESPAÑOL</a></li>
								<li style="padding-top: 8px; padding-bottom: 5px;"><a target="_blank" href="http://www.neuromama.net/NeuroPhones/NeuroPhone_Ru.pdf" >RUSSIAN</a></li>
							</ul> 
						</li> 
						
						<li onmouseover=painttab(4); onmouseout=unpainttab(4);><a href="#" onclick="return false;" class="btn-neutab2">HOTEL REWARDS</a>
							<ul onmouseover=painttab(4); onmouseout=unpainttab(4);>
								<li style="padding-top: 8px;"><a href="#hotel_cert_1.php"  onclick=getNewPage('hotel_cert_1.php');>3 DAY, 2 NIGHT VACATION CERTIFICATE (22 Destinations)</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/4-hotel-rewards/hotel_cert_2.php');>3 DAY, 2 NIGHT VACATION CERTIFICATE (Multi Destinations)</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/4-hotel-rewards/hotel_cert_3.php');>5 DAY, 4 NIGHT HAWAII GETAWAY CERTIFICATE</a></li>
								<li style="padding-top: 8px; padding-bottom: 5px;"><a href="#" onclick=getNewPage('tabs/4-hotel-rewards/hotel_cert_4.php');>8 DAY, 7 NIGHT RESORT VACATION CERTIFICATE</a></li>
							</ul> 
						</li> 
						<li onmouseover=painttab(5); onmouseout=unpainttab(5);><a href="#" onclick="return false;" class="btn-neutab3">HOTEL REWARDS</a>
							<ul onmouseover=painttab(5); onmouseout=unpainttab(5);>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/5-hotel-rewards/hotel_cert_5.php');>4 DAY ALL-INCLUSIVE JAMAICA CERTIFICATE</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/5-hotel-rewards/hotel_cert_6.php');>5 DAY MEXICAN VACATION CERTIFICATE</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/5-hotel-rewards/hotel_cert_7.php');>8 NIGHT MEXICO GETAWAY CERTIFICATE</a></li>
								<li style="padding-top: 8px; padding-bottom: 5px;"><a href="#" onclick=getNewPage('tabs/5-hotel-rewards/hotel_cert_8.php');>2 NIGHT HOTEL ACCOMMODATIONS AND ROUNDTRIP AIRFARE FOR TWO VACATION CERTIFICATE</a></li>
							</ul> 
						</li> 
						<li onmouseover=painttab(6); onmouseout=unpainttab(6);><a href="#" onclick="return false;" class="btn-neusmart1">CRUSIE REWARDS</a>
							<ul onmouseover=painttab(6); onmouseout=unpainttab(6);>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/6-cruise-rewards/cruise_cert_1.php');>4 DAY CRUISE CERTIFICATE</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/6-cruise-rewards/cruise_cert_2.php');>TWO FOR ONE CRUISE CERTIFICATE</a></li>
								<li style="padding-top: 8px;padding-bottom: 5px;"><a href="#"  onclick=getNewPage('tabs/6-cruise-rewards/cruise_cert_3.php');>2 NIGHT BAHAMAS CRUISE CERTIFICATE</a></li>
							</ul> 
						</li> 
						<li onmouseover=painttab(7); onmouseout=unpainttab(7);><a href="#" onclick="return false;" class="btn-neusmart2">AIRFARE REWARDS</a>
							<ul onmouseover=painttab(7); onmouseout=unpainttab(7);>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/7-airfare-rewards/airfare_cert_1.php');>FREE COMPANION AIRFARE CERTIFICATE</a></li>
								<li style="padding-top: 8px;padding-bottom: 5px;"><a href="#"  onclick=getNewPage('tabs/7-airfare-rewards/airfare_cert_2.php');>ACCOMMODATIONS AND ROUNDTRIP AIRFARE FOR TWO VACATION CERTIFICATE</a></li>
							</ul> 
						</li> 
						<li onmouseover=painttab(8); onmouseout=unpainttab(8);><a href="#" onclick="return false;" class="btn-neuvac1">Restaurants, Grocery and Auto</a>
							<ul onmouseover=painttab(8); onmouseout=unpainttab(8);>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/8-rga-rewards/rga_cert_1.php');>$1000 RESTAURANT SAVINGS CERTIFICATE</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/8-rga-rewards/rga_cert_2.php');>$1000 GROCERY SAVINGS CERTIFICATE</a></li>
								<li style="padding-top: 8px;padding-bottom: 5px;"><a href="#"  onclick=getNewPage('tabs/8-rga-rewards/rga_cert_3.php');>$1000 AUTOMOBILE DISCOUNTS CERTIFICATE</a></li>
							</ul> 
						</li> 
						<li onmouseover=painttab(9); onmouseout=unpainttab(9);><a href="#" onclick="return false;" class="btn-neuvac2">Entertainment REWARDS</a>
							<ul>
								<li style="padding-top: 8px;padding-bottom: 5px;"><a href="#"  onclick=getNewPage('tabs/9-entertainment-rewards/entertainment_cert.php');>GOLF MEMBERSHIP DISCOUNTS CERTIFICATE</a></li>
							</ul>
						</li> 
							<!--First Tab
							
							<ul onmouseover=painttab(1); onmouseout=unpainttab(1);>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/introduction.aspx');>Eurasia Introduction</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/overview.aspx');>Eurasia Overview</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/philosophy.aspx');>Eurasia Philosophy</a></li>
								<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/mission.aspx');>Eurasia Mission</a></li>
								<li style="padding-top: 8px; padding-bottom: 5px;"><a href="#"  onclick=getNewPage('tabs/1-overview/reestablishing.aspx');>Reestablishing Las Vegas As The Cross-Trail Of The World</a></li>
							</ul> 
						  -->
					</ul>
				</div>
				<div id="SubHeader"><span style="font-family: 'Didact Gothic',sans-serif; font-size: 13px; color: #fff"><strong style="font-size: 16px;">Fewer duplicates, more accurate returns, faster results, Frequent Searcher Rewards for gift certificates. Join now!</strong></span></div>
				<!-- /HeaderNavigation -->

			</div>
		</div>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<?php include 'info1.php';?>
			</div>
		</div>
		<div id="flashvideoholder2"></div>
		<div id="FooterContainer">
			<div id="Footer">
				<div id="floatright">
					<div style="margin-top: 20px;margin-bottom: 20px;">
						<a style="font-size: 25px;" href="http://neuromama.net/rs/Download_Information.html" target="_blank">
							<b style="font-size: 25px" >Download Information </b>
						</a>
					</div>
					<!-- Property Links -->
					<div id="PropertyLinks" >
						<div style="width: 150px; height:24px; position:relative;">
							<div id="CorporateContainer">
								<div id="CorporateInner">
									<a href="http://www.acesofacts.com/" target="_blank">Aces of Acts</a><br>
									<a href="http://www.tvimama.com/" target="_blank">TVIMAMA.COM</a><br>
									<a href="http://www.tvimama.net" target="_blank">TVIMAMA.NET</a><br>
									<a href="http://www.eurasialasvegas.com/" target="_blank">EURASIA</a><br>
						
								</div>
								<div id="CorporateButton">
									<a href="#">
									<img src="images/footer/btn-corporate-links-off.jpg" alt="Corporate Links" id="corporatebtn" class="img-swap"onmouseover="this.src='images/footer/btn-corporate-links-on1.jpg'" onmouseout="this.src='images/footer/btn-corporate-links-off.jpg'" height="24" width="150">
									</a>
								</div>		
							</div>	
						</div>
						
					</div>
					<div id="PropertyLinks1" >
						<div style="width: 20px; height:24px; position:relative;">
							<!--div id="CorporateContainer1">
								<div id="CorporateInner1">
									<a href="#" onclick="pauseVideo();TINY.box.show({url:'media/v1.html',width:720,height:480})">VIDEO 1</a><br>
								</div>
								<div id="CorporateButton1">
									<a href="#">
										<img src="images/footer/btn-video-links-off.png" alt="1" id="corporatebtn" class="img-swap" onmouseover="this.src='images/footer/btn-video-links-on.png'" onmouseout="this.src='images/footer/btn-video-links-off.png'" height="24" width="150">
									</a>
								</div>		
							</div-->
						</div>
					</div>
					<div id="FooterTools2">
						<div id="FooterSocial"><img src="images/Follow-Us.gif" alt="Follow Us:" height="16" width="55">
							<a href="http://twitter.com/GlobalLtd" target="_blank" onmouseover="MM_swapImage('twitter','','images/footer/btn-Twitter-on.jpg',1)" onmouseout="MM_swapImgRestore()">
								<img src="images/footer/btn-Twitter-off.jpg" alt="Twitter" id="twitter" height="16" width="17">
							</a>
							<a href="http://www.facebook.com/pages/Global-Entertainment-Media-LTD/140161319418555?sk=info" target="_blank" onmouseover="MM_swapImage('facebook','','images/footer/btn-Facebook-on.jpg',1)" onmouseout="MM_swapImgRestore()">
								<img src="images/footer/btn-Facebook-off.jpg" alt="Facebook" id="facebook" height="16" width="17">
							</a>
							<a href="http://www.youtube.com/Globalltd" target="_blank" onmouseover="MM_swapImage('youtube','','images/footer/btn-YouTube-on.jpg',1)" onmouseout="MM_swapImgRestore()">
								<img src="images/footer/btn-YouTube-off.jpg" alt="YouTube" id="youtube" height="16" width="17">
							</a>
						</div>
					</div>
				</div>
				<div id="FooterCopyright"><br><br> <br><h2 style="text-align:right; margin-right:180px;">Novosibirsk, 182/1 Krasny Prospekt, 7th floor, 630049, Russia</h2>
				</div>
			</div>
		</div>
		
	</body>
</html>