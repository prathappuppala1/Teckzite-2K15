<?php
session_start();
require_once("../connect.php");
?>
		<link rel="stylesheet" type="text/css" href="events/css/default.css" />
		<link rel="stylesheet" type="text/css" href="events/css/component.css" />
		<script src="events/js/modernizr.custom.js"></script>
		<script src="events/js/toucheffects.js"></script>
		<script src="events/js/jquery.min.js"></script>
		
		<script>
		function shwevedetails(eid)
		{
			
					$('html,body').animate({scrollTop:0},1000);
			$("#ee").html("<center><div id='loading' class='inlineloading'>Loading...Please Wait...</div></center>");
			$.post("events/event_view.php",{eid:eid},function(data){$("#ee").html(data);});
			}
			
				function shwbranches(){$(".bran").slideToggle("slow");}
			
				</script>

			</script>
<style>
#branches
{
list-style-type:none;
cursor:pointer;
}
#branches li
{
list-style-type:none;
margin:3px;
width:120px;
padding:8px;
background:#ddd;
font-size:10px;
font-weight:bold;
text-align:center;
}
</style>

<ul id="branches" style="position:fixed;left:10px;top:42%;cursor:pointer;" onclick="shwbranches()">
<li class="bran" onclick="showlist('cseevents')">CSE </li>
<li class="bran" onclick="showlist('eceevents')">ECE</li>
<li class="bran" onclick="showlist('civilevents')">CIVIL </li>
<li class="bran" onclick="showlist('mechevents')">MECHANICAL </li>
<li class="bran" onclick="showlist('chemevents')">CHEMICAL</li>
<li class="bran" onclick="showlist('mettulargyevents')">METALLURGY</li>
<li class="bran" onclick="showlist('roboticsevents')"  style="background:#0080C0;color:white;">ROBOTICS</li>
<li class="bran" onclick="showlist('open2allevents')">OPEN2ALL</li>
<li class="bran" onclick="showlist('pucevents')">INTERMEDIATE</li>
</ul>
		<div class=" demo-1">
		<center><h4><strong>ROBOTICS EVENTS</strong></h4></center>
			
			<ul class="grid cs-style-3" id="ee">
				<?php
				$eve = mysql_query("select * from `events` where  `category` = 'ROBOTICS'");
				while($eved=mysql_fetch_array($eve))
				{
	
	?>
				<li>
					<figure>
						<img src="events/images/<?php echo $eved['category'];?>/<?php echo $eved['ename'];?>.png" title="<?php echo $eved['etitle'];?>">
						<figcaption>
							<h3><?php echo $eved['etitle'];?></h3>
							<span><?php echo $eved['schedule'];?></span>
							<a style="cursor:pointer;" onclick="shwevedetails(<?php echo $eved['eid'];?>)">Open</a>
						</figcaption>
					</figure>
				</li>
				<?php } ?>
			</ul>
		</div><!-- /container -->
