<div id="footer">
	<div class="footerbtnsholder">
		<a href="https://www.facebook.com/engstrom.zach" target="_blank">
			<div class="footer_btn">
				<div class="fbicon"></div>
				<span class="footertxtgrey" style="font-weight:700;">Facebook</span>
			</div>
		</a>
		<a href="https://twitter.com/zachy_je" target="_blank">
			<div class="footer_btn">
				<div class="twicon"></div>
				<span class="footertxtgrey" style="font-weight:700;">Twitter</span>
			</div>
		</a>
		<a href="http://www.linkedin.com/in/engstromzach/" target="_blank">
			<div class="footer_btn">
				<div class="linkedicon"></div>
				<span class="footertxtgrey" style="font-weight:700;">LinkedIn</span>
			</div>
		</a>
	</div>
	<div class="footertxtholder">
		<div class="footerline"></div>
		<span class="footertxtblue">— Zach Engstrom —</span><br />
		<span class="footertxtgrey">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> 
		<div class="countdown simple footertxtgrey"></div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	
	
	    $(".slidingDiv").hide();
		$(".show_hide").show();
		
		$('.show_hide').click(function(){
		$(".slidingDiv").slideToggle();
		});
	
	});
	
</script>
<?php Loader::element('footer_required'); ?>
</body>
</html>