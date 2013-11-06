<?php
require("../../cdn/twitter.php");
$twitter = new Twitter('nIw6jtgmhTMIc9yvirIfrw', '1AQ0KGvuUGNaEflypX8rA4WggLMDUWCvPkkN2XTBETc');
$twitter->setOAuthToken('137359890-rNJKysDWn8CHB5Yr7X8IljV5BhiDixQ1RTdC3DOh');
$twitter->setOAuthTokenSecret('0aew7ksQQ2xXyrH6A9LUdB0Uy3AlfQCNKQROK9rs');
$timeline = $twitter->statusesUserTimeline();

$i = 1;
if (count($timeline)>0)
foreach($timeline as $k => $v) {
	$i++;
	$tweets .= "<p>{$v[text]}</p>";
	if ($i > 6) break;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tom Sendze</title>
<link rel="favicon" type="image/x-icon" href="css/img/favicon.ico">
<meta name="google-site-verification" content="rQC4vcNX7Bx4RjHJlTHNzn9sYmzcLP66OyEfDnInrFQ" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Tom Sendze - web developer, front-end guru, javascript ninja, adobe air evangelist. Welcome!" /> 
<meta name="keywords" content="tom,sendze,tom sendze,freelance,webdev,front end,php,css,html,javascript,js,actionscript,as,developer,flash,air,google,facebook" />
<link rel="stylesheet" type="text/css" href="http://cdn.airy.me/fancybox.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css"><![endif]-->
<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]-->

<script type="text/javascript" src="http://cdn.airy.me/jquery.js"></script>

