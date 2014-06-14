<?php
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('assets/includes/header.php'); 
	?>
<div id="wrapper">
	<a href="/">
		<div class="logosmallmobile"></div>
	</a>
	<?php $ga = new GlobalArea('Main Nav');$ga->display($c); ?>
	<?php $ga = new GlobalArea('Main Mobile Nav');$ga->display($c); ?>
	<div class="content">
		<h1><?php $page = Page::getCurrentPage(); echo $page->getCollectionName(); ?></h1>
		<?php $a = new Area('Content');$a->display($c); ?>
		<?php /*
			<div class="aboutPanel">
			    <div class="aboutprofilepic"></div>
			    <div class="hometxt_holder">
			        <span class="introtxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh, ac blandit libero porttitor quis. Maecenas non feugiat nisi.</span>
			    </div>
			</div>
			<!-- 5 things -->
			<div class="fivethingsheader">
			    <div class="fivethingstxtholder" style="text-transform:uppercase;">
			        <span class="headlineWhite_m">What<span class="headlineWhite_l">You</span> <span class="headlineWhite_m">Should know about</span> <span class="headlineWhite_l">Me</span>       
			    </div>
			</div>
			<div class="fivethingsindicator"></div>
			<!-- 5 things mobile -->
			<div class="fivebgholdermobile">
			    <div class="fivespacermobile"></div>
			    <div class="fivecentermobile">
			        <div class="oneoffivemobile"></div>
			        <div class="fivetxtmobile1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh, ac blandit libero porttitor quis. Maecenas non feugiat nisi.</div>
			    </div>
			    <div class="fivecentermobile">
			        <div class="twooffivemobile"></div>
			        <div class="fivetxtmobile2">When explaining my name I may have to reference a particular dog breed.</div>
			    </div>
			    <div class="fivecentermobile">
			        <div class="threeoffivemobile"></div>
			        <div class="fivetxtmobile2">I believe that limited time equals a limited product.</div>
			    </div>
			    <div class="fivecentermobile">
			        <div class="fouroffivemobile"></div>
			        <div class="fivetxtmobile2">4 Is not something that golfers yell out; it’s the handicap I’m working towards.</div>
			    </div>
			    <div class="fivecentermobile">
			        <div class="fiveoffivemobile"></div>
			        <div class="fivetxtmobile2">Quality must always take preference over quantity.</div>
			    </div>
			</div>
			<!-- 5 things web -->
			<div class="fivebgholder">
			    <div class="fivecenter">
			        <div class="fivepanel">
			            <div class="oneoffive"></div>
			            <div class="fivetxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh.</div>
			        </div>
			        <div class="fivepanel">
			            <div class="twooffive"></div>
			            <div class="fivetxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh.</div>
			        </div>
			        <div class="fivepanel">
			            <div class="threeoffive"></div>
			            <div class="fivetxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh.</div>
			        </div>
			        <div class="fivepanel">
			            <div class="fouroffive"></div>
			            <div class="fivetxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh.</div>
			        </div>
			        <div class="fivepanel">
			            <div class="fiveoffive"></div>
			            <div class="fivetxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida enim nibh.</div>
			        </div>
			    </div>
			</div>
			<div class="timelineholder">
			    <span class="headerblue">ME IN A TIMELINE</span>
			    <div class="timelinebox_lm" style="margin:35px auto;">
			        <div class="innerboxleft">
			            <span class="smallbluetxt">AGE ##</span><br/>
			            <span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_ls" style="margin:296px auto;">
			        <div class="innerboxleft">
			            <span class="smallbluetxt">AGE ##</span><br/><span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_ls" style="margin:376px auto;">
			        <div class="innerboxleft">
			            <span class="smallbluetxt">AGE ##</span><br/><span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_lm" style=" margin:480px auto;">
			        <div class="innerboxleft">
			            <span class="smallbluetxt">AGE ##</span><br/><span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_lm" style=" margin:633px auto;">
			        <div class="innerboxleft">
			            <span class="smallbluetxt">AGE ##</span><br/>
			            <span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_ls" style="margin:735px auto;">
			        <div class="innerboxleft">
			            <span class="smallbluetxt">AGE ##</span><br/><span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_rs" style="margin-top:108px;">
			        <div class="innerboxright">
			            <span class="smallbluetxt">AGE ##</span><br/><span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_rm" style="margin-top:390px;">
			        <div class="innerboxright">
			            <span class="smallbluetxt">AGE ##</span><br/>
			            <span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_rl" style="margin-top:522px;">
			        <div class="innerboxright">
			            <span class="smallbluetxt">AGE ##</span><br/>
			            <span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_rm" style="margin-top:675px;">
			        <div class="innerboxright">
			            <span class="smallbluetxt">AGE ##</span><br/><span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="timelinebox_rs" style="margin-top:880px;">
			        <div class="innerboxright">
			            <span class="smallbluetxt">AGE ##</span><br/><span class="smallgreytxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
			        </div>
			    </div>
			    <div class="time_date1"></div>
			    <div class="time_date2"></div>
			    <div class="time_date3"></div>
			    <div class="time_date4"></div>
			    <div class="time_line"></div>
			    <div class="time_arrow"></div>
			</div>
			<div class="toolsholder" style="display:none;">
			    <div class="toolscontentholder">
			        <div class="graphheadline">MY TOOLS & THEIR USAGE</div>
			        <div class="toolsgraph"></div>
			        <div class="graph_bullet1">Photoshop</div>
			        <div class="graph_bullet2">illustrator</div>
			        <div class="graph_bullet3">Dreamweaver</div>
			        <div class="graph_bullet4">Flash</div>
			    </div>
			</div> */ ?>
	</div>
</div>
<div class="push"></div>
<?php $this->inc('assets/includes/footer.php'); ?>