<?php

?>
<html>
<head>
	<title>Welcome, Debbie!</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro);

		.troll {
			background:#FFF;
			border:1px solid #AAA;
			border-bottom:3px solid #BBB;
			padding:0px;
			margin:15px;
			height:5em;
			overflow:hidden;
			color:#000;
			width:15em;
			height:10em;
			border-radius:0.2em;
		}

		.troll_case {
			margin:0px;
			padding:10px;
			padding-bottom:0px;
			font-weight:bold;
		}

		.troll_name {
			margin:0px;
			padding:10px;
		}

		.troll_link {
			margin:0px;
			padding:10px;
		}

	</style>
</head>
<body style="margin:0px;padding:0px;font-family: 'Source Sans Pro', sans-serif;">
	<div id="logo_header" style="width:100%;height:6em;background-color:#2f333b;color:#fff;">
		<div id="logo" style="padding-top:1em;font-size:2em;padding-left:1em;"><b>TROLL</b>BUSTERS</div>
	</div>
	<div id="header" style="width:100%;height:3.5em;background-color:#e97770;color:#fff;margin:0px;padding:0px;">
		<div id="header_parent" style="padding-top:1em;">
			<div id="logout" style="float:right;padding:0.5em;"><a href="" style="color:#fff;">[Logout]</a></div>
			<div id="h_myaccount" style="float:right;padding:0.5em;"><a href="" style="color:#fff;">[Settings]</a></div>
			<div id="h_name" style="float:right;padding:0.5em;">Hi, Debbie!</div>
		<!--	<div id="h_getapp" style="float:right;padding:0.5em;"><a href="" style="color:#fff;" >[Get the app]</a></div> -->
		</div>
	</div>
	<div id="mid1" style="width:100%;height:25em;">
		<div id="mid1_parent" style="width:100%;">
			<div id="m1_left" style="float:left;padding:2em;width:40em;">
				<div id="question" style="font-size:1.5em;">Where is harassment happening?</div>
				<div id="examples">(URL: online comments, @Twitter/Facebook/Instagram)</div><br/>
				<input type="text" name="name" id="contact-name" placeholder="url" style="height:2em;width:20em;font-size:1.5em;"/>
				<button id="submit" style="height:2em;width:2em;background-color:#2f333b;color:#fff;font-size:1.5em;margin:0px;border:0px;border-radius:0.2em"><b>></b></button>
			</div>
			<div id="m1_right" style="float:left;padding:2em;width:30em;">
				<div id="m1_right_parent" style="height:20em;width:30em;background-color:#2f333b;color:#fff;border-radius:0.2em;">
					<div id="title" style="font-size:1.5em;padding:0.5em;">Resources</div>
					<div id="t1" style="padding:0.5em;"><b>SOS</b><br/>Counter cyberattacks in real time with online community support.<br/><button>Report your case!</button></div>
					<div id="t2" style="padding:0.5em;"><b>RAID</b><br/>Rooting out trolls and their friends.<br/><button>Identify the nest!</button></div>
					<div id="t3" style="padding:0.5em;"><b>SUPPORT</b><br/>Technical, legal, and psychological services. Resources for publishers.<br/><button>Get help!</button></div>
				</div>
			</div>
		</div>
	</div>
	<div id="mid2" style="width:100%;height:50em;background-color:#2f333b;color:#fff">
		<div id="mid2_parent" style="width:100%;">
			<div id="m2_left" style="float:left;padding-left:4em;padding-top:2em;width:40em;">
				<div id="m2_left_t" style="font-size:1.5em;">Trending Trolls:</div><br/>
				<div id="m2_left_blurb">We user user submissions and algorithmic analyses to see top instances of trolling.</div><br/>
				<div class="troll">
					<div class="troll_case">(1) Adensma harasses female activist</div>
					<div class="troll_name"><a href="http://www.trolldor.com">@adensma</a></div>
					<div class="troll_link"><button style="background-color:#e97770;margin:0px;border-radius:0.2em;"><a href="troll_swarm_final.jpg">Help!</a></button></div>
				</div>
				<div class="troll">
					<div class="troll_case">(2) Troll attacks feminist on Twitter</div>
					<div class="troll_name"><a href="http://www.trolldor.com">@mrscrotum21</a></div>
					<div class="troll_link"><button style="background-color:#e97770;margin:0px;border-radius:0.2em;"><a href="https://twitter.com/IjeomaOluo/status/560268676775952384">Help!</a></button></div>
				</div>
				<div class="troll">
					<div class="troll_case">(3) Gamergate troll strikes again</div>
					<div class="troll_name"><a href="http://www.trolldor.com">@AnonGropeCrew</a></div>
					<div class="troll_link"><button style="background-color:#e97770;margin:0px;border-radius:0.2em;"><a href="">Help!</a></button></div>
				</div>
				<a href="" style="color:#fff;">[See more...]</a>
			</div>
			<div id="m2_right" style="float:left;padding:2em;width:20em;">
				<div id="m2_right_t" style="font-size:1.5em;">Troll Nests:</div><br/>
				<div id="m2_right_blurb">Using propietary technology, we've identified major clusters of trolls.</div><br/>
				<img src="http://gabesawhney.com/wp-content/uploads/2011/04/kate-white-bg-pdf-241x300.png" /><br/><br/>
				<a href="https://www.youtube.com/watch?v=7VWjlQWlMOk#t=134" style="color:#fff;">[See more...]</a>
			</div>
		</div>
	</div>
	<div id="mid3">

	</div>
	<div id="footer" style="width:100%;height:3em;">
	</div>
</body>
</html>