<script type="text/javascript" src="http://cdn.airy.me/detect.js"></script>
<script type="text/javascript" src="http://cdn.airy.me/mousewheel.js"></script>
<script type="text/javascript" src="http://cdn.airy.me/fancybox.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<title>Tom Sendze Portfolio</title>
</head>
<body>
	<div id="header">
		<div class="inside">
			<div class="top clr">
				<div class="logo"></div>
				<div class="menu">
					<ul>
						<li><a href="http://airy.me" target="_blank">projects</a></li>
						<li><a href="http://blog.airy.me" target="_blank">blog</a></li>
					</ul>
				</div>
			</div>
			<div class="bottom clr">
				<div class="exp">
					<h2>about</h2>
					<p>Young and enthusiastic Web developer, front-end technologies aficionado, HTML5 and CSS3 evangelist, Javascript addict, Progressive enhancement supporter.</p>
					<p>Has more than 6 years of programming experience ranging from Prolog and Java to C# and Flex, but idolizes Javascript and PHP.</p>
					<p>Completed degree in Computer Science with a Bachelor thesis about features of Web 2.0 and AJAX technology. Currently doing Masters dissertation in Edinburgh Napier University on OCR using HTML5 technologies.</p>
					<p>Has commercial experience in Linux, Oracle databases, Business Intelligence, Web development.</p>
					<p>For a full story take a look at <a href="http://www.linkedin.com/in/tomsendze" class="boxframe">CV</a></p>
				</div>
				<div class="life">
					<h2>likes</h2>
						<ul>
							<li><a href="http://music.airy.me/#kolor">Music</a></li>
							<li><a href="http://travel.airy.me">Travel</a></li>
							
							<li><a href="http://www.airy.me">JS Jitsu</a></li>
							<li>Ju Jitsu</li>
							
						</ul>
				</div>
			</div>
		</div>
	</div><!-- #header -->
	
	<div id="works" class="inside">
		<div class="content">
			<h2>builds</h2>
			<div id="slideshow">
				<div id="slidesContainer">

				
					<!-- slide 1 -->
					<div class="slide">
					
						<div class="work_box lt">
							<a href="works/contactor1.png" rel="contactor"><img src="works/contactor.png"></a>
							<div style="display: none;">
								<a href="works/contactor2.png" rel="contactor"></a>
								<a href="works/contactor3.png" rel="contactor"></a>
								<a href="works/contactor4.png" rel="contactor"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/geopast1.png" rel="lightbox-geopast"><img src="works/geopast.png"></a>
							<div style="display: none;">
								<a href="works/geopast2.png" rel="lightbox-geopast"></a>
								<a href="works/geopast3.png" rel="lightbox-geopast"></a>
								<a href="works/geopast4.png" rel="lightbox-geopast"></a>
								<a href="works/geopast5.png" rel="lightbox-geopast"></a>
							</div>
						</div>

						<div class="work_box lt">
							<a href="works/pcsec1.png" rel="lightbox-pcsec"><img src="works/pcsec.png"></a>
							<div style="display: none;">
								<a href="works/pcsec2.png" rel="lightbox-pcsec"></a>
							</div>
						</div>
						
						<div class="work_box lt clear">
							<a href="works/med1.png" rel="lightbox-med"><img src="works/med.png"></a>
							<div style="display: none;">
								<a href="works/med2.png" rel="lightbox-med"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/scenic1.png" rel="lightbox-scenic"><img src="works/scenic.png"></a>
							<div style="display: none;">
								<a href="works/scenic2.png" rel="lightbox-scenic"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/smolt1.png" rel="lightbox-smolt"><img src="works/smolt.png"></a>
							<div style="display: none;">
								<a href="works/smolt2.png" rel="lightbox-smolt"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/sarsar1.png" rel="lightbox-sarsar"><img src="works/sarsar.png"></a>
							<div style="display: none;">
								<a href="works/sarsar2.png" rel="lightbox-sarsar"></a>
							</div>
						</div>
				

						<div class="work_box lt">
							<a href="works/staward1.png" rel="lightbox-staward"><img src="works/staward.png"></a>
							<div style="display: none;">
								<a href="works/staward2.png" rel="lightbox-staward"></a>
							</div>
						</div>
						<div class="work_box lt">
							<a href="works/jigsaw1.png" rel="lightbox-jigsaw"><img src="works/jigsaw.png"></a>
							<div style="display: none;">
								<a href="works/jigsaw2.png" rel="lightbox-jigsaw"></a>
							</div>
						</div>
						
						
					</div>
					
					
						
						<!-- slide 2 -->
					<div class="slide">
						<div class="work_box lt">
							<a href="works/mant1.png" rel="lightbox-mant"><img src="works/mant.png"></a>
							<div style="display: none;">
								<a href="works/mant2.png" rel="lightbox-mant"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/piersbrown1.png" rel="lightbox-piersbrown"><img src="works/piersbrown.png"></a>
							<div style="display: none;">
								<a href="works/piersbrown2.png" rel="lightbox-piersbrown"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/sutherland1.png" rel="lightbox-sutherland"><img src="works/sutherland.png"></a>
							<div style="display: none;">
								<a href="works/sutherland2.png" rel="lightbox-sutherland"></a>
							</div>
						</div>						
						
						<div class="work_box lt">
							<a href="works/athletes1.png" rel="lightbox-athletes"><img src="works/athletes.png"></a>
							<div style="display: none;">
								<a href="works/athletes2.png" rel="lightbox-athletes"></a>
								<a href="works/athletes3.png" rel="lightbox-athletes"></a>
								<a href="works/athletes4.png" rel="lightbox-athletes"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/webd1.png" rel="lightbox-webd"><img src="works/webd.png"></a>
							<div style="display: none;">
								<a href="works/webd2.png" rel="lightbox-webd"></a>
							</div>
						</div>
					
						<div class="work_box lt">
							<a href="works/cumuli1.png" rel="lightbox-cumuli"><img src="works/cumuli.png"></a>
							<div style="display: none;">
								<a href="works/cumuli2.png" rel="lightbox-cumuli"></a>
								<a href="works/cumuli3.png" rel="lightbox-cumuli"></a>
								<a href="works/cumuli4.png" rel="lightbox-cumuli"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/ayazuta1.png" rel="lightbox-ayazuta"><img src="works/ayazuta.png"></a>
							<div style="display: none;">
								<a href="works/ayazuta2.png" rel="lightbox-ayazuta"></a>
								<a href="works/ayazuta3.png" rel="lightbox-ayazuta"></a>
								<a href="works/ayazuta4.png" rel="lightbox-ayazuta"></a>
								<a href="works/ayazuta5.png" rel="lightbox-ayazuta"></a>
							</div>
						</div>
						
						<div class="work_box lt">
							<a href="works/airyme1.png" rel="lightbox-airyme"><img src="works/airyme.png"></a>
						</div>
						
						<div class="work_box lt">
							<a href="works/cookingchaos1.png" rel="lightbox-cookingchaos"><img src="works/cookingchaos.png"></a>
							<div style="display: none;">
								<a href="works/cookingchaos2.png" rel="lightbox-cookingchaos"></a>
							</div>
						</div>
						
					</div><!-- slide 2 -->					
				</div>
			</div>
		</div>
	</div>
	
	<div id="designs" class="inside">
		<h2>designs</h2>
			<div class="designs">
				<div class="img"><a href="designs/serenity1.jpg" rel="designs"><img src="designs/serenity1tn.jpg"></a></div>
				<div class="img"><a href="designs/serenity2.jpg" rel="designs"><img src="designs/serenity2tn.jpg"></a></div>
				
				<div class="img"><a href="designs/watchjewel1.jpg" rel="designs"><img src="designs/watchjewel1tn.jpg"></a></div>
				<div class="img"><a href="designs/watchjewel2.jpg" rel="designs"><img src="designs/watchjewel2tn.jpg"></a></div>
				
				<div class="img"><a href="designs/sasta.jpg" rel="designs"><img src="designs/sastatn.jpg"></a></div>
			</div>
	</div>
	
	
	<div id="projects" class="inside">
		<h2>development</h2>
		<div class="content">
			<div class="left-col">
				<p><b><a href="http://music.airy.me" target="_blank">Music Box</a></b> - Advanced audio Web application. Built using thin client approach. Allows creating playlists, loading list of local music files, saving playlists in client and to the server for sharing. Mashed up with Last.fm to allow searching for top tracks and similar artists.</p>
				<p><b><a href="http://imp.airy.me" target="_blank">Internet Media Player</a></b> - AIR desktop application. Mashup of social media services and databases (last.fm, youtube, rutube, vkontakte, discogs, musicbrainz). Delivers audio and video content, provides top radio charts and discography information.</p>
				<p><b><a href="http://yamp.airy.me" target="_blank">Yet Another Music Player</a></b> - Online music aggregator. Works with Last.fm databases and VK social service to bring audio content to end-user. Allows searching for artists discographies and listen its tracks.</p>
				<p><b><a href="http://enhancer.airy.me" target="_blank">Enhancer</a></b> - In-browser image editing and enhancing application. Runs natively in client and does not require additional plug-ins or server interaction. Support drag/drop and offers numerous image manipulation techniques and filters. It's like Photoshop in your browser.. without Flash!</p>
			</div>
			<div class="right-col">
				<p><b><a href="http://games.airy.me/breakout" target="_blank">Breakout</a></b> - Processing.js experiemnt for creating breakout arkanoid game in Javascript and Canvas.</p>
				<p><b><a href="http://games.airy.me/halma" target="_blank">Halma Online</a></b> - Addictive multiplayer game, built using modern Web standards, does not require Flash and works on iOS devices. Play with opponent and get your chips in an opposite end of the board faster than him.</p>
				<p><b><a href="http://games.airy.me/ships">Battleships</a></b> - All-times favorite game for two players. Setup ships and go shooting! The first one to take down all opponent's ships - wins!</p>
				<p><b><a href="http://games.airy.me/breakout">Breakout</a></b> - Brick cruncher is back in HTML5. Intensive game with addictive gameplay offers lots of fun. Supports both mouse and keyboard controller.</p>
				<p><b><a href="http://tv.airy.me" target="_blank">TV Nerds</a></b> - Online TV show collection. Provides media content in two languages with latest episodes for most popular shows. Closely integrated with Facebook, allows posting comments and authorizing with FB account.</p>
				
			</div>			
		</div>
	</div><!-- bottom -->
	

	
	
	
	<div id="footer" class="inside">
		<div id="skills" class="column lt">
			<h2>skills</h2>
			<hr class="line">
			<p>
				<span class="a">HTML5</span>
				<span class="a">CSS3</span>
				<span class="a">PHP</span>
				<span class="a">AJAX</span>
				<span class="a">AIR</span>
				<span class="a">FLEX</span>
				<span class="a">MySQL</span>
				<span class="a">DHTML</span>				
				<span class="a">COMET</span>
								
				<span class="b">Photoshop</span>
				<span class="b">Javascript</span>
				<span class="b">ECMAScript</span>
				<span class="b">ActionScript</span>
				<span class="b">Flash</span>
				<span class="b">Ruby</span>
				<span class="b">Node.JS</span>
				<span class="b">Silverlight</span>
				<span class="b">ASP.NET</span>
				
				<span class="c">jQuery</span>				
				<span class="c">Prototype</span>				
				<span class="c">mootools</span>
				<span class="c">Dojo</span>
				
				<span class="c">Symfony</span>
				<span class="c">CakePHP</span>
				<span class="c">Kohana</span>
				<span class="c">Yii</span>
				
				<span class="c">Joomla</span>
				<span class="c">Drupal</span>
				<span class="c">Wordpress</span>
				<span class="c">VirtueMart</span>
				
				<span class="d">Java</span>
				<span class="d">.NET</span>
				<span class="d">C#</span>
				<span class="d">Delphi</span>
				<span class="d">Prolog</span>
				<span class="d">Python</span>		
				<span class="d">Linux</span>
				
				<span class="e">REST/SOAP</span>				
				<span class="e">OBIEE</span>
				<span class="e">DWH</span>
				<span class="e">PRINCE2</span>
				<span class="e">Subversion</span>	
				<span class="e">Windows2003</span>
							
				<span class="f">GoogleGears</span>
				<span class="f">WebSocket</span>
				<span class="f">Canvas</span>
				<span class="f">WebGL</span>

			</p>
		
		</div>
		<div  id="twitter" class="column lt">
			<h2>twitter</h2>
			<hr class="line">
			<?=$tweets?>
			</div>
		<div  id="contacts" class="column lt">
			<h2>contacts</h2>
			<hr class="line">
			<p>I'm always open to suggestions, freelance work and small donations. You can find me on various social networks:</p>
			<div class="soc_networks">
				<p><a href="http://uk.linkedin.com/in/tomsendze" target="_blank"><img src="css/img/linkedin_logo.png" alt="linkedin"> LinkedIn</a></p>
				<p><img src="css/img/twitter_logo.png" alt="twitter"> <a href="http://twitter.com/airyweb" target="_blank">Twitter</a></p>
				<p><img src="css/img/youtube_logo.png" alt="youtube"> <a href="http://www.youtube.com/kolor99" target="_blank">YouTube</a></p>							
				<p><img src="css/img/skype.png" alt="skype"> <a href="skypeto://kolor99" target="_blank">kolor99</a></p>
			</div>
		</div>
		
	</div>
	
	
	<div id="hell">
		<div class="inside">
			<p>Copyright (c) Tom Sendze, 2010</p>
		</div>
	
	</div>
	
</body>
</html>