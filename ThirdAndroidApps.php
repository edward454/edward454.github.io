	<style type="text/css">
		#ThirdAndroidAppsContent h3{
			font-size: 24px;
		}

		#ThirdAndroidAppsContent{
			position: absolute;
			left: 55%;
		}

		#ThirdAndroidAppsContent a{
			text-decoration: none;
			color: #CF0000;
			font-size: 100px;
			padding-right: 200px; 
		}

	</style>

	<style>
	table{
		padding-left: 5%;
	}
	table td{
		width: 50%;
	}

	table {
		color: #fff;
		font-family: 'Righteous', cursive;
	}

	table td h3{
		padding-bottom: 30%;
		line-height: 35px;
	}

	#AndroidTable a{
		font-size: 40px;
		text-decoration: none;
		color: #94b1c4;
	}

	.LeftContent h2{
		padding-left: 10%; 
	}

	.DropContent h2{
		padding-left: 58%;
	}
</style>
	<script type="text/javascript">
		$(document).ready(function(){
			console.log("Third Android Apps has been loaded");
			$('.LeftButtonImage').click(function(){
				$.ajax({
					url: "SecondAndroidApps.php",
					success: function(result){
						$('#AndroidApps').html(result);
					}

				});
			});

		$('.LeftContent').mouseover(function(){
			$('.PreviousProject').css("display","block");
		});

		$('.LeftContent').mouseout(function(){
			$('.PreviousProject').css("display","none");
		});

	});

	</script>
	<!--
	<div id="ThirdAndroidApps">
	<h2 id="AndroidAppsTitle">Android Apps</h2>
	<img src="Image\BloodyPewLogo.png" style ="width: 40%; height: 70%;">
	<div id="ThirdAndroidAppsContent">
		<h3>Do you like 2D Game that quite insane</h3>
		<h3>Prepare yourself because game that you wait is coming to you</h3>
		<h3>Grab it now in google PlayStore</h3>
		<h3>In this game you need to avoid obstacle and compete with your  </h3>	
		<h3>friend Who has highest score before all part of your body is lost</h3>
		<a href="https://play.google.com/store/apps/details?id=com.BloodyPewPew_1_0&hl=en">BloodyPew</a>
	</div>
	<div class="SkillApplied">
			<p>Skill applied:</p>
			<p>java,libGDX(FrameWork),Adobe Photoshop,Eclipse</p>
	</div>
	<div class="LeftContent">
		<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
		<h2 class ="PreviousProject">Previous Android Project</h2>
	</div>
</div>
-->
<table id="AndroidTable">
	<tr>
		<td><img src="Image\BloodyPewLogo.png" style ="width: 90%;"></td>
		<td>
		<h3>Do you like 2D Game that quite insane
		Prepare yourself because game that you wait is coming to you
		Grab it now in google PlayStore
		In this game you need to avoid obstacle and compete with your	
		friend Who has highest score before all part of your body is lost</h3>
		<a href="https://play.google.com/store/apps/details?id=com.BloodyPewPew_1_0&hl=en">BloodyPew</a>
		</td>
	</tr>
	<div class="LeftContent">
		<img class="LeftButtonImage" src="Image\NextButton.png" style= "width: 100px; height: 100px;">
		<h2 class ="PreviousProject" >Previous Android Project</h2>
	</div>
</table>